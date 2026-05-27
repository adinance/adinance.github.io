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
                <?php $img = 'message-ceo.png';
                if($this->session->lang == 'thai'){
                    $img = 'message-ceo-th.png';
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
                <?php echo isset($this->session->msg_ceo_paragragh_2) ? $this->session->msg_ceo_paragragh_2 : 'The year 2025 marked another significant period of transition for CMO Public Company
Limited, as I was given the opportunity to assume the role of Chief Executive Officer (CEO) of the
Company. I am truly honored to have been entrusted with this important responsibility to lead
CMO into its next chapter of growth, particularly as the Company approaches its 40th year of
operations. I look forward to working closely with the executive management team to set
directions and develop strategies that will drive the organization toward new opportunities that are
both challenging and exciting.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_ceo_paragragh_3) ? $this->session->msg_ceo_paragragh_3 : 'One of the key milestones in the past year was the Company’s strategic transformation
from being recognized as a traditional Event Organizer to becoming a fully integrated Experience
Creator, creating a new S-Curve for the organization. This transformation combines creativity with
technology and marketing data to elevate the creation of comprehensive experiences. The
Company has adopted modern technologies such as AI, Data Analytics, and digital platforms to
enhance event management across On-site, Online, and Hybrid formats, enabling measurable
experiences while generating broad awareness and engagement across digital and social media
platforms. This approach also expands CMO’s business scope into digital marketing services,
content creation, and lifestyle-driven solutions, allowing the Company to effectively respond to
the needs of modern consumers.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_ceo_paragragh_4) ? $this->session->msg_ceo_paragragh_4 : 'In pursuing strategies and expanding into the new-generation event market over the past
year, CMO has adjusted its business model to align with global marketing trends, focusing on the
following key areas:
<ul>
<li><strong>Integrated Experience Marketing:</strong> CMO has integrated on-ground events with digital tools
to design a Customer Journey that connects every brand touchpoint, enabling communication with
target audiences to become more precise, meaningful, and effective.</li>
<li><strong>Innovative Event Technology:</strong> CMO has elevated event standards by applying modern
technologies such as Immersive Technology and Generative AI to create innovative and
memorable content and experiences. This not only helps generate buzz on social media but also
enables the collection and analysis of consumer behavior data that can be effectively leveraged
for further marketing strategies.</li>
</ul>';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_ceo_paragragh_5) ? $this->session->msg_ceo_paragragh_5 : 'The commitment to operational excellence was a key focus for CMO in 2025. The
Company enhanced project management efficiency by streamlining work processes to increase
agility, reduce complexity, and promote greater diversity, while also expanding the capabilities of
its personnel to develop expertise in both creative thinking and technological skills in order to
continuously respond to the increasingly complex demands of the market.
<p>
I firmly believe that CMO’s extensive experience and strong foundation, combined with the
capabilities and dedication of our team, will be a key driving force in advancing the Company
toward stable growth in 2026 and over the long term. We are ready to face every challenge while
creating new opportunities to drive revenue growth and business performance, which will lead to
sustainable returns for our shareholders under the principles of good corporate governance.
</p>

<p>
Finally, I would like to express my sincere appreciation to our shareholders, customers,
partners, business allies, as well as our executives and employees who have continuously stood
alongside CMO. We remain committed to creating new phenomena in the event and marketing
industry and to elevating our capabilities toward greater international recognition.
</p>';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_ceo_paragragh_6) ? $this->session->msg_ceo_paragragh_6 : ''?>
            </p>
        </div>

        <div class="ir-corp05-name  ">

            <div class="ir-corp05-name-con row">

                <div class="ir-corp05-name1 col-5">
                    <li class="text-center bold">
                        <?php echo isset($this->session->msg_ceo_name_1) ? $this->session->msg_ceo_name_1 : 'Mr. Mongkol Silthumpitug';?>
                    </li><br>
                    <p class="text-center">
                        <?php echo isset($this->session->msg_ceo_position_1) ? $this->session->msg_ceo_position_1 : 'Chief Executive Officer';?>
                        <br><?php echo isset($this->session->company_name) ? $this->session->company_name : 'CMO Public Company Limited';?>
                    </p>
                </div>

                <!-- <div class="ir-corp05-name2 col-3">
                    <li class="text-center bold">
                        <?php echo isset($this->session->msg_ceo_name_2) ? $this->session->msg_ceo_name_2 : 'Kitti Phuathavornskul';?>
                    </li><br>
                    <p class="text-center">
                        <?php echo isset($this->session->msg_ceo_position_2) ? $this->session->msg_ceo_position_2 : 'Vice Chairman of the Board';?>
                        <br><?php echo isset($this->session->company_name) ? $this->session->company_name : 'CMO Public Company Limited';?>
                    </p>
                </div> -->
            </div>

        </div>

    </div>

</section>