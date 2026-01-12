<style>
    /* ir-corp03-section  start*/

    .ir-corp03-section {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .ir-corp03-con {
        background-color: white;
        background-size: cover;
        /* width: 100vw; */
        justify-content: center;
        align-items: center;
        vertical-align: middle;
        font-family: "Montserrat", "Kanit", sans-serif !important;
        display: flex;
        padding: 15% 15% 10% 15%;
    }

    .ir-corp03-indicators {
        position: absolute;
        z-index: 2;
        display: flex;
        justify-content: center;
        padding: 0;
        margin-right: 15%;
        /* margin-bottom: 1rem; */
        margin-left: 15%;
        list-style: none;
        top: 0;
        padding: 5%;
    }

    .ir-corp03-indicators button {
        background-color: transparent;
        color: #5f656d49;
        border-color: transparent;
        font-size: 1.25rem;
        font-weight: 600;
        margin: 2%;
    }

    .ir-corp03-indicators button :hover {
        font-size: 2rem;
        color: #5f656d9d;
    }

    .ir-corp03-indicators button :active {
        font-size: 2rem;
        font-weight: 800;
        color: #4a7ab5;
        transition: 2ms;
    }

    .ir-corp03-grid1 {
        text-align: right;
    }

    .ir-corp03-grid1 img {
        height: 300px;
        width: auto;
    }

    .ir-corp03-grid2 h1 {
        font-size: 4.5rem;
        font-weight: 800;
        color: #4a7ab5;
    }

    .ir-corp03-grid2 {
        text-align: left;
    }

    .ir-corp03-next img {
        width: 3vw;
    }

    .ir-corp03-prev img {
        width: 3vw;
    }

    @media only screen and (max-width: 800px) {
        .ir-corp03-grid1 {
            text-align: center;
            padding-bottom: 5%;
        }

        .ir-corp03-indicators {
            padding: 5%;
        }

        .ir-corp03-indicators button {
            font-size: 1rem;
            font-weight: 600;
            margin: 0.5%;
        }

        .ir-corp03-indicators button :hover {
            font-size: 1.5rem;
        }

        .ir-corp03-indicators button :active {
            font-size: 1.5rem;
        }

        .ir-corp03-next img {
            display: none;
        }

        .ir-corp03-prev img {
            display: none;
        }

        .ir-corp03-grid1 img {
            height: auto;
            /* width: 100vw; */
        }
    }

    /* ir-corp03-section  end*/



    .carousel {
        position: relative;
    }

    .carousel.pointer-event {
        touch-action: pan-y;
    }

    .carousel-inner {
        /* padding-top:0px; */
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .carousel-inner::after {
        display: block;
        clear: both;
        content: "";
    }

    .carousel-item {
        position: relative;
        display: none;
        float: left;
        width: 100%;
        margin-right: -100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        transition: transform 0.6s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-item {
            transition: none;
        }
    }

    .carousel-item-next,
    .carousel-item-prev,
    .carousel-item.active {
        display: block;
    }

    .active.carousel-item-end,
    .carousel-item-next:not(.carousel-item-start) {
        transform: translateX(100%);
    }

    .active.carousel-item-start,
    .carousel-item-prev:not(.carousel-item-end) {
        transform: translateX(-100%);
    }

    .carousel-fade .carousel-item {
        opacity: 0;
        transition-property: opacity;
        transform: none;
    }

    .carousel-fade .carousel-item-next.carousel-item-start,
    .carousel-fade .carousel-item-prev.carousel-item-end,
    .carousel-fade .carousel-item.active {
        z-index: 1;
        opacity: 1;
    }

    .carousel-fade .active.carousel-item-end,
    .carousel-fade .active.carousel-item-start {
        z-index: 0;
        opacity: 0;
        transition: opacity 0s 0.6s;
    }

    @media (prefers-reduced-motion: reduce) {

        .carousel-fade .active.carousel-item-end,
        .carousel-fade .active.carousel-item-start {
            transition: none;
        }
    }

    .carousel-control-next,
    .carousel-control-prev {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 15%;
        padding: 0;
        color: #fff;
        text-align: center;
        background: 0 0;
        border: 0;
        opacity: 0.5;
        transition: opacity 0.15s ease;
    }

    @media (prefers-reduced-motion: reduce) {

        .carousel-control-next,
        .carousel-control-prev {
            transition: none;
        }
    }

    .carousel-control-next:focus,
    .carousel-control-next:hover,
    .carousel-control-prev:focus,
    .carousel-control-prev:hover {
        color: #fff;
        text-decoration: none;
        outline: 0;
        opacity: 0.9;
    }

    .carousel-control-prev {
        left: 0;
    }

    .carousel-control-next {
        right: 0;
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        background-repeat: no-repeat;
        background-position: 50%;
        background-size: 100% 100%;
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 2;
        display: flex;
        justify-content: center;
        padding: 0;
        margin-right: 15%;
        /* margin-bottom: 1rem; */
        margin-left: 15%;
    }

    .carousel-indicators [data-bs-target] {
        box-sizing: content-box;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        padding: 0;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #fff;
        background-clip: padding-box;
        border: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        opacity: 0.5;
        transition: opacity 0.6s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .carousel-indicators [data-bs-target] {
            transition: none;
        }
    }

    .carousel-indicators .active {
        opacity: 1;
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 1.25rem;
        left: 15%;
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
        color: #fff;
        text-align: center;
    }

    .carousel-dark .carousel-control-next-icon,
    .carousel-dark .carousel-control-prev-icon {
        filter: invert(1) grayscale(100);
    }

    .carousel-dark .carousel-indicators [data-bs-target] {
        background-color: #000;
    }

    .carousel-dark .carousel-caption {
        color: #000;
    }

    [data-bs-theme="dark"] .carousel .carousel-control-next-icon,
    [data-bs-theme="dark"] .carousel .carousel-control-prev-icon,
    [data-bs-theme="dark"].carousel .carousel-control-next-icon,
    [data-bs-theme="dark"].carousel .carousel-control-prev-icon {
        filter: invert(1) grayscale(100);
    }

    [data-bs-theme="dark"] .carousel .carousel-indicators [data-bs-target],
    [data-bs-theme="dark"].carousel .carousel-indicators [data-bs-target] {
        background-color: #000;
    }

    [data-bs-theme="dark"] .carousel .carousel-caption,
    [data-bs-theme="dark"].carousel .carousel-caption {
        color: #000;
    }
</style>

<section class="ir-corp03-section">
<div class="container-fluid">

    <!-- Carousel -->
    <div id="demo" class="carousel slide ir-corp03-con" data-bs-ride="carousel">

        <!-- Indicators/dots -->

        <div class="ir-corp03-indicators">

            <button data-bs-target="#demo" data-bs-slide-to="0" class="active">1991</button>
            <button data-bs-target="#demo" data-bs-slide-to="1">2003</button>
            <button data-bs-target="#demo" data-bs-slide-to="2">2004</button>
            <button data-bs-target="#demo" data-bs-slide-to="3">2008</button>
            <button data-bs-target="#demo" data-bs-slide-to="4">2011</button>
            <button data-bs-target="#demo" data-bs-slide-to="5">2012</button>
            <button data-bs-target="#demo" data-bs-slide-to="6">2014</button>
            <button data-bs-target="#demo" data-bs-slide-to="7">2016</button>
            <button data-bs-target="#demo" data-bs-slide-to="8">2019</button>
            <button data-bs-target="#demo" data-bs-slide-to="9">2020</button>
            <button data-bs-target="#demo" data-bs-slide-to="10">2021</button>
            <button data-bs-target="#demo" data-bs-slide-to="11">2022</button>

        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="ir-corp03-grid1 col  "><img
                            src="<?php echo BASE_URL; ?>assets/img/ir-corp/company history 1991.jpg" alt=""></div>
                    <div class="ir-corp03-grid2 col  " style="margin-left: 100px;">
                        <h1>1991</h1>
                        <p>C.M. Organizer Co., Ltd. was established to provide an Event Management Service. The company
                            was truly one of the pioneers in such business in Thailand.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="ir-corp03-grid1 col  "><img
                            src="<?php echo BASE_URL; ?>assets/img/ir-corp/company history 2003.jpg" alt=""></div>
                    <div class="ir-corp03-grid2 col  " style="margin-left: 100px;">
                        <h1>2003</h1>
                        <p>The Company Group had radically changed its funding structure and shareholding for a
                            preparation to register in Market for Alternative Investment (or “MAI”). The registered
                            capital was increased from Baht 8 million to Baht 59 million and Baht 150 million
                            respectively. In addition, the shareholding structure was also changed in which the company
                            held the shares of "PM" and "The Eyes" for 99.997% and 99.84% respectively. S.Cubic Co.,
                            Ltd. became the large shareholder of the Company Group. C.M. Organizer Co., Ltd. was
                            transformed into a public company limited and renamed "C.M. Organizer Public Company
                            Limited"</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="ir-corp03-grid1 col  "><img
                            src="<?php echo BASE_URL; ?>assets/img/ir-corp/company history 2004.jpg" alt=""></div>
                    <div class="ir-corp03-grid2 col  " style="margin-left: 100px;">
                        <h1>2004</h1>
                        <p>PM Center‘s capital structure has radically changed from Baht 39.90 Million to Baht 135
                            Million of paid up capital which CM Organizer held the shares of “PM” for 99.99% and
                            increased capital paid for the Eyes from Baht 5 Million to Baht15 Million which held the
                            shares of “the eyes” for 99.95%</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="ir-corp03-grid1 col  "><img
                            src="<?php echo BASE_URL; ?>assets/img/ir-corp/company history 2008.jpg" alt=""></div>
                    <div class="ir-corp03-grid2 col  " style="margin-left: 100px;">
                        <h1>2008</h1>
                        <p>The Company has expanded a new business in line of Utility Service Provider by held the share
                            of Exposition Technology Company Limited for 40%. Moreover, CMO Group has a great successful
                            of Thai Pavilion to stand up front of 102 countries with Silver Award in Theme and
                            Conception from Bureau International des Expositions : BIE in World Water Exposition 2008 “
                            Expo Zaragoza 2008”, Zaragoza, Spain.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="ir-corp03-grid1 col  "><img
                            src="<?php echo BASE_URL; ?>assets/img/ir-corp/company history 2011.jpg" alt=""></div>
                    <div class="ir-corp03-grid2 col  " style="margin-left: 100px;">
                        <h1>2011</h1>
                        <p>The Company had change company name to “CMO Public Company Limited” To prepare for an
                            explanation to new business and new market both in bound and out bound, AEC market.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="ir-corp03-grid1 col  "><img
                            src="<?php echo BASE_URL; ?>assets/img/ir-corp/company history 2012.jpg" alt=""></div>
                    <div class="ir-corp03-grid2 col  " style="margin-left: 100px;">
                        <h1>2012</h1>
                        <p>The Company was increased the company’s register capital from Baht 150 million to Baht 222.5
                            million by issuing 72.5 newly ordinary million shares to reserve for the payment of stock
                            dividend amounted 37.5 million shares, the exercise of warrants amounted 30 million shares
                            and the exercise of ESOP-warrants amounted 5 million shares. This increase was principal
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="ir-corp03-grid1 col  "><img
                            src="<?php echo BASE_URL; ?>assets/img/ir-corp/company history 2014.jpg" alt=""></div>
                    <div class="ir-corp03-grid2 col  " style="margin-left: 100px;">
                        <h1>2014</h1>
                        <p>CMO Group moved to “Bangkok Creative Playground”. This is the great synergy of people and
                            potential of business to be recognize in wide range of clients, partner and suppliers.</p>
                        <p>The Company has expanded the investment for opening the new subsidiaries, Momentum S Co.,Ltd
                            provides Private Life Style Event Service that the company held the shares 60%</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="ir-corp03-grid1 col  "><img
                            src="<?php echo BASE_URL; ?>assets/img/ir-corp/company history 2016.jpg" alt=""></div>
                    <div class="ir-corp03-grid2 col  " style="margin-left: 100px;">
                        <h1>2016</h1>
                        <p>The Company has paid-up capital to 255,462,733 baht by offering to the existing shareholders.
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="ir-corp03-grid1 col  "><img
                            src="<?php echo BASE_URL; ?>assets/img/ir-corp/company history 2019.jpg" alt=""></div>
                    <div class="ir-corp03-grid2 col  " style="margin-left: 100px;">
                        <h1>2019</h1>
                        <p>The Company operates and manages existing units for continued growth in order to generate
                            increased profit. Simultaneously, the Company prepares plans to expand the organization of
                            meetings, seminars as well as international conferences including MICE Business. Due to the
                            growing trend of meeting organization and the conformity to the MICE industry of Thailand
                            ranking at the 4th of Asia in international meetings. Thus, it was the year that the Company
                            was designated to organize the 12th Asia Pacific Heart Rhythm Society Scientific Session
                            (APHRS 2019 hosted by Thailand on 24-27 October 2019. This conference was attended by over
                            3,500 cardiologists worldwide. It was considered a major conference of cardiologists of
                            Thailand signifying globally the potential of Thailand in hosting such conference and also
                            promoting MICE industry of Thailand. </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="ir-corp03-grid1 col  "><img
                            src="<?php echo BASE_URL; ?>assets/img/ir-corp/company history 2020.jpg" alt=""></div>
                    <div class="ir-corp03-grid2 col  " style="margin-left: 100px;">
                        <h1>2020</h1>
                        <p>It was a challenging year for the Company’s business operation due to the Covid-19 pandemic,
                            which impacted event business. It was the worst crisis ever in 30 years since the beginning
                            of the event industry. The Company immediately adjusted its marketing strategy by launching
                            three integrated streaming studios with a variety of scales, complete with lighting and
                            sound system as well a Live Streaming system to serve all kinds of digital events, namely,
                            product launches, sales representative meetings, international academic meeting, seminar,
                            entertainment and concert, fan meeting, etc. The studios were launched in May. </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="ir-corp03-grid1 col  "><img
                            src="<?php echo BASE_URL; ?>assets/img/ir-corp/company history 2021.jpg" alt=""></div>
                    <div class="ir-corp03-grid2 col  " style="margin-left: 100px;">
                        <h1>2021</h1>
                        <p>The CMO group has changed its major shareholder structure from Mr. Sermkhun Kunawong to Mr.
                            Kitisak Jampathipphong. We aim to be a high-growth company by changing our business and
                            management structure as well
                            as rebranding to maintain the number one in Event Management Service. Moreover, CMO
                            increases the Streaming Studio Service both online and digital service and brings new
                            technology to integrate with the event to offer the best experience to customers.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="ir-corp03-grid1 col  "><img
                            src="<?php echo BASE_URL; ?>assets/img/ir-corp/company history 2022.jpg" alt=""></div>
                    <div class="ir-corp03-grid2 col  " style="margin-left: 100px;">
                        <h1>2022</h1>
                        <p>CMO rebranded and changed the organizational structure to a new management team under leading
                            by Mr. Kitisak Jampathipphong. In the new concept “EXPERIENCE-TECH CREATOR” that defines to
                            new strategies “5 Elements (5E)” as the core business – EVENT and EQUIPMENT and new business
                            - ENTERTAINMENT, END-TO-END 2.0 and EXPERIENCE 3.0.</p>
                        <p>Issuance and offering of the newly-issued convertible debentures of the Company in the total
                            value of not exceeding THB 500,000,000 (the “Convertible Debentures”) by way of Private
                            Placement specifically to Advance Opportunities (AO Fund) and Advance Opportunities 1 (AO
                            Fund 1)</p>
                        <p>The Company decided to stop the theme park which operate by CM Live Co., Ltd. (Previous name
                            “Imaginia Co., Ltd.”). Changing the business model to Entertainment – entertainment and
                            concert.</p>
                        <p>Establishing subsidiary “CM Lab Co., Ltd.” for operate creative & management advertising and
                            marketing activities including event organizing, seminar, media production and event
                            structure production. It has registered capital THB 2,000,000, equivalent to 20,000 ordinary
                            shares, with par value of THB 100 per share. CMO invested in amount of THB 1,520,000 or 76
                            percentage of the total registered capital.</p>
                        <p>Appointing Mr. Ariya Banomyong to be a Co - Chief Executive Officer, effective on February
                            24, 2022.</p>
                        <p>Increasing of the registered capital of the Company in the amount of THB 25,000,000 from the
                            original registered capital with the amount of THB 330,898,577, representing registered
                            capital of THB 356,398,577 to Private Fund by Krungthai XSpring Company Limited (“Private
                            Fund KTX”) at the offering price of THB 6 per share in the total amount of THB 153,000,000.
                            The newly – issued ordinary share was paid by Private Fund KTX on June 2, 2022. Also, the
                            Company completed the registration of the increase in the Company’s paid-up capital from THB
                            255,462,733 to THB 280,962,733 at par value of THB 1 per share with the Department of
                            Business Development, Ministry of Commerce on June 6, 2022.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev ir-corp03-prev  " t type="button" data-bs-target="#demo"
            data-bs-slide="prev">
            <img src="<?php echo BASE_URL; ?>assets/img/ir-corp/button left.png" alt="">
        </button>
        <button class="carousel-control-next ir-corp03-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <img src="<?php echo BASE_URL; ?>assets/img/ir-corp/button right.png" alt="">
        </button>
    </div>

    <!-- <div class="ir-corp03-con">





    <div class="row">
        <div class="ir-corp03-grid1 col  "><img src="<?php echo BASE_URL; ?>assets/img/ir-corp/company history 1991.jpg" alt=""></div>
        <div class="ir-corp03-grid2 col  ">
            <h1>1991</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id distinctio repellat iste cumque libero vero debitis, beatae tempore sed nihil? Deleniti odit quidem temporibus facilis reiciendis error laborum soluta debitis?</p>
        </div>
    </div>

</div> -->

</div>

</section>