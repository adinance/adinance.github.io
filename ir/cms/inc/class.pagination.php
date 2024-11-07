<?php

/* Program: class.pagination.php
   Author:  Chat Clussman / Studio Green
   Website: http://www.studiogreen.net
   Purpose: Provide a general purpose pagination solution
   
   ============================================================
   
   Acknowledgements:
   
   The ideas for using clean URLs via mod_rewrite and storing complex SQL 
   statements in a session variable came from Ben Jamieson / Thyme Online.
   
   ============================================================

   Functions:
   
   paginate($sql)          // Intialize object and return getSQL()
   setDisplayOptions($x)   // Options for link output (see notes further down)
   setPageSize($x)         // Override default # of items per page
   setModRewrite(TRUE)     // Use clean URLs (default is FALSE)
   setUseSessions(TRUE)    // Enable use of session data (default is FALSE)
   setSessionName($name)   // Override default name for session data
   getSQL()                // Output the updated SQL with LIMIT clause
   getCount()              // Output "Displaying from x to y of z"
   getLinks()              // Output paging links
   
   ============================================================
   
   Basic Example (all sample code uses an object named 'paging'):
   
   include_once('class.pagination.php');
   $sql = "SELECT * FROM table_name";
   $paging = new pagination();
   $result = mysql_query($paging->paginate($sql));
   print($paging->getLinks());
   print("<p>".$paging->getCount()."</p>");
   
   ============================================================
   
   Miscellaneous Notes:
   
   This object uses a SQL statement that you pass to it and a page variable
   that it grabs from the query_string ($_GET['page']).  The page variable 
   always needs to be the last part of the query string or path.  Examples:
   
   domain.com/articles/title/5/
   domain.com/article.php?name=title&amp;page=5
   domain.com/search.php?keywords=xyz&amp;sort=desc&amp;page=2
   
   The first example above is using mod_rewrite.  To generate links that 
   look like that, use:
   
   $paging->setModRewrite(TRUE);
   
   To use sessions, you first have to initialize the session data with:
   
   session_start();
   
   If you are using cookie-based sessions, you must call session_start() 
   before anything is output to the browser.  (Place it at the top of your
   file/page.)
   
   ============================================================
   
   Display Options (Function: getLinks(1..4))
   
   Options are 0 through 3 (default is 0)
   Display options determines which links are displayed and when
   
   1: Only show First/Last links for large sets.  Only show Previous/Next
      links when necessary (when not on first or last page respectively)
   2: Always show First/Last and Previous/Next
   3: Never show First/Last links but always show Previous/Next links*
   4: Never show First/Last links, show Previous/Next when necessary
   
   Classnames are assigned that will allow unique styling of list 
   elements regardless of which option you use for your output.
   
   * This is the Flickr option

   ============================================================

   Sample Output:
   
   Small Set (fewer than 10 pages):
   
   < Previous  1  2  3  4  5  Next >
   
   Large Set ( 10 or more pages):
   
   Ç First  < Previous  3  4  5  6  7  8  9  10  11  Next >  Last È
   
   - First and Previous links only show up when not on the first page.
   - Next and Last only show up when not on the last page.
   - First and Last only show up for sets with 10 or more pages.
   - In large sets the current page is the center of the list unless we're 
     near the beginning or end of the list.
   
   ============================================================

   Sample XHTML Output: 
   
   <ul class="pagination">
      <li><a href="/clients/1/" class="currentPage">1</a></li>
      <li><a href="/clients/2/">2</a></li>
      <li><a href="/clients/3/">3</a></li>
      <li><a href="/clients/2/">Next &gt;</a></li>
   </ul>
   
   ============================================================
   
   Sample CSS:
   
   You could apply some basic styles to make the paging links look
   something like what is used on Flickr (apparently it's the Gold Standard):

   .pagination li { display: inline; border: 0; }
   .pagination li a { 
      margin-right: 5px;
      padding: 3px 6px;
      font-weight: bold;
      color: #33F;
      background: #FFF;
      border: 1px solid #CCC;
      text-decoration: none;
   }
   .pagination li a:hover { color: #FFF; background: #33F; border-color: #000 }
   .pagination li a.currentPage { color: #999; border: 0; }
   .pagination li a.currentPage:hover { 
      color: #999; background: #FFF; cursor: default;
   }
*/

class pagination
{
   protected $display = 1;  // Link output options (see notes above for info)
   protected $pagesize = 25;
   protected $mod_rewrite = FALSE;
   protected $use_sessions = FALSE;
   protected $sql = '';
   protected $session_name = 'searchdata';

   protected $totalrows;   // Total records in recordset
   protected $page;        // Current page (i.e. page 7 of 12)
   protected $path;        // Path to use for links
   protected $errors;      // Use for error reporting
   
   public function paginate($sql="")
   {
      $this->page = (isset($_GET['page'])) ? $_GET['page'] : 1;
      $this->setSQL($sql);
      $this->setTotalRows();
      $this->setPath();
      if ($this->errors != '') print("\n<ul>\n{$this->errors}</ul>\n");
      return $this->getSQL();
   }
   
   public function setDisplayOptions($x=1)
   {
      if (intval($x) > 0 && intval($x) < 5)
      {
         $this->display = intval($x);
      }
   }
   
   public function setPageSize($x)
   {
      if (is_numeric($x)) $this->pagesize = intval($x);
   }
   
   public function setModRewrite($switch)
   {
      if ($switch !== FALSE) $this->mod_rewrite = TRUE;
   }
   
   public function setUseSessions($switch)
   {
      if ($switch !== FALSE) $this->use_sessions = TRUE;
   }
   
   public function setSessionName($name='searchdata')
   {
      $this->session_name = $name;
   }
   
   public function getSQL() 
   { 
      $x = ($this->page - 1) * $this->pagesize;
      return $this->sql . " LIMIT $x,{$this->pagesize}";
   }
   
   public function getCount()
   {
      $start = (($this->page - 1) * $this->pagesize) + 1;
      $end =  $start + $this->pagesize - 1;
      if ($end > $this->totalrows) $end = $this->totalrows;
      return "Displaying $start to $end of {$this->totalrows}";
   }

   public function getLinks($display='')
   {
      $output = "";
      if (is_integer($display))
      {
         if ($display > 0 && $display < 5)
         {
            $original_display_value = $this->display;
            $this->display = $display;
         }
      }
      $total_pages = ceil($this->totalrows / $this->pagesize);
      if ($total_pages > 1)
      { 
         $start_page = 1;
         $end_page = $total_pages;
         $links_to_display = ($total_pages > 9) ? 9 : $total_pages;
         $output = "\n<ul class=\"pagination\">\n";
         
         // 
         // Determine start and end pages of large sets
         // 
         if ($total_pages > 9)
         {
            $start_page = (($this->page - 4) > 1) ? $this->page - 4 : 1;
            $end_page = $start_page + 8;
            if (($start_page + 8) > $total_pages)
            {
               $end_page = $total_pages;
               $start_page = $total_pages - 8;
            }
         }
         
         if ($this->page > 1 || $this->display == 2 || $this->display == 3)
         {
            if (($total_pages > 9 && $this->display == 1) || $this->display == 2)
            {
               $class = ($this->page == 1) ? "firstPage_on" : "firstPage";
               $output .= $this->makeLink(1, "&laquo; First", $class);
            }
            if ($this->page == 1) { $x = 1; $class = "previousPage_on"; }
            else { $x = $this->page-1; $class = "previousPage"; }
            $output .= $this->makeLink($x, "&lt; Previous", $class);
         }

         for ($i=$start_page; $i<=$end_page; $i++)
         {
            if ($i != $this->page) $output .= $this->makeLink($i);
            else $output .= $this->makeLink($i, $i, "currentPage");
         }
         
         if ($this->page < $end_page || $this->display == 2 || $this->display == 3)
         {
            if ($this->page < $total_pages) { $x = $this->page+1; $class = "nextPage"; }
            else { $x = $total_pages; $class = "nextPage_on"; }
            $output .= $this->makeLink($x, "Next &gt;", $class);
            if (($total_pages > 9 && $this->display == 1) || $this->display == 2)
            {
               $class = ($this->page == $total_pages) ? "lastPage_on" : "lastPage";
               $output .= $this->makeLink($total_pages, "Last &raquo;", $class);
            }
         }
         
         $output .= "</ul>\n";
      }
      if (isset($original_display_value))
      {
         $this->display = $original_display_value;
      }
      return $output;
   }
   
   // 
   // Begin protected functions
   // 
   
   protected function setSQL($sql)
   {
      if ($this->use_sessions === TRUE && !empty($_SESSION[$this->session_name]))
      {
         $this->sql = $_SESSION[$this->session_name];
      }
      elseif ($sql != '') 
      {
         if (!stripos($sql, "LIMIT")) $this->sql = $sql;
         else $this->sql = substr($sql, 0, strpos($sql, "LIMIT")-1);
         $_SESSION[$this->session_name] = $this->sql;
      }
      else
      {
         $this->errors .= "\t<li>No SQL statement was specified.</li>\n";
      }
   }
   
   protected function setTotalRows()
   {
      $recordset = mysql_query($this->sql);
      if (!mysql_error())
      {
         $this->totalrows = mysql_num_rows($recordset);
      }
      else
      {
         $this->totalrows = 0;
         $this->errors .= "\t<li>No SQL statement was specified.</li>\n";
      }
   }
   
   protected function makeLink($page, $text="", $class="")
   {
      $output = "";
      if ($text == "") $text = $page;
      if ($this->mod_rewrite === FALSE)
      {
         $output .= "\t<li><a href=\"" . $this->path . "page=$page\"";
      }
      else
      {
         $output .= "\t<li><a href=\"" . $this->path . "$page/\"";         
      }
      if ($class != "") $output .= " class=\"$class\"";
      $output .= ">$text</a></li>\n";
      return $output;
   }
   
   protected function setPath()
   {
      if ($this->mod_rewrite === FALSE)
      {
         $path = $_SERVER['PHP_SELF'] . "?" . strtolower($_SERVER['QUERY_STRING']);
         if (strpos($path, 'page')) $path = substr($path, 0, strpos($path, 'page'));
         if (substr($path, -1) != "?" && substr($path, -1) != "&") $path .= "&amp;";
      }
      else
      {
         $tmp = split('/', trim($_SERVER['REQUEST_URI'], '/'));
         if (is_numeric(end($tmp))) array_pop($tmp);
         $path = '/' . implode('/', $tmp) . '/';
      }
      $this->path = htmlentities($path);
   }
}

?>