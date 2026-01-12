<style>
    .ir-corp05-section {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .ir-corp05-con {
        background-color: white;
        background-size: cover;
        justify-content: center;
        align-items: center;
        font-family: "Montserrat", "Kanit", sans-serif !important;
    }

    .ir-corp05-img img {
        /* width: 100vw; */
    }

    .ir-corp05-text {
        display: block;
        justify-content: center;
        margin: 5% 10% 5% 10%;
    }

    .ir-corp05-name {
        list-style: none;
        margin: 5% 10% 5% 10%;
    }

    .ir-corp05-name-con {
        justify-content: right;
    }

    @media only screen and (max-width: 800px) {
        .ir-corp05-name-con {
            justify-content: center;
        }
    }
</style>

<!-- 
<section class="header4 cid-uoCbpTq9ww mbr-parallax-background" id="header4-9i">

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="media-content col-md-10">

                <div class="mbr-text align-center mbr-white pb-3">

                </div>

            </div>
            <div class="mbr-figure pt-5">
                <?php $img = 'message-ceo-coo.png';
                if($this->session->lang == 'thai'){
                    $img = 'message-ceo-coo-th.png';
                }
                ?>
                <img src="<?php echo BASE_URL . 'assets/img/' . $img; ?>" alt="" title="" style="width: 60%;">
            </div>
        </div>
    </div>
</section> -->


<section class="header4 cid-uoCbpTq9ww mbr-parallax-background" id="header4-9i">

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="media-content col-md-10">

                <div class="mbr-text align-center mbr-white pb-3">

                </div>

            </div>
            <div class="mbr-figure pt-5">
                <?php $img = 'chairman-en-1292x543.png';
                if($this->session->lang == 'thai'){
                    $img = 'chairman-th-1292x543.png';
                }
                ?>
                <img src="<?php echo BASE_URL . 'assets/img/' . $img; ?>" alt="" title="" style="width: 60%;">
            </div>
        </div>
    </div>
</section>

<section class="ir-corp05-section">

    <div class="ir-corp05-con">

        <!-- <div class="ir-corp05-img"><img src="<?php echo BASE_URL; ?>assets/img/ir-corp/message from the board bg.jpg" alt=""></div> -->
        <div class="ir-corp05-text " style="text-align: justify; ">
        <!-- <div class="ir-corp05-text  mbr-fonts-style display-7"> -->
            <p><?php echo isset($this->session->msg_chairman_paragragh_1) ? $this->session->msg_chairman_paragragh_1 : '<strong>Message from Chairman of the Board of Directors<br>CMO Public Company Limited</strong>'; ?></p><br>
            <p> 
                <?php echo isset($this->session->msg_chairman_paragragh_2) ? $this->session->msg_chairman_paragragh_2 : 'Dear Shareholders,<br><br>In 2024, the event industry has made a significant recovery, in line with the overall economic rebound.
The market value of the event industry this year is estimated at THB 14-15 billion, amidst an increasingly
competitive landscape with a continuous influx of new players.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_chairman_paragragh_3) ? $this->session->msg_chairman_paragragh_3 : 'Despite the intense competition, CMO continues to uphold its leadership in the Creative Event industry,
leveraging over 39 years of experience in comprehensive event management. Our expertise spans all dimensions
of the event industry, including event management, exhibitions, museums, conferences, seminars, concerts, and
festivals, as well as audiovisual installation and control services, media production, digital content, and
multimedia. All of these operations are driven by our core concept, &quot;The Creative Experience Creator,&quot; which
prioritizes quality, innovation, and cutting-edge technology to deliver unique and immersive experiences. This
commitment has earned CMO recognition as a leading Creative Business both domestically and internationally.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_chairman_paragragh_4) ? $this->session->msg_chairman_paragragh_4 : 'Beyond business growth, CMO remains deeply committed to sustainable development, adhering to good
corporate governance and robust risk management practices to ensure the company’s long-term stability. A key
driver of sustainable growth is human capital development. We actively enhance and upskill our workforce in
creativity, finance, and marketing, while fostering an innovative and inspiring work environment that supports
creative excellence.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_chairman_paragragh_5) ? $this->session->msg_chairman_paragragh_5 : 'Looking ahead to 2025, CMO will continue to expand its business scope, with a strong emphasis on
domestic market growth to reinforce its industry leadership. At the same time, we remain dedicated to building
strategic business partnerships to support sustainable expansion. Additionally, 2025 will mark a significant
milestone in CMO’s international market expansion, as we take a more proactive approach to global business
opportunities.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_chairman_paragragh_6) ? $this->session->msg_chairman_paragragh_6 : 'On behalf of the Board of Directors, I would like to express my sincere gratitude to our shareholders,
investors, clients, partners, and all stakeholders for your unwavering support and invaluable contributions to our
success. The Board remains committed to exercising due diligence, upholding the highest ethical standards, and
continuously advancing the organization to maximize value for all stakeholders.'?>
            </p>
        </div>

        <div class="ir-corp05-name  ">

            <div class="ir-corp05-name-con row">

                <div class="ir-corp05-name1 col-4">
                    <li class="text-center bold">
                    </li><br>
                    <p class="text-center">
                    </p>
                </div>

                <div class="ir-corp05-name2 col-4">
                    <li class="text-center bold">
                        <?php echo isset($this->session->msg_chairman_name) ? $this->session->msg_chairman_name : '';?>
                    </li><br>
                    <p class="text-center">
                        <?php echo isset($this->session->msg_chairman_position) ? $this->session->msg_chairman_position : 'Chairman of the Board of Directors';?>
                        <br><?php echo isset($this->session->company_name) ? $this->session->company_name : 'CMO Public Company Limited';?>
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>