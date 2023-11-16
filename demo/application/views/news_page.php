
  <div class="news_header">
    <h1 style="font-size: 44px; padding-top:5%;">OUR NEWS</h1>
  </div>


<section>
  <div class="newspala">
    <div class="newscont">


      <!-- search box start -->
      <div class="newsnav">
        <a class="active" href="#home">ALL</a>
        <a href="#about">CMO NEWS</a>
        <a href="#contact">MULTIMEDIA</a>
        <div class="search-container">
          <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
      <!-- search box end -->


      <div class="news_row">

        <div class="new_box">
          <p><img src="<?php echo BASE_URL; ?>assets/images/news/IMG-New-1.jpg">
            <br><br>
            <span>
              CMO ปรับโครงสร้างธุรกิจสู่ Experience Tech Creator
              เป้าสิ้นปีแตะ 2 พันล้าน
            </span>
            <br><br><button onclick="openModalNews()" class="news-modal-trigger">Read More</button>
          </p>
        </div>


        <div class="new_box">
          <p><img src="<?php echo BASE_URL; ?>assets/images/news/IMG-New-2.jpg">
            <br><br>
            <span>
              เก็บตกภาพบรรยากาศสุดน่ารัก “ทิฟฟานี่ ยัง”
              จัดเต็มแฟนมีตติ้งส่งมอบความสุขเพื่อยองวอนไทย

            </span>
            <br><br><button onclick="openModalNews()" class="news-modal-trigger">Read More</button>
          </p>
        </div>

        <div class="new_box">
          <p><img src="<?php echo BASE_URL; ?>assets/images/news/IMG-New-3.jpg">
            <br><br>
            <span>
              K-Pop superstars GOT7 ready to entertain Thai fans via live stream
            </span>
            <br><br><button onclick="openModalNews()" class="news-modal-trigger">Read More</button>
          </p>
        </div>


        <div class="new_box">
          <p><img src="<?php echo BASE_URL; ?>assets/images/news/IMG-New-4.jpg">
            <br><br>
            <span>
              ซีเอ็มโอ เปิดตัว HOOK2022 การประชุมนานาชาติเพื่อผู้บริหารสายการตลาด จัดเต็ม 2 วัน 25 หัวข้อ Performance Marketing จับเทรนด์ไทยและอาเซียนโดยมืออาชีพจากทั่วโลก
            </span>
            <br><br><button onclick="openModalNews()" class="news-modal-trigger">Read More</button>
          </p>
        </div>

      </div>

      <div class="news_row">

        <div class="new_box">
          <p><img src="<?php echo BASE_URL; ?>assets/images/news/IMG-New-1.jpg">
            <br><br>
            <span>
              CMO ปรับโครงสร้างธุรกิจสู่ Experience Tech Creator
              เป้าสิ้นปีแตะ 2 พันล้าน
            </span>
            <br><br><button onclick="openModalNews()" class="news-modal-trigger">Read More</button>
          </p>
        </div>


        <div class="new_box">
          <p><img src="<?php echo BASE_URL; ?>assets/images/news/IMG-New-2.jpg">
            <br><br>
            <span>
              เก็บตกภาพบรรยากาศสุดน่ารัก “ทิฟฟานี่ ยัง”
              จัดเต็มแฟนมีตติ้งส่งมอบความสุขเพื่อยองวอนไทย

            </span>
            <br><br><button onclick="openModalNews()" class="news-modal-trigger">Read More</button>
          </p>
        </div>

        <div class="new_box">
          <p><img src="<?php echo BASE_URL; ?>assets/images/news/IMG-New-3.jpg">
            <br><br>
            <span>
              K-Pop superstars GOT7 ready to entertain Thai fans via live stream
            </span>
            <br><br><button onclick="openModalNews()" class="news-modal-trigger">Read More</button>
          </p>
        </div>


        <div class="new_box">
          <p><img src="<?php echo BASE_URL; ?>assets/images/news/IMG-New-4.jpg">
            <br><br>
            <span>
              ซีเอ็มโอ เปิดตัว HOOK2022 การประชุมนานาชาติเพื่อผู้บริหารสายการตลาด จัดเต็ม 2 วัน 25 หัวข้อ Performance Marketing จับเทรนด์ไทยและอาเซียนโดยมืออาชีพจากทั่วโลก
            </span>
            <br><br><button onclick="openModalNews()" class="news-modal-trigger">Read More</button>
          </p>
        </div>

      </div>




    </div>
  </div>







  <!-- Modal -->











  <!-- Modal -->
  <div class="news-modal" id="news-modal">
    <div class="modal-sandbox">
      <div class="news-modal-header">
        <div class="news-close-modal" onclick="closeModalNews()">X</div>
        <!-- <h1>CMO ปรับโครงสร้างธุรกิจ</h1> -->
      </div>

      <div class="news-modal-body row">

        <img height="10%" style="vertical-align: middle;" src="<?php echo BASE_URL; ?>assets/images/news/IMG-New-1.jpg" class="col-md-6">
        <div class="col-md-6" style="padding: 3%;">
          <h3>CMO ปรับโครงสร้างธุรกิจ</h3>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic soluta saepe, atque, iure quidem maiores non dolores, fuga eaque voluptatibus corporis accusantium quas. Eligendi velit eum fugiat eius? Distinctio reiciendis sint error, repellat ut soluta doloremque, accusamus vitae placeat?</p>

          <button class="news-close-modal" onclick="closeModalNews()">Close</button>
        </div>
      </div>

    </div>
  </div>
























  <script>
    function openModalNews() {
      document.getElementById("news-modal").style.display = "block";
      $("body").css({
        "overflow-y": "hidden"
      });
    }

    function closeModalNews() {
      document.getElementById("news-modal").style.display = "none";
      $("body").css({
        "overflow-y": "auto"
      });
    }
  </script>

  <!-- news modal end -->








</section>