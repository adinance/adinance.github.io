<?
/*
    public เป็นค่าดีฟอลต์ที่กำหนดไว้ ถ้าไม่มีการระบุค่าใดๆก็จะหมายถึงการกำหนดค่าเป็น public ซึ่งจะสามรถทำให้อ้างถึง attribute หรือ method จากภายในหรือภายนอก class ก็ได้
    private เมื่อกำหนดค่า private วางไว้หน้า attribute หรือ method ใด ก็จะทำให้สามารถอ้างถึง attribute หรือ method นั้นได้ภายใน class เท่านั้น ซึ่งเหมาะกับ สำหรับบาง attribute หรือ method ที่ต้องการให้ใช้งานได้ภายใน class เท่านั้น
    protected เมื่อกำหนด protected วางไว้หน้า attribute หรือ method ใด ก็จะทำให้สามารถอ้างถึง attribute หรือ method นั้นได้ภายใน class รวมถึง class ลูกที่สืบทอดมาจาก class นี้ด้วย
 */

// mysql_affected_rows()
// mysql_num_rows($objSelect)
// mysql_error()
// $link = $_SERVER['HTTP_REFERER'];
// echo "<meta http-equiv='refresh' content='0; URL=$link'>";
// mysql_affected_rows().' affected row(s).';
// mysql_data_seek ($result, 0);

Class DatabaseManager{

    private $host = "localhost";
    private $user = "root";
    private $password = "DEV#phpmyadmin";
    private $database = "cmo";
    private $encode = 'utf8';
    private $sql;

    public function setHost($host){
       $this->host = $host;
    }

    public function getHost(){
       return $this->host;
    }

    public function setUser($user){
       $this->user = $user;
    }

    public function getUser(){
       return $this->user;
    }

    public function setPassword($password){
       $this->password = $password;
    }

    public function getPassword(){
       return $this->password;
    }

    public function setDatabase($database){
       $this->database = $database;
    }

    public function getDatabase(){
       return $this->database;
    }

    public function setEncode($encode){
       $this->encode = $encode;
    }

    public function getEncode(){
       return $this->encode;
    }

    public function setSql($sql){
       $this->sql = $sql;
    }

    public function getSql(){
       return $this->sql;
    }

    function connectDatabase(){
        $this->objConnect = mysql_connect($this->host,$this->user,$this->password) or die('Cannot mysql_connect : '.mysql_error());
        $this->DB = mysql_select_db($this->database) or die('Cannot mysql_select_db : '.mysql_error());
        mysql_query('SET NAMES "'.$this->encode.'"') or die('Cannot mysql_query : '.mysql_error());
    }

    function query(){
        mysql_query($this->sql);
        return mysql_affected_rows() or

        die('Cannot query() ['.$this->sql.'] : '.mysql_error());
    }

    function queryObject(){
        $objQuery = mysql_query($this->sql) or die('Cannot query() ['.$this->sql.'] : '.mysql_error());
        return $objQuery;
    }

    function insert($strField,$strTable,$strValue){
        $strSQL = "INSERT INTO $strTable ( $strField ) VALUES ( $strValue ) ";
        return mysql_query($strSQL) or die('Cannot insertRecord() : '.$strSQL);
    }

    function update($strTable,$strCommand,$strCondition){
        $strSQL = "UPDATE $strTable SET $strCommand WHERE ( $strCondition ) ";
        return mysql_query($strSQL) or die('Cannot updateRecord() : '.$strSQL.'<br>'.mysql_error());
    }

    function delete($strTable,$strCondition){
        $strSQL = "DELETE FROM $strTable WHERE $strCondition ";
        return mysql_query($strSQL) or die('Cannot deleteRecord() : '.$strSQL);
    }

    function selectAll($strField,$strTable,$strOrderBy){
        $strSQL = "SELECT $strField FROM $strTable ORDER BY $strOrderBy";
        $objQuery = mysql_query($strSQL) or die('Cannot selectRow() : '.$strSQL) ;
        return $objQuery;
    }

    function selectAllConditionLimit($strField,$strTable,$strCondition,$strLimit){
        $strSQL = "SELECT $strField FROM $strTable WHERE $strCondition LIMIT $strLimit";
        $objQuery = mysql_query($strSQL) or die('Cannot selectRow() : '.$strSQL) ;
        return $objQuery;
    }

    function selectAllLimit($strField,$strTable,$strOrderBy,$strLimit){
        $strSQL = "SELECT $strField FROM $strTable ORDER BY $strOrderBy LIMIT $strLimit";
        $objQuery = mysql_query($strSQL) or die('Cannot selectRow() : '.$strSQL) ;
        return $objQuery;
    }

    function selectRecord($strField,$strTable,$strCondition){
        $strSQL = "SELECT $strField FROM $strTable WHERE $strCondition  ";
        $objQuery = mysql_query($strSQL) or die('Cannot selectRecord() : '.$strSQL);
        return mysql_fetch_array($objQuery);
    }

    function selectRowWhereGroupHavingLimit($strField,$strTable,$strCondition,$strGroupBy,$strHaving,$strOrderBy,$strLimit){
        if($strCondition!=''){
                $strCondition = 'WHERE 1=1 '.$strCondition;
        }
        if($strGroupBy!=''){
                $strGroupBy = 'GROUP BY '.$strGroupBy;
        }
        if($strHaving!=''){
                $strHaving = 'HAVING '.$strHaving;
        }
        if($strOrderBy!=''){
                $strOrderBy = 'ORDER BY '.$strOrderBy;
        }
        if($strLimit!=''){
                $strLimit = 'LIMIT '.$strLimit;
        }
        $strSQL = "SELECT $strField FROM $strTable $strCondition $strGroupBy $strHaving $strOrderBy $strLimit ";
        $objQuery = mysql_query($strSQL) or die('Cannot selectRow() : '.$strSQL) ;
        return $objQuery;
    }

    function selectRowWhere($strField,$strTable,$strCondition){
        $strSQL = "SELECT $strField FROM $strTable WHERE $strCondition ";
        $objQuery = mysql_query($strSQL) or die('Cannot selectRow() : '.$strSQL) ;
        return $objQuery;
    }

    function closeDatabase(){
        return mysql_close($this->objConnect) or die('Cannot mysql_close ['.$this->objConnect.'] : '.mysql_error());
    }

}
?>
