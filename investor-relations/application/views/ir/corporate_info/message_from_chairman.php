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
                <?php $img = 'chairman.png';
                if($this->session->lang == 'thai'){
                    $img = 'chairman-th.png';
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
                <?php echo isset($this->session->msg_chairman_paragragh_2) ? $this->session->msg_chairman_paragragh_2 : 'Dear Shareholders,<br><br>The year 2025 marked another important year for the creative industry and event management sector,
which faced rapid changes in the global economic landscape and evolving consumer behavior. Amid such
circumstances, CMO Public Company Limited continued to stand firmly as a leader in the industry by delivering
valuable and distinctive “experiences”, through the seamless integration of creativity with innovation and
modern technology.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_chairman_paragragh_3) ? $this->session->msg_chairman_paragragh_3 : '<strong>Performance and Achievements</strong><br>Throughout the past year, the Board of Directors and the management team have jointly driven strategies to
achieve stable and sustainable growth, focusing on operations through three key strategic pillars as follows:<br><ul>
<li><strong>Creative Excellence:</strong> Maintaining international standards of creative excellence across both public and
private sector projects in order to deliver outstanding work and create value for clients.</li>
<li><strong>Tech-Driven Solutions:</strong> Leveraging technologies such as AI, Virtual Reality, and Data Analytics to
enhance experience design and maximize the impact and effectiveness of event activities.</li>
<li><strong>Operational Efficiency:</strong> Managing costs and internal resources with maximum efficiency in order to
generate sustainable returns for shareholders.</li>
</ul>';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_chairman_paragragh_4) ? $this->session->msg_chairman_paragragh_4 : '<strong>Corporate Governance and Sustainability</strong><br>The Company remains committed to the principles of Good Corporate Governance while conducting its
business with responsibility toward society, the environment, and all stakeholders. We believe that the true
success of an organization is not measured solely by financial performance, but also by the trust and confidence
that customers, business partners, and society place in the CMO brand over time.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_chairman_paragragh_5) ? $this->session->msg_chairman_paragragh_5 : '<strong>The Way Forward</strong><br>For the future direction, the Company will continue to seek growth opportunities at the regional level
(Regional Expansion) while developing concepts and event formats that respond to the growing sustainability
trend, such as Green Events and Sustainable Experiences. This will enable CMO to keep pace with the evolving
landscape of the modern business world and achieve stable long-term growth.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_chairman_paragragh_6) ? $this->session->msg_chairman_paragragh_6 : 'On behalf of the Board of Directors, I would like to express my sincere appreciation to our shareholders,
customers, business partners, as well as our executives and employees for their dedication and commitment.
Your trust and confidence are an important driving force that motivates us to continuously develop the
Company toward sustainable and strong growth in the future.'?>
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
                        <?php echo isset($this->session->msg_chairman_name) ? $this->session->msg_chairman_name : 'Mr. Tatchapong Thamputthipong';?>
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