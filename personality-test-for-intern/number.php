<!-- <!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Countdown Floating</title>
  <style>
    #countdown {
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
  </style>
</head>
<body>

<div id="countdown">10:00</div>

<script>
  let timeLeft = 600; // 10 นาที = 600 วินาที
  const countdownEl = document.getElementById('countdown');

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
    }
  }, 1000);
</script>

</body>
</html> -->


<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Countdown 10 Seconds</title>
  <style>
    #countdown {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: rgba(0, 0, 0, 0.7);
      color: white;
      padding: 10px 20px;
      font-size: 24px;
      border-radius: 10px;
      z-index: 9999;
      font-family: Arial, sans-serif;
    }

    #submitBtn {
      margin: 50px;
      padding: 10px 20px;
      font-size: 18px;
    }

    #submitBtn:disabled {
      background-color: #aaa;
      cursor: not-allowed;
    }
  </style>
</head>
<body>

<div id="countdown">เวลา 00:10</div>

<form id="myForm">
  <input type="text" name="example" placeholder="พิมพ์อะไรบางอย่าง" required>
  <button type="submit" id="submitBtn">ส่งคำตอบ</button>
</form>

<script>
  let timeLeft = 10; // ⏱ เปลี่ยนเป็น 10 วินาที
  const countdownEl = document.getElementById('countdown');
  const submitBtn = document.getElementById('submitBtn');

  function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const secs = seconds % 60;
    return `${minutes.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
  }

  countdownEl.textContent = "เวลา " + formatTime(timeLeft);

  const timer = setInterval(() => {
    timeLeft--;

    if (timeLeft <= 0) {
      clearInterval(timer);
      countdownEl.textContent = "หมดเวลา!";
      submitBtn.disabled = true; // ❌ ปิดปุ่มเมื่อหมดเวลา
    } else {
      countdownEl.textContent = "เวลา " + formatTime(timeLeft);
    }
  }, 1000);
</script>

</body>
</html>
