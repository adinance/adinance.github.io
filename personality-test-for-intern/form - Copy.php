<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="">

  <title>Form</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  <title>Personality Test for Intern</title>
  <style>
    body {
      font-family: "Sarabun", sans-serif;
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);


      background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url("https://apps.cmo-group.com/dev/web/assets/images/home-top02-1920x984.jpg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: 100vh;


    }

    h1 {
      text-align: center;
      color: #333;
    }

    h5 {
      text-align: center;
      color: #333;
    }

    .question {
      background: #fff;
      padding: 15px;
      border-radius: 10px;
      margin: 15px 0;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
    }

    .question p {
      margin-bottom: 10px;
      font-weight: bold;
    }

    label {
      margin-right: 20px;
      font-weight: normal;
    }

    button {
      display: block;
      margin: 30px auto;
      padding: 10px 30px;
      font-size: 16px;
      border-radius: 8px;
      background-color: #007bff;
      color: white;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <!-- 
<section class="extCountdown cid-uOxgBKyFyo" id="extCountdown3-j">

    

    <div class="container-fluid pt-5 pb-5 full-count-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 mbr-white pb-lg-0 pb-2">
                    <h2 class="mbr-section-title mbr-fonts-style m-0 display-2">
                        Count Every Second <strong>Until The Event</strong>.
                    </h2>
                </div>
                <div class="countdown-cont align-center col-lg-6">
                    <div class="daysCountdown col-xs-3 col-sm-3 col-md-3" title="Days"></div>
                    <div class="hoursCountdown col-xs-3 col-sm-3 col-md-3" title="Hours"></div>
                    <div class="minutesCountdown col-xs-3 col-sm-3 col-md-3" title="Minutes"></div>
                    <div class="secondsCountdown col-xs-3 col-sm-3 col-md-3" title="Seconds"></div>
                    <div class="countdown " data-due-date="2022/01/01">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


  <h1>Personality Test for Intern</h1><br>
  <h5>ในแต่ละข้อให้เลือกเพียงตัวเลือก "ใช่" หรือ "ไม่ใช่" เพียงตัวเลือกเดียวที่สอดคล้องกับตัวท่านมากที่สุด</h5><br>

  <form id="myForm">

    <div class="question">
      <p>1. ข้าพเจ้าชอบที่จะเป็นผู้วางแผนงาน และสามารถแก้ปัญหาใหม่ ๆ ได้ตลอดเวลา</p>
      <label><input type="radio" name="q1" required value="1" onclick="setQuestionValue();"> ใช่</label>
      <label><input type="radio" name="q1" value="0" onclick="setQuestionValue()"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>2. ข้าพเจ้ามีทักษะด้านมนุษยสัมพันธ์ชอบการพบปะผู้คนใหม่ๆ เสมอ</p>
      <label><input type="radio" name="q2" required value="1" onclick="setQuestionValue()"> ใช่</label>
      <label><input type="radio" name="q2" value="0" onclick="setQuestionValue()"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>3. ข้าพเจ้ามีทักษะในการสื่อสาร, การเจรจา, การวิเคราะห์ และแก้ปัญหาร่วมกับผู้อื่นได้ดี</p>
      <label><input type="radio" name="q3" required value="1" onclick="setQuestionValue()"> ใช่</label>
      <label><input type="radio" name="q3" value="0" onclick="setQuestionValue()"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>4. ข้าพเจ้าสามารถชักนำและกระตุ้นทีมงานให้ทำงานร่วมกันได้อย่างมีประสิทธิภาพ</p>
      <label><input type="radio" name="q4" required value="1" onclick="setQuestionValue()"> ใช่</label>
      <label><input type="radio" name="q4" value="0" onclick="setQuestionValue()"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>5. ข้าพเจ้าสามารถในการทำงานภายใต้แรงกดดันได้เป็นอย่างดี</p>
      <label><input type="radio" name="q5" required value="1" onclick="setQuestionValue()"> ใช่</label>
      <label><input type="radio" name="q5" value="0" onclick="setQuestionValue()"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>6. ข้าพเจ้าเป็นคนสนุกสนาน สามารถสร้างบรรยากาศที่ดีในการทำงาน</p>
      <label><input type="radio" name="q6" required value="1" onclick="setQuestionValue()"> ใช่</label>
      <label><input type="radio" name="q6" value="0" onclick="setQuestionValue()"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>7. ข้าพเจ้าชอบคิดค้นสิ่งใหม่ๆ เมื่อมองเห็นถึงปัญหา ก็มักมีแนวทางในการแก้ไขนอกกรอบเดิมๆ ได้อยู่เสมอ</p>
      <label><input type="radio" name="q7" required value="1" onclick="setQuestionValue()"> ใช่</label>
      <label><input type="radio" name="q7" value="0" onclick="setQuestionValue()"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>8. ข้าพเจ้าชอบการติดตามเทรนด์ และเรียนรู้เทคโนโลยีใหม่ๆ ในวงการอีเว้นท์อยู่เสมอ</p>
      <label><input type="radio" name="q8" required value="1" onclick="setQuestionValue()"> ใช่</label>
      <label><input type="radio" name="q8" value="0" onclick="setQuestionValue()"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>9. ข้าพเจ้ามีนิสัยรักการอ่าน เรียนรู้การใช้ภาษาต่างๆ ชอบเล่าเรื่องต่างๆให้ผู้คนรอบข้างฟังอยู่บ่อยๆ</p>
      <label><input type="radio" name="q9" required value="1" onclick="setQuestionValue()"> ใช่</label>
      <label><input type="radio" name="q9" value="0" onclick="setQuestionValue()"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>10. ข้าพเจ้าชอบการลงมือปฏิบัติงานด้วยตนเอง แต่ก็สามารถร่วมงานกับเพื่อนต่างสาขาได้เป็นอย่างดี</p>
      <label><input type="radio" name="q10" required value="1" onclick="setQuestionValue()"> ใช่</label>
      <label><input type="radio" name="q10" value="0" onclick="setQuestionValue()"> ไม่ใช่</label>
    </div>

    <button type="submit">ส่งคำตอบ</button>

    <!-- <div class="question"> -->
    <p>
      ผู้ที่ตอบว่า <u>"ใช่" ในข้อ 1/3/4/7/8 </u> เหมาะกับตำแหน่ง <b>Project Coordinate / Project manager</b>
      <br>ผู้ที่ตอบว่า <u>"ใช่" ในข้อ 2/3/4/5/9</u> เหมาะกับตำแหน่ง <b>Account Executive (AE.)</b>
      <br>ผู้ที่ตอบว่า <u>"ใช่" ในข้อ 3/6/7/8/9</u> เหมาะกับตำแหน่ง <b>Creative</b>
      <br>ผู้ที่ตอบว่า <u>"ใช่" ในข้อ 1/5/7/8/10</u> เหมาะกับตำแหน่ง <b>Light/Sound/Media Production</b>
    </p>

    <input type="text" name="project" value="0" id="project">
    <input type="text" name="ae" value="0" id="ae">
    <input type="text" name="creative" value="0" id="creative">
    <input type="text" name="production" value="0" id="production">

    <!-- </div> -->
  </form>

  <?php

$project = 0;
$ae = 0;
$creative = 0;
$production = 0;

?>

  <script>

    function setQuestionValue() {
      const q1 = document.querySelector('input[name="q1"]:checked').value;
      const q2 = document.querySelector('input[name="q2"]:checked').value;
      const q3 = document.querySelector('input[name="q3"]:checked').value;
      const q4 = document.querySelector('input[name="q4"]:checked').value;
      const q5 = document.querySelector('input[name="q5"]:checked').value;
      const q6 = document.querySelector('input[name="q6"]:checked').value;
      const q7 = document.querySelector('input[name="q7"]:checked').value;
      const q8 = document.querySelector('input[name="q8"]:checked').value;
      const q9 = document.querySelector('input[name="q9"]:checked').value;
      const q10 = document.querySelector('input[name="q10"]:checked').value;

      console.log({
        q1,
        q2,
        q3,
        q4,
        q5,
        q6,
        q7,
        q8,
        q9,
        q10
      });
      
      var project = parseInt(q1) + parseInt(q3) + parseInt(q4) + parseInt(q7) + parseInt(q8);
      var ae = parseInt(q2) + parseInt(q3) + parseInt(q4) + parseInt(q5) + parseInt(q9);
      var creative = parseInt(q3) + parseInt(q6) + parseInt(q7) + parseInt(q8) + parseInt(q9);
      var production = parseInt(q1) + parseInt(q5) + parseInt(q7) + parseInt(q8) + parseInt(q10);
      // console.log({ project, ae, creative, production});
      console.log('Project Coordinate / Project manager = ' + project);
      console.log('Account Executive (AE.) = ' + ae);
      console.log('Creative = ' + creative);
      console.log('Light/Sound/Media Production = ' + production);

    }

    document.getElementById("myForm").addEventListener("submit", function(e) {
      e.preventDefault(); // ป้องกันการ submit จริง
      // ดึงค่าจาก radio ที่ถูกเลือก
      const q1 = document.querySelector('input[name="q1"]:checked').value;
      const q2 = document.querySelector('input[name="q2"]:checked').value;
      const q3 = document.querySelector('input[name="q3"]:checked').value;
      const q4 = document.querySelector('input[name="q4"]:checked').value;
      const q5 = document.querySelector('input[name="q5"]:checked').value;
      const q6 = document.querySelector('input[name="q6"]:checked').value;
      const q7 = document.querySelector('input[name="q7"]:checked').value;
      const q8 = document.querySelector('input[name="q8"]:checked').value;
      const q9 = document.querySelector('input[name="q9"]:checked').value;
      const q10 = document.querySelector('input[name="q10"]:checked').value;
      // แสดงผล
      // alert("คำตอบข้อ 1: " + q1 + "\nคำตอบข้อ 2: " + q2);
      // หรือจะเก็บไว้ใช้งานอื่น
      console.log({
        q1,
        q2,
        q3,
        q4,
        q5,
        q6,
        q7,
        q8,
        q9,
        q10
      });
      var project = parseInt(q1) + parseInt(q3) + parseInt(q4) + parseInt(q7) + parseInt(q8);
      var ae = parseInt(q2) + parseInt(q3) + parseInt(q4) + parseInt(q5) + parseInt(q9);
      var creative = parseInt(q3) + parseInt(q6) + parseInt(q7) + parseInt(q8) + parseInt(q9);
      var production = parseInt(q1) + parseInt(q5) + parseInt(q7) + parseInt(q8) + parseInt(q10);
      // console.log({ project, ae, creative, production});
      console.log('Project Coordinate / Project manager = ' + project);
      console.log('Account Executive (AE.) = ' + ae);
      console.log('Creative = ' + creative);
      console.log('Light/Sound/Media Production = ' + production);

      document.getElementById("project").value = project;
      document.getElementById("ae").value = ae;
      document.getElementById("creative").value = creative;
      document.getElementById("production").value = production;


       // const rolesRaw = [{
      //     name: "Assistant Producer / Event Coordinator",
      //     value: project
      //   },
      //   {
      //     name: "Account Executive / Project Coordinator",
      //     value: ae
      //   },
      //   {
      //     name: "Creative",
      //     value: creative
      //   },
      //   {
      //     name: "Light/Sound/Runshow",
      //     value: production
      //   }
      // ];
      // const roles = rolesRaw.filter(role => role.value >= 3);
      // roles.sort((a, b) => b.value - a.value);
      // console.log("อันดับความเหมาะสมตามคะแนน:");
      // roles.forEach(role => {
      //   console.log(role.name + " = " + role.value);
      // });


    });
  </script>

  <?php


// echo '<br>Project Coordinate / Project manager = ' . $project;
// echo '<br>Account Executive (AE.) = ' . $ae;
// echo '<br>Creative = ' . $creative;
// echo '<br>Light/Sound/Media Production = ' . $production;



?>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/countdown/jquery.countdown.min.js"></script>
  <script src="assets/theme/js/script.js"></script>

</body>

</html>