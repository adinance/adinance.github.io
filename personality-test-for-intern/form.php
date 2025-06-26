<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <meta name="description" content="">

  <meta name="robots" content="noindex, nofollow">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Personality Test for Intern | Form</title>
  <style>
    /* body {
      max-width: 1000px;
      margin: 40px auto;
      padding: 20px;
      // background-color: #f9f9f9; 
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      // background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url("assets/images/result-bg-1920x1080.jpg"); 
      background-image: url("assets/images/form-bg-1920x1080.jpg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: 100vh;

    } */

    body {
      margin: 0;
      padding: 0;
      background-image: url("assets/images/form-bg-1920x1080.jpg");
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      min-height: 100vh;
    }

    h2 {
      text-align: center;
      color: #fff;
    }

    h5 {
      text-align: center;
      color: #fff;
    }

    .question {
      background: #fff;
      padding: 15px;
      border-radius: 10px;
      margin: 15px 0;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
    }

    .question:first-of-type {
      margin-top: -10px !important; /* ลดช่องว่างด้านบน */
    }

    .question:last-of-type {
  margin-bottom: 40px; /* ปรับระยะห่างจากปุ่ม */
}

    .question p {
      margin-bottom: 10px;
      font-weight: bold;
    }

    label {
      margin-right: 20px;
      font-weight: normal;
    }

    /* button {
      display: block;
      margin: 30px auto;
      padding: 10px 30px ;
      font-size: 16px;
      border-radius: 8px;
      background-color: #007bff;
      color: white;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    } */

    button {
  display: block;
  margin: 30px auto;
  padding: 12px 30px;
  font-size: 18px;
  border-radius: 5px;
  background-color: #e1a0bc;
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.4);
  backdrop-filter: blur(5px);
  transition: all 0.3s ease;
}

button:hover {
  background-color:#f49f4b;
  color: #2c9fd8;
  border-color: rgba(255, 255, 255, 0.7);
}
  </style>


  <style>
    #countdown {
      font-family: "Kanit", sans-serif;

      position: fixed;
      top: 20px;        /* ตำแหน่งบน */
      right: 20px;      /* ตำแหน่งขวา */
      background-color: rgba(0, 0, 0, 0.7); /* พื้นหลังโปร่งใส */
      color: white;
      padding: 10px 20px;
      font-size: 24px;
      border-radius: 10px;
      z-index: 9999;     /* ให้อยู่บนสุด */
    }


     #submitBtn:disabled {
      background-color: #aaa;
      color: #fff;
      cursor: not-allowed;
    }
  </style>


<style>
.my-title-class {
  font-family: "Kanit", sans-serif;
  font-size: 24px;
  font-weight: bold;
  color: #2c9fd8;
}

.my-popup-class {
  font-family: "Kanit", sans-serif;
  border-radius: 20px;
  padding: 20px;
}

.my-confirm-button-class {
  font-family: "Kanit", sans-serif;
  /* font-size: 18px; */
  padding: 10px 20px;
}

.no-border-btn {
  border: none !important;
  box-shadow: none !important;
  background-color: #28a745 !important; /* สีเขียว */
  color: white !important;
  padding: 10px 20px;
  border-radius: 8px;
}
</style>
</head>

<body>


<div id="countdown">10:00</div>

  
 <!-- <div class="container"> -->
  <div class="container" style="max-width: 1100px; margin: 40px auto; background: rgba(255, 255, 255, 0.25); padding: 30px; border-radius: 15px;">

  <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style mbr-bold align-center display-2">Personality Test for Intern</h2>
  <h5 class="mbr-section-title pb-3 align-center mbr-fonts-style  align-center display-5">ในแต่ละข้อให้เลือกเพียงตัวเลือก "ใช่" หรือ "ไม่ใช่" เพียงตัวเลือกเดียวที่สอดคล้องกับตัวท่านมากที่สุด</h5><br>

  <form id="myForm">

    <div class="question mbr-fonts-style display-7">
      <p>1. ข้าพเจ้าชอบที่จะเป็นผู้วางแผนงาน และสามารถแก้ปัญหาใหม่ ๆ ได้ตลอดเวลา</p>
      <label><input type="radio" name="q1" required value="1"> ใช่</label>
      <label><input type="radio" name="q1" value="0" > ไม่ใช่</label>
    </div>

    <div class="question mbr-fonts-style display-7">
      <p>2. ข้าพเจ้ามีทักษะด้านมนุษยสัมพันธ์ชอบการพบปะผู้คนใหม่ๆ เสมอ</p>
      <label><input type="radio" name="q2" required value="1" > ใช่</label>
      <label><input type="radio" name="q2" value="0" > ไม่ใช่</label>
    </div>

    <div class="question mbr-fonts-style display-7">
      <p>3. ข้าพเจ้ามีทักษะในการสื่อสาร, การเจรจา, การวิเคราะห์ และแก้ปัญหาร่วมกับผู้อื่นได้ดี</p>
      <label><input type="radio" name="q3" required value="1" > ใช่</label>
      <label><input type="radio" name="q3" value="0" > ไม่ใช่</label>
    </div>

    <div class="question mbr-fonts-style display-7">
      <p>4. ข้าพเจ้าสามารถชักนำและกระตุ้นทีมงานให้ทำงานร่วมกันได้อย่างมีประสิทธิภาพ</p>
      <label><input type="radio" name="q4" required value="1" > ใช่</label>
      <label><input type="radio" name="q4" value="0" > ไม่ใช่</label>
    </div>

    <div class="question mbr-fonts-style display-7">
      <p>5. ข้าพเจ้าสามารถในการทำงานภายใต้แรงกดดันได้เป็นอย่างดี</p>
      <label><input type="radio" name="q5" required value="1" > ใช่</label>
      <label><input type="radio" name="q5" value="0" > ไม่ใช่</label>
    </div>

    <div class="question mbr-fonts-style display-7">
      <p>6. ข้าพเจ้าเป็นคนสนุกสนาน สามารถสร้างบรรยากาศที่ดีในการทำงาน</p>
      <label><input type="radio" name="q6" required value="1" > ใช่</label>
      <label><input type="radio" name="q6" value="0" > ไม่ใช่</label>
    </div>

    <div class="question mbr-fonts-style display-7">
      <p>7. ข้าพเจ้าชอบคิดค้นสิ่งใหม่ๆ เมื่อมองเห็นถึงปัญหา ก็มักมีแนวทางในการแก้ไขนอกกรอบเดิมๆ ได้อยู่เสมอ</p>
      <label><input type="radio" name="q7" required value="1" > ใช่</label>
      <label><input type="radio" name="q7" value="0" > ไม่ใช่</label>
    </div>

    <div class="question mbr-fonts-style display-7">
      <p>8. ข้าพเจ้าชอบการติดตามเทรนด์ และเรียนรู้เทคโนโลยีใหม่ๆ ในวงการอีเว้นท์อยู่เสมอ</p>
      <label><input type="radio" name="q8" required value="1" > ใช่</label>
      <label><input type="radio" name="q8" value="0" > ไม่ใช่</label>
    </div>

    <div class="question mbr-fonts-style display-7">
      <p>9. ข้าพเจ้ามีนิสัยรักการอ่าน เรียนรู้การใช้ภาษาต่างๆ ชอบเล่าเรื่องต่างๆให้ผู้คนรอบข้างฟังอยู่บ่อยๆ</p>
      <label><input type="radio" name="q9" required value="1" > ใช่</label>
      <label><input type="radio" name="q9" value="0" > ไม่ใช่</label>
    </div>

    <div class="question mbr-fonts-style display-7">
      <p>10. ข้าพเจ้าชอบการลงมือปฏิบัติงานด้วยตนเอง แต่ก็สามารถร่วมงานกับเพื่อนต่างสาขาได้เป็นอย่างดี</p>
      <label><input type="radio" name="q10" required value="1" > ใช่</label>
      <label><input type="radio" name="q10" value="0" > ไม่ใช่</label>
    </div>

    <button type="submit" id="submitBtn" class=" mbr-fonts-style display-7">ส่งคำตอบ</button>

    <input type="hidden" name="project" value="0" id="project">
    <input type="hidden" name="ae" value="0" id="ae">
    <input type="hidden" name="creative" value="0" id="creative">
    <input type="hidden" name="production" value="0" id="production">
    <input type="hidden" name="t1" value="" id="t1">
    <input type="hidden" name="t2" value="" id="t2">
    <input type="hidden" name="t3" value="" id="t3">
    <input type="hidden" name="t4" value="" id="t4">

  </form>

 </div>

  <script>
    function setQuestionValue() {
      const q1 = document.querySelector('input[name="q1"]:checked')?.value || "0";
      const q2 = document.querySelector('input[name="q2"]:checked')?.value || "0";
      const q3 = document.querySelector('input[name="q3"]:checked')?.value || "0";
      const q4 = document.querySelector('input[name="q4"]:checked')?.value || "0";
      const q5 = document.querySelector('input[name="q5"]:checked')?.value || "0";
      const q6 = document.querySelector('input[name="q6"]:checked')?.value || "0";
      const q7 = document.querySelector('input[name="q7"]:checked')?.value || "0";
      const q8 = document.querySelector('input[name="q8"]:checked')?.value || "0";
      const q9 = document.querySelector('input[name="q9"]:checked')?.value || "0";
      const q10 = document.querySelector('input[name="q10"]:checked')?.value || "0";
    
      var project = parseInt(q1) + parseInt(q3) + parseInt(q4) + parseInt(q7) + parseInt(q8);
      var ae = parseInt(q2) + parseInt(q3) + parseInt(q4) + parseInt(q5) + parseInt(q9);
      var creative = parseInt(q3) + parseInt(q6) + parseInt(q7) + parseInt(q8) + parseInt(q9);
      var production = parseInt(q1) + parseInt(q5) + parseInt(q7) + parseInt(q8) + parseInt(q10);
      document.getElementById("project").value = project;
      document.getElementById("ae").value = ae;
      document.getElementById("creative").value = creative;
      document.getElementById("production").value = production;

      const rolesRaw = [
        { name: "Assistant Producer / Event Coordinator", value: project },
        { name: "Account Executive / Project Coordinator", value: ae },
        { name: "Creative", value: creative },
        { name: "Lighting, Audio & Image / Runshow", value: production }
      ];

      // const roles = rolesRaw.filter(role => role.value >= 3);
      const roles = rolesRaw.sort((a, b) => b.value - a.value);
      console.log("อันดับความเหมาะสมตามคะแนน:");
      roles.forEach(role => {
        console.log(role.name + " = " + role.value);
      });

      document.getElementById("t1").value = roles[0]?.name || "";
      document.getElementById("t2").value = roles[1]?.name || "";
      document.getElementById("t3").value = roles[2]?.name || "";
      document.getElementById("t4").value = roles[3]?.name || "";



    }
    document.getElementById("myForm").addEventListener("submit", async function(e) {
      e.preventDefault();
      setQuestionValue();
      const form = e.target;
      const formData = new FormData(form);
      try {
        const response = await fetch("save.php", { 
          method: "POST",
          body: formData
        });
        if (!response.ok) throw new Error("Network response was not ok");
        const resultText = await response.text(); // หรือ response.json() ถ้า server ส่ง JSON // console.log(resultText);
        
        Swal.fire({
          icon: 'success',
          title: 'ตำแหน่งที่เหมาะสมกับคุณ คือ',
          text: document.getElementById("t1").value,
          confirmButtonText: 'ตกลง',
          confirmButtonColor: '#a5dc86', // สีปุ่ม
          customClass: {
            confirmButton: 'no-border-btn',
            cancelButton: 'no-border-btn',
            title: 'my-title-class',
            popup: 'my-popup-class',
            confirmButton: 'my-confirm-button-class'
          }
        }).then(() => {
          window.location.href = "position.php"; 
        }); // document.getElementById("result").innerHTML = `<p>ส่งข้อมูลสำเร็จ: ${resultText}</p>`;
        
      } catch (error) {
        Swal.fire({
          icon: 'error',
          title: 'เกิดข้อผิดพลาด',
          text: error.message,
          confirmButtonText: 'ตกลง'
        }); // document.getElementById("result").innerHTML = `<p style="color:red;">เกิดข้อผิดพลาด: ${error.message}</p>`;
        
      }
    });
  </script>


<script>
  let timeLeft = 600; // 10 นาที = 600 วินาที
  const countdownEl = document.getElementById('countdown');

  const submitBtn = document.getElementById('submitBtn');

  function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const secs = seconds % 60;
    return `${minutes.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
  }

  countdownEl.textContent = formatTime(timeLeft);

  const timer = setInterval(() => {
    timeLeft--;
    countdownEl.textContent = formatTime(timeLeft);

    if (timeLeft <= 0) {
      clearInterval(timer);
      countdownEl.textContent = "หมดเวลา!";
      submitBtn.disabled = true; // ❌ ปิดปุ่มเมื่อหมดเวลา
    }
  }, 1000);
</script>

    <script>
    // ป้องกันการคลิกขวา
    document.addEventListener('contextmenu', function (e) {
      e.preventDefault();
    });

    // ป้องกันการเลือกข้อความ
    document.addEventListener('selectstart', function (e) {
      e.preventDefault();
    });
  </script>
  

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/countdown/jquery.countdown.min.js"></script>
  <script src="assets/theme/js/script.js"></script>

</body>

</html>