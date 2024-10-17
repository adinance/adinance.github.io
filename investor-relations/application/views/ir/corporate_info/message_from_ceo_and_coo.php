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

    <div class="ir-corp05-con">

        <!-- <div class="ir-corp05-img"><img src="<?php echo BASE_URL; ?>assets/img/ir-corp/message from the board bg.jpg" alt=""></div> -->
        <div class="ir-corp05-text" style="text-align: justify; ">
            <p><?php echo isset($this->session->msg_ceo_paragragh_1) ? $this->session->msg_ceo_paragragh_1 : '<strong>Dear Shareholders,</strong>'; ?></p><br>
            <p> 
                <?php echo isset($this->session->msg_ceo_paragragh_2) ? $this->session->msg_ceo_paragragh_2 : 'For the year 2023, the event and entertainment business overall has rebounded vibrantly, with the event market valued at approximately 14,000 - 15,000 million baht, equivalent to the period before the COVID-19 outbreak. The Company has managed events of all forms, including marketing activities, exhibitions, museums, conferences, seminars, concerts, and festivals, as well as providing equipment installation and controlling image, light, and sound systems, along with producing promotional media, digital content, and multimedia under the concept “THE CREATIVE EXPERIENCE CREATOR,” reinforcing our identity as a creative business that creates experiences for people. Furthermore, the event business plays a vital role in contributing to the country’s economic value. Examples of CMO’s work include the spectacular “GUNDAM Docks at THAILAND” exhibition, the “Siam Square Countdown 2024,” which was held for the first time in Siam Square, the opening and closing ceremonies of the 48th National Sports Competition “Kanchanaburi Games,” and contributions to various industry exhibitions, including the automotive sector and financial institutions, such as the Motor Show, Money Expo. This is just a part of the Company’s continuous growth, not including the supply of production equipment for concerts.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_ceo_paragragh_3) ? $this->session->msg_ceo_paragragh_3 : 'Moreover, the Company also engages in the design, construction, and creation of exhibitions for museums and learning centers, which stands as another prominent segment of CMO, generating consistent revenue. Last year, we won a bid worth 143.6 million baht for a project to renovate exhibition buildings and educational services for the Department of Cultural Promotion. This project developed an area of 5,900 square meters into an exhibition space for the knowledge and heritage of national culture, aiming to create a suitable and creative space that meets the need for sustainable cultural learning. A distinctive feature of museum development that sets CMO apart from competitors is our comprehensive approach, blending technology with content, including various image, light, sound, and multimedia systems, adding vibrancy. This approach transforms museums developed with CMO into tourist destinations that not only educate but also create enjoyable experiences for visitors.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_ceo_paragragh_4) ? $this->session->msg_ceo_paragragh_4 : 'The Company remains dedicated to maintaining its leadership in the &quot;Creative Event&quot; business, with over 38 years of professional experience, having created more than 30,000 national-level creative projects. We offer comprehensive services with innovative and fresh ideas to our clients, integrating cutting-edge technologies such as Gen AI, AR, VR into our business, along with developing production systems for visuals, lighting, and sound. We have a group of companies with the largest Production Warehouse, equipped with over 50,000 items, capable of supporting up to 12 events simultaneously each day. We have also been behind the magnificent productions at concerts and Music Festivals, both domestically and internationally.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_ceo_paragragh_5) ? $this->session->msg_ceo_paragragh_5 : 'However, in 2024, beyond our commitment to strengthen our business operations, we also prioritize sustainable business development practices. It is clear that our successes would not be possible without our employees, who are the driving force of CMO. Therefore, we focus on fostering a culture and work environment that is conducive to creativity, believing that creative thinking flourishes in fun and enjoyable settings, which not only increases employee happiness but also enhances work efficiency.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_ceo_paragragh_6) ? $this->session->msg_ceo_paragragh_6 : 'Lastly, on behalf of the management team and all employees, I would like to express our gratitude to our customers, business partners, and shareholders for their continued support and trust in our company. I also thank every member of our staff for their dedication and hard work. Please rest assured that together with the management team, we are committed to leading the Company towards sustainable, transparent growth and maintaining our market leadership.'?>
            </p>
        </div>

        <div class="ir-corp05-name  ">

            <div class="ir-corp05-name-con row">

                <div class="ir-corp05-name1 col-4">
                    <li class="text-center bold">
                        <?php echo isset($this->session->msg_ceo_name_1) ? $this->session->msg_ceo_name_1 : 'Kitisak Jampathipphong';?>
                    </li><br>
                    <p class="text-center">
                        <?php echo isset($this->session->msg_ceo_position_1) ? $this->session->msg_ceo_position_1 : 'Chairman of the Board and Chief Executive Officer';?>
                        <br><?php echo isset($this->session->company_name) ? $this->session->company_name : 'CMO Public Company Limited';?>
                    </p>
                </div>

                <div class="ir-corp05-name2 col-4">
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