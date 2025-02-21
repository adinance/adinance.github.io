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

<section class="ir-corp05-section">

    <div class="ir-corp05-con">

        <!-- <div class="ir-corp05-img"><img src="<?php echo BASE_URL; ?>assets/img/ir-corp/message from the board bg.jpg" alt=""></div> -->
        <div class="ir-corp05-text " style="text-align: justify; ">
        <!-- <div class="ir-corp05-text  mbr-fonts-style display-7"> -->
            <p><?php echo isset($this->session->msg_chairman_paragragh_1) ? $this->session->msg_chairman_paragragh_1 : '<strong>Message from Chairman of the Board of Directors</strong>'; ?></p><br>
            <p> 
                <?php echo isset($this->session->msg_chairman_paragragh_2) ? $this->session->msg_chairman_paragragh_2 : '“The pessimist sees the difficulty in every opportunity. The optimist sees the opportunity in every difficulty”, said WINSTON CHURCHILL, Former UK Prime Minister. Nowadays, people across the world use this idea as inspiration in their lives or even running their business. I am one of those who see the opportunity rather than the difficulty. That is why I decided to take on the role of Chairman of the Board of Directors of CMO Public Company Limited';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_chairman_paragragh_3) ? $this->session->msg_chairman_paragragh_3 : 'Though I recently assumed the role of the Chairman, due to various situations that need to be addressed and solved, I and the Board of Directors together with the management team have worked closely and held a meeting to formulate strategies aiming at developing CMO and its affiliates to achieve sustainable growth, which is consistent with the targeted strategic plans and business plans.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_chairman_paragragh_4) ? $this->session->msg_chairman_paragragh_4 : 'In recent years, we have accepted that the trend of “sustainability” is popular, and every business is unable to remain silent. Every organization must take it and drive it seriously. CMO is aware of the importance of sustainable development under good corporate governance and risk management to enhance the three-dimensional balance, namely, economy, society, and environment. The Company has established the policy on sustainability that comprehensively covers all dimensions as a guideline for sustainability practices.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_chairman_paragragh_5) ? $this->session->msg_chairman_paragragh_5 : 'CMO sets several goals for improving its business sustainability. One of them is personnel development, promoting skills in creativity, finance, marketing, and creating working environment to ensure employees have creativity because we believe that creativity is the origin of our business. Every step of working is scrutinized from a boundless creative process. It can be said that CMO is the business leader in “Creative Events”, with fully integrated business management, creativity and technology to deliver new experiences in response to consumers in the Gen AI era.';?>
            </p>
            <p> 
                <?php echo isset($this->session->msg_chairman_paragragh_6) ? $this->session->msg_chairman_paragragh_6 : 'On behalf of the Board of Directors, I would like to thank all shareholders, investors, customers, trade partners, allies, and supports of the Company, executives, employees, and all stakeholders who always give good cooperation and are a part of our success. In this regard, the Board of Directors has performed its duties attentively, carefully, concisely, adhered to ethical principles and continuously developed the quality for the maximum benefits of all related parties.'?>
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