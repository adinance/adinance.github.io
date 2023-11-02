<section class="services1 cid-tMpcMSju0T" id="services1-m">
    <!---->

    <!---->
    <!--Overlay-->

    <!--Container-->
    <div class="container">
      <div class="row justify-content-center">
        <!--Titles-->
        <div class="title pb-5 col-12"></div>
        <!--Card-1-->
        <div class="card col-12 col-md-6 p-3 col-lg-4">
          <div class="card-wrapper">
            <div class="card-box">
              <h1 id="number1" class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                7
              </h1>
              <p class="mbr-text mbr-fonts-style mbr-bold display-5" style="text-align: center; color: black">
                Years of Expertise
              </p>
              <!--Btn-->
            </div>
          </div>
        </div>
        <!--Card-2-->
        <div class="card align-center col-12 col-md-6 p-3 col-lg-4" style="
              border-left: 3px solid rgb(3, 3, 3);
              border-right: 3px solid rgb(2, 2, 2);
              padding: 10%;
            ">
          <div class="card-wrapper">
            <div class="card-box">
              <h1 id="number2" class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                570
              </h1>
              <p class="mbr-text align-center mbr-fonts-style mbr-bold display-5"
                style="text-align: center; color: black">
                Full-time Employees
              </p>
              <!--Btn-->
            </div>
          </div>
        </div>
        <!--Card-3-->
        <div class="card align-center col-12 col-md-6 p-3 col-lg-4 last-child">
          <div class="card-wrapper">
            <div class="card-box">
              <h1 id="number3" class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                19970
              </h1>
              <p class="mbr-text mbr-fonts-style mbr-bold display-5" style="text-align: center; color: black">
                Creative Experiences
              </p>
              <!--Btn-->
            </div>
          </div>
        </div>
        <!--Card-4-->
      </div>
    </div>



  </section>


<!-- runnumber script start  -->
<script>
    const number1Element = document.getElementById("number1");
    const number2Element = document.getElementById("number2");
    const number3Element = document.getElementById("number3");

    function updateNumber(element, startValue, endValue) {
        let currentValue = startValue;
        const increment = startValue < endValue ? 1 : -1;

        const interval = setInterval(() => {
            if (currentValue === endValue) {
                clearInterval(interval); // หยุด setInterval ทันที่เมื่อค่าถึงค่าสุดท้าย
            }
            element.textContent = currentValue;
            currentValue += increment;
        }, 70); // ปรับความเร็วของการเปลี่ยนค่าตรงนี้ (ค่าน้อย = เร็ว)

    }

    // เรียกใช้ฟังก์ชันเพื่อเริ่ม animation
    updateNumber(number1Element, 7, 37);
    updateNumber(number2Element, 470, 500);
    updateNumber(number3Element, 29970, 30000);
</script>
<!-- runnumber script end  -->