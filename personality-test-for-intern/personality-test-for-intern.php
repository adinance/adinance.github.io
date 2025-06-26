<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Personality Test for Intern</title>
  <style>
    body {
      font-family: "Sarabun", sans-serif;
      max-width: 1000px;
      margin: 40px auto;
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      color: #333;
    }

    .question {
      background: #fff;
      padding: 15px;
      border-radius: 10px;
      margin: 15px 0;
      box-shadow: 0 0 5px rgba(0,0,0,0.05);
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

  <h1>Personality Test for Intern</h1>
  <h3>ในแต่ละข้อให้เลือกเพียงตัวเลือก "ใช่" หรือ "ไม่ใช่" เพียงตัวเลือกเดียวที่สอดคล้องกับตัวท่านมากที่สุด</h3>

  <form id="myForm">
    
    <div class="question">
      <p>1. ข้าพเจ้าชอบที่จะเป็นผู้วางแผนงาน และสามารถแก้ปัญหาใหม่ ๆ ได้ตลอดเวลา</p>
      <label><input type="radio" name="q1"  required value="1"> ใช่</label>
      <label><input type="radio" name="q1"  value="0"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>2. ข้าพเจ้ามีทักษะด้านมนุษยสัมพันธ์ชอบการพบปะผู้คนใหม่ๆ เสมอ</p>
      <label><input type="radio" name="q2"  required value="1"> ใช่</label>
      <label><input type="radio" name="q2"  value="0"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>3. ข้าพเจ้ามีทักษะในการสื่อสาร, การเจรจา, การวิเคราะห์ และแก้ปัญหาร่วมกับผู้อื่นได้ดี</p>
      <label><input type="radio" name="q3"  required value="1"> ใช่</label>
      <label><input type="radio" name="q3"  value="0"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>4. ข้าพเจ้าสามารถชักนำและกระตุ้นทีมงานให้ทำงานร่วมกันได้อย่างมีประสิทธิภาพ</p>
      <label><input type="radio" name="q4"  required value="1"> ใช่</label>
      <label><input type="radio" name="q4"  value="0"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>5. ข้าพเจ้าสามารถในการทำงานภายใต้แรงกดดันได้เป็นอย่างดี</p>
      <label><input type="radio" name="q5"  required value="1"> ใช่</label>
      <label><input type="radio" name="q5"  value="0"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>6. ข้าพเจ้าเป็นคนสนุกสนาน สามารถสร้างบรรยากาศที่ดีในการทำงาน</p>
      <label><input type="radio" name="q6"  required value="1"> ใช่</label>
      <label><input type="radio" name="q6"  value="0"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>7. ข้าพเจ้าชอบคิดค้นสิ่งใหม่ๆ เมื่อมองเห็นถึงปัญหา ก็มักมีแนวทางในการแก้ไขนอกกรอบเดิมๆ ได้อยู่เสมอ</p>
      <label><input type="radio" name="q7"  required value="1"> ใช่</label>
      <label><input type="radio" name="q7"  value="0"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>8. ข้าพเจ้าชอบการติดตามเทรนด์ และเรียนรู้เทคโนโลยีใหม่ๆ ในวงการอีเว้นท์อยู่เสมอ</p>
      <label><input type="radio" name="q8"  required value="1"> ใช่</label>
      <label><input type="radio" name="q8"  value="0"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>9. ข้าพเจ้ามีนิสัยรักการอ่าน เรียนรู้การใช้ภาษาต่างๆ ชอบเล่าเรื่องต่างๆให้ผู้คนรอบข้างฟังอยู่บ่อยๆ</p>
      <label><input type="radio" name="q9"  required value="1"> ใช่</label>
      <label><input type="radio" name="q9"  value="0"> ไม่ใช่</label>
    </div>

    <div class="question">
      <p>10. ข้าพเจ้าชอบการลงมือปฏิบัติงานด้วยตนเอง แต่ก็สามารถร่วมงานกับเพื่อนต่างสาขาได้เป็นอย่างดี</p>
      <label><input type="radio" name="q10"  required value="1"> ใช่</label>
      <label><input type="radio" name="q10"  value="0"> ไม่ใช่</label>
    </div>

    <button type="submit">ส่งคำตอบ</button>


<!-- <div class="question"> -->
    <p>
      ผู้ที่ตอบว่า <u>"ใช่" ในข้อ 1/3/4/7/8 </u> เหมาะกับตำแหน่ง <b>Project Coordinate / Project manager</b>
      <br>ผู้ที่ตอบว่า <u>"ใช่" ในข้อ 2/3/4/5/9</u> เหมาะกับตำแหน่ง <b>Account Executive (AE.)</b>
      <br>ผู้ที่ตอบว่า <u>"ใช่" ในข้อ 3/6/7/8/9</u> เหมาะกับตำแหน่ง <b>Creative</b>
      <br>ผู้ที่ตอบว่า <u>"ใช่" ในข้อ 1/5/7/8/10</u> เหมาะกับตำแหน่ง <b>Light/Sound/Media Production</b>
    </p>

  <!-- </div> -->
  </form>

    
<?php

$project = 0;
$ae = 0;
$creative = 0;
$production = 0;

?>

  <script>
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
    console.log({ q1, q2 , q3, q4, q5, q6, q7, q8, q9, q10});

    var project = parseInt(q1) + parseInt(q3) + parseInt(q4) + parseInt(q7) + parseInt(q8);
    var ae = parseInt(q2) + parseInt(q3) + parseInt(q4) + parseInt(q5) + parseInt(q9);
    var creative = parseInt(q3) + parseInt(q6) + parseInt(q7) + parseInt(q8) + parseInt(q9);
    var production = parseInt(q1) + parseInt(q5) + parseInt(q7) + parseInt(q8) + parseInt(q10);

    console.log({ project, ae, creative, production});
  });
</script>


  
<?php


// echo '<br>Project Coordinate / Project manager = ' . $project;
// echo '<br>Account Executive (AE.) = ' . $ae;
// echo '<br>Creative = ' . $creative;
// echo '<br>Light/Sound/Media Production = ' . $production;



?>



</body>
</html>



