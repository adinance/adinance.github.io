<style>
    .section.awards {
        padding-top: 2rem;
        padding-bottom: 7rem
    }

    @media (max-width:767.98px) {
        .section.awards {
            margin-top: 0;
            padding: 3rem 0
        }
    }

    .card-awards {
        display: flex;
        flex-flow: row wrap;
        margin-left: -15px;
        margin-right: -15px
    }

    .card-awards .card {
        flex-grow: 1;
        flex-shrink: 0;
        margin-left: 15px;
        margin-right: 15px
    }

    @media (min-width:0) {

        .card-awards .card,
        .card-awards.card-awards--four .card,
        .card-awards.card-awards--one .card,
        .card-awards.card-awards--three .card,
        .card-awards.card-awards--two-award .card,
        .card-awards.card-awards--two .card {
            flex-basis: calc(100% - 30px);
            flex: 0 0 calc(100% - 30px);
            max-width: calc(100% - 30px)
        }
    }

    @media (min-width:576px) {

        .card-awards .card,
        .card-awards.card-awards--four .card,
        .card-awards.card-awards--one .card,
        .card-awards.card-awards--three .card,
        .card-awards.card-awards--two-award .card,
        .card-awards.card-awards--two .card {
            flex-basis: calc(100% - 30px);
            flex: 0 0 calc(100% - 30px);
            max-width: calc(100% - 30px)
        }
    }

    @media (min-width:768px) {
        .card-awards .card {
            flex-basis: calc(50% - 30px);
            flex: 0 0 calc(50% - 30px);
            max-width: calc(50% - 30px)
        }

        .card-awards.card-awards--one .card {
            flex-basis: calc(100% - 30px);
            flex: 0 0 calc(100% - 30px);
            max-width: calc(100% - 30px)
        }

        .card-awards.card-awards--two .card {
            flex-basis: calc(50% - 30px);
            flex: 0 0 calc(50% - 30px);
            max-width: calc(50% - 30px)
        }

        .card-awards.card-awards--two-award .card {
            flex-basis: calc(100% - 30px);
            flex: 0 0 calc(100% - 30px);
            max-width: calc(100% - 30px)
        }

        .card-awards.card-awards--four .card,
        .card-awards.card-awards--three .card {
            flex-basis: calc(50% - 30px);
            flex: 0 0 calc(50% - 30px);
            max-width: calc(50% - 30px)
        }
    }

    @media (min-width:992px) {
        .card-awards .card {
            flex-basis: calc(50% - 30px);
            flex: 0 0 calc(50% - 30px);
            max-width: calc(50% - 30px)
        }

        .card-awards.card-awards--one .card {
            flex-basis: calc(100% - 30px);
            flex: 0 0 calc(100% - 30px);
            max-width: calc(100% - 30px)
        }

        .card-awards.card-awards--two .card {
            flex-basis: calc(50% - 30px);
            flex: 0 0 calc(50% - 30px);
            max-width: calc(50% - 30px)
        }

        .card-awards.card-awards--two-award .card {
            flex-basis: calc(100% - 30px);
            flex: 0 0 calc(100% - 30px);
            max-width: calc(100% - 30px)
        }

        .card-awards.card-awards--three .card {
            flex-basis: calc(50% - 30px);
            flex: 0 0 calc(50% - 30px);
            max-width: calc(50% - 30px)
        }

        .card-awards.card-awards--four .card {
            flex-basis: calc(33.33333% - 30px);
            flex: 0 0 calc(33.33333% - 30px);
            max-width: calc(33.33333% - 30px)
        }
    }

    @media (min-width:1200px) {
        .card-awards .card {
            flex-basis: calc(25% - 30px);
            flex: 0 0 calc(25% - 30px);
            max-width: calc(25% - 30px)
        }

        .card-awards.card-awards--one .card {
            flex-basis: calc(100% - 30px);
            flex: 0 0 calc(100% - 30px);
            max-width: calc(100% - 30px)
        }

        .card-awards.card-awards--two-award .card,
        .card-awards.card-awards--two .card {
            flex-basis: calc(50% - 30px);
            flex: 0 0 calc(50% - 30px);
            max-width: calc(50% - 30px)
        }

        .card-awards.card-awards--three .card {
            flex-basis: calc(33.33333% - 30px);
            flex: 0 0 calc(33.33333% - 30px);
            max-width: calc(33.33333% - 30px)
        }

        .card-awards.card-awards--four .card {
            flex-basis: calc(25% - 30px);
            flex: 0 0 calc(25% - 30px);
            max-width: calc(25% - 30px)
        }
    }

    @media (min-width:1540px) {
        .card-awards .card {
            flex-basis: calc(25% - 30px);
            flex: 0 0 calc(25% - 30px);
            max-width: calc(25% - 30px)
        }

        .card-awards.card-awards--one .card {
            flex-basis: calc(100% - 30px);
            flex: 0 0 calc(100% - 30px);
            max-width: calc(100% - 30px)
        }

        .card-awards.card-awards--two-award .card,
        .card-awards.card-awards--two .card {
            flex-basis: calc(50% - 30px);
            flex: 0 0 calc(50% - 30px);
            max-width: calc(50% - 30px)
        }

        .card-awards.card-awards--three .card {
            flex-basis: calc(33.33333% - 30px);
            flex: 0 0 calc(33.33333% - 30px);
            max-width: calc(33.33333% - 30px)
        }

        .card-awards.card-awards--four .card {
            flex-basis: calc(25% - 30px);
            flex: 0 0 calc(25% - 30px);
            max-width: calc(25% - 30px)
        }
    }


    html[lang=en] .card-list .card-info {
        font-size: .875rem
    }

    html[lang=th] .card-list .card-info {
        font-size: 1rem
    }

    .card-list .card-item {
        display: flex;
        flex-direction: row;
        /* height: 100%; */
        height: 220px;
        background: #fff;
        box-shadow: 10px 10px 30px rgba(0, 0, 0, .1);
        margin-bottom: 30px
    }

    @media (max-width:767.98px) {
        .card-list .card-item {
            flex-direction: column;
            text-align: center;
            padding: 15px;
            align-items: center
        }
    }

    .card-list .card-image {
        position: relative;
        width: 220px;
        height: 220px
    }

    .card-list .card-image>img {
        object-fit: cover;
        object-position: center;
        height: 100%
    }

    .card-list .card-image:after {
        content: "";
        position: absolute;
        right: -14px;
        top: 97px;
        display: inline-block;
        width: 0;
        height: 0;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        border-left: 15px solid #367bba
    }

    @media (max-width:767.98px) {
        .card-list .card-image:after {
            border: 0
        }
    }

    .card-list .card-info {
        padding: 15px 40px;
        position: relative;
        width: 100%;
        height: 100%
    }

    @media (max-width:767.98px) {
        .card-list .card-info {
            padding: 15px 20px
        }
    }

    .card-list .card-info .card-title {
        color: #367bba;
        border-bottom: 1px solid #367bba;
        padding-bottom: 15px
    }

    
</style>

<section class="section awards">
    <div class="container">
        <div class="card-awards card-awards--two-award">

            <div class="card card-list">
                <div class="card-item">
                    <div class="card-image">
                        <img src="<?php echo BASE_URL . 'assets/img/awards-set-2010.jpg';?>" alt="SET">
                    </div>
                    <div class="card-info pb-3  mbr-fonts-style display-7">
                        <h6 class="card-title pb-3 mbr-fonts-style display-5">SET AWARDS 2010</h6>
                        <p>
                        Corporate Social Responsibility Award Company listed on MAI
                            <ul>
                                <li><strong>Institution: </strong> Stock Exchange of Thailand and Money &amp;Banking Magazine</li>
                            </ul>
                        </p>
                        
                    </div>
                </div>
            </div>

       

            <div class="card card-list">
                <div class="card-item">
                    <div class="card-image">
                        <img src="<?php echo BASE_URL . 'assets/img/awards-event-awards-e-m-governmental.jpg';?>" alt="SET">
                    </div>
                    <div class="card-info pb-3  mbr-fonts-style display-7">
                        <h6 class="card-title pb-3 mbr-fonts-style display-5">EVENT AWARD 2010</h6>
                        <p>The Power of below the line
                            <ul>
                                <li>E.M. Governmental award</li>
                            </ul>
                        </p>
                        
                    </div>
                </div>
            </div>

            <div class="card card-list">
                <div class="card-item">
                    <div class="card-image">
                        <img src="<?php echo BASE_URL . 'assets/img/awards-event-awards-the-best.jpg';?>" alt="SET">
                    </div>
                    <div class="card-info pb-3  mbr-fonts-style display-7">
                        <h6 class="card-title pb-3 mbr-fonts-style display-5">EVENT AWARD 2010</h6>
                        <p>The Power of below the line
                            <ul>
                                <li>The best event award</li>
                            </ul>
                        </p>
                        
                    </div>
                </div>
            </div>

            <div class="card card-list">
                <div class="card-item">
                    <div class="card-image">
                        <img src="<?php echo BASE_URL . 'assets/img/awards-boi-ptt.jpg';?>" alt="SET">
                    </div>
                    <div class="card-info pb-3  mbr-fonts-style display-7">
                        <h6 class="card-title pb-3 mbr-fonts-style display-5">Great Pavilion of BOI fair 2011</h6>
                        <p>“Going Green for the Future”
                            <ul>
                                <li>PTT Group Pavilion</li>
                            </ul>
                        </p>
                        
                    </div>
                </div>
            </div>

            <div class="card card-list">
                <div class="card-item">
                    <div class="card-image">
                        <img src="<?php echo BASE_URL . 'assets/img/awards-boi-honda.jpg';?>" alt="SET">
                    </div>
                    <div class="card-info pb-3  mbr-fonts-style display-7">
                        <h6 class="card-title pb-3 mbr-fonts-style display-5">Great Pavilion of BOI fair 2011</h6>
                        <p>“Going Green for the Future”
                            <ul>
                                <li>Honda Pavilion</li>
                            </ul>
                        </p>
                        
                    </div>
                </div>
            </div>

       

        </div>
    </div>
</section>