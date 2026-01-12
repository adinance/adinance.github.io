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
</section>

<section class="ir-corp05-section">

    <div class="ir-corp05-con ">

        <!-- <div class="ir-corp05-img"><img src="<?php echo BASE_URL; ?>assets/img/ir-corp/message from the board bg.jpg" alt=""></div> -->
        <div class="ir-corp05-text" style="text-align: justify; ">
            <p><?php echo isset($this->session->msg_ceo_paragragh_1) ? $this->session->msg_ceo_paragragh_1 : '<strong>Dear Shareholders,</strong>'; ?></p><br>
            <p> 
                <?php echo isset($this->session->msg_ceo_paragragh_2) ? $this->session->msg_ceo_paragragh_2 : 'In 2024, the event and entertainment industry has rebounded with great momentum, bringing
heightened competition in the market. Currently, there are over 5,000 event management companies in
the industry. However, when considering those with an annual revenue exceeding 1 billion THB, there are
only about five major players, including CMO, which remains among the Top 5 in the industry.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_ceo_paragragh_3) ? $this->session->msg_ceo_paragragh_3 : 'To maintain our competitive edge and achieve our business objectives, CMO has implemented a
strategic plan with the following key focus areas:<br>
<br>• The company aims to solidify its position as the No.1 event agency in Thailand, excelling in both
event management and comprehensive audiovisual services. Our strategy involves retaining our
existing customer base while developing new business models that align with emerging trends
and modern lifestyles.
<br>• The company is committed to integrating cutting-edge digital technologies to create new
dimensions in event management, ensuring innovative and immersive experiences for all event
types.
<br>• The company plans to expand into international markets by focusing on event marketing
activities, selecting target countries based on economic potential and growth opportunities.
<br>• The company is fully committed to supporting the government’s Soft Power initiatives by helping
promote Thai festivals on the global stage, positioning Thailand as a leading Festival Destination.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_ceo_paragragh_4) ? $this->session->msg_ceo_paragragh_4 : 'Looking ahead to 2025, the event industry is poised for significant growth, driven by the
collaborative efforts of both the public and private sectors to establish Thailand as a World Festival
Destination—a global hub for hosting world-class events. CMO is closely monitoring these policy
developments to seize opportunities in shaping major milestone events in the country. A key factor
behind CMO’s success lies in our creative vision. We believe that creativity is the foundation of our
business, and every step of our work is driven by boundless innovation. To nurture this creative spirit, we
emphasize a dynamic and inspiring workplace culture, setting us apart from other organizations.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_ceo_paragragh_5) ? $this->session->msg_ceo_paragragh_5 : 'Lastly, on behalf of the executive team and all employees, I would like to extend my sincere
gratitude to our clients, business partners, and shareholders for their continued support and trust in CMO.
I also want to express my deep appreciation for the dedication and hard work of our employees. Rest
assured that my team and I are fully committed to driving sustainable growth, transparency, and industry
leadership, ensuring CMO’s long-standing success.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_ceo_paragragh_6) ? $this->session->msg_ceo_paragragh_6 : ''?>
            </p>
        </div>

        <div class="ir-corp05-name  ">

            <div class="ir-corp05-name-con row">

                <div class="ir-corp05-name1 col-5">
                    <li class="text-center bold">
                        <?php echo isset($this->session->msg_ceo_name_1) ? $this->session->msg_ceo_name_1 : 'Kitisak Jampathipphong';?>
                    </li><br>
                    <p class="text-center">
                        <?php echo isset($this->session->msg_ceo_position_1) ? $this->session->msg_ceo_position_1 : 'Chairman of the Board and Chief Executive Officer';?>
                        <br><?php echo isset($this->session->company_name) ? $this->session->company_name : 'CMO Public Company Limited';?>
                    </p>
                </div>

                <div class="ir-corp05-name2 col-3">
                    <li class="text-center bold">
                        <?php echo isset($this->session->msg_ceo_name_2) ? $this->session->msg_ceo_name_2 : 'Kitti Phuathavornskul';?>
                    </li><br>
                    <p class="text-center">
                        <?php echo isset($this->session->msg_ceo_position_2) ? $this->session->msg_ceo_position_2 : 'Vice Chairman of the Board';?>
                        <br><?php echo isset($this->session->company_name) ? $this->session->company_name : 'CMO Public Company Limited';?>
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>