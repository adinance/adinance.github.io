<style>
    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }

    @media (min-width:576px) {
        .container {
            max-width: 540px
        }
    }

    @media (min-width:768px) {
        .container {
            max-width: 720px
        }
    }

    @media (min-width:992px) {
        .container {
            max-width: 960px
        }
    }

    @media (min-width:1200px) {
        .container {
            max-width: 1200px
        }
    }

    @media (min-width:1540px) {
        .container {
            max-width: 1440px
        }
    }

    .container-fluid,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl,
    .container-xxl {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }

    @media (min-width:576px) {

        .container,
        .container-sm {
            max-width: 540px
        }
    }

    @media (min-width:768px) {

        .container,
        .container-md,
        .container-sm {
            max-width: 720px
        }
    }

    @media (min-width:992px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm {
            max-width: 960px
        }
    }

    @media (min-width:1200px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 1200px
        }
    }

    @media (min-width:1540px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            max-width: 1440px
        }
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px
    }

    .no-gutters {
        margin-right: 0;
        margin-left: 0
    }

    .no-gutters>.col,
    .no-gutters>[class*=col-] {
        padding-right: 0;
        padding-left: 0
    }

    .col,
    .col-1,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-10,
    .col-11,
    .col-12,
    .col-auto,
    .col-lg,
    .col-lg-1,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-auto,
    .col-md,
    .col-md-1,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-auto,
    .col-sm,
    .col-sm-1,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-auto,
    .col-xl,
    .col-xl-1,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl-auto,
    .col-xxl,
    .col-xxl-1,
    .col-xxl-2,
    .col-xxl-3,
    .col-xxl-4,
    .col-xxl-5,
    .col-xxl-6,
    .col-xxl-7,
    .col-xxl-8,
    .col-xxl-9,
    .col-xxl-10,
    .col-xxl-11,
    .col-xxl-12,
    .col-xxl-auto {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px
    }

    .col {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%
    }

    .row-cols-1>* {
        flex: 0 0 100%;
        max-width: 100%
    }

    .row-cols-2>* {
        flex: 0 0 50%;
        max-width: 50%
    }

    .row-cols-3>* {
        flex: 0 0 33.33333%;
        max-width: 33.33333%
    }

    .row-cols-4>* {
        flex: 0 0 25%;
        max-width: 25%
    }

    .row-cols-5>* {
        flex: 0 0 20%;
        max-width: 20%
    }

    .row-cols-6>* {
        flex: 0 0 16.66667%;
        max-width: 16.66667%
    }

    .col-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%
    }

    .col-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%
    }

    .col-3 {
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%
    }

    .col-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%
    }

    .col-6 {
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%
    }

    .col-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%
    }

    .col-9 {
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%
    }

    .col-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%
    }

    .col-12 {
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-first {
        order: -1
    }

    .order-last {
        order: 13
    }

    .order-0 {
        order: 0
    }

    .order-1 {
        order: 1
    }

    .order-2 {
        order: 2
    }

    .order-3 {
        order: 3
    }

    .order-4 {
        order: 4
    }

    .order-5 {
        order: 5
    }

    .order-6 {
        order: 6
    }

    .order-7 {
        order: 7
    }

    .order-8 {
        order: 8
    }

    .order-9 {
        order: 9
    }

    .order-10 {
        order: 10
    }

    .order-11 {
        order: 11
    }

    .order-12 {
        order: 12
    }

    .offset-1 {
        margin-left: 8.33333%
    }

    .offset-2 {
        margin-left: 16.66667%
    }

    .offset-3 {
        margin-left: 25%
    }

    .offset-4 {
        margin-left: 33.33333%
    }

    .offset-5 {
        margin-left: 41.66667%
    }

    .offset-6 {
        margin-left: 50%
    }

    .offset-7 {
        margin-left: 58.33333%
    }

    .offset-8 {
        margin-left: 66.66667%
    }

    .offset-9 {
        margin-left: 75%
    }

    .offset-10 {
        margin-left: 83.33333%
    }

    .offset-11 {
        margin-left: 91.66667%
    }

    @media (min-width:576px) {
        .col-sm {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }

        .row-cols-sm-1>* {
            flex: 0 0 100%;
            max-width: 100%
        }

        .row-cols-sm-2>* {
            flex: 0 0 50%;
            max-width: 50%
        }

        .row-cols-sm-3>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .row-cols-sm-4>* {
            flex: 0 0 25%;
            max-width: 25%
        }

        .row-cols-sm-5>* {
            flex: 0 0 20%;
            max-width: 20%
        }

        .row-cols-sm-6>* {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-sm-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-sm-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%
        }

        .col-sm-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-sm-3 {
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-sm-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .col-sm-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%
        }

        .col-sm-6 {
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-sm-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%
        }

        .col-sm-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%
        }

        .col-sm-9 {
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-sm-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%
        }

        .col-sm-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%
        }

        .col-sm-12 {
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-sm-first {
            order: -1
        }

        .order-sm-last {
            order: 13
        }

        .order-sm-0 {
            order: 0
        }

        .order-sm-1 {
            order: 1
        }

        .order-sm-2 {
            order: 2
        }

        .order-sm-3 {
            order: 3
        }

        .order-sm-4 {
            order: 4
        }

        .order-sm-5 {
            order: 5
        }

        .order-sm-6 {
            order: 6
        }

        .order-sm-7 {
            order: 7
        }

        .order-sm-8 {
            order: 8
        }

        .order-sm-9 {
            order: 9
        }

        .order-sm-10 {
            order: 10
        }

        .order-sm-11 {
            order: 11
        }

        .order-sm-12 {
            order: 12
        }

        .offset-sm-0 {
            margin-left: 0
        }

        .offset-sm-1 {
            margin-left: 8.33333%
        }

        .offset-sm-2 {
            margin-left: 16.66667%
        }

        .offset-sm-3 {
            margin-left: 25%
        }

        .offset-sm-4 {
            margin-left: 33.33333%
        }

        .offset-sm-5 {
            margin-left: 41.66667%
        }

        .offset-sm-6 {
            margin-left: 50%
        }

        .offset-sm-7 {
            margin-left: 58.33333%
        }

        .offset-sm-8 {
            margin-left: 66.66667%
        }

        .offset-sm-9 {
            margin-left: 75%
        }

        .offset-sm-10 {
            margin-left: 83.33333%
        }

        .offset-sm-11 {
            margin-left: 91.66667%
        }
    }

    @media (min-width:768px) {
        .col-md {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }

        .row-cols-md-1>* {
            flex: 0 0 100%;
            max-width: 100%
        }

        .row-cols-md-2>* {
            flex: 0 0 50%;
            max-width: 50%
        }

        .row-cols-md-3>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .row-cols-md-4>* {
            flex: 0 0 25%;
            max-width: 25%
        }

        .row-cols-md-5>* {
            flex: 0 0 20%;
            max-width: 20%
        }

        .row-cols-md-6>* {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-md-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-md-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%
        }

        .col-md-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-md-3 {
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-md-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .col-md-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%
        }

        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-md-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%
        }

        .col-md-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%
        }

        .col-md-9 {
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-md-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%
        }

        .col-md-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%
        }

        .col-md-12 {
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-md-first {
            order: -1
        }

        .order-md-last {
            order: 13
        }

        .order-md-0 {
            order: 0
        }

        .order-md-1 {
            order: 1
        }

        .order-md-2 {
            order: 2
        }

        .order-md-3 {
            order: 3
        }

        .order-md-4 {
            order: 4
        }

        .order-md-5 {
            order: 5
        }

        .order-md-6 {
            order: 6
        }

        .order-md-7 {
            order: 7
        }

        .order-md-8 {
            order: 8
        }

        .order-md-9 {
            order: 9
        }

        .order-md-10 {
            order: 10
        }

        .order-md-11 {
            order: 11
        }

        .order-md-12 {
            order: 12
        }

        .offset-md-0 {
            margin-left: 0
        }

        .offset-md-1 {
            margin-left: 8.33333%
        }

        .offset-md-2 {
            margin-left: 16.66667%
        }

        .offset-md-3 {
            margin-left: 25%
        }

        .offset-md-4 {
            margin-left: 33.33333%
        }

        .offset-md-5 {
            margin-left: 41.66667%
        }

        .offset-md-6 {
            margin-left: 50%
        }

        .offset-md-7 {
            margin-left: 58.33333%
        }

        .offset-md-8 {
            margin-left: 66.66667%
        }

        .offset-md-9 {
            margin-left: 75%
        }

        .offset-md-10 {
            margin-left: 83.33333%
        }

        .offset-md-11 {
            margin-left: 91.66667%
        }
    }

    @media (min-width:992px) {
        .col-lg {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }

        .row-cols-lg-1>* {
            flex: 0 0 100%;
            max-width: 100%
        }

        .row-cols-lg-2>* {
            flex: 0 0 50%;
            max-width: 50%
        }

        .row-cols-lg-3>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .row-cols-lg-4>* {
            flex: 0 0 25%;
            max-width: 25%
        }

        .row-cols-lg-5>* {
            flex: 0 0 20%;
            max-width: 20%
        }

        .row-cols-lg-6>* {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-lg-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-lg-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%
        }

        .col-lg-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-lg-3 {
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-lg-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .col-lg-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%
        }

        .col-lg-6 {
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-lg-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%
        }

        .col-lg-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%
        }

        .col-lg-9 {
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-lg-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%
        }

        .col-lg-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%
        }

        .col-lg-12 {
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-lg-first {
            order: -1
        }

        .order-lg-last {
            order: 13
        }

        .order-lg-0 {
            order: 0
        }

        .order-lg-1 {
            order: 1
        }

        .order-lg-2 {
            order: 2
        }

        .order-lg-3 {
            order: 3
        }

        .order-lg-4 {
            order: 4
        }

        .order-lg-5 {
            order: 5
        }

        .order-lg-6 {
            order: 6
        }

        .order-lg-7 {
            order: 7
        }

        .order-lg-8 {
            order: 8
        }

        .order-lg-9 {
            order: 9
        }

        .order-lg-10 {
            order: 10
        }

        .order-lg-11 {
            order: 11
        }

        .order-lg-12 {
            order: 12
        }

        .offset-lg-0 {
            margin-left: 0
        }

        .offset-lg-1 {
            margin-left: 8.33333%
        }

        .offset-lg-2 {
            margin-left: 16.66667%
        }

        .offset-lg-3 {
            margin-left: 25%
        }

        .offset-lg-4 {
            margin-left: 33.33333%
        }

        .offset-lg-5 {
            margin-left: 41.66667%
        }

        .offset-lg-6 {
            margin-left: 50%
        }

        .offset-lg-7 {
            margin-left: 58.33333%
        }

        .offset-lg-8 {
            margin-left: 66.66667%
        }

        .offset-lg-9 {
            margin-left: 75%
        }

        .offset-lg-10 {
            margin-left: 83.33333%
        }

        .offset-lg-11 {
            margin-left: 91.66667%
        }
    }

    @media (min-width:1200px) {
        .col-xl {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }

        .row-cols-xl-1>* {
            flex: 0 0 100%;
            max-width: 100%
        }

        .row-cols-xl-2>* {
            flex: 0 0 50%;
            max-width: 50%
        }

        .row-cols-xl-3>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .row-cols-xl-4>* {
            flex: 0 0 25%;
            max-width: 25%
        }

        .row-cols-xl-5>* {
            flex: 0 0 20%;
            max-width: 20%
        }

        .row-cols-xl-6>* {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-xl-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-xl-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%
        }

        .col-xl-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-xl-3 {
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-xl-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .col-xl-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%
        }

        .col-xl-6 {
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-xl-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%
        }

        .col-xl-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%
        }

        .col-xl-9 {
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-xl-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%
        }

        .col-xl-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%
        }

        .col-xl-12 {
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-xl-first {
            order: -1
        }

        .order-xl-last {
            order: 13
        }

        .order-xl-0 {
            order: 0
        }

        .order-xl-1 {
            order: 1
        }

        .order-xl-2 {
            order: 2
        }

        .order-xl-3 {
            order: 3
        }

        .order-xl-4 {
            order: 4
        }

        .order-xl-5 {
            order: 5
        }

        .order-xl-6 {
            order: 6
        }

        .order-xl-7 {
            order: 7
        }

        .order-xl-8 {
            order: 8
        }

        .order-xl-9 {
            order: 9
        }

        .order-xl-10 {
            order: 10
        }

        .order-xl-11 {
            order: 11
        }

        .order-xl-12 {
            order: 12
        }

        .offset-xl-0 {
            margin-left: 0
        }

        .offset-xl-1 {
            margin-left: 8.33333%
        }

        .offset-xl-2 {
            margin-left: 16.66667%
        }

        .offset-xl-3 {
            margin-left: 25%
        }

        .offset-xl-4 {
            margin-left: 33.33333%
        }

        .offset-xl-5 {
            margin-left: 41.66667%
        }

        .offset-xl-6 {
            margin-left: 50%
        }

        .offset-xl-7 {
            margin-left: 58.33333%
        }

        .offset-xl-8 {
            margin-left: 66.66667%
        }

        .offset-xl-9 {
            margin-left: 75%
        }

        .offset-xl-10 {
            margin-left: 83.33333%
        }

        .offset-xl-11 {
            margin-left: 91.66667%
        }
    }

    @media (min-width:1540px) {
        .col-xxl {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }

        .row-cols-xxl-1>* {
            flex: 0 0 100%;
            max-width: 100%
        }

        .row-cols-xxl-2>* {
            flex: 0 0 50%;
            max-width: 50%
        }

        .row-cols-xxl-3>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .row-cols-xxl-4>* {
            flex: 0 0 25%;
            max-width: 25%
        }

        .row-cols-xxl-5>* {
            flex: 0 0 20%;
            max-width: 20%
        }

        .row-cols-xxl-6>* {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-xxl-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-xxl-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%
        }

        .col-xxl-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-xxl-3 {
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-xxl-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .col-xxl-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%
        }

        .col-xxl-6 {
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-xxl-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%
        }

        .col-xxl-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%
        }

        .col-xxl-9 {
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-xxl-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%
        }

        .col-xxl-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%
        }

        .col-xxl-12 {
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-xxl-first {
            order: -1
        }

        .order-xxl-last {
            order: 13
        }

        .order-xxl-0 {
            order: 0
        }

        .order-xxl-1 {
            order: 1
        }

        .order-xxl-2 {
            order: 2
        }

        .order-xxl-3 {
            order: 3
        }

        .order-xxl-4 {
            order: 4
        }

        .order-xxl-5 {
            order: 5
        }

        .order-xxl-6 {
            order: 6
        }

        .order-xxl-7 {
            order: 7
        }

        .order-xxl-8 {
            order: 8
        }

        .order-xxl-9 {
            order: 9
        }

        .order-xxl-10 {
            order: 10
        }

        .order-xxl-11 {
            order: 11
        }

        .order-xxl-12 {
            order: 12
        }

        .offset-xxl-0 {
            margin-left: 0
        }

        .offset-xxl-1 {
            margin-left: 8.33333%
        }

        .offset-xxl-2 {
            margin-left: 16.66667%
        }

        .offset-xxl-3 {
            margin-left: 25%
        }

        .offset-xxl-4 {
            margin-left: 33.33333%
        }

        .offset-xxl-5 {
            margin-left: 41.66667%
        }

        .offset-xxl-6 {
            margin-left: 50%
        }

        .offset-xxl-7 {
            margin-left: 58.33333%
        }

        .offset-xxl-8 {
            margin-left: 66.66667%
        }

        .offset-xxl-9 {
            margin-left: 75%
        }

        .offset-xxl-10 {
            margin-left: 83.33333%
        }

        .offset-xxl-11 {
            margin-left: 91.66667%
        }
    }

    .bg-black {
        background-color: #000 !important
    }

    .bg-black-2 {
        background-color: #232323 !important
    }

    .bg-white {
        background-color: #fff !important
    }

    .bg-darkblue {
        background-color: #001f53 !important
    }

    .bg-blue {
        background-color: #00afe4 !important
    }

    .bg-lightblue {
        background-color: #e5f7fc !important
    }

    .bg-silver {
        background-color: #888d90 !important
    }

    .bg-lightsilver {
        background-color: #a9aeb2 !important
    }

    .bg-lightsilver-2 {
        background-color: #b2b2b2 !important
    }

    .bg-darkgray {
        background-color: #707070 !important
    }

    .bg-gray {
        background-color: #ebebeb !important
    }

    .bg-lightgray {
        background-color: #fafafa !important
    }

    .bg-lightgray-2 {
        background-color: #ebebeb !important
    }

    .bg-lightgray-3 {
        background-color: #d1d1d1 !important
    }

    .bg-green {
        background-color: #0eb173 !important
    }

    .background-parallax {
        position: absolute;
        top: 0;
        left: 50%;
        z-index: -1;
        width: 100vmax;
        height: 68vmin;
        transform: translate(-50%);
        object-fit: cover;
        object-position: center;
        pointer-events: none
    }

    @media (max-width:575.98px) {
        .background-parallax {
            height: 250vmin
        }
    }

    .border-black {
        border-color: #000 !important
    }

    .border-black-2 {
        border-color: #232323 !important
    }

    .border-white {
        border-color: #fff !important
    }

    .border-darkblue {
        border-color: #001f53 !important
    }

    .border-blue {
        border-color: #00afe4 !important
    }

    .border-lightblue {
        border-color: #e5f7fc !important
    }

    .border-silver {
        border-color: #888d90 !important
    }

    .border-lightsilver {
        border-color: #a9aeb2 !important
    }

    .border-lightsilver-2 {
        border-color: #b2b2b2 !important
    }

    .border-darkgray {
        border-color: #707070 !important
    }

    .border-gray {
        border-color: #ebebeb !important
    }

    .border-lightgray {
        border-color: #fafafa !important
    }

    .border-lightgray-2 {
        border-color: #ebebeb !important
    }

    .border-lightgray-3 {
        border-color: #d1d1d1 !important
    }

    .border-green {
        border-color: #0eb173 !important
    }

    .text-black {
        color: #000 !important
    }

    .text-black-2 {
        color: #232323 !important
    }

    .text-white {
        color: #fff !important
    }

    .text-darkblue {
        color: #001f53 !important
    }

    .text-blue {
        color: #00afe4 !important
    }

    .text-lightblue {
        color: #e5f7fc !important
    }

    .text-silver {
        color: #888d90 !important
    }

    .text-lightsilver {
        color: #a9aeb2 !important
    }

    .text-lightsilver-2 {
        color: #b2b2b2 !important
    }

    .text-darkgray {
        color: #707070 !important
    }

    .text-gray {
        color: #ebebeb !important
    }

    .text-lightgray {
        color: #fafafa !important
    }

    .text-lightgray-2 {
        color: #ebebeb !important
    }

    .text-lightgray-3 {
        color: #d1d1d1 !important
    }

    .text-green {
        color: #0eb173 !important
    }

    a {
        color: #001f53
    }

    a:active,
    a:focus,
    a:hover {
        text-decoration: none;
        color: #00afe4
    }

    .link.link--readmore .icon {
        font-size: 10px
    }

    .link.link--readmore .icon:before {
        position: relative;
        left: 2px;
        transition: all .3s ease-in-out
    }

    .link.link--readmore:hover .icon {
        transform: translateX(15px)
    }

    .link.link--readmore:hover .icon:before {
        left: 7px
    }

    html[lang=en] body {
        font-family: Montserrat, sans-serif;
        font-size: 1rem;
        font-weight: 400
    }

    html[lang=en] .h1,
    html[lang=en] h1 {
        font-size: 3.75rem;
        font-weight: 700
    }

    html[lang=en] .h2,
    html[lang=en] h2 {
        font-size: 3.125rem;
        font-weight: 700
    }

    html[lang=en] .h3,
    html[lang=en] h3 {
        font-size: 2.5rem;
        font-weight: 700
    }

    html[lang=en] .h4,
    html[lang=en] h4 {
        font-size: 1.875rem;
        font-weight: 700
    }

    html[lang=en] .h5,
    html[lang=en] h5 {
        font-size: 1.25rem;
        font-weight: 700
    }

    html[lang=en] .h6,
    html[lang=en] h6 {
        font-size: 1.125rem;
        font-weight: 700
    }

    html[lang=en] .display-1 {
        font-size: 6rem;
        font-weight: 700
    }

    html[lang=en] .display-2 {
        font-size: 5.5rem;
        font-weight: 700
    }

    html[lang=en] .display-3 {
        font-size: 4.5rem;
        font-weight: 700
    }

    html[lang=en] .lead {
        font-size: 1.125rem
    }

    html[lang=th] body {
        font-family: Kanit, Tahoma, sans-serif;
        font-size: 1.125rem;
        font-weight: 300
    }

    html[lang=th] .h1,
    html[lang=th] h1 {
        font-size: 3.75rem;
        font-weight: 600
    }

    html[lang=th] .h2,
    html[lang=th] h2 {
        font-size: 3.125rem;
        font-weight: 600
    }

    html[lang=th] .h3,
    html[lang=th] h3 {
        font-size: 2.75rem;
        font-weight: 600
    }

    html[lang=th] .h4,
    html[lang=th] h4 {
        font-size: 2rem;
        font-weight: 600
    }

    html[lang=th] .h5,
    html[lang=th] h5 {
        font-size: 1.5rem;
        font-weight: 600
    }

    html[lang=th] .h6,
    html[lang=th] h6 {
        font-size: 1.25rem;
        font-weight: 600
    }

    html[lang=th] .display-1 {
        font-size: 6rem;
        font-weight: 600
    }

    html[lang=th] .display-2 {
        font-size: 5.5rem;
        font-weight: 600
    }

    html[lang=th] .display-3 {
        font-size: 4.5rem;
        font-weight: 600
    }

    html[lang=th] .lead {
        font-size: 1.25rem
    }

    .autocomplete:focus,
    .autocomplete:hover {
        outline: none;
        box-shadow: none
    }

    .autocomplete-suggestions {
        overflow-y: auto
    }

    .autocomplete-suggestion {
        padding: .25rem 1rem;
        border-bottom: 1px solid #eee;
        transition: background-color .3s ease-in-out;
        background-color: #fff;
        cursor: pointer
    }

    .autocomplete-selected,
    .autocomplete-suggestion:focus,
    .autocomplete-suggestion:hover {
        background-color: #eee
    }

    .modal--search .modal-content {
        border-radius: .5rem
    }

    .modal--search .modal-body {
        padding: 1rem
    }

    html[lang=en] .btn {
        font-size: 1rem;
        font-weight: 500
    }

    html[lang=th] .btn {
        font-size: 1.125rem;
        font-weight: 400
    }

    .btn {
        border: none;
        border-radius: 0;
        background-color: transparent;
        box-shadow: none;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease
    }

    .btn:active,
    .btn:focus,
    .btn:hover {
        outline: none
    }

    .btn:focus {
        box-shadow: none
    }

    .btn:disabled {
        cursor: not-allowed
    }

    html[lang=en] .btn.btn--primary {
        font-size: .875rem;
        font-weight: 500
    }

    html[lang=th] .btn.btn--primary {
        font-size: 1rem;
        font-weight: 400
    }

    .btn.btn--primary {
        position: relative;
        z-index: 1;
        display: inline-flex;
        min-width: 130px;
        padding: .65rem 1rem;
        overflow: hidden;
        color: #fff;
        text-align: center;
        background: #00afe4;
        border-radius: 23px;
        justify-content: center;
        align-items: center;
        -webkit-transition: width .5s ease-in-out;
        -moz-transition: .5s width ease-in-out;
        -ms-transition: .5s width ease-in-out;
        -o-transition: .5s width ease-in-out;
        transition: width .5s ease-in-out
    }

    .btn.btn--primary:after {
        content: "";
        position: absolute;
        top: 0;
        left: 50%;
        z-index: -1;
        display: block;
        width: 0;
        height: 100%;
        background: #fff;
        transform: translateX(-50%);
        transition: width .3s ease-in-out
    }

    .btn.btn--primary:hover {
        color: #00afe4
    }

    .btn.btn--primary:hover:after {
        width: 110%
    }

    html[lang=en] .btn.btn--primary-outline {
        font-size: .875rem;
        font-weight: 500
    }

    html[lang=th] .btn.btn--primary-outline {
        font-size: 1rem;
        font-weight: 400
    }

    .btn.btn--primary-outline {
        position: relative;
        z-index: 1;
        display: inline-flex;
        min-width: 130px;
        padding: .65rem 1rem;
        overflow: hidden;
        color: #00afe4;
        text-align: center;
        background: #fff;
        border: 1px solid #00afe4;
        border-radius: 23px;
        justify-content: center;
        align-items: center;
        -webkit-transition: width .5s ease-in-out;
        -moz-transition: .5s width ease-in-out;
        -ms-transition: .5s width ease-in-out;
        -o-transition: .5s width ease-in-out;
        transition: width .5s ease-in-out
    }

    .btn.btn--primary-outline:after {
        position: absolute;
        top: 0;
        left: 50%;
        z-index: -1;
        display: block;
        width: 0;
        height: 100%;
        background: #00afe4;
        transform: translateX(-50%);
        transition: width .3s ease-in-out;
        content: ""
    }

    .btn.btn--primary-outline:hover {
        color: #fff
    }

    .btn.btn--primary-outline:hover:after {
        width: 110%
    }

    

    html[lang=en] .card.card--event-home .card__date .date__top {
        font-size: 3.125rem;
        font-weight: 600
    }

    html[lang=en] .card.card--event-home .card__date .date__bottom {
        font-size: 1.125rem;
        font-weight: 400
    }

    html[lang=en] .card.card--event-home .card__detail {
        font-size: 1rem;
        font-weight: 400
    }

    html[lang=en] .card.card--event-home .card__icon .btn__title {
        font-size: .75rem;
        font-weight: 400
    }

    html[lang=th] .card.card--event-home .card__date .date__top {
        font-size: 3.125rem;
        font-weight: 500
    }

    html[lang=th] .card.card--event-home .card__date .date__bottom {
        font-size: 1.25rem;
        font-weight: 300
    }

    html[lang=th] .card.card--event-home .card__detail {
        font-size: 1.125rem;
        font-weight: 300
    }

    html[lang=th] .card.card--event-home .card__icon .btn__title {
        font-size: .875rem;
        font-weight: 300
    }

    .card--event-home {
        display: flex;
        flex-flow: row;
        margin: 2rem auto;
        box-shadow: 3px 3px 16px rgba(0, 0, 0, .27);
        width: 760px;
        min-height: 185px;
        border: none;
        border-radius: 0;
        background-image: url(/themes/default/assets/static/images/default/background-event.jpg);
        background-size: cover;
        background-position: 50%
    }

    @media (max-width:991.98px) {
        .card--event-home {
            width: 100%
        }
    }

    @media (max-width:767.98px) {
        .card--event-home {
            flex-flow: column;
            width: 100%;
            min-height: 390px
        }
    }

    .card--event-home .card__date {
        display: flex;
        padding: 50px 20px;
        background: #00afe4;
        color: #fff;
        align-items: center;
        line-height: 1;
        min-width: 155px;
        justify-content: center
    }

    .card--event-home .card__date:after {
        content: "";
        width: 0;
        height: 0;
        border-top: 14px solid transparent;
        border-bottom: 14px solid transparent;
        border-left: 14px solid #00afe4;
        position: relative;
        right: -33px
    }

    @media (max-width:767.98px) {
        .card--event-home .card__date {
            padding: 20px;
            justify-content: center
        }
    }

    .card--event-home .card__date .date {
        display: flex;
        flex-flow: column;
        color: #fff;
        text-align: center;
        padding: 0 5px;
        text-transform: uppercase;
        width: 100px
    }

    .card--event-home .card__date .date__bottom {
        text-transform: uppercase
    }

    .card--event-home .card__body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        padding: 40px;
        background-color: hsla(0, 0%, 100%, .9)
    }

    @media (max-width:767.98px) {
        .card--event-home .card__body {
            text-align: center;
            min-height: 230px
        }
    }

    .card--event-home .card__title {
        color: #001f53
    }

    .card--event-home .card__detail {
        color: #232323;
        font-size: .875rem
    }

    .card--event-home .card__icon {
        width: 200px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: hsla(0, 0%, 100%, .9)
    }

    @media (max-width:767.98px) {
        .card--event-home .card__icon {
            width: 100%
        }
    }

    .card--event-home .card__icon .btn {
        background: transparent;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: .75rem 20px .5rem;
        flex-direction: column
    }

    .card--event-home .card__icon .btn__title {
        padding: .1rem 1rem;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: .75rem
    }

    .card--event-home .card__icon .btn__icon {
        z-index: 5;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 26px;
        height: 26px;
        margin-bottom: .5rem
    }

    .card--event-home .card__icon .btn__img {
        max-width: 100%;
        width: 100%
    }

    html[lang=en] .card.card--performance .card__title {
        font-size: 2.5rem;
        font-weight: 600
    }

    @media (max-width:767.98px) {
        html[lang=en] .card.card--performance .card__title {
            font-size: 1.875rem
        }
    }

    html[lang=th] .card.card--performance .card__title {
        font-size: 2.75rem;
        font-weight: 500
    }

    @media (max-width:767.98px) {
        html[lang=th] .card.card--performance .card__title {
            font-size: 2rem
        }
    }

    .card.card--performance {
        width: 95%;
        height: auto;
        padding: 5rem 4rem;
        margin: 2rem auto 0;
        color: #fff;
        border: none;
        background-color: transparent;
        transition: all .4s ease-out
    }

    @media (min-width:1540px) {
        .card.card--performance {
            width: 80%
        }
    }

    @media (max-width:767.98px) {
        .card.card--performance {
            width: 100%;
            padding: 5rem 2rem;
            margin: 0 auto
        }
    }

    .card.card--performance .card__bg {
        position: absolute;
        z-index: 1;
        top: 0;
        bottom: 3rem;
        left: 3rem;
        right: 3rem;
        background-size: cover;
        background-position: 50%;
        transition: all .4s ease-out
    }

    .card.card--performance .card__body {
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 0 3rem 5rem;
        transition: all .4s ease-out
    }

    @media (max-width:767.98px) {
        .card.card--performance .card__body {
            padding: 0 1rem 2rem
        }
    }

    .card.card--performance .card__title {
        color: #fff;
        text-transform: uppercase
    }

    @media (max-width:767.98px) {
        .card.card--performance .card__title {
            padding: 0 0 2rem
        }
    }

    .card.card--performance .card__content {
        z-index: 2;
        width: 100%;
        padding: 55px 0;
        opacity: 0;
        transition: all .4s ease-out;
        transform: scaleY(0);
        transform-origin: bottom
    }

    .card.card--performance.active {
        width: 100%;
        height: auto
    }

    @media (max-width:991.98px) {
        .card.card--performance.active {
            height: auto
        }
    }

    .card.card--performance.active .card__bg,
    .card.card--performance.active .card__body {
        top: 0;
        bottom: 0;
        left: 0;
        right: 0
    }

    .card.card--performance.active .card__content {
        transform: scaleY(1);
        opacity: 1
    }

    html[lang=en] .card.card--video h3 {
        font-weight: 600
    }

    html[lang=th] .card.card--video h3 {
        font-weight: 500
    }

    .card.card--video {
        width: 95%;
        height: 110vh;
        padding: 3rem;
        margin: 2rem auto;
        border: none;
        background-color: transparent;
        color: #fff;
        transition: all .4s ease-out
    }

    @media (min-width:1540px) {
        .card.card--video {
            width: 50%;
            height: 65vh
        }
    }

    @media (max-width:767.98px) {
        .card.card--video {
            height: auto
        }
    }

    .card.card--video .card__bg {
        position: absolute;
        top: 3rem;
        right: 3rem;
        bottom: 3rem;
        left: 3rem;
        background-size: cover;
        transition: all .4s ease-out
    }

    .card.card--video .card__body {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: all .4s ease-out;
        padding: 3rem
    }

    .card.card--video .card__content {
        width: 100%;
        padding: 55px 0;
        transition: all .4s ease-out;
        transform: scaleY(0);
        opacity: 0;
        transform-origin: bottom
    }

    .card.card--video.active {
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0 auto;
        z-index: 9
    }

    .card.card--video.active .card__bg,
    .card.card--video.active .card__body {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0
    }

    .card.card--video.active .card__content {
        opacity: 1;
        transform: scaleY(1)
    }

    html[lang=en] .card--report .card__icon .icon {
        font-size: 3.125rem;
        font-weight: 600
    }

    html[lang=en] .card--report .card__title {
        font-size: 1.125rem;
        font-weight: 500
    }

    html[lang=th] .card--report .card__icon .icon {
        font-size: 3.125rem;
        font-weight: 500
    }

    html[lang=th] .card--report .card__title {
        font-size: 1.25rem;
        font-weight: 400
    }

    .card--report {
        position: relative;
        height: 230px;
        overflow: hidden;
        border: none;
        border-radius: 0 10px;
        transition: all .2s
    }

    @media (max-width:767.98px) {
        .card--report {
            margin-bottom: 1rem
        }
    }

    .card--report .card__body {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        color: #fff;
        text-align: center;
        background-repeat: no-repeat;
        background-size: cover
    }

    .card--report .card__icon {
        position: absolute;
        top: 75px;
        width: 100%;
        height: 350px;
        opacity: 1;
        text-align: center;
        transition: all .1s ease-in-out
    }

    .card--report .card__icon .card__img {
        background: -webkit-linear-gradient(45deg, #003f8a, #00d7df 52%, #006df0) 0 0 no-repeat;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent
    }

    .card--report .card__caption {
        position: absolute;
        bottom: -30px;
        width: 100%;
        height: 100px;
        padding: 0 1rem;
        transition: all .5s ease-out
    }

    @media (max-width:767.98px) {
        .card--report .card__caption {
            padding: 0 5rem
        }
    }

    @media (max-width:575.98px) {
        .card--report .card__caption {
            padding: 0 4rem
        }
    }

    .card--report .card__caption .btn {
        display: flex;
        justify-content: center;
        opacity: 0
    }

    .card--report .card__caption .btn .btn__icon {
        border-radius: 50%;
        color: #00afe4
    }

    .card--report .card__caption .btn .fal {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 45px;
        height: 45px;
        border: 2px solid #00afe4;
        border-radius: 50%;
        font-size: 1.25rem
    }

    .card--report .card__title {
        padding-bottom: 10px;
        color: #001f53
    }

    .card--report .card__title>span {
        display: block
    }

    .card--report:focus .card__icon,
    .card--report:hover .card__icon {
        opacity: 0;
        transition: all .2s
    }

    .card--report:focus .card__text,
    .card--report:hover .card__text {
        opacity: 1
    }

    .card--report:focus .card__body,
    .card--report:hover .card__body {
        background-image: url(/themes/default/assets/static/images/default/hover-analyst.png)
    }

    .card--report:focus .card__body--financial,
    .card--report:hover .card__body--financial {
        background-image: url(/themes/default/assets/static/images/default/hover-financial.png)
    }

    .card--report:focus .card__body--annual,
    .card--report:hover .card__body--annual {
        background-image: url(/themes/default/assets/static/images/default/hover-annual.png)
    }

    .card--report:focus .card__body--presention,
    .card--report:hover .card__body--presention {
        background-image: url(/themes/default/assets/static/images/default/hover-corporate.png)
    }

    .card--report:focus .card__title,
    .card--report:hover .card__title {
        color: #fff
    }

    .card--report:focus .card__title>span,
    .card--report:hover .card__title>span {
        color: #fff !important
    }

    .card--report:focus .card__caption,
    .card--report:hover .card__caption {
        bottom: 50%;
        display: flex;
        justify-content: center;
        flex-direction: column;
        transition: all .5s;
        transform: translateY(50%)
    }

    .card--report:focus .card__caption .btn,
    .card--report:hover .card__caption .btn {
        opacity: 1;
        transition: all .5s
    }

    html[lang=en] .card.card--newsroom-press .card__catagory {
        font-size: .875rem;
        font-weight: 600
    }

    html[lang=en] .card.card--newsroom-press .card__title {
        font-size: 1rem;
        font-weight: 400
    }

    html[lang=en] .card.card--newsroom-press .card__datetime {
        font-size: .875rem;
        font-weight: 600
    }

    html[lang=en] .card.card--newsroom-press .card__link {
        font-size: .875rem;
        font-weight: 400
    }

    html[lang=en] .card.card--newsroom .card__catagory {
        font-size: .875rem;
        font-weight: 600
    }

    html[lang=en] .card.card--newsroom .card__title {
        font-size: 1rem;
        font-weight: 400
    }

    html[lang=en] .card.card--newsroom .card__datetime {
        font-size: .875rem;
        font-weight: 600
    }

    html[lang=en] .card.card--newsroom .card__link {
        font-size: .875rem;
        font-weight: 400
    }

    html[lang=th] .card.card--newsroom-press .card__catagory {
        font-size: 1rem;
        font-weight: 500
    }

    html[lang=th] .card.card--newsroom-press .card__title {
        font-size: 1.125rem;
        font-weight: 300
    }

    html[lang=th] .card.card--newsroom-press .card__datetime {
        font-size: 1rem;
        font-weight: 500
    }

    html[lang=th] .card.card--newsroom-press .card__link {
        font-size: 1rem;
        font-weight: 300
    }

    html[lang=th] .card.card--newsroom .card__catagory {
        font-size: 1rem;
        font-weight: 500
    }

    html[lang=th] .card.card--newsroom .card__title {
        font-size: 1.125rem;
        font-weight: 300
    }

    html[lang=th] .card.card--newsroom .card__datetime {
        font-size: 1rem;
        font-weight: 500
    }

    html[lang=th] .card.card--newsroom .card__link {
        font-size: 1rem;
        font-weight: 300
    }

    .card {
        border: none
    }

    .card.card--newsroom-press {
        margin-bottom: 1.5rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, .24);
        border-radius: 0 10px;
        overflow: hidden;
        height: 100%;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease
    }

    @media (max-width:1539.98px) {
        .card.card--newsroom-press {
            height: 100%
        }
    }

    .card.card--newsroom-press .card__image {
        overflow: hidden;
        width: 100%;
        height: 100%;
        position: relative;
        border-radius: 0 10px 0 0
    }

    .card.card--newsroom-press .card__img {
        max-width: 100%;
        width: 100%;
        height: 100%;
        object-fit: cover;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease
    }

    .card.card--newsroom-press .card__body {
        flex: 1 1 auto;
        padding: 1.5rem;
        position: absolute;
        background: hsla(0, 0%, 100%, .96);
        bottom: -70px;
        width: 90%;
        transition: all .3s ease-out
    }

    @media (max-width:1539.98px) {
        .card.card--newsroom-press .card__body {
            bottom: -55px
        }
    }

    .card.card--newsroom-press .card__catagory {
        padding-bottom: .5rem;
        text-transform: uppercase;
        color: #001f53;
        border-bottom: 1px solid #001f53
    }

    .card.card--newsroom-press .card__title {
        color: #232323;
        padding: 0 0 2rem;
        margin: 0
    }

    .card.card--newsroom-press .card__datetime {
        color: #a9aeb2;
        padding: 1rem 0 .5rem;
        text-transform: uppercase
    }

    .card.card--newsroom-press .card__link {
        padding-top: 1rem
    }

    .card.card--newsroom-press:focus .card__title,
    .card.card--newsroom-press:hover .card__title {
        color: #232323
    }

    .card.card--newsroom-press:focus .card__img,
    .card.card--newsroom-press:hover .card__img {
        transform: scale(1.1)
    }

    .card.card--newsroom-press:focus .card__body,
    .card.card--newsroom-press:hover .card__body {
        transform: translateY(-19%);
        transition: .4s ease-in-out
    }

    .card.card--newsroom-press:focus .card__link,
    .card.card--newsroom-press:hover .card__link {
        color: #00afe4
    }

    .card.card--newsroom {
        margin-bottom: 2rem;
        height: 47%;
        box-shadow: 0 10px 20px rgba(0, 0, 0, .24);
        border-radius: 0 10px;
        overflow: hidden
    }

    .card.card--newsroom .card__body {
        flex: 1 1 auto;
        padding: 1.5rem;
        background: #001f53;
        bottom: 0;
        width: 100%
    }

    .card.card--newsroom .card__body--clipping {
        background: #00afe4
    }

    .card.card--newsroom .card__body--clipping .card__catagory,
    .card.card--newsroom .card__body--clipping .card__title {
        color: #001f53
    }

    .card.card--newsroom .card__body--clipping .card__datetime {
        color: #fff
    }

    .card.card--newsroom .card__body--clipping .card__link {
        padding-top: 1rem;
        color: #fff
    }

    .card.card--newsroom .card__body--clipping:focus .card__title,
    .card.card--newsroom .card__body--clipping:hover .card__title {
        color: #001f53
    }

    .card.card--newsroom .card__body--clipping:focus .card__link,
    .card.card--newsroom .card__body--clipping:hover .card__link {
        color: #fff
    }

    .card.card--newsroom .card__catagory {
        padding-bottom: .5rem;
        text-transform: uppercase;
        color: #fff;
        border-bottom: 1px solid #fff
    }

    .card.card--newsroom .card__title {
        color: #fff;
        padding: .5rem 0;
        margin: 0
    }

    .card.card--newsroom .card__datetime {
        color: #00afe4;
        padding: 1rem 0 .5rem
    }

    .card.card--newsroom .card__link {
        padding-top: 1rem;
        color: #00afe4
    }

    .card.card--newsroom:focus .card__title,
    .card.card--newsroom:hover .card__title {
        color: #fff
    }

    .card.card--newsroom:focus .card__link,
    .card.card--newsroom:hover .card__link {
        color: #00afe4
    }

    html[lang=en] .card--download .card__title {
        font-size: 1.25rem
    }

    html[lang=th] .card--download .card__title {
        font-size: 1.5rem
    }

    .card--download .card__item {
        display: flex;
        height: 100%;
        width: 100%;
        border-top: 1px solid #00afe4;
        padding-top: 20px;
        margin-bottom: 40px
    }

    .card--download .card__item:hover {
        border-top: 1px solid #fff
    }

    .card--download .card__item:hover .card__link .btn--pdf {
        background-image: url(/themes/default/assets/static/images/icon/download-pdf-hover.svg);
        padding: 12px 45px 0 0;
        top: -5px
    }

    .card--download .card__background {
        display: flex;
        width: 100%;
        height: 100%;
        position: relative;
        top: 0;
        background: #001f53;
        padding: 30px;
        border-radius: 0 30px 0 30px;
        transition: all .3s ease-in-out
    }

    .card--download .card__background:hover {
        background-image: url(/themes/default/assets/static/images/default/background-download-hover.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #001751;
        background-position: bottom;
        top: -20px
    }

    .card--download .card__title {
        color: #fff;
        text-transform: uppercase;
        padding-bottom: 60px;
        min-height: 150px
    }

    .card--download .card__link {
        position: absolute;
        right: 30px;
        bottom: 30px
    }

    .card--download .card__link .btn--pdf {
        position: relative;
        height: 45px;
        width: 100%;
        background-image: url(/themes/default/assets/static/images/icon/download-pdf-white.svg);
        background-position: 100% 100%;
        background-repeat: no-repeat;
        background-size: contain;
        color: #fff;
        font-weight: 400;
        padding: 22px 45px 0 0;
        transition: .3s ease
    }

    .card--board {
        display: block
    }

    .card--board .card__item {
        margin-bottom: 35px
    }

    .card--board .card__photo {
        display: block;
        padding-top: 18px;
        background-image: url(/themes/default/assets/static/images/default/background-board.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 290px;
        text-align: center;
        transition: all .3s ease-in-out
    }

    @media (max-width:767.98px) {
        .card--board .card__photo {
            height: 100%
        }
    }

    .card--board .card__img {
        position: relative;
        bottom: -15px;
        max-width: 80%;
        transition: all .3s ease-in-out
    }

    .card--board .card__body {
        padding: 20px 5px;
        position: relative;
        background-color: #fff;
        z-index: 1;
        bottom: 0
    }

    .card--board .card__body .card__title {
        color: #001f53;
        font-weight: 700;
        padding-bottom: 5px
    }

    .card--board .card__body .card__text {
        color: #232323
    }

    .card--board:hover .card__photo {
        background-image: url(/themes/default/assets/static/images/default/background-board-hover.jpg)
    }

    .card--board:hover .card__img {
        bottom: 0
    }

    
    .card--cg-policy .card__item {
        display: flex;
        flex-direction: row
    }

    @media (max-width:767.98px) {
        .card--cg-policy .card__item {
            flex-direction: column;
            background-color: #001f53;
            border-radius: 0 450px 0 40px
        }
    }

    .card--cg-policy .card__img {
        flex: 0 0 50%
    }

    @media (max-width:767.98px) {
        .card--cg-policy .card__img {
            flex: 0;
            text-align: center
        }
    }

    .card--cg-policy .card__img img {
        height: 100%;
        width: 100%
    }

    @media (max-width:767.98px) {
        .card--cg-policy .card__img img {
            border-radius: 0 40px 0 40px
        }
    }

    .card--cg-policy .card__info {
        flex: 0 0 50%;
        color: #fff;
        background-color: #001f53;
        border-radius: 0 40px 0 0;
        padding: 30px 50px
    }

    @media (max-width:991.98px) {
        .card--cg-policy .card__info {
            padding: 30px
        }
    }

    @media (max-width:767.98px) {
        .card--cg-policy .card__info {
            flex: 0;
            padding: 30px;
            border-radius: 0
        }
    }

    .card--cg-policy .card__info:hover {
        background-image: url(/themes/default/assets/static/images/default/background-download-hover.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #001751;
        background-position: 50%
    }

    .card--cg-policy .card__info:hover .card__link .btn--pdf {
        top: 5px;
        background-image: url(/themes/default/assets/static/images/icon/download-pdf-hover.svg);
        padding-top: 17px
    }

    .card--cg-policy .card__link {
        position: absolute;
        right: 50px;
        bottom: 50px
    }

    @media (max-width:991.98px) {
        .card--cg-policy .card__link {
            right: 30px;
            bottom: 30px
        }
    }

    .card--cg-policy .card__link .btn--pdf {
        position: relative;
        top: 0;
        height: 55px;
        width: 100%;
        color: #fff;
        font-weight: 400;
        background-image: url(/themes/default/assets/static/images/icon/download-pdf-white.svg);
        background-position: 100% 100%;
        background-repeat: no-repeat;
        background-size: contain;
        padding: 22px 60px 0 0;
        transition: .3s ease
    }

    html[lang=en] .card--calendar .card__number,
    html[lang=en] .card--news-calendar .card__number {
        font-size: .875rem;
        font-weight: 600
    }

    html[lang=en] .card--calendar .card__number .num,
    html[lang=en] .card--news-calendar .card__number .num {
        font-size: 2.5rem;
        font-weight: 700
    }

    html[lang=en] .card--calendar .card__info,
    html[lang=en] .card--news-calendar .card__info {
        font-size: .875rem
    }

    html[lang=en] .card--calendar .card__title,
    html[lang=en] .card--news-calendar .card__title {
        font-size: 1rem;
        font-weight: 700
    }

    html[lang=en] .card--calendar .card__link,
    html[lang=en] .card--news-calendar .card__link {
        font-size: .75rem
    }

    html[lang=th] .card--calendar .card__number,
    html[lang=th] .card--news-calendar .card__number {
        font-size: 1rem;
        font-weight: 500
    }

    html[lang=th] .card--calendar .card__number .num,
    html[lang=th] .card--news-calendar .card__number .num {
        font-size: 2.75rem;
        font-weight: 600
    }

    html[lang=th] .card--calendar .card__info,
    html[lang=th] .card--news-calendar .card__info {
        font-size: 1rem
    }

    html[lang=th] .card--calendar .card__title,
    html[lang=th] .card--news-calendar .card__title {
        font-size: 1.125rem;
        font-weight: 600
    }

    html[lang=th] .card--calendar .card__link,
    html[lang=th] .card--news-calendar .card__link {
        font-size: .875rem
    }

    .card--news-calendar .card__link {
        display: flex;
        flex-direction: row;
        height: 100%;
        border-top: 1px solid #00afe4;
        color: #888d90;
        margin: 0 15px 40px;
        padding-top: 20px
    }

    .card--news-calendar .card__link:hover {
        border-top: 1px solid #fff;
        color: #212529
    }

    .card--news-calendar .card__link:hover .card__item {
        top: -20px
    }

    .card--news-calendar .card__link:hover .card__item .card__date {
        background-color: #001f53
    }

    .card--news-calendar .card__link:hover .card__item .card__date:after {
        border-left: 15px solid #001f53
    }

    .card--news-calendar .card__item {
        display: flex;
        flex-direction: row;
        position: relative;
        top: 0;
        height: 100%;
        width: 100%;
        background: #fff;
        box-shadow: 10px 10px 10px rgba(0, 0, 0, .05);
        margin-bottom: 30px;
        transition: all .3s ease-in-out
    }

    .card--news-calendar .card__item--highlight {
        min-height: 220px
    }

    @media (max-width:1539.98px) {
        .card--news-calendar .card__item--highlight {
            min-height: 270px
        }
    }

    @media (max-width:1199.98px) {
        .card--news-calendar .card__item--highlight {
            min-height: 220px
        }
    }

    @media (max-width:991.98px) {
        .card--news-calendar .card__item--highlight {
            min-height: 290px
        }
    }

    @media (max-width:767.98px) {
        .card--news-calendar .card__item--highlight {
            flex-direction: column;
            min-height: auto
        }
    }

    .card--news-calendar .card__date {
        display: flex;
        flex-direction: column;
        flex: 0 0 25%;
        justify-content: center;
        position: relative;
        color: #fff;
        text-transform: uppercase;
        background-color: #1f3a68;
        padding-bottom: 7px
    }

    @media (max-width:767.98px) {
        .card--news-calendar .card__date {
            flex-direction: row;
            justify-content: center;
            align-items: center
        }
    }

    .card--news-calendar .card__date:after {
        content: "";
        display: inline-block;
        position: absolute;
        right: -15px;
        top: 43%;
        width: 0;
        height: 0;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        border-left: 15px solid #1f3a68
    }

    @media (max-width:767.98px) {
        .card--news-calendar .card__date:after {
            border: 0
        }
    }

    .card--news-calendar .card__number {
        text-align: center;
        position: relative;
        padding: 10px
    }

    .card--news-calendar .card__number .num {
        display: block;
        margin-bottom: 0
    }

    .card--news-calendar .card__number:nth-child(2):before {
        content: "";
        position: absolute;
        top: 2px;
        left: 20%;
        width: 60%;
        border-top: 1px solid #fff
    }

    @media (max-width:767.98px) {
        .card--news-calendar .card__number:nth-child(2):before {
            content: "-";
            left: 0;
            top: 30px;
            width: auto;
            border-top: 0
        }
    }

    .card--news-calendar .card__info {
        padding: 25px;
        width: 100%
    }

    .card__item--highlight {
        margin: 0 15px;
        min-height: 247px
    }

    @media (max-width:991.98px) {
        .card__item--highlight {
            min-height: 270px
        }
    }

    @media (max-width:767.98px) {
        .card__item--highlight {
            min-height: auto
        }
    }

    .card__item--highlight:hover .card__date {
        background-color: #001f53
    }

    .card__item--highlight:hover .card__date:after {
        border-left: 15px solid #001f53
    }

    .card__item--highlight .card__title {
        color: #001f53
    }

    .card__item--highlight .card__info {
        position: relative;
        width: 100%;
        padding: 25px
    }

    .card__item--highlight .card__link {
        border-top: 1px solid #fff;
        margin: 0
    }

    .card__item--highlight .card__link .link {
        position: absolute;
        right: 15px;
        bottom: 15px;
        margin-top: 10px
    }

    .card__item--highlight .card__link img {
        display: inline
    }

    .card--calendar .card__item {
        display: flex;
        flex-direction: row;
        height: 100%;
        margin-bottom: 30px;
        border-bottom: 1px solid #001f53
    }

    @media (max-width:767.98px) {
        .card--calendar .card__item {
            flex-direction: column
        }
    }

    .card--calendar .card__date {
        display: flex;
        flex-direction: column;
        flex: 0 0 25%;
        min-height: 180px;
        justify-content: center;
        position: relative;
        color: #001f53;
        text-transform: uppercase;
        padding-bottom: 7px
    }

    @media (max-width:767.98px) {
        .card--calendar .card__date {
            flex-direction: row;
            min-height: auto
        }
    }

    .card--calendar .card__date:after {
        content: "";
        position: absolute;
        height: 90%;
        right: 0;
        border-right: 1px solid #00afe4
    }

    @media (max-width:767.98px) {
        .card--calendar .card__date:after {
            border-right: 0;
            border-bottom: 1px solid #00afe4;
            width: 90%;
            left: 5%
        }
    }

    .card--calendar .card__number {
        position: relative;
        text-align: center;
        padding: 10px
    }

    @media (max-width:767.98px) {
        .card--calendar .card__number {
            padding: 20px 10px
        }
    }

    .card--calendar .card__number .num {
        display: block;
        margin-bottom: 0
    }

    .card--calendar .card__number:nth-child(2):before {
        content: "";
        position: absolute;
        top: 2px;
        left: 20%;
        width: 60%;
        border-top: 1px solid #001f53
    }

    @media (max-width:767.98px) {
        .card--calendar .card__number:nth-child(2):before {
            content: "-";
            left: 0;
            top: 40px;
            width: auto;
            border-top: 0
        }
    }

    .card--calendar .card__info {
        position: relative;
        width: 100%;
        padding: 25px
    }

    .card--calendar .card__title {
        color: #001f53
    }

    .card--calendar .card__link {
        position: absolute;
        bottom: 15px;
        right: 15px;
        text-align: right
    }

    .card--calendar .card__link .link {
        margin-top: 10px
    }

    .card--calendar .card__link img {
        margin-left: 5px
    }

    html[lang=en] .card--publication-highlight .card__item--webcast .card__title {
        font-size: 2.5rem;
        font-weight: 700
    }

    @media (max-width:767.98px) {
        html[lang=en] .card--publication-highlight .card__item--webcast .card__title {
            font-size: 1.875rem
        }
    }

    html[lang=en] .card--publication .card__item--webcast .card__name-2 {
        font-size: 2.5rem;
        font-weight: 700
    }

    @media (max-width:767.98px) {
        html[lang=en] .card--publication .card__item--webcast .card__name-2 {
            font-size: 1.875rem
        }
    }

    html[lang=en] .card--publication .card__title {
        font-size: 1.125rem
    }

    html[lang=th] .card--publication-highlight .card__item--webcast .card__title {
        font-size: 2.75rem;
        font-weight: 600
    }

    @media (max-width:767.98px) {
        html[lang=th] .card--publication-highlight .card__item--webcast .card__title {
            font-size: 2rem
        }
    }

    html[lang=th] .card--publication .card__item--webcast .card__name-2 {
        font-size: 2.75rem;
        font-weight: 600
    }

    @media (max-width:767.98px) {
        html[lang=th] .card--publication .card__item--webcast .card__name-2 {
            font-size: 2rem
        }
    }

    html[lang=th] .card--publication .card__title {
        font-size: 1.25rem
    }

    .card--publication-highlight .card__item {
        display: flex;
        flex-direction: row;
        position: relative
    }

    @media (max-width:767.98px) {
        .card--publication-highlight .card__item {
            flex-direction: column
        }
    }

    .card--publication-highlight .card__item:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 73%;
        background-image: url(/themes/default/assets/static/images/default/background-publication.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #001751;
        background-position: 50%;
        border-radius: 0 30px 0 30px
    }

    @media (max-width:1199.98px) {
        .card--publication-highlight .card__item:before {
            height: 100%
        }
    }

    .card--publication-highlight .card__img {
        flex: 0 0 50%;
        position: relative;
        right: -2rem;
        padding: 5.5rem 0 2rem 2rem
    }

    @media (max-width:1199.98px) {
        .card--publication-highlight .card__img {
            flex: 0 0 40%
        }
    }

    @media (max-width:767.98px) {
        .card--publication-highlight .card__img {
            text-align: center;
            padding-bottom: 0
        }
    }

    .card--publication-highlight .card__info {
        position: relative;
        padding: 2rem 1rem
    }

    .card--publication-highlight .card__info .text-stroke-blue-white {
        border-bottom: 1px solid #336598;
        padding-bottom: 1.5rem
    }

    @media (max-width:767.98px) {
        .card--publication-highlight .card__info {
            padding: 0 2rem 2rem
        }
    }

    .card--publication-highlight .card__download {
        display: flex;
        flex-direction: row;
        margin-top: 2rem
    }

    @media (max-width:767.98px) {
        .card--publication-highlight .card__download {
            flex-direction: column;
            margin-top: 1rem
        }
    }

    .card--publication-highlight .card__download .btn {
        color: #fff;
        font-weight: 400;
        position: relative;
        padding: 1.2rem 5rem 1.2rem 0;
        margin-right: 1rem
    }

    @media (max-width:767.98px) {
        .card--publication-highlight .card__download .btn {
            text-align: left;
            padding: 1.5rem 5rem 1.5rem 0
        }
    }

    .card--publication-highlight .card__download .btn--online:after {
        content: "";
        position: absolute;
        top: 6px;
        right: 9px;
        width: 50px;
        height: 50px;
        background-image: url(/themes/default/assets/static/images/icon/view-online-white.svg);
        background-repeat: no-repeat;
        background-size: contain;
        transition: .3s ease
    }

    .card--publication-highlight .card__download .btn--online:hover:after {
        top: 11px;
        background-image: url(/themes/default/assets/static/images/icon/view-online-hover.svg)
    }

    .card--publication-highlight .card__download .btn--pdf {
        top: 0;
        width: auto;
        height: auto;
        background-image: inherit;
        transition: inherit
    }

    .card--publication-highlight .card__download .btn--pdf:after {
        content: "";
        position: absolute;
        top: 6px;
        right: 16px;
        width: 43px;
        height: 50px;
        background-image: url(/themes/default/assets/static/images/icon/download-pdf-white.svg);
        background-repeat: no-repeat;
        background-size: contain;
        transition: .3s ease
    }

    @media (max-width:767.98px) {
        .card--publication-highlight .card__download .btn--pdf:after {
            right: 9px
        }
    }

    .card--publication-highlight .card__download .btn--pdf:hover:after {
        top: 11px;
        background-image: url(/themes/default/assets/static/images/icon/download-pdf-hover.svg)
    }

    @media (max-width:1199.98px) {
        .card--publication-highlight .card__item--ar {
            margin-bottom: 5rem
        }
    }

    @media (max-width:767.98px) {
        .card--publication-highlight .card__item--ar {
            overflow: hidden
        }
    }

    .card--publication-highlight .card__item--ar .card__img {
        text-align: right
    }

    @media (max-width:991.98px) {
        .card--publication-highlight .card__item--ar .card__img {
            text-align: center;
            padding-top: 4rem
        }
    }

    @media (max-width:767.98px) {
        .card--publication-highlight .card__item--ar .card__img {
            text-align: center;
            padding: 4rem 0 0;
            left: 16px
        }
    }

    @media (max-width:991.98px) {
        .card--publication-highlight .card__item--ar .card__img>img {
            max-width: 140%
        }
    }

    @media (max-width:767.98px) {
        .card--publication-highlight .card__item--ar .card__img>img {
            max-width: 90%
        }
    }

    @media (max-width:1199.98px) {
        .card--publication-highlight .card__item--factsheet {
            margin-bottom: 2rem
        }
    }

    .card--publication-highlight .card__item--factsheet .card__img {
        text-align: center;
        right: 0
    }

    @media (max-width:767.98px) {
        .card--publication-highlight .card__item--factsheet .card__img {
            padding-right: 2rem
        }
    }

    .card--publication-highlight .card__item--factsheet .card__info .card__download a {
        flex: 0 0 100%;
        text-align: right
    }

    @media (max-width:1199.98px) {
        .card--publication-highlight .card__item--newsletter {
            margin-bottom: 5rem
        }
    }

    .card--publication-highlight .card__item--newsletter .card__img {
        text-align: center;
        right: 0
    }

    @media (max-width:767.98px) {
        .card--publication-highlight .card__item--newsletter .card__img {
            padding-right: 2rem
        }
    }

    .card--publication-highlight .card__item--newsletter .card__info {
        flex: 0 0 35%
    }

    @media (max-width:1199.98px) {
        .card--publication-highlight .card__item--newsletter .card__info {
            flex: content;
            padding-right: 2rem
        }
    }

    .card--publication-highlight .card__item--newsletter .card__info .card__download a {
        flex: 0 0 100%;
        text-align: right
    }

    .card--publication-highlight .card__item--webcast:before {
        height: 100%
    }

    .card--publication-highlight .card__item--webcast .card__img {
        text-align: center;
        right: 0;
        padding: 5.5rem 2rem
    }

    @media (max-width:991.98px) {
        .card--publication-highlight .card__item--webcast .card__img {
            flex: 0 0 35%;
            padding: 5.5rem 1rem
        }
    }

    @media (max-width:767.98px) {
        .card--publication-highlight .card__item--webcast .card__img {
            padding-bottom: 2rem
        }
    }

    .card--publication-highlight .card__item--webcast .card__info {
        flex: 0 0 43%
    }

    @media (max-width:1199.98px) {
        .card--publication-highlight .card__item--webcast .card__info {
            flex: 0 0 57%
        }
    }

    @media (max-width:991.98px) {
        .card--publication-highlight .card__item--webcast .card__info {
            flex: auto
        }
    }

    .card--publication-highlight .card__item--webcast .card__title {
        padding: 3rem 0;
        border-bottom: 1px solid #336598;
        text-transform: uppercase
    }

    .card--publication-highlight .card__item--webcast .card__title .card__name-1 {
        color: #fff
    }

    .card--publication-highlight .card__item--webcast .card__title .card__name-1>span {
        -webkit-text-fill-color: transparent;
        -webkit-text-stroke-color: #00afe4;
        -webkit-text-stroke: 1px #00afe4;
        color: transparent;
        text-shadow: none
    }

    .card--publication-highlight .card__item--webcast .card__title .card__name-2 {
        color: #fff
    }

    .card--publication .card__item {
        margin-bottom: 4rem;
        height: 100%;
        width: 100%
    }

    .card--publication .card__title {
        color: #001f53;
        font-weight: 700;
        text-transform: uppercase
    }

    .card--publication .card__download {
        display: flex;
        flex-direction: column;
        position: relative
    }

    .card--publication .card__download .btn {
        font-weight: 400;
        text-align: left;
        padding: 1.2rem 0
    }

    .card--publication .card__download .btn:nth-child(2) {
        border-top: 1px solid #f5f5f5
    }

    .card--publication .card__download .btn--online {
        position: relative
    }

    .card--publication .card__download .btn--online:after {
        content: "";
        position: absolute;
        top: 10px;
        right: 5px;
        width: 40px;
        height: 40px;
        background-image: url(/themes/default/assets/static/images/icon/view-online.svg);
        background-repeat: no-repeat;
        background-size: contain;
        transition: .3s ease
    }

    .card--publication .card__download .btn--online:hover:after {
        background-image: url(/themes/default/assets/static/images/icon/view-online-hover.svg);
        top: 15px
    }

    .card--publication .card__download .btn--pdf {
        position: relative;
        top: 0;
        width: auto;
        height: auto;
        background-image: inherit;
        transition: inherit
    }

    .card--publication .card__download .btn--pdf:after {
        content: "";
        position: absolute;
        top: 16px;
        right: 11px;
        width: 30px;
        height: 40px;
        background-image: url(/themes/default/assets/static/images/icon/download-pdf.svg);
        background-repeat: no-repeat;
        background-size: contain;
        transition: .3s ease
    }

    .card--publication .card__download .btn--pdf:hover:after {
        background-image: url(/themes/default/assets/static/images/icon/download-pdf-hover.svg);
        top: 21px
    }

    .card--publication .card__item--ar {
        margin-top: 4rem
    }

    .card--publication .card__item--ar .card__info {
        padding: 0 6rem
    }

    @media (max-width:991.98px) {
        .card--publication .card__item--ar .card__info {
            padding: 0 3rem
        }
    }

    .card--publication .card__item--ar .card__img {
        position: relative;
        padding: 0 6rem;
        height: 320px
    }

    @media (max-width:767.98px) {
        .card--publication .card__item--ar .card__img {
            padding: 0 5rem
        }
    }

    .card--publication .card__item--ar .card__img>img {
        position: absolute;
        max-height: 320px
    }

    @media (max-width:767.98px) {
        .card--publication .card__item--ar .card__img>img {
            max-height: 250px
        }
    }

    .card--publication .card__item--ar .card__img:before {
        content: "";
        position: absolute;
        top: 50px;
        left: 0;
        width: 200px;
        height: 200px;
        background-image: url(/themes/default/assets/static/images/default/background-pulication-element.png);
        background-repeat: no-repeat;
        background-size: contain
    }

    @media (max-width:767.98px) {
        .card--publication .card__item--ar .card__img:before {
            top: 26px;
            left: -10px
        }
    }

    .card--publication .card__item--factsheet .card__img,
    .card--publication .card__item--newsletter .card__img {
        text-align: center
    }

    .card--publication .card__item--factsheet .card__img img,
    .card--publication .card__item--newsletter .card__img img {
        box-shadow: 10px 10px 20px rgba(0, 0, 0, .16);
        border: 25px solid #fff
    }

    .card--publication .card__item--factsheet .card__info,
    .card--publication .card__item--newsletter .card__info {
        padding-top: 1.5rem
    }

    .card--publication .card__item--webcast {
        position: relative
    }

    .card--publication .card__item--webcast .card__img {
        text-align: center
    }

    .card--publication .card__item--webcast .card__img img {
        box-shadow: 10px 10px 20px rgba(0, 0, 0, .16)
    }

    .card--publication .card__item--webcast .card__info {
        padding: 1.5rem 0 8rem
    }

    @media (max-width:767.98px) {
        .card--publication .card__item--webcast .card__info {
            padding-bottom: 0
        }
    }

    .card--publication .card__item--webcast .card__title .card__name-1 {
        color: #001f53
    }

    .card--publication .card__item--webcast .card__title .card__name-2 {
        -webkit-text-fill-color: transparent;
        -webkit-text-stroke-color: #00afe4;
        -webkit-text-stroke: 1px #00afe4;
        color: transparent;
        text-shadow: none;
        display: block
    }

    .card--publication .card__item--webcast .card__download {
        position: absolute;
        width: 100%;
        bottom: 0;
        height: 8rem
    }

    @media (max-width:767.98px) {
        .card--publication .card__item--webcast .card__download {
            position: inherit;
            height: auto
        }
    }

    html[lang=en] .card--analyst .card__title {
        font-size: 1.125rem
    }

    html[lang=th] .card--analyst .card__title {
        font-size: 1.25rem
    }

    .card--analyst .card__item {
        margin-bottom: 3rem;
        display: flex;
        flex-direction: column;
        height: 100%
    }

    .card--analyst .card__img {
        background-image: url(/themes/default/assets/static/images/default/background-download-hover.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #001751;
        background-position: bottom;
        text-align: center;
        border-radius: 0 30px 0 30px;
        padding: 2rem
    }

    .card--analyst .card__img img,
    .card--analyst .card__info {
        box-shadow: 10px 10px 30px rgba(0, 0, 0, .1)
    }

    .card--analyst .card__info {
        display: flex;
        flex-direction: column;
        height: 100%;
        padding: 2rem;
        background: #fff
    }

    @media (max-width:991.98px) {
        .card--analyst .card__info {
            padding: 2rem .5rem
        }
    }

    .card--analyst .card__title {
        font-weight: 700;
        color: #001f53;
        border-bottom: 1px solid #ebebeb;
        padding-bottom: 1rem;
        margin-bottom: 1rem
    }

    .card {
        background-color: inherit
    }

    .slick .slick-dots {
        z-index: 2;
        position: absolute;
        padding: 0
    }

    @media (max-width:991.98px) {
        .slick .slick-dots {
            left: 20px
        }
    }

    .slick .slick-dots li {
        display: inline-block;
        -webkit-transition: .2s ease-in-out;
        transition: .2s ease-in-out;
        background-color: #ebebeb;
        border: 2px solid transparent;
        border-radius: 50%;
        height: 10px;
        width: 10px;
        margin: 0 7px;
        vertical-align: top
    }

    .slick .slick-dots li button {
        display: none
    }

    .slick .slick-dots li.slick-active {
        background-color: #000;
        border: 2px solid #000;
        height: 10px;
        width: 10px
    }

    .slick .slick-arrow {
        display: none !important
    }

    html[lang=en] .slick.slick--banner .slick__title {
        font-size: 4.375rem;
        font-weight: 700
    }

    @media (max-width:767.98px) {
        html[lang=en] .slick.slick--banner .slick__title {
            font-size: 2.5rem
        }
    }

    html[lang=en] .slick.slick--banner .slick__headtitle {
        font-size: 4.375rem;
        font-weight: 700
    }

    @media (max-width:767.98px) {
        html[lang=en] .slick.slick--banner .slick__headtitle {
            font-size: 2.5rem
        }
    }

    html[lang=en] .slick.slick--banner .slick__text {
        font-size: 1.125rem;
        font-weight: 400
    }

    html[lang=en] .slick.slick--banner .slick__counter {
        font-weight: 400
    }

    html[lang=th] .slick.slick--banner .slick__title {
        font-size: 4.375rem;
        font-weight: 600
    }

    @media (max-width:767.98px) {
        html[lang=th] .slick.slick--banner .slick__title {
            font-size: 2.75rem
        }
    }

    html[lang=th] .slick.slick--banner .slick__headtitle {
        font-size: 4.375rem;
        font-weight: 600
    }

    @media (max-width:767.98px) {
        html[lang=th] .slick.slick--banner .slick__headtitle {
            font-size: 2.75rem
        }
    }

    html[lang=th] .slick.slick--banner .slick__text {
        font-size: 1.25rem;
        font-weight: 300
    }

    html[lang=th] .slick.slick--banner .slick__counter {
        font-weight: 300
    }

    .slick.slick--banner .slick-arrow {
        position: absolute;
        outline: none;
        top: 50%;
        transform: translateY(-50%);
        width: 72px;
        height: 72px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        background: hsla(0, 0%, 100%, .2);
        padding: 0;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
        color: #00afe4;
        font-size: 1.125rem;
        z-index: 1
    }

    .slick.slick--banner .slick-arrow:before {
        content: "";
        background: #fff;
        position: absolute;
        width: 48px;
        height: 48px;
        border-radius: 50%
    }

    .slick.slick--banner .slick-arrow i {
        z-index: 1
    }

    .slick.slick--banner .slick-arrow:hover {
        color: #fff;
        background: transparent linear-gradient(180deg, #00afe4, #001f53) 0 0 no-repeat padding-box
    }

    .slick.slick--banner .slick-arrow:hover:before {
        display: none
    }

    .slick.slick--banner .slick-arrow.slick-arrow--left {
        left: 0
    }

    .slick.slick--banner .slick-arrow.slick-arrow--right {
        right: 0
    }

    .slick.slick--banner .slick-arrow.slick-disabled {
        cursor: default
    }

    .slick.slick--banner .slick-dots {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        z-index: 2;
        margin: 350px auto auto;
        padding: 0 45px;
        align-items: center;
        display: inline-flex;
        min-height: 40px;
        list-style: none
    }

    .slick.slick--banner .slick-dots li {
        position: relative;
        display: block;
        height: 1px;
        width: 29px;
        background-color: hsla(0, 0%, 100%, .39);
        margin: 0;
        color: transparent;
        -webkit-transition: all .2s ease-in-out;
        -moz-transition: .2s all ease-in-out;
        -ms-transition: .2s all ease-in-out;
        -o-transition: .2s all ease-in-out;
        transition: all .2s ease-in-out;
        cursor: pointer;
        border: none
    }

    .slick.slick--banner .slick-dots li button {
        display: none
    }

    .slick.slick--banner .slick-dots li.slick-active {
        width: 59px;
        background-color: #fff
    }

    .slick.slick--banner .slick-video {
        position: absolute;
        z-index: 1;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 100%;
        object-fit: cover
    }

    @media (max-width:991.98px) {
        .slick.slick--banner .slick-video {
            display: none
        }
    }

    .slick.slick--banner .slick__content {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        z-index: 2;
        width: 100%;
        margin: 0;
        min-height: 252px
    }

    .slick.slick--banner .slick__block {
        position: relative;
        padding: 0 1rem 0 0
    }

    .slick.slick--banner .slick__text {
        text-transform: uppercase
    }

    .slick.slick--banner .slick__title {
        margin: 0;
        color: #fff;
        text-transform: uppercase;
        position: relative;
        line-height: 1.2
    }

    .slick.slick--banner .slick__headtitle {
        position: relative;
        display: flex;
        align-items: center;
        text-transform: uppercase
    }

    .slick.slick--banner .slick__bg {
        position: relative;
        min-height: 700px;
        overflow: hidden;
        display: flex;
        align-items: center;
        width: 100%
    }

    @media (max-width:1199.98px) {
        .slick.slick--banner .slick__bg {
            height: 105vh
        }

        .slick.slick--banner .slick__bg:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent linear-gradient(180deg, hsla(0, 0%, 100%, .1), rgba(0, 31, 83, .9)) 0 0 no-repeat padding-box
        }
    }

    .slick.slick--banner .slick__image {
        width: 100%;
        height: 100vh;
        min-height: 700px;
        object-fit: cover;
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
        -webkit-transition: all 5s ease-in-out;
        -moz-transition: all 5s ease-in-out;
        -ms-transition: all 5s ease-in-out;
        -o-transition: all 5s ease-in-out;
        transition: all 5s ease-in-out
    }

    .slick.slick--banner .dot:after {
        content: "";
        position: relative;
        display: flex;
        background-color: #fff;
        border-radius: 50%;
        width: 16px;
        height: 16px;
        left: 20px
    }

    .slick.slick--banner .slick__text {
        margin: .75rem 0;
        color: #00afe4;
        position: relative
    }

    .slick.slick--banner .slick__item {
        position: relative;
        min-height: 700px;
        overflow: hidden;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 50%;
        display: flex;
        align-items: flex-start
    }

    .slick.slick--banner .slick__item:focus {
        outline: none
    }

    .slick.slick--banner .slick__item.slick-active .slick__bg .slick__image {
        -webkit-transform: scale(1.05);
        -moz-transform: scale(1.05);
        -ms-transform: scale(1.05);
        -o-transform: scale(1.05);
        transform: scale(1.05)
    }

    .slick.slick--banner .slick__counter {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        margin: 350px auto auto;
        padding: 0;
        align-items: center;
        display: inline-flex;
        color: #fff
    }

    .slick.slick--banner .slick__counter .current {
        position: absolute;
        left: 15px
    }

    .slick.slick--banner .slick__counter .total {
        position: absolute;
        left: 14%
    }

    @media (max-width:1539.98px) {
        .slick.slick--banner .slick__counter .total {
            left: 17%
        }
    }

    @media (max-width:1199.98px) {
        .slick.slick--banner .slick__counter .total {
            left: 21%
        }
    }

    @media (max-width:991.98px) {
        .slick.slick--banner .slick__counter .total {
            left: 28%
        }
    }

    @media (max-width:575.98px) {
        .slick.slick--banner .slick__counter .total {
            left: 47%
        }
    }

    @media (max-width:767.98px) {
        .slick.slick--banner .slick__counter .total {
            left: 52%
        }
    }

    .slick--event {
        padding-bottom: 0
    }

    .slick--event .slick-dots {
        position: absolute;
        bottom: 0;
        display: flex;
        justify-content: center;
        padding-left: 0;
        list-style: none
    }

    .slick--event .slick-dots li {
        width: 6px;
        height: 6px;
        background-color: hsla(0, 0%, 100%, .3)
    }

    .slick--event .slick-dots li:first-child {
        margin-left: 0
    }

    .slick--event .slick-dots li.slick-active {
        background-color: #fff;
        border: 1px solid #fff;
        width: 6px;
        height: 6px
    }

    .slick--event .slick-dots li.slick-active:before {
        content: "";
        border: 1px solid #fff;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        display: flex;
        left: -5px;
        top: -5px;
        position: absolute
    }

    html[lang=en] .slick-nav-wrapper .item span {
        font-size: .875rem;
        font-weight: 500
    }

    html[lang=th] .slick-nav-wrapper .item span {
        font-size: 1rem;
        font-weight: 400
    }

    .slick-nav-wrapper {
        position: relative
    }

    @media (max-width:991.98px) {
        .slick-nav-wrapper {
            border-color: #ebebeb;
            border-width: 0 1px 1px;
            display: none;
            margin-bottom: 0
        }
    }

    .slick-nav-wrapper.show,
    .slick-nav-wrapper.show .slick-list {
        display: block
    }

    .slick-nav-wrapper .slick-nav-wrapper__next,
    .slick-nav-wrapper .slick-nav-wrapper__prev {
        display: none
    }

    @media (max-width:1199.98px) {

        .slick-nav-wrapper .slick-nav-wrapper__next,
        .slick-nav-wrapper .slick-nav-wrapper__prev {
            display: none
        }
    }

    .slick-nav-wrapper .slick-nav {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .slick-nav-wrapper .slick-nav .item {
        display: block;
        padding: 0 1.5rem;
        text-align: center;
        color: #000;
        transition: all .25s ease
    }

    .slick-nav-wrapper .slick-nav .item.item--active span {
        border-bottom: 2px solid #00afe4;
        color: #00afe4
    }

    .slick-nav-wrapper .slick-nav .item span {
        display: block;
        padding: 1rem
    }

    .slick-nav-wrapper .slick-arrow {
        position: absolute;
        cursor: pointer;
        z-index: 2
    }

    .slick-nav-wrapper .slick-arrow i {
        color: #00afe4;
        font-size: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 20px
    }

    .slick-nav-wrapper .slick-arrow.slick-disabled i {
        color: #ebebeb
    }

    .slick-nav-wrapper .slick-arrow.slick-nav-wrapper__prev {
        top: 15px;
        left: -2rem;
        border-radius: 50%;
        border: 1px solid #00afe4;
        width: 20px;
        height: 20px
    }

    .slick-nav-wrapper .slick-arrow.slick-nav-wrapper__prev.slick-disabled {
        border: 1px solid #ebebeb;
        width: 20px;
        height: 20px
    }

    .slick-nav-wrapper .slick-arrow.slick-nav-wrapper__prev.slick-disabled i {
        color: #ebebeb
    }

    .slick-nav-wrapper .slick-arrow.slick-nav-wrapper__next {
        right: -2rem;
        top: 15px;
        border-radius: 50%;
        border: 1px solid #00afe4;
        width: 20px;
        height: 20px
    }

    @media (max-width:991.98px) {
        .slick-nav-wrapper .slick-arrow.slick-nav-wrapper__next {
            right: 0
        }
    }

    @media (max-width:991.98px) {
        .slick-nav-wrapper .slick-list {
            display: none
        }
    }

    @media (max-width:991.98px) {
        .slick-nav-wrapper .slick-list .slick-track {
            width: 100% !important;
            transform: translateZ(0) !important
        }
    }

    .slick-nav-wrapper .slick-list .slick-track .item {
        text-align: center;
        color: #000;
        transition: all .25s ease;
        padding: 0 1rem
    }

    .slick-nav-wrapper .slick-list .slick-track .item:hover {
        color: #00afe4;
        transition: all .25s ease
    }

    @media (max-width:991.98px) {
        .slick-nav-wrapper .slick-list .slick-track .item {
            border: 1px solid #ebebeb;
            border-top: 0 solid #ebebeb;
            padding: 1rem;
            width: 100% !important;
            text-align: left;
            background-color: #fff
        }
    }

    @media (max-width:991.98px) {
        .slick-nav-wrapper .slick-list .slick-track .item.item--active {
            display: none
        }
    }

    .slick-nav-wrapper .slick-list .slick-track .item.item--active span {
        border-bottom: 2px solid #00afe4;
        color: #00afe4
    }

    .slick-nav-wrapper .slick-list .slick-track .item span {
        padding: 1rem;
        display: block
    }

    html[lang=en] .stock.stock--home .stock__headline {
        font-size: 1.125rem;
        font-weight: 600
    }

    html[lang=en] .stock.stock--home .stock__symbol {
        font-size: 1.875rem;
        font-weight: 400
    }

    html[lang=en] .stock.stock--home .stock__date {
        font-size: .75rem;
        font-weight: 500
    }

    html[lang=en] .stock.stock--home .stock__title {
        font-size: .875rem;
        font-weight: 400
    }

    html[lang=en] .stock.stock--home .stock__value {
        font-size: 1.25rem;
        font-weight: 400
    }

    html[lang=en] .stock.stock--home .stock__value--big {
        font-size: 3.125rem;
        font-weight: 500
    }

    html[lang=en] .stock.stock--home .stock__unit {
        font-size: 1.25rem;
        font-weight: 400
    }

    html[lang=th] .stock.stock--home .stock__headline {
        font-size: 1.25rem;
        font-weight: 500
    }

    html[lang=th] .stock.stock--home .stock__symbol {
        font-size: 2rem;
        font-weight: 300
    }

    html[lang=th] .stock.stock--home .stock__date {
        font-size: .875rem;
        font-weight: 400
    }

    html[lang=th] .stock.stock--home .stock__title {
        font-size: 1rem;
        font-weight: 300
    }

    html[lang=th] .stock.stock--home .stock__value {
        font-size: 1.5rem;
        font-weight: 300
    }

    html[lang=th] .stock.stock--home .stock__value--big {
        font-size: 3.125rem;
        font-weight: 400
    }

    html[lang=th] .stock.stock--home .stock__unit {
        font-size: 1.5rem;
        font-weight: 300
    }

    .stock.stock--home {
        position: relative;
        z-index: 99;
        width: 100%;
        height: 100%;
        padding: 2rem 4rem;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 0 0 0 10px;
        box-shadow: 0 3px 15px 0 rgba(0, 0, 0, .7);
        transition: all .5s ease-out
    }

    @media (max-width:991.98px) {
        .stock.stock--home {
            padding: 2rem 3rem
        }
    }

    @media (max-width:767.98px) {
        .stock.stock--home {
            padding: 2rem
        }
    }

    .stock.stock--home .stock__headline {
        margin-bottom: 25px;
        color: #00afe4;
        text-transform: uppercase
    }

    .stock.stock--home .stock__symbol,
    .stock.stock--home .stock__unit {
        text-transform: uppercase
    }

    .stock.stock--home .stock__top {
        display: flex;
        align-items: flex-end;
        justify-content: space-between
    }

    .stock.stock--home .stock__date {
        opacity: .7
    }

    .stock.stock--home .stock__group {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        color: #fff
    }

    .stock.stock--home .stock__bottom {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        text-align: center
    }

    @media (max-width:767.98px) {
        .stock.stock--home .stock__bottom {
            flex-direction: column;
            align-items: flex-start;
            text-align: left
        }
    }

    .stock.stock--home .stock__highlight {
        display: flex;
        flex-direction: column;
        padding: 1rem .5rem 1rem 0
    }

    .stock.stock--home .stock__column {
        width: auto;
        padding: 1rem .5rem;
        text-align: left
    }

    @media (max-width:767.98px) {
        .stock.stock--home .stock__column {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center
        }
    }

    .stock.stock--home .stock__title {
        padding-bottom: 10px;
        line-height: 1;
        color: #00afe4
    }

    @media (max-width:767.98px) {
        .stock.stock--home .stock__title {
            padding-bottom: 0
        }
    }

    .stock.stock--home .stock__value {
        color: #fff
    }

    html[lang=en] .stock--quote .stock__symbol {
        font-size: 1.875rem;
        font-weight: 400
    }

    html[lang=en] .stock--quote .stock__date {
        font-size: .6875rem
    }

    html[lang=en] .stock--quote .stock__title {
        font-size: .8125rem;
        font-weight: 600
    }

    html[lang=en] .stock--quote .stock__value {
        font-size: 1.125rem;
        font-weight: 600
    }

    html[lang=en] .stock--quote .stock__price {
        font-size: 2.5rem;
        font-weight: 600
    }

    html[lang=en] .stock--quote .stock__change {
        font-size: 1.25rem;
        font-weight: 400
    }

    html[lang=en] .stock--quote .stock__currency {
        font-size: 2.5rem;
        font-weight: 600
    }

    html[lang=th] .stock--quote .stock__symbol {
        font-size: 2rem;
        font-weight: 300
    }

    html[lang=th] .stock--quote .stock__date {
        font-size: .6875rem
    }

    html[lang=th] .stock--quote .stock__title {
        font-size: .8125rem;
        font-weight: 500
    }

    html[lang=th] .stock--quote .stock__value {
        font-size: 1.25rem;
        font-weight: 500
    }

    html[lang=th] .stock--quote .stock__price {
        font-size: 2.75rem;
        font-weight: 500
    }

    html[lang=th] .stock--quote .stock__change {
        font-size: 1.5rem;
        font-weight: 300
    }

    html[lang=th] .stock--quote .stock__currency {
        font-size: 2.75rem;
        font-weight: 500
    }

    .stock--quote {
        display: flex;
        flex-direction: row;
        width: 100%;
        margin-bottom: 5rem;
        border-radius: 0 30px;
        box-shadow: 10px 10px 30px rgba(0, 0, 0, .16)
    }

    .stock--quote .stock__wrapper {
        display: flex;
        width: 100%;
        text-align: center
    }

    @media (max-width:1199.98px) {
        .stock--quote .stock__wrapper {
            width: 100%
        }
    }

    @media (max-width:991.98px) {
        .stock--quote .stock__wrapper {
            flex-direction: column
        }
    }

    .stock--quote .stock__highlight {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 35%;
        color: #fff;
        padding: 2.5rem 2rem 2rem;
        border-radius: 0 0 0 30px;
        background-image: url(/themes/default/assets/static/images/default/background-hover.png);
        background-size: cover
    }

    @media (max-width:991.98px) {
        .stock--quote .stock__highlight {
            width: 100%;
            border-right: none;
            border-radius: 0 0 0 30px
        }
    }

    .stock--quote .stock__highlight .stock__change .arrow-up {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .stock--quote .stock__highlight .stock__change .arrow-up:before {
        font-family: Font Awesome\ 5 Pro;
        font-weight: 300;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
        content: "\F0D8";
        font-weight: 700;
        font-size: 1.875rem;
        color: #0eb173;
        padding-right: .5rem
    }

    .stock--quote .stock__highlight .stock__change .arrow-down {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .stock--quote .stock__highlight .stock__change .arrow-down:before {
        font-family: Font Awesome\ 5 Pro;
        font-weight: 300;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
        content: "\F0D7";
        font-weight: 700;
        font-size: 1.875rem;
        color: #0eb173;
        padding-right: .5rem
    }

    .stock--quote .stock__main {
        width: 100%
    }

    @media (max-width:991.98px) {
        .stock--quote .stock__main {
            margin-left: 0;
            height: auto
        }
    }

    @media (max-width:767.98px) {
        .stock--quote .stock__main {
            text-align: center
        }
    }

    .stock--quote .stock__main>.stock__row {
        text-align: center;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid hsla(0, 0%, 43.9%, .3)
    }

    .stock--quote .stock__main>.stock__row:first-child {
        border-top: none;
        padding-top: 0
    }

    .stock--quote .stock__main>.stock__row:last-child {
        padding-bottom: 0
    }

    @media (max-width:991.98px) {
        .stock--quote .stock__main>.stock__row {
            flex-direction: column
        }
    }

    .stock--quote .stock__column {
        width: 100%;
        padding: 2rem;
        text-align: center;
        border-right: 1px solid hsla(0, 0%, 43.9%, .3)
    }

    .stock--quote .stock__column:last-child {
        border-right: none
    }

    @media (max-width:1199.98px) {
        .stock--quote .stock__column {
            min-height: 120px
        }
    }

    @media (max-width:991.98px) {
        .stock--quote .stock__column {
            border-right: none;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            min-height: 50px;
            padding: 10px 20px
        }
    }

    @media (max-width:767.98px) {
        .stock--quote .stock__column {
            display: flex;
            min-height: 50px
        }
    }

    .stock--quote .stock__title {
        line-height: 1;
        color: #232323;
        padding-bottom: 10px
    }

    @media (max-width:767.98px) {
        .stock--quote .stock__title {
            padding-bottom: 0
        }
    }

    .stock--quote .stock__value {
        color: #001f53
    }

    @media (max-width:991.98px) {
        .stock--quote .stock__item {
            margin-top: 20px
        }
    }

    .stock--quote .stock__symbol {
        margin: 0;
        line-height: 1
    }

    .stock--quote .stock__lastdone {
        color: #00afe4;
        line-height: 1
    }

    .stock--quote .stock__date {
        margin-top: 1rem
    }

    .stock--quote .stock__curve {
        position: absolute;
        right: 0;
        bottom: 0
    }

    .navbar-nav .dropdown-menu {
        padding: 0;
        margin: 0;
        border: 0;
        border-radius: 0;
        background-color: transparent
    }

    .navbar-nav .dropdown-toggle:after {
        border: unset;
        margin-left: 0;
        vertical-align: unset;
        pointer-events: none;
        content: "\F067";
        position: absolute;
        top: 50%;
        right: 4px;
        color: #00afe4;
        font-size: 1.125rem;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease
    }

    .navbar-nav .dropdown-toggle:after,
    .navbar-nav .dropdown-toggle[aria-expanded=true]:after {
        font-family: Font Awesome\ 5 Pro;
        font-weight: 300;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1
    }

    .navbar-nav .dropdown-toggle[aria-expanded=true]:after {
        content: "\F068";
        color: #fff
    }

    .navbar-nav .dropdown-item {
        padding: .75rem 1rem
    }

    .navbar-nav .dropdown-item:active,
    .navbar-nav .dropdown-item:focus,
    .navbar-nav .dropdown-item:hover {
        background-color: transparent
    }

    .navbar-nav .dropdown-link:active,
    .navbar-nav .dropdown-link:focus,
    .navbar-nav .dropdown-link:hover {
        text-decoration: none
    }

    html[lang=en] .navbar-nav.navbar-nav--menu .navbar-nav__title {
        font-size: 1.25rem;
        font-weight: 600
    }

    html[lang=en] .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-link {
        font-size: .75rem;
        font-weight: 400
    }

    html[lang=th] .navbar-nav.navbar-nav--menu .navbar-nav__title {
        font-size: 1.5rem;
        font-weight: 500
    }

    html[lang=th] .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-link {
        font-size: .875rem;
        font-weight: 300
    }

    .navbar-nav.navbar-nav--menu {
        flex-flow: row wrap;
        justify-content: flex-end
    }

    .navbar-nav.navbar-nav--menu .dropdown-toggle:after {
        font-family: Font Awesome\ 5 Pro;
        font-weight: 300;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
        content: "\F054";
        position: absolute;
        top: 50%;
        right: 0;
        color: #ebebeb;
        font-size: .75rem;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .navbar-nav.navbar-nav--menu .navbar-nav__wrapper {
        position: fixed;
        top: 95px;
        left: 0;
        padding: 3rem 0;
        width: 100%;
        height: auto;
        border: 0;
        background-color: #001f53;
        -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, .15);
        -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, .15);
        box-shadow: 0 3px 6px rgba(0, 0, 0, .15);
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
        z-index: -1;
        overflow: hidden
    }

    .navbar-nav.navbar-nav--menu .navbar-nav__wrapper:before {
        content: "";
        position: absolute;
        bottom: 30px;
        left: -190px;
        width: 100%;
        height: 190px;
        background-image: url(/themes/default/themes/default/assets/static/images/default/menu-vector.svg);
        background-repeat: no-repeat
    }

    @media (min-width:1200px) and (max-width:1539.98px) {
        .navbar-nav.navbar-nav--menu .navbar-nav__wrapper img {
            padding-left: 3rem
        }
    }

    .navbar-nav.navbar-nav--menu .navbar-nav__title {
        padding-bottom: 1rem;
        color: #00afe4
    }

    .navbar-nav.navbar-nav--menu>.nav-item:not(:last-child) {
        margin-right: .9rem
    }

    @media (min-width:1200px) {
        .navbar-nav.navbar-nav--menu>.nav-item:not(:last-child) {
            margin-right: 1.25rem
        }
    }

    @media (min-width:1540px) {
        .navbar-nav.navbar-nav--menu>.nav-item:not(:last-child) {
            margin-right: 2rem
        }
    }

    .navbar-nav.navbar-nav--menu>.nav-item>.nav-link {
        position: relative;
        display: flex;
        align-items: center;
        height: 100%;
        padding: 20px 0 21px;
        color: #fff
    }

    .navbar-nav.navbar-nav--menu>.nav-item>.nav-link:after {
        display: none
    }

    .navbar-nav.navbar-nav--menu>.nav-item>.nav-link:before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        height: 1px;
        width: 0;
        background-color: #00afe4;
        transform: translateX(-50%);
        -webkit-transition: width .2s ease-in-out;
        -moz-transition: .2s width ease-in-out;
        -ms-transition: .2s width ease-in-out;
        -o-transition: .2s width ease-in-out;
        transition: width .2s ease-in-out
    }

    .navbar-nav.navbar-nav--menu>.nav-item>.nav-link:hover {
        color: #00afe4
    }

    .navbar-nav.navbar-nav--menu>.nav-item>.nav-link:hover:before {
        width: 100%
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown:not(.show) .navbar-nav__wrapper {
        display: none;
        height: 0
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown.show>.nav-link {
        color: #00afe4
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv2 {
        display: block;
        columns: 18rem 1;
        column-gap: 3rem;
        column-rule: 1px solid hsla(0, 0%, 82%, .2)
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-item {
        position: inherit;
        width: 0;
        padding: 0;
        -webkit-transition: all .3s linear;
        -moz-transition: all .3s linear;
        -ms-transition: all .3s linear;
        -o-transition: all .3s linear;
        transition: all .3s linear;
        break-inside: avoid;
        page-break-inside: avoid
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-item.show {
        width: 300px
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-item.show>.dropdown-link {
        color: #00afe4;
        padding-left: 1rem
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-item.show>.dropdown-link:before {
        visibility: visible;
        width: 100%
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-item.show>.dropdown-link:after {
        color: #00afe4
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-link {
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
        position: relative;
        display: flex;
        padding: .5rem 1.25rem .5rem 0;
        width: 100%;
        min-width: 300px;
        max-width: 300px;
        white-space: normal;
        color: #fff
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-link>span {
        position: relative
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-link>span:before {
        content: "";
        width: 100%;
        height: 1px;
        position: absolute;
        left: 0;
        bottom: -5px;
        background: #00afe4;
        transition: transform .5s ease-out;
        transform: scaleX(0);
        transform-origin: 0 50%
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-link:hover>span:before {
        transform: scaleX(1)
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv2.columns-2 {
        column-count: 2
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv2.columns-3 {
        column-count: 3
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv3 {
        position: absolute;
        top: 0;
        left: 350px;
        width: 400px;
        height: 100%;
        padding: 0 2rem 2rem
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv3:before {
        content: "";
        position: absolute;
        top: calc(-3rem - 34px);
        left: 0;
        height: 100vh;
        width: 400px;
        background-color: #fff;
        -webkit-box-shadow: inset 0 9px 6px -6px rgba(0, 0, 0, .07);
        -moz-box-shadow: inset 0 9px 6px -6px rgba(0, 0, 0, .07);
        box-shadow: inset 0 9px 6px -6px rgba(0, 0, 0, .07);
        pointer-events: none
    }

    .navbar-nav.navbar-nav--menu>.nav-item.dropdown .dropdown-menu--lv3 .dropdown-item {
        position: relative
    }

    html[lang=th] .navbar-nav.navbar-nav--menu>.nav-item>.nav-link {
        padding: 17px 0
    }

    html[lang=en] .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-link,
    html[lang=en] .navbar-nav.navbar-nav--hamburger>.nav-item>.nav-link {
        font-size: .875rem;
        font-weight: 400
    }

    html[lang=th] .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-link,
    html[lang=th] .navbar-nav.navbar-nav--hamburger>.nav-item>.nav-link {
        font-size: 1rem;
        font-weight: 300
    }

    .navbar-nav.navbar-nav--hamburger {
        margin: 10px 0 100px
    }

    @media (min-width:768px) {
        .navbar-nav.navbar-nav--hamburger {
            margin: 0
        }
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item {
        position: relative;
        border-bottom: 1px solid hsla(0, 0%, 100%, .15)
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item,
    .navbar-nav.navbar-nav--hamburger>.nav-item:before {
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item:before {
        content: "";
        position: absolute;
        top: 0;
        left: -15px;
        width: 0;
        height: 100%;
        background-color: #00afe4
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item>.nav-link {
        position: relative;
        padding: .75rem 1.25rem .75rem .25rem;
        color: #fff;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease
    }

    @media (min-width:768px) {
        .navbar-nav.navbar-nav--hamburger>.nav-item>.nav-link {
            padding: 1.25rem 1.25rem 1.25rem .25rem
        }
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item>.nav-link:hover {
        color: #00afe4
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown.show:before {
        width: calc(100% + 30px)
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown.show>.nav-link {
        color: #fff
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv2 {
        position: relative
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv2:before {
        content: "";
        position: absolute;
        top: 0;
        left: -15px;
        width: calc(100% + 30px);
        height: 100%;
        background-color: #00afe4
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-item {
        white-space: normal
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-link {
        position: relative;
        display: inline-block;
        color: #fff;
        padding-right: 1.5rem
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-link:hover {
        color: #00afe4
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv2 .dropdown-toggle:after {
        font-size: .875rem
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv3 {
        position: relative;
        margin-top: 1.5rem
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv3:before {
        content: "";
        position: absolute;
        top: 0;
        left: -30px;
        width: calc(100% + 60px);
        height: 100%;
        background-color: #fff
    }

    @media (min-width:768px) {
        .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv3 {
            padding-top: .75rem
        }
    }

    @media (min-width:1200px) {
        .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv3 {
            position: absolute;
            top: 0;
            left: 420px;
            width: 100%;
            height: 100%;
            padding-top: 0
        }

        .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv3.show:after {
            content: "";
            position: absolute;
            top: 0;
            left: -50px;
            width: 1px;
            height: 100%;
            background-color: #00afe4;
            -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease
        }
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv3 .dropdown-item {
        position: relative;
        padding: .75rem 0 .75rem 2rem;
        white-space: normal
    }

    .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv3 .dropdown-item:before {
        content: "";
        position: absolute;
        top: 50%;
        left: 1rem;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background-color: #00afe4;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    @media (min-width:1200px) {
        .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv3 .dropdown-item {
            padding: 0
        }

        .navbar-nav.navbar-nav--hamburger>.nav-item.dropdown .dropdown-menu--lv3 .dropdown-item:before {
            display: none
        }
    }

    .nav-slick {
        display: flex;
        justify-content: space-between;
        background-color: #fff;
        color: #00afe4;
        padding: 1rem;
        cursor: pointer;
        display: none
    }

    .nav-slick .nav-slick__title {
        text-transform: uppercase
    }

    .nav-slick .nav-slick__arrow.up {
        -moz-transform: rotate(180deg);
        -webkit-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg)
    }

    .block.block--performance {
        position: relative;
        margin: 4rem 0 0
    }

    .block.block--performance:before {
        left: 2%
    }

    .block.block--performance:after,
    .block.block--performance:before {
        position: absolute;
        top: 20vh;
        width: 35px;
        height: 125px;
        background-image: url(/themes/default/assets/static/images/icon/planb.png);
        background-repeat: no-repeat;
        content: ""
    }

    .block.block--performance:after {
        right: 2%
    }

    html[lang=en] .block.block--counter .counter .counter__text {
        font-size: 1.125rem;
        font-weight: 600
    }

    html[lang=en] .block.block--counter .counter .counter__number {
        font-size: 3.75rem
    }

    @media (max-width:991.98px) {
        html[lang=en] .block.block--counter .counter .counter__number {
            font-size: 2.5rem
        }
    }

    html[lang=en] .block.block--counter .counter .counter__unit {
        font-size: .875rem
    }

    html[lang=th] .block.block--counter .counter .counter__text {
        font-size: 1.25rem;
        font-weight: 500
    }

    html[lang=th] .block.block--counter .counter .counter__number {
        font-size: 3.75rem
    }

    @media (max-width:991.98px) {
        html[lang=th] .block.block--counter .counter .counter__number {
            font-size: 2.75rem
        }
    }

    html[lang=th] .block.block--counter .counter .counter__unit {
        font-size: 1rem
    }

    .block.block--counter {
        position: relative;
        z-index: 2
    }

    .block.block--counter .counter .counter__block {
        display: flex;
        flex-direction: column;
        justify-content: center
    }

    @media (min-width:768px) {
        .block.block--counter .counter .counter__block {
            justify-content: space-between;
            flex-direction: row
        }
    }

    .block.block--counter .counter .counter__item {
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 266px;
        height: 266px;
        margin: 0 auto 1rem;
        padding: 25px;
        color: #fff;
        text-align: center;
        background: #00afe4;
        border-radius: 50%
    }

    @media (max-width:991.98px) {
        .block.block--counter .counter .counter__item {
            width: 200px;
            height: 200px
        }
    }

    @media (max-width:767.98px) {
        .block.block--counter .counter .counter__item {
            width: 220px;
            height: 220px;
            margin-bottom: 2rem
        }
    }

    .block.block--counter .counter .counter__text {
        text-transform: uppercase
    }

    .block.block--counter .counter .counter__number {
        line-height: 1.2
    }

    .block.block--counter .counter .counter__unit {
        color: #fff
    }

    .block.block--counter .counter .counter__btn {
        padding-top: 5rem
    }

    @media (max-width:767.98px) {
        .block.block--counter .counter .counter__btn {
            padding-top: 3rem
        }
    }

    .table {
        border-bottom: 3px solid #001f53
    }

    .table td,
    .table th {
        border: 0;
        padding: .75rem 2rem;
        vertical-align: middle;
        border-bottom: 1px solid #ebebeb
    }

    .table thead tr td,
    .table thead tr th {
        background: #001f53;
        color: #fff;
        text-align: center;
        text-transform: uppercase;
        font-weight: 400
    }

    .table tbody tr.row-highlight td {
        text-transform: uppercase;
        background: #ebebeb
    }

    .table tbody tr.row-subhighlight td {
        text-transform: uppercase;
        background: #e5f7fc
    }

    .table--general-info {
        border: 0
    }

    .table--general-info tr:last-child td {
        border-bottom: 2px solid #001f53
    }

    .table--general-info td,
    .table--general-info th {
        padding: .75rem 3rem .75rem 2rem;
        border: 0
    }

    .table--general-info td:first-child,
    .table--general-info th:first-child {
        position: relative;
        background: #001f53;
        color: #fff;
        text-transform: uppercase;
        vertical-align: top
    }

    .table--general-info td:first-child:before,
    .table--general-info th:first-child:before {
        position: absolute;
        content: " ";
        left: 8%;
        bottom: 0;
        width: 84%;
        border-bottom: 1px solid #1c4675
    }

    .table--general-info td:first-child:after,
    .table--general-info th:first-child:after {
        position: absolute;
        content: ":";
        right: 40px;
        top: 11px
    }

    .table--general-info td:last-child,
    .table--general-info th:last-child {
        position: relative
    }

    .table--general-info td:last-child:before,
    .table--general-info th:last-child:before {
        position: absolute;
        content: " ";
        left: 3%;
        bottom: 0;
        width: 94%;
        border-bottom: 1px solid #ebebeb
    }

    .table--general-info td>a,
    .table--general-info th>a {
        color: #00afe4
    }

    .table--general-info td>a:hover,
    .table--general-info th>a:hover {
        text-decoration: underline
    }

    .table--financial-highlight td,
    .table--financial-highlight th {
        text-align: right;
        border-bottom: 0;
        padding: .75rem 1rem
    }

    .table--financial-highlight td:first-child,
    .table--financial-highlight th:first-child {
        text-align: left
    }

    .table--financial-highlight td:last-child {
        background: #fafafa
    }

    .table--download-pdf td,
    .table--download-pdf th {
        text-align: center
    }

    .table--shareholder-structure td,
    .table--shareholder-structure th {
        text-align: right
    }

    .table--shareholder-structure td:first-child,
    .table--shareholder-structure th:first-child {
        text-align: left
    }

    .table--shareholder-structure td:last-child {
        background: #fafafa
    }

    .table.table--historical-price tr td:not(:first-child),
    .table.table--historical-price tr th:not(:first-child) {
        text-align: center
    }

    .table.table--historical-price tr td:nth-child(6),
    .table.table--historical-price tr td:nth-child(7),
    .table.table--historical-price tr th:nth-child(6),
    .table.table--historical-price tr th:nth-child(7) {
        text-align: right
    }

    @media (max-width:991.98px) {

        .table.table--historical-price tr td,
        .table.table--historical-price tr th {
            white-space: nowrap
        }
    }

    .table--dividend td,
    .table--dividend th,
    .table--shareholder-meeting td:last-child {
        text-align: center
    }

    html[lang=en] .tabs .nav-item {
        font-size: 1.125rem
    }

    html[lang=th] .tabs .nav-item {
        font-size: 1.25rem
    }

    .tabs .nav-tabs {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin-top: -54px;
        border: 0
    }

    @media (max-width:767.98px) {
        .tabs .nav-tabs {
            margin-top: -105px
        }
    }

    .tabs .nav-item {
        flex: 0 0 40%;
        margin-bottom: 0
    }

    @media (max-width:767.98px) {
        .tabs .nav-item {
            flex: 0 0 100%
        }
    }

    .tabs .nav-item .nav-link {
        display: block;
        width: 100%;
        color: #001f53;
        text-align: center;
        text-transform: uppercase;
        padding: 12px 20px;
        background-color: #ebebeb;
        transition: all .3s ease-in-out;
        border: none
    }

    .tabs .nav-item .nav-link.active,
    .tabs .nav-item .nav-link:hover {
        background-color: #001f53;
        color: #fff
    }

    .tabs .nav-item:first-child>a,
    .tabs .nav-item:first-child>a.acitve,
    .tabs .nav-item:first-child>a:hover {
        border-top-left-radius: 10px
    }

    @media (max-width:767.98px) {

        .tabs .nav-item:first-child>a,
        .tabs .nav-item:first-child>a.acitve,
        .tabs .nav-item:first-child>a:hover {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px
        }
    }

    .tabs .nav-item:last-child>a,
    .tabs .nav-item:last-child>a.active,
    .tabs .nav-item:last-child>a:hover {
        border-top-right-radius: 10px
    }

    @media (max-width:767.98px) {

        .tabs .nav-item:last-child>a,
        .tabs .nav-item:last-child>a.active,
        .tabs .nav-item:last-child>a:hover {
            border-top-right-radius: 0
        }
    }

    .tabs .tab-content {
        margin: 60px 0
    }

    .tooltip {
        opacity: 1;
        position: relative;
        z-index: 10;
        display: inline;
        font-size: .75em;
        color: #212529;
        margin-left: 2px;
        margin-top: -2px
    }

    .tooltip:hover .tooltip__show {
        opacity: 1;
        transition: all .15s linear;
        transform: translate3d(-50px, 0, 0)
    }

    .tooltip .tooltip__show {
        opacity: 0;
        display: flex;
        flex-direction: row;
        position: absolute;
        top: -28px;
        left: 70px;
        width: 170px;
        font-size: 11px;
        background: #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, .2);
        padding: 10px;
        border-radius: 7px
    }

    .tooltip .tooltip__show .tooltip__num {
        padding-right: 5px
    }

    .tooltip .tooltip__show .tooltip__num .num {
        background: #001f53;
        color: #fff;
        border-radius: 20px;
        padding: 1px 4px 4px;
        margin-right: 2px
    }

    .list {
        list-style: none;
        padding: 0;
        flex-direction: column
    }

    .list .list__info {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap
    }

    .list .list__info .list__subject {
        flex: 0 0 25%;
        font-weight: 700
    }

    @media (max-width:991.98px) {
        .list .list__info .list__subject {
            flex: 0 0 100%
        }
    }

    .list .list__info .list__detail {
        flex: 0 0 75%
    }

    @media (max-width:991.98px) {
        .list .list__info .list__detail {
            flex: 0 0 100%
        }
    }

    .list .list__info .list__detail .list__email,
    .list .list__info .list__detail .list__link {
        color: #00afe4
    }

    .list .list__info .list__detail .list__email:hover,
    .list .list__info .list__detail .list__link:hover {
        text-decoration: underline
    }

    .list--bullet li {
        position: relative;
        padding-left: 2rem
    }

    .list--bullet li:before {
        content: "";
        position: absolute;
        left: 15px;
        top: 6px;
        width: 8px;
        height: 8px;
        background-color: #00afe4;
        border-radius: 50%
    }

    .list--experience .list__info .list__subject {
        flex: 0 0 35%
    }

    @media (max-width:767.98px) {
        .list--experience .list__info .list__subject {
            flex: 0 0 100%
        }
    }

    .list--experience .list__info .list__detail {
        flex: 0 0 65%
    }

    @media (max-width:767.98px) {
        .list--experience .list__info .list__detail {
            flex: 0 0 100%
        }
    }

    .block--circle-item {
        display: flex;
        flex-direction: column;
        vertical-align: top;
        margin-bottom: 2rem
    }

    .block--circle-item .block__content {
        display: flex;
        flex-direction: row;
        padding: 1.2rem 0;
        border-bottom: 1px solid #ebebeb
    }

    @media (max-width:767.98px) {
        .block--circle-item .block__content {
            flex-direction: column
        }
    }

    .block--circle-item .block__list {
        padding: 1rem 1rem 1rem 0;
        text-align: center
    }

    @media (max-width:767.98px) {
        .block--circle-item .block__list {
            display: flex;
            justify-content: center
        }
    }

    .block--circle-item .block__item {
        display: inline-block;
        width: 70px;
        height: 70px;
        background: #00afe4;
        border-radius: 50%;
        color: #fff;
        text-transform: uppercase;
        text-align: center
    }

    .block--circle-item .block__detail {
        display: flex;
        flex-direction: column;
        justify-content: center
    }

    html[lang=en] .block--circle-item .block__item--month {
        font-size: 1.125rem
    }

    html[lang=th] .block--circle-item .block__item--month {
        font-size: 1.25rem
    }

    .block--circle-item .block__item--month {
        display: flex;
        justify-content: center;
        align-items: center
    }

    html[lang=en] .block--circle-item .block__item--num {
        font-size: 1.875rem
    }

    html[lang=th] .block--circle-item .block__item--num {
        font-size: 2rem
    }

    .block--circle-item .block__item--num {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .block--circle-item .block__content--icon {
        padding: 1rem 1.5rem
    }

    html[lang=en] .form .form-group label,
    html[lang=en] .form .form-group p {
        font-size: .875rem
    }

    html[lang=en] .form .form-group .form-group__search ::placeholder {
        font-size: .875rem;
        font-weight: 600
    }

    html[lang=en] .form .form-group ::placeholder {
        font-size: .875rem;
        font-weight: 600
    }

    html[lang=en] .form .form-group .custom-file .custom-file-label {
        font-size: .875rem;
        font-weight: 600
    }

    html[lang=en] .form .form--datepicker .text-title {
        font-size: 1rem
    }

    html[lang=en] .select .select__input {
        font-size: .875rem;
        font-weight: 600
    }

    html[lang=th] .form .form-group label,
    html[lang=th] .form .form-group p {
        font-size: 1rem
    }

    html[lang=th] .form .form-group .form-group__search ::placeholder {
        font-size: 1rem;
        font-weight: 500
    }

    html[lang=th] .form .form-group ::placeholder {
        font-size: 1rem;
        font-weight: 500
    }

    html[lang=th] .form .form-group .custom-file .custom-file-label {
        font-size: 1rem;
        font-weight: 500
    }

    html[lang=th] .form .form--datepicker .text-title {
        font-size: 1.125rem
    }

    html[lang=th] .select .select__input {
        font-size: 1rem;
        font-weight: 500
    }

    .form .form-group {
        margin-bottom: 1.5rem !important;
        display: flex;
        margin-bottom: 0;
        align-items: center;
        flex-direction: row
    }

    @media (max-width:991.98px) {
        .form .form-group {
            margin-bottom: 1rem;
            margin-left: 0
        }
    }

    .form .form-group .form-control {
        border: 1px solid #b2b2b2;
        border-radius: 0;
        background-color: transparent;
        box-shadow: none;
        height: 40px;
        color: #001f53
    }

    .form .form-group .form-label {
        color: #00afe4
    }

    .form .form-group .form-datepicker {
        position: relative;
        display: inline-flex;
        width: 100%
    }

    @media (max-width:767.98px) {
        .form .form-group .form-datepicker {
            width: 100%
        }
    }

    .form .form-group .form-datepicker:after {
        font-family: Font Awesome\ 5 Pro;
        font-weight: 300;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
        content: "\F073";
        position: absolute;
        top: 0;
        right: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-width: 45px;
        height: 100%;
        color: #001f53;
        line-height: 2;
        background-color: transparent;
        pointer-events: none
    }

    .form .form-group .form-group__search {
        font-size: 1rem;
        display: flex;
        position: absolute;
        z-index: 4
    }

    .form .form-group .form-group__search>i {
        position: relative;
        color: #fff;
        margin: auto
    }

    .form .form-group .form-group__search ::placeholder {
        color: #001f53
    }

    .form .form-group .form-group__input {
        box-shadow: none;
        padding: .7rem;
        width: 360px;
        border: 1px solid #ebebeb;
        border-radius: 5px
    }

    .form .form-group .form-group__button {
        position: absolute;
        right: 10px;
        top: 5px;
        background-color: transparent;
        border: none
    }

    .form .form-group .form-group__button>.icon {
        color: #001f53
    }

    .form .form-group ::placeholder {
        color: #001f53
    }

    .form .custom-file .custom-file-input,
    .form .custom-file .custom-file-label {
        height: 40px;
        box-shadow: none;
        outline: 0
    }

    .form .custom-file .custom-file-input {
        border-color: #00afe4
    }

    .form .custom-file .custom-file-input:focus,
    .form .custom-file .custom-file-input:hover {
        outline: none;
        border-color: #00afe4
    }

    .form .custom-file .custom-file-label {
        display: flex;
        align-items: center;
        color: #ebebeb;
        background-color: transparent;
        border-radius: 0;
        border-color: #00afe4;
        box-shadow: none;
        outline: 0
    }

    .form .custom-file .custom-file-label:after {
        font-family: Font Awesome\ 5 Pro;
        font-weight: 300;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
        content: "\F07C";
        display: flex;
        justify-content: center;
        align-items: center;
        width: 45px;
        height: 38px;
        color: #fff;
        font-size: 22px;
        background-color: #00afe4;
        border-radius: 0;
        border-color: #00afe4
    }

    .form .custom-control .custom-control-input {
        z-index: 5
    }

    .form .custom-control .custom-control-label {
        text-transform: capitalize
    }

    .select {
        position: relative;
        overflow: hidden;
        display: block;
        width: 185px;
        height: 40px;
        margin: 0;
        text-align: center;
        cursor: pointer
    }

    @media (max-width:767.98px) {
        .select {
            width: 100%
        }
    }

    .select.select--catagory {
        width: 100%
    }

    .select:after {
        font-family: Font Awesome\ 5 Pro;
        font-weight: 100;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        content: "\F107";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        color: #fff;
        background: #001f53;
        border-radius: 0 5px 5px 0;
        pointer-events: none;
        font-size: 1.875rem
    }

    .select .select__input {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        appearance: none;
        width: 100%;
        height: 100%;
        outline: 0;
        box-shadow: none;
        border: 1px solid #ebebeb;
        border-radius: 5px;
        background-image: none;
        color: #000;
        background: transparent;
        padding-left: 1rem
    }

    .select .select__input::-ms-expand {
        display: none
    }

    .select .select__input :focus {
        border: none
    }

    .ui-datepicker {
        z-index: 3 !important
    }

    .ui-datepicker .ui-datepicker-header {
        background: #00afe4;
        border: 1px solid #00afe4
    }

    .ui-datepicker .ui-state-default {
        color: #00afe4;
        background-color: #fff
    }

    .ui-datepicker .ui-state-active,
    .ui-datepicker .ui-state-focus,
    .ui-datepicker .ui-state-hover,
    .ui-datepicker .ui-widget-content .ui-state-active,
    .ui-datepicker .ui-widget-content .ui-state-focus,
    .ui-datepicker .ui-widget-content .ui-state-hover,
    .ui-datepicker .ui-widget-header .ui-state-active,
    .ui-datepicker .ui-widget-header .ui-state-focus,
    .ui-datepicker .ui-widget-header .ui-state-hover {
        color: #fff;
        background: #00afe4;
        border: 1px solid #00afe4
    }

    .form-group {
        width: 100%
    }

    .form-group .form-search {
        position: relative;
        overflow: hidden;
        border-radius: 3px
    }

    .form-group .form-search .form-control {
        padding: .375rem 3.25rem .375rem 1rem;
        border-bottom: 1px solid #001f53
    }

    .form-group .form-search .btn {
        position: absolute;
        z-index: 1;
        right: 0;
        top: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 2.75rem;
        margin: auto;
        color: #00afe4;
        font-size: .8125rem
    }

    .form-group .custom-control {
        display: inline-block;
        padding-left: 2rem
    }

    .form-group .custom-control .custom-control-input {
        z-index: 10;
        top: 3px;
        width: 1.25rem
    }

    .form-group .custom-control .custom-control-input:focus~.custom-control-label:before {
        box-shadow: none
    }

    .form-group .custom-control .custom-control-input:active~.custom-control-label:before {
        border-color: #ebebeb;
        background-color: transparent
    }

    .form-group .custom-control .custom-control-input:focus:not(:checked)~.custom-control-label:before {
        border-color: #ebebeb
    }

    .form-group .custom-control .custom-control-label:after,
    .form-group .custom-control .custom-control-label:before {
        top: 0;
        left: -2rem;
        width: 1.25rem;
        height: 1.25rem
    }

    .form-group .custom-control.custom-radio+.custom-radio {
        margin-left: 1rem
    }

    .form-group .custom-control.custom-radio .custom-control-input:checked~.custom-control-label:before {
        border: 2px solid #0eb173;
        background-color: #fff
    }

    .form-group .custom-control.custom-radio .custom-control-input:checked~.custom-control-label:after {
        background-image: none;
        background-color: #0eb173;
        border-radius: 100%
    }

    .form-group .custom-control.custom-radio .custom-control-label:after {
        top: 5px;
        left: -27px;
        width: 10px;
        height: 10px
    }

    .form-group .custom-control.custom-checkbox .custom-control-input {
        z-index: 10;
        top: 3px;
        width: 1.25rem
    }

    .form-group .custom-control.custom-checkbox .custom-control-input:checked~.custom-control-label:before {
        border-color: hsla(0, 0%, 92.2%, .8);
        background-color: #fff
    }

    .form-group .custom-control.custom-checkbox .custom-control-input:checked~.custom-control-label:after {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath fill='red' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3E%3C/svg%3E")
    }

    .form-group .custom-control.custom-checkbox .custom-control-input.custom-control-input--red {
        z-index: 10;
        top: 3px;
        width: 1.25rem
    }

    .form-group .custom-control.custom-checkbox .custom-control-input.custom-control-input--red:checked~.custom-control-label:before {
        border-color: hsla(0, 0%, 92.2%, .8);
        background-color: #fff
    }

    .form-group .custom-control.custom-checkbox .custom-control-input.custom-control-input--red:checked~.custom-control-label:after {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath fill='red' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3E%3C/svg%3E")
    }

    .form-group .custom-control.custom-checkbox .custom-control-label:before {
        border-radius: 3px
    }

    .form-group .custom-control.custom-checkbox .custom-control-label:after {
        background-repeat: no-repeat;
        background-position: 60%;
        background-size: 60% 60%
    }

    .form-group .custom-file {
        position: relative
    }

    .form-group .custom-file .custom-file-label {
        position: relative;
        color: #001f53;
        width: 100%;
        border: 1px solid #b2b2b2;
        padding: 1rem
    }

    .form-group .custom-file .custom-file-input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer
    }

    html[lang=en] .accordion--primary .card__title {
        font-size: 1rem;
        font-weight: 600
    }

    html[lang=th] .accordion--primary .card__title {
        font-size: 1.125rem;
        font-weight: 500
    }

    .accordion--primary {
        background-color: transparent;
        border-radius: 0;
        padding-bottom: .5rem;
        margin-bottom: 30px
    }

    .accordion--primary .card {
        border: 0;
        border-radius: 0;
        background-color: transparent
    }

    .accordion--primary .card:not(:first-child) {
        margin-top: 1px
    }

    .accordion--primary .card__header {
        position: relative;
        padding: .95rem 3.5rem .95rem 2rem;
        border-radius: 0;
        background-color: #001f53;
        color: #fff;
        text-transform: uppercase
    }

    .accordion--primary .card__header:before {
        font-family: Font Awesome\ 5 Pro;
        font-weight: 300;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
        content: "\F067";
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        border-radius: 50%;
        margin: auto 0;
        font-weight: 400;
        right: .75rem;
        width: 30px;
        height: 30px;
        font-size: .875rem;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease
    }

    @media (min-width:768px) {
        .accordion--primary .card__header:before {
            right: 1rem;
            width: 40px;
            height: 40px;
            font-size: 1rem
        }
    }

    .accordion--primary .card__header:hover:before {
        color: #fff
    }

    .accordion--primary .card__header[aria-expanded=true]:before {
        font-family: Font Awesome\ 5 Pro;
        font-weight: 300;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
        content: "\F068";
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto 0;
        font-weight: 400;
        right: .75rem;
        width: 30px;
        height: 30px;
        font-size: .875rem
    }

    @media (min-width:768px) {
        .accordion--primary .card__header[aria-expanded=true]:before {
            right: 1rem;
            width: 40px;
            height: 40px;
            font-size: 1rem
        }
    }

    .accordion--primary .card__title {
        color: #fff;
        margin-bottom: 0
    }

    .accordion--primary .card__body {
        position: relative;
        padding: 0
    }

    .accordion--primary .card__wrapper {
        position: relative;
        padding: 2rem;
        z-index: 2;
        background: #f8f8f8;
        border-bottom: 1px solid #00afe4;
        margin-bottom: 10px
    }

    html[lang=en] .banner .banner__title {
        font-size: 2.5rem;
        font-weight: 600
    }

    @media (max-width:767.98px) {
        html[lang=en] .banner .banner__title {
            font-size: 1.875rem
        }
    }

    @media (max-width:575.98px) {
        html[lang=en] .banner .banner__title {
            font-size: 1.5rem
        }
    }

    html[lang=th] .banner .banner__title {
        font-size: 2.75rem;
        font-weight: 500
    }

    @media (max-width:767.98px) {
        html[lang=th] .banner .banner__title {
            font-size: 2rem
        }
    }

    @media (max-width:575.98px) {
        html[lang=th] .banner .banner__title {
            font-size: 1.5rem
        }
    }

    .banner {
        position: relative;
        height: 300px;
        text-align: center;
        padding: 8rem 2rem 4rem;
        margin-top: 6rem;
        background: linear-gradient(90deg, #001f53 50%, #00a6db);
        color: #fff
    }

    .banner .banner__title {
        text-transform: uppercase
    }

    html[lang=en] .breadcrumb .breadcrumb-item,
    html[lang=en] .breadcrumb .breadcrumb-link {
        font-size: .875rem;
        font-weight: 500
    }

    html[lang=th] .breadcrumb .breadcrumb-item,
    html[lang=th] .breadcrumb .breadcrumb-link {
        font-size: 1rem;
        font-weight: 400
    }

    .breadcrumb {
        padding-left: 0;
        align-items: center;
        justify-content: center;
        background-color: transparent;
        margin: 0;
        color: #fff
    }

    @media (max-width:767.98px) {
        .breadcrumb {
            display: none
        }
    }

    .breadcrumb .breadcrumb-item {
        display: flex;
        align-items: center
    }

    .breadcrumb .breadcrumb-item+.breadcrumb-item:before {
        position: relative;
        display: inline-block;
        width: 4px;
        height: 4px;
        background-color: #fff;
        border-radius: 50%;
        padding-right: 0;
        margin: 0 .5rem;
        color: #fff;
        content: " "
    }

    .breadcrumb .breadcrumb-item.active,
    .breadcrumb .breadcrumb-link {
        color: #fff
    }

    .video-js {
        background-size: cover;
        transition: all .4s ease-out
    }

    .video-js .vjs-big-play-button {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: 10px solid rgba(0, 175, 228, .5);
        width: 3em;
        height: 3em;
        border-radius: 100%
    }

    .video-js .vjs-big-play-button:after {
        position: absolute;
        top: 0;
        display: block;
        width: 100%;
        height: 100%;
        content: "";
        background-color: #fff;
        border-radius: 100%
    }

    .video-js .vjs-big-play-button .vjs-icon-placeholder {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .video-js .vjs-big-play-button .vjs-icon-placeholder:before {
        position: relative;
        width: auto;
        height: auto;
        font-size: 2.5rem;
        color: #00afe4;
        z-index: 9
    }

    .video-js .vjs-poster:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .3)
    }

    .video-js:focus .vjs-big-play-button,
    .video-js:hover .vjs-big-play-button {
        border: 10px solid rgba(0, 175, 228, .5)
    }

    .video-js:focus .vjs-icon-placeholder:before,
    .video-js:hover .vjs-icon-placeholder:before {
        color: #00afe4
    }

    .video-js .vjs-loading-spinner {
        display: none
    }

    html[lang=en] .echarts__tooltip {
        font-size: 1rem;
        font-weight: 400
    }

    html[lang=en] .chart-container .header {
        font-size: 3.125rem;
        font-weight: 400
    }

    html[lang=en] .chart-container small {
        font-size: 1rem
    }

    html[lang=en] .legend .legend__text {
        font-size: .875rem
    }

    html[lang=th] .echarts__tooltip {
        font-size: 1.125rem;
        font-weight: 300
    }

    html[lang=th] .chart-container .header {
        font-size: 3.125rem;
        font-weight: 300
    }

    html[lang=th] .chart-container small {
        font-size: 1.125rem
    }

    html[lang=th] .legend .legend__text {
        font-size: 1rem
    }

    .chart-container {
        background: #fafafa;
        padding: 1.5rem
    }

    .chart-container .header {
        padding: 0 0 0 2.5rem;
        text-transform: uppercase;
        color: #e5f7fc;
        position: relative
    }

    .chart-container .header:before {
        content: "";
        width: 1.75rem;
        height: 2px;
        position: absolute;
        top: 13px;
        left: 0;
        background: #001f53
    }

    .echarts {
        width: 100%;
        height: 250px;
        margin: 2rem 0 0
    }

    .echarts.echarts--revenue,
    .echarts.echarts--shareholder {
        width: 100%;
        max-width: 100%;
        height: 350px;
        margin-top: 0
    }

    @media (max-width:767.98px) {

        .echarts.echarts--revenue,
        .echarts.echarts--shareholder {
            margin-bottom: 1rem
        }
    }

    .echarts.echarts--revenue .echarts__bullet,
    .echarts.echarts--shareholder .echarts__bullet {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        padding-left: 12px
    }

    @media (max-width:991.98px) {

        .echarts.echarts--revenue .echarts__bullet,
        .echarts.echarts--shareholder .echarts__bullet {
            max-width: 220px;
            white-space: pre-wrap
        }
    }

    @media (max-width:767.98px) {

        .echarts.echarts--revenue .echarts__bullet,
        .echarts.echarts--shareholder .echarts__bullet {
            max-width: 160px
        }
    }

    .echarts.echarts--revenue .echarts__bullet>span:first-child:before,
    .echarts.echarts--shareholder .echarts__bullet>span:first-child:before {
        content: " ";
        border-radius: 20px;
        width: 8px;
        height: 8px;
        position: absolute;
        left: 10px;
        top: 16px
    }

    .echarts.echarts--revenue .echarts__bullet>span:last-child,
    .echarts.echarts--shareholder .echarts__bullet>span:last-child {
        color: #001f53
    }

    .echarts.echarts--revenue .echarts__bullet {
        max-width: 320px;
        white-space: pre-wrap
    }

    .echarts__tooltip {
        text-align: center;
        position: relative
    }

    .echarts__tooltip .value {
        color: #00afe4
    }

    .echarts__tooltip:after {
        content: "";
        position: absolute;
        left: calc(50% - 8px);
        bottom: -13px;
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-top: 8px solid #fff;
        clear: both
    }

    .legend.legend--shareholder {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center
    }

    .legend.legend--shareholder .legend__unit {
        display: flex;
        align-items: center;
        padding: 0 0 1rem;
        cursor: pointer
    }

    @media (max-width:767.98px) {
        .legend.legend--shareholder .legend__unit {
            flex-direction: row;
            padding: 0 1rem 1rem
        }
    }

    .legend.legend--shareholder .legend__unit .legend__bullet {
        display: inline-block;
        width: 12px;
        height: 12px;
        margin-right: .75rem;
        border-radius: 50%
    }

    .legend.legend--shareholder .legend__unit .legend__text {
        margin-right: .5rem
    }

    .legend.legend--shareholder .legend__unit.disabled .legend__text {
        color: #000
    }

    .legend.legend--revenue {
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap
    }

    .legend.legend--revenue .legend__unit {
        display: flex;
        align-items: center;
        padding: 0 0 1rem;
        cursor: pointer
    }

    @media (max-width:767.98px) {
        .legend.legend--revenue .legend__unit {
            flex-direction: row;
            justify-content: center
        }
    }

    .legend.legend--revenue .legend__unit .legend__bullet {
        display: inline-block;
        width: 12px;
        height: 12px;
        margin-right: .75rem;
        border-radius: 50%
    }

    .legend.legend--revenue .legend__unit .legend__text {
        margin-right: .5rem
    }

    .legend.legend--revenue .legend__unit.disabled .legend__text {
        color: #000
    }

    .btn--pdf {
        position: relative;
        top: 0;
        width: 18px;
        height: 24px;
        background-image: url(/themes/default/assets/static/images/icon/download-pdf.svg);
        background-repeat: no-repeat;
        background-size: contain;
        transition: .3s ease
    }

    .btn--pdf:hover {
        background-image: url(/themes/default/assets/static/images/icon/download-pdf-hover.svg);
        top: 5px
    }

    .element-background {
        position: relative
    }

    .element-background:after,
    .element-background:before {
        content: "";
        background-image: url(/themes/default/assets/static/images/default/element-circle.png);
        background-repeat: no-repeat;
        width: 420px;
        height: 420px;
        position: absolute;
        z-index: -1
    }

    .element-background--left:before {
        content: "";
        top: 0;
        left: -150px
    }

    .element-background--left:after {
        content: "";
        right: -180px;
        bottom: 15px
    }

    .element-background--right:before {
        right: -180px;
        top: -135px
    }

    .element-background--right:after {
        bottom: 15px;
        left: -95px
    }

    .pagination {
        justify-content: center;
        padding: 0;
        margin: 2rem 0 0
    }

    .pagination .page-item {
        position: relative;
        padding: 0;
        margin: 0 .25rem
    }

    .pagination .page-item:after {
        position: absolute;
        top: 7px;
        right: -5px;
        width: 2px;
        height: 15px;
        content: "";
        background: #bcbcbc
    }

    .pagination .page-item.disabled .page-link {
        color: #ebebeb
    }

    .pagination .page-item.active .page-link {
        color: #00afe4
    }

    .pagination .page-item:first-child:after,
    .pagination .page-item:last-child:after {
        background: transparent
    }

    .pagination .page-link {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
        padding: 0;
        margin: 0;
        border: none;
        color: #232323;
        background-color: transparent !important
    }

    .pagination .page-link:active,
    .pagination .page-link:focus,
    .pagination .page-link:hover {
        outline: none;
        box-shadow: none
    }

    .pagination .page-link:hover {
        color: #00afe4
    }

    @media (max-width:767.98px) {

        html[lang=en] .text-stroke-blue-darkblue.h1,
        html[lang=en] .text-stroke-blue-white.h1,
        html[lang=en] .text-stroke-darkblue.h1 {
            font-size: 2.5rem
        }

        html[lang=en] .text-stroke-blue-darkblue.h3,
        html[lang=en] .text-stroke-blue-white.h3,
        html[lang=en] .text-stroke-darkblue.h3 {
            font-size: 1.875rem
        }
    }

    @media (max-width:767.98px) {

        html[lang=th] .text-stroke-blue-darkblue.h1,
        html[lang=th] .text-stroke-blue-white.h1,
        html[lang=th] .text-stroke-darkblue.h1 {
            font-size: 2.75rem
        }

        html[lang=th] .text-stroke-blue-darkblue.h3,
        html[lang=th] .text-stroke-blue-white.h3,
        html[lang=th] .text-stroke-darkblue.h3 {
            font-size: 2rem
        }
    }

    .text-stroke-blue-darkblue {
        text-transform: uppercase;
        color: #001f53
    }

    .text-stroke-blue-darkblue .stroke {
        -webkit-text-fill-color: transparent;
        -webkit-text-stroke-color: #00afe4;
        -webkit-text-stroke: 1px #00afe4;
        color: transparent;
        text-shadow: none
    }

    .text-stroke-darkblue {
        text-transform: uppercase;
        color: #001f53
    }

    .text-stroke-darkblue .stroke {
        -webkit-text-fill-color: transparent;
        -webkit-text-stroke-color: #001f53;
        -webkit-text-stroke: 1px #001f53;
        color: transparent;
        text-shadow: none
    }

    .text-stroke-blue-white {
        text-transform: uppercase;
        color: #fff
    }

    .text-stroke-blue-white .stroke {
        -webkit-text-fill-color: transparent;
        -webkit-text-stroke-color: #00afe4;
        -webkit-text-stroke: 1px #00afe4;
        color: transparent;
        text-shadow: none
    }

    .iframe {
        -webkit-overflow-scrolling: touch;
        overflow: hidden
    }

    .iframe iframe {
        overflow: hidden;
        max-width: 100%;
        min-width: 100%;
        width: 0;
        border: 0
    }

    .iframe iframe.email-alerts {
        min-height: 450px
    }

    .iframe iframe.email-alerts-unsubscribe {
        min-height: 300px
    }

    .iframe iframe.download {
        min-height: 700px
    }

    .iframe iframe.interactive-chart {
        min-height: 600px
    }

    .iframe iframe.investment-calculator {
        min-height: 800px
    }

    

    .section .section__border {
        border: 1px solid hsla(0, 0%, 43.9%, .2);
        padding: 1rem
    }

    .section-nav-slick {
        border-bottom: 1px solid #ebebeb
    }

    @media (max-width:991.98px) {
        .section-nav-slick {
            border-bottom: 0
        }
    }

    html[lang=en] .header .header__link .link {
        font-size: .75rem;
        font-weight: 400
    }

    html[lang=en] .header .header__link .link .icon {
        font-size: .5625rem;
        font-weight: 600
    }

    html[lang=en] .header .navbar-nav.navbar-nav--menu>.nav-item>.nav-link {
        font-size: .75rem;
        font-weight: 400
    }

    html[lang=en] .header .language .language__link {
        font-size: .875rem;
        font-weight: 600
    }

    html[lang=th] .header .header__link .link {
        font-size: .875rem;
        font-weight: 300
    }

    html[lang=th] .header .header__link .link .icon {
        font-size: .5625rem;
        font-weight: 500
    }

    html[lang=th] .header .navbar-nav.navbar-nav--menu>.nav-item>.nav-link {
        font-size: .875rem;
        font-weight: 300
    }

    html[lang=th] .header .language .language__link {
        font-size: 1rem;
        font-weight: 500
    }

    .header {
        position: fixed;
        top: 0;
        left: 0;
        height: 97px;
        width: 100%;
        background-color: #001f53;
        box-shadow: 0 3px 20px rgba(0, 0, 0, .2);
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
        z-index: 1024
    }

    .header .navbar {
        height: 100%;
        padding: 0
    }

    .header .header__nav {
        display: flex;
        align-items: center;
        padding: .75rem 0 0
    }

    @media (min-width:768px) {
        .header .header__nav {
            justify-content: flex-end
        }
    }

    .header .header__item {
        position: relative;
        display: flex
    }

    .header .header__logo {
        margin-top: 1rem
    }

    @media (max-width:767.98px) {
        .header .header__logo {
            width: 80px
        }
    }

    .header .header__logo .logo .img-fluid {
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease
    }

    .header .header__link {
        padding: 0 1.5rem
    }

    .header .header__link .link,
    .header .header__link .link:hover {
        color: #ebebeb
    }

    .header .header__link .link .icon {
        padding-right: 5px
    }

    @media (min-width:1200px) {
        .header .header__menu {
            display: block
        }
    }

    .header .header__button {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: .5rem 0 0;
        margin: 0 0 0 1rem
    }

    @media (min-width:1200px) {
        .header .header__button {
            display: none
        }
    }

    .header .header__button .navbar-toggler {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        padding: 0;
        border: 0;
        border-radius: 0;
        outline: none
    }

    .header .header__button .navbar-toggler>span {
        display: block
    }

    .header .header__button .navbar-toggler>span span {
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease
    }

    .header .header__button .navbar-toggler>span span:nth-child(n+1):nth-child(-n+3) {
        position: relative;
        display: block;
        height: 2px;
        width: 24px;
        margin: 4px auto;
        background-color: #00afe4;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    @media (min-width:576px) {
        .header .header__button .navbar-toggler>span span:nth-child(n+1):nth-child(-n+3) {
            width: 26px;
            margin: 5px auto
        }
    }

    .header .header__button .navbar-toggler:not(.collapsed)>span {
        color: #00afe4
    }

    .header .header__button .navbar-toggler:not(.collapsed)>span span:first-child {
        top: 6px;
        background-color: #00afe4;
        -webkit-transform: rotate(135deg);
        -moz-transform: rotate(135deg);
        -ms-transform: rotate(135deg);
        -o-transform: rotate(135deg);
        transform: rotate(135deg)
    }

    .header .header__button .navbar-toggler:not(.collapsed)>span span:nth-child(2) {
        width: 0
    }

    .header .header__button .navbar-toggler:not(.collapsed)>span span:nth-child(3) {
        bottom: 6px;
        background-color: #00afe4;
        -webkit-transform: rotate(-135deg);
        -moz-transform: rotate(-135deg);
        -ms-transform: rotate(-135deg);
        -o-transform: rotate(-135deg);
        transform: rotate(-135deg)
    }

    @media (min-width:576px) {
        .header .header__button .navbar-toggler:not(.collapsed)>span span:nth-child(3) {
            bottom: 8px
        }
    }

    .header .header__hamburger {
        position: fixed;
        top: 80px;
        left: 0;
        width: 100%;
        min-height: 500px;
        max-height: 800px;
        background-color: #001f53;
        overflow: scroll;
        z-index: -1;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease
    }

    @media (min-width:768px) {
        .header .header__hamburger {
            padding-top: 1rem;
            padding-bottom: calc(1rem + 64px)
        }
    }

    @media (min-width:1200px) {
        .header .header__hamburger {
            display: none
        }
    }

    .header .header__block {
        width: 100%;
        padding: 1rem
    }

    .header .header__block .slide-menu {
        width: 100%;
        height: 1000px !important;
        overflow-y: scroll
    }

    .header .language {
        position: relative
    }

    .header .language .language__link {
        color: #00afe4
    }

    .header .language .language__link:hover {
        color: #fff
    }

    .header.header--transparent {
        background-color: transparent;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        box-shadow: none
    }

    .header.header--transparent .navbar {
        border-bottom: 1px solid hsla(0, 0%, 82%, .2)
    }

    .header.header--transparent .header__link .link,
    .header.header--transparent .header__link .link:hover {
        color: #fff
    }

    .header.header--transparent .language:before {
        border: 1px solid hsla(0, 0%, 100%, .6)
    }

    .header.header--transparent .language .language__link {
        color: #00afe4
    }

    .header.header--transparent .language .language__link:hover,
    .header.header--transparent .navbar-nav.navbar-nav--menu>.nav-item>.nav-link,
    .header.header--transparent .navbar-nav.navbar-nav--menu>.nav-item>.nav-link:hover {
        color: #fff
    }

    .header.header--transparent .header__button .navbar-toggler>span span {
        background-color: #fff
    }

    .header.header--menu {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        box-shadow: none;
        -webkit-transition: width .3s ease-in-out;
        -moz-transition: .3s width ease-in-out;
        -ms-transition: .3s width ease-in-out;
        -o-transition: .3s width ease-in-out;
        transition: width .3s ease-in-out
    }

    html[lang=en] .footer .shortcut__text {
        font-size: 1.125rem;
        font-weight: 600
    }

    html[lang=en] .footer .footer__top .email-alert>p,
    html[lang=en] .footer .footer__top .social-icon>p {
        font-size: .875rem;
        font-weight: 400
    }

    html[lang=en] .footer .footer__bottom {
        font-size: .75rem;
        font-weight: 400
    }

    html[lang=en] .footer .social-icon .icon-circle .icon-facebook {
        font-size: .875rem
    }

    html[lang=en] .footer .social-icon .icon-circle .icon-instagram {
        font-size: 1rem
    }

    html[lang=th] .footer .shortcut__text {
        font-size: 1.25rem;
        font-weight: 500
    }

    html[lang=th] .footer .footer__top .email-alert>p,
    html[lang=th] .footer .footer__top .social-icon>p {
        font-size: 1rem;
        font-weight: 300
    }

    html[lang=th] .footer .footer__bottom {
        font-size: .875rem;
        font-weight: 300
    }

    html[lang=th] .footer .social-icon .icon-circle .icon-facebook {
        font-size: 1rem
    }

    html[lang=th] .footer .social-icon .icon-circle .icon-instagram {
        font-size: 1.125rem
    }

    .footer {
        position: relative;
        overflow: hidden
    }

    .footer .footer__shortcut {
        background: #ebebeb
    }

    .footer .footer__shortcut .shortcut {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center
    }

    .footer .footer__shortcut .shortcut__item {
        margin-bottom: 1.5rem;
        flex: 0 0 50%;
        text-align: center;
        border-right: 1px solid #f8f8f8;
        transition: all .2s
    }

    .footer .footer__shortcut .shortcut__item:last-child {
        border-right: none
    }

    @media (min-width:992px) {
        .footer .footer__shortcut .shortcut__item {
            flex: 0 0 25%;
            margin-bottom: 0
        }
    }

    @media (max-width:767.98px) {
        .footer .footer__shortcut .shortcut__item {
            flex: 0 0 50%;
            margin-bottom: 0
        }
    }

    .footer .footer__shortcut .shortcut__item:focus,
    .footer .footer__shortcut .shortcut__item:hover {
        border-right: 1px solid #f8f8f8
    }

    .footer .footer__shortcut .shortcut__item:focus .shortcut__body:before,
    .footer .footer__shortcut .shortcut__item:hover .shortcut__body:before {
        height: 100%
    }

    .footer .footer__shortcut .shortcut__item:focus .shortcut__icon,
    .footer .footer__shortcut .shortcut__item:hover .shortcut__icon {
        position: relative;
        z-index: 9
    }

    .footer .footer__shortcut .shortcut__item:focus .shortcut__text,
    .footer .footer__shortcut .shortcut__item:hover .shortcut__text {
        position: relative;
        z-index: 9;
        color: #fff
    }

    .footer .footer__shortcut .shortcut__item:focus:last-child,
    .footer .footer__shortcut .shortcut__item:hover:last-child {
        border-right: none
    }

    .footer .footer__shortcut .shortcut__body {
        position: relative;
        padding: 2.5rem 0;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease
    }

    .footer .footer__shortcut .shortcut__body:before {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 0;
        width: 100%;
        background-color: #001f53;
        content: "";
        transition: all .5s ease
    }

    @media (max-width:767.98px) {
        .footer .footer__shortcut .shortcut__body {
            padding: 2rem 1rem
        }
    }

    .footer .footer__shortcut .shortcut__icon {
        display: flex;
        width: 45px;
        height: 45px;
        margin: 0 auto 1rem
    }

    .footer .footer__shortcut .shortcut__text {
        min-height: 50px;
        color: #001f53;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease
    }

    .footer .footer__top {
        position: relative;
        min-height: 375px;
        padding: 5rem 0 5rem 8rem;
        background-color: #001f53
    }

    @media (max-width:1199.98px) {
        .footer .footer__top {
            padding: 5rem
        }
    }

    @media (max-width:767.98px) {
        .footer .footer__top {
            padding: 2rem
        }
    }

    .footer .footer__top:before {
        top: 0;
        left: 0;
        width: 307px;
        height: 283px;
        background-image: url(/themes/default/assets/static/images/default/footer-left.png)
    }

    .footer .footer__top:after,
    .footer .footer__top:before {
        position: absolute;
        background-repeat: no-repeat;
        content: "";
        pointer-events: none
    }

    .footer .footer__top:after {
        right: 0;
        bottom: 0;
        width: 392px;
        height: 348px;
        background-image: url(/themes/default/assets/static/images/default/footer-right.png)
    }

    .footer .footer__bottom {
        position: relative;
        min-height: 60px;
        display: flex;
        align-items: center;
        background: #001f53;
        color: hsla(0, 0%, 100%, .4);
        padding: 1rem 0;
        box-shadow: 0 -3px 6px rgba(0, 0, 0, .16)
    }

    .footer .footer__bottom .footer__link {
        color: hsla(0, 0%, 100%, .4);
        margin-left: .6rem
    }

    .footer .footer__bottom .footer__link+.footer__link:before {
        position: relative;
        left: -.4rem;
        top: .06rem;
        content: "|";
        pointer-events: none
    }

    .footer .footer__bottom .footer__link:hover {
        color: #fff
    }

    .footer .footer__bottom .footer__link:hover:before {
        color: hsla(0, 0%, 100%, .4)
    }

    .footer .social-icon {
        display: flex;
        align-items: center;
        margin: .5rem 0 0;
        color: #fff
    }

    @media (max-width:767.98px) {
        .footer .social-icon {
            margin: .5rem 0 3rem
        }
    }

    .footer .icon-circle {
        width: 34px;
        height: 34px;
        margin: 0 .4rem 0 0;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #fff;
        border-radius: 50%;
        color: #fff;
        -webkit-transition: all .3s ease;
        -moz-transition: all .3s ease;
        -ms-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease
    }

    .footer .icon-circle:active,
    .footer .icon-circle:focus,
    .footer .icon-circle:hover {
        background: #00afe4;
        color: #fff;
        text-decoration: none
    }

    html[lang=en] .section.section--newsroom .section__title,
    html[lang=en] .section.section--newsroom .section__title .section__stroke {
        font-size: 3.75rem;
        font-weight: 600
    }

    html[lang=th] .section.section--newsroom .section__title,
    html[lang=th] .section.section--newsroom .section__title .section__stroke {
        font-size: 3.75rem;
        font-weight: 500
    }

    .intro-dialog .modal-body {
        padding: 0
    }

    .intro-dialog .modal-body button.close {
        position: absolute;
        right: 7px;
        top: 3px;
        color: #fff
    }

    .section {
        position: relative;
        overflow: hidden
    }

    .section.section--billboard {
        top: 0;
        z-index: 1;
        width: 100%;
        height: 100vh;
        min-height: 700px;
        padding: 0
    }

    .section.section--stock {
        position: absolute;
        top: 90vh;
        width: 100%;
        padding-bottom: 1rem
    }

    .section.section--last-report {
        position: relative;
        width: 100%;
        min-height: 600px;
        padding: 6rem 0 0
    }

    @media (max-width:1199.98px) {
        .section.section--last-report {
            padding: 14rem 0 4rem
        }
    }

    @media (max-width:991.98px) {
        .section.section--last-report {
            padding: 13rem 0 4rem
        }
    }

    @media (max-width:767.98px) {
        .section.section--last-report {
            padding: 27rem 0 2rem
        }
    }

    .section.section--last-report:before {
        top: 0;
        left: 0;
        width: 307px;
        height: 283px;
        background-image: url(/themes/default/assets/static/images/default/latest-left.png)
    }

    .section.section--last-report:after,
    .section.section--last-report:before {
        position: absolute;
        background-repeat: no-repeat;
        content: "";
        pointer-events: none
    }

    .section.section--last-report:after {
        right: 0;
        bottom: -48px;
        width: 392px;
        height: 348px;
        background-image: url(/themes/default/assets/static/images/default/latest-right.png)
    }

    .section.section--last-report .section__title {
        text-transform: uppercase;
        margin: 3rem 0
    }

    @media (max-width:767.98px) {
        .section.section--last-report .section__title {
            margin: 0 0 3rem
        }
    }

    .section.section--newsroom {
        position: relative;
        padding: 7rem 0 0;
        background-size: cover;
        background-repeat: no-repeat
    }

    .section.section--newsroom .section__heading {
        display: flex;
        flex-direction: column;
        text-transform: uppercase
    }

    @media (max-width:1199.98px) {
        .section.section--newsroom .section__heading {
            flex-direction: row
        }
    }

    @media (max-width:767.98px) {
        .section.section--newsroom .section__heading {
            flex-direction: column
        }
    }

    .section.section--newsroom .section__title {
        color: #00afe4;
        line-height: 1;
        margin-bottom: 4rem
    }

    .section.section--newsroom .section__stroke {
        -webkit-text-fill-color: transparent;
        -webkit-text-stroke-color: #001f53;
        -webkit-text-stroke: 1px #001f53;
        color: transparent;
        text-shadow: none
    }

    .section.section--event {
        position: relative;
        padding: 3rem 2rem;
        overflow: hidden;
        background-color: rgba(0, 31, 83, .8)
    }

    .section.section--event .section__title {
        color: #fff;
        text-transform: uppercase
    }

    .section.section--video {
        position: relative;
        overflow: hidden
    }

    .section.section--video:before {
        position: absolute;
        top: 0;
        left: 0;
        width: 307px;
        height: 283px;
        background-image: url(/themes/default/assets/static/images/default/footer-left.png);
        background-repeat: no-repeat;
        content: "";
        pointer-events: none
    }

    .section.section--video:after {
        position: absolute;
        right: 5rem;
        bottom: 5rem;
        content: "";
        width: 142px;
        height: 142px;
        border-radius: 50%;
        background: #001f53;
        opacity: .2;
        filter: blur(19px);
        pointer-events: none
    }

    .section .section__title {
        color: #00afe4
    }

    html[lang=en] .ir-contact>p {
        font-size: .875rem;
        font-weight: 400
    }

    html[lang=en] .contact .contact__icon {
        font-size: .75rem;
        font-weight: 400
    }

    html[lang=en] .contact .contact__detail {
        font-size: .875rem;
        font-weight: 400
    }

    html[lang=th] .ir-contact>p {
        font-size: 1rem;
        font-weight: 300
    }

    html[lang=th] .contact .contact__icon {
        font-size: .875rem;
        font-weight: 300
    }

    html[lang=th] .contact .contact__detail {
        font-size: 1rem;
        font-weight: 300
    }

    .ir-contact {
        color: #fff
    }

    .contact {
        display: flex;
        flex-direction: row;
        padding: 0 0 1rem
    }

    .contact .contact__icon {
        flex: 0 0 30px;
        margin-right: 5px;
        text-align: center;
        color: #00afe4
    }

    .contact .contact__icon .icon {
        width: 17px;
        height: 17px
    }

    .historical-price {
        display: flex;
        flex-wrap: wrap
    }

    .historical-price .historical-price__block {
        margin-bottom: 20px
    }

    @media (max-width:991.98px) {
        .historical-price .historical-price__block {
            margin-bottom: 0
        }
    }

    .historical-price .historical-price__block .form-group {
        display: inline-flex;
        align-items: center;
        margin: 0
    }

    .historical-price .historical-price__block .form-group label {
        font-weight: 400;
        line-height: 1.25rem;
        margin: 0 1rem 0 0;
        color: #001f53
    }

    .historical-price .historical-price__block .form-group .datepicker-box {
        position: relative;
        width: 200px
    }

    .historical-price .historical-price__block .form-group .datepicker-box .form-control {
        width: 100%;
        height: 42px;
        border: 1px solid #b2b2b2;
        border-radius: 0;
        padding-left: 8px;
        padding-right: 47px;
        background-color: #fff
    }

    .historical-price .historical-price__block .form-group .datepicker-box:after {
        font-family: icomoon;
        content: "\E900";
        font-size: 1.25rem;
        font-weight: 500;
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        width: 35px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #00afe4
    }

    .historical-price .historical-price__block:not(:last-child) {
        margin-right: 20px
    }

    @media (max-width:991.98px) {
        .historical-price .historical-price__block:not(:last-child) {
            margin-right: 25px
        }
    }

    .historical-price .historical-price__block:first-child {
        padding-top: 10px
    }

    .historical-price .historical-price__title {
        font-weight: 700;
        line-height: 1.25rem;
        color: #001f53;
        margin-bottom: 0
    }

    @media (max-width:991.98px) {
        .historical-price .historical-price__title {
            margin-bottom: 1rem
        }
    }

    html[lang=en] .accordion--business .text-stroke-blue-white {
        font-size: 2.5rem;
        font-weight: 600
    }

    @media (max-width:767.98px) {
        html[lang=en] .accordion--business .text-stroke-blue-white {
            font-size: 1.875rem
        }
    }

    html[lang=th] .accordion--business .text-stroke-blue-white {
        font-size: 2.75rem;
        font-weight: 500
    }

    @media (max-width:767.98px) {
        html[lang=th] .accordion--business .text-stroke-blue-white {
            font-size: 2rem
        }
    }

    .section-background-6key-business {
        background-size: cover;
        background-position: bottom;
        background-repeat: no-repeat;
        padding: 5rem
    }

    @media (max-width:767.98px) {
        .section-background-6key-business {
            padding: 5rem 0
        }
    }

    .background-marketing {
        background-color: #f8f8f8;
        padding: 6rem 0
    }

    .section-business .accordion--business {
        background-color: transparent;
        border-radius: 0;
        padding-bottom: .5rem;
        margin-bottom: 30px
    }

    .section-business .accordion--business:last-child {
        margin-bottom: 0;
        padding-bottom: 0
    }

    .section-business .accordion--business .card {
        border: 0;
        border-radius: 0;
        background-color: transparent
    }

    .section-business .accordion--business .card:not(:first-child) {
        margin-top: 1px
    }

    .section-business .accordion--business .card__header {
        position: relative;
        padding: .95rem 2rem;
        border-radius: 0;
        text-transform: uppercase;
        background-size: cover;
        background-position: 50%;
        background-repeat: no-repeat
    }

    @media (max-width:767.98px) {
        .section-business .accordion--business .card__header {
            padding: .95rem 0
        }
    }

    .section-business .accordion--business .card__header:before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: rgba(0, 31, 83, .9);
        transition: all .5s linear
    }

    .section-business .accordion--business .card__header:hover:before,
    .section-business .accordion--business .card__header[aria-expanded=true]:before {
        background-color: rgba(0, 31, 83, .6)
    }

    .section-business .accordion--business .card__header:hover .text-stroke-blue-white .stroke,
    .section-business .accordion--business .card__header[aria-expanded=true] .text-stroke-blue-white .stroke {
        -webkit-text-fill-color: #fff;
        -webkit-text-stroke-color: #fff;
        -webkit-text-stroke: 1px #fff;
        color: #fff;
        text-shadow: none
    }

    .section-business .accordion--business .card__header .text-stroke-blue-white {
        position: relative;
        padding: 2rem
    }

    @media (max-width:767.98px) {
        .section-business .accordion--business .card__header .text-stroke-blue-white {
            padding: 2rem 0
        }
    }

    .section-business .accordion--business .card__header[aria-expanded=true]:before {
        background-color: rgba(0, 31, 83, .6)
    }

    .section-business .accordion--business .card__header[aria-expanded=true] .ttext-stroke-blue-white .stroke {
        -webkit-text-fill-color: #fff;
        -webkit-text-stroke-color: #fff;
        -webkit-text-stroke: 1px #fff;
        color: #fff;
        text-shadow: none
    }

    .section-business .accordion--business .card__body {
        position: relative;
        padding: 0
    }

    .section-business .accordion--business .card__wrapper {
        position: relative;
        padding: 2rem;
        z-index: 2;
        border-bottom: 1px solid #00afe4;
        margin-bottom: 1.5rem
    }

    @media (max-width:767.98px) {
        .section-business .accordion--business .card__wrapper {
            padding: 2rem 0
        }
    }

    .section-business .accordion--business .card__wrapper hr {
        border-top: 1px solid #00afe4
    }

    .section-business .slide-business {
        position: relative;
        margin: 2rem 0
    }

    .section-business .slide-business .slick {
        margin-bottom: 20px
    }

    .section-business .slide-business .slick .slick-slide {
        padding: 10px
    }

    .section-business .slide-business .slick .slick-dots {
        display: none !important
    }

    .section-business .slide-business .arrow-select {
        display: flex;
        flex-direction: row
    }

    .section-business .slide-business .slick-arrow {
        position: absolute;
        bottom: -29px
    }

    .section-business .slide-business .arrow-select__prev {
        left: 0;
        width: 30px;
        height: 30px;
        text-align: center;
        margin: 0 2px;
        cursor: pointer;
        background-color: #fff;
        box-shadow: 3px 3px 7px rgba(0, 0, 0, .2);
        border-radius: 50%;
        display: block !important
    }

    .section-business .slide-business .arrow-select__prev:hover {
        background-color: #00afe4
    }

    .section-business .slide-business .arrow-select__prev:hover:before {
        color: #fff
    }

    .section-business .slide-business .arrow-select__prev:before {
        font-family: Font Awesome\ 5 Pro;
        content: "\F104";
        color: #00afe4;
        position: absolute;
        top: 10%;
        left: 11px
    }

    .section-business .slide-business .arrow-select__next {
        left: 37px;
        width: 30px;
        height: 30px;
        text-align: center;
        margin: 0 2px;
        cursor: pointer;
        background-color: #fff;
        box-shadow: 3px 3px 7px rgba(0, 0, 0, .2);
        border-radius: 50%;
        display: block !important
    }

    .section-business .slide-business .arrow-select__next:hover {
        background-color: #00afe4
    }

    .section-business .slide-business .arrow-select__next:hover:before {
        color: #fff
    }

    .section-business .slide-business .arrow-select__next:before {
        font-family: Font Awesome\ 5 Pro;
        content: "\F105";
        color: #00afe4;
        position: absolute;
        top: 10%;
        left: 13px
    }

    .section-business .slide-business .arrow-select__paginginfo {
        margin: 6px 0 0 8px;
        color: #001f53;
        position: absolute;
        left: 70px;
        bottom: -30px
    }

    .section-business .slide-business .arrow-select__paginginfo .gray {
        color: #bcbcbc
    }

    html[lang=en] .section--vision-mission .text-info__title {
        font-size: 2.5rem;
        font-weight: 600
    }

    html[lang=en] .section--vision-mission .text-info__detail {
        font-size: 1.25rem;
        font-weight: 600
    }

    html[lang=en] .section--core-value .text-title {
        font-size: 2.5rem;
        font-weight: 700
    }

    html[lang=en] .section--core-value .text-symbol {
        font-weight: 700
    }

    html[lang=en] .slick--company-history .slick-arrow,
    html[lang=en] .slick--company-history .slick__year-item .items,
    html[lang=en] .slick--company-history .slick__year-item .items.slick-active {
        font-size: 1.875rem;
        font-weight: 400
    }

    html[lang=en] .slick--company-history .slick__year-item .items.slick-current {
        font-weight: 600
    }

    html[lang=th] .section--vision-mission .text-info__title {
        font-size: 2.75rem;
        font-weight: 500
    }

    html[lang=th] .section--vision-mission .text-info__detail {
        font-size: 1.5rem;
        font-weight: 500
    }

    html[lang=th] .section--core-value .text-title {
        font-size: 2.75rem;
        font-weight: 600
    }

    html[lang=th] .section--core-value .text-symbol {
        font-weight: 600
    }

    html[lang=th] .slick--company-history .slick-arrow,
    html[lang=th] .slick--company-history .slick__year-item .items,
    html[lang=th] .slick--company-history .slick__year-item .items.slick-active {
        font-size: 2rem;
        font-weight: 300
    }

    html[lang=th] .slick--company-history .slick__year-item .items.slick-current {
        font-weight: 500
    }

    .section--vision-mission {
        background: linear-gradient(180deg, hsla(0, 0%, 100%, 0), #ebebeb);
        padding: 7rem 0 0
    }

    .section--vision-mission .section__body {
        display: flex;
        flex-direction: column;
        position: relative
    }

    .section--vision-mission .section__body .section__item {
        position: relative
    }

    .section--vision-mission .section__body .text-info__title {
        text-transform: uppercase;
        font-weight: 700;
        color: #00afe4
    }

    .section--vision-mission .section__body .text-info__detail {
        color: #001f53;
        text-transform: uppercase
    }

    .section--vision-mission .section__body .img-position {
        position: absolute;
        z-index: 1
    }

    @media (max-width:991.98px) {
        .section--vision-mission .section__body .img-position {
            position: inherit
        }
    }

    .section--vision-mission .section__body .img-position img {
        height: auto;
        width: 100%;
        vertical-align: middle
    }

    @media (max-width:1199.98px) {
        .section--vision-mission .section__body .img-position img {
            width: 80%
        }
    }

    @media (max-width:991.98px) {
        .section--vision-mission .section__body .img-position img {
            width: 50%
        }
    }

    .section--vision-mission .section__body .section__item--vision .text-info {
        position: relative;
        padding: 6rem 8rem 9rem
    }

    @media (max-width:1199.98px) {
        .section--vision-mission .section__body .section__item--vision .text-info {
            padding: 6rem 0 6rem 4rem
        }
    }

    @media (max-width:991.98px) {
        .section--vision-mission .section__body .section__item--vision .text-info {
            padding: 2rem
        }
    }

    .section--vision-mission .section__body .section__item--vision .text-info:before {
        content: "";
        position: absolute;
        background-image: url(/storage/content/corporate-information/company-history/bg-map.png);
        background-repeat: no-repeat;
        background-size: contain;
        width: 100%;
        height: 385px;
        top: 0;
        left: 5rem;
        z-index: 0
    }

    @media (max-width:1199.98px) {
        .section--vision-mission .section__body .section__item--vision .text-info:before {
            left: 0
        }
    }

    .section--vision-mission .section__body .section__item--vision .img-position {
        right: 0;
        top: 0;
        text-align: right
    }

    @media (max-width:991.98px) {
        .section--vision-mission .section__body .section__item--mission {
            padding-bottom: 5rem
        }
    }

    .section--vision-mission .section__body .section__item--mission .text-info {
        padding: 7rem 8rem 13rem
    }

    @media (max-width:1539.98px) {
        .section--vision-mission .section__body .section__item--mission .text-info {
            padding-bottom: 9rem
        }
    }

    @media (max-width:1199.98px) {
        .section--vision-mission .section__body .section__item--mission .text-info {
            padding: 4rem 1rem 6rem 3rem
        }
    }

    @media (max-width:991.98px) {
        .section--vision-mission .section__body .section__item--mission .text-info {
            padding: 3rem 2rem
        }
    }

    .section--vision-mission .section__body .section__item--mission .text-info:before {
        content: "";
        position: absolute;
        background-image: url(/storage/content/corporate-information/company-history/bg-hand.png);
        background-repeat: no-repeat;
        background-size: contain;
        width: 100%;
        height: 492px;
        left: 10rem;
        bottom: 0;
        z-index: 0
    }

    @media (max-width:1199.98px) {
        .section--vision-mission .section__body .section__item--mission .text-info:before {
            left: 0
        }
    }

    @media (max-width:991.98px) {
        .section--vision-mission .section__body .section__item--mission .text-info:before {
            background-position: 100%;
            top: -1rem
        }
    }

    .section--vision-mission .section__body .section__item--mission .img-position {
        left: 0;
        top: 0;
        text-align: left
    }

    .section--core-value {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: bottom;
        padding: 7rem 0 5rem;
        color: #fff;
        text-align: center
    }

    .section--core-value .text-title {
        color: #001f53;
        text-transform: uppercase
    }

    .section--core-value .core-item {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        padding: 5rem 12rem
    }

    @media (max-width:1199.98px) {
        .section--core-value .core-item {
            padding: 5rem 0
        }
    }

    @media (max-width:767.98px) {
        .section--core-value .core-item {
            flex-direction: column
        }
    }

    .section--core-value .core-text {
        flex: 0 0 20%
    }

    .section--core-value .core-text .text-symbol {
        font-size: 120px;
        text-shadow: 5px 3px 0 #001f53
    }

    .section--core-value .core-text:last-child .text-symbol {
        text-shadow: 5px 3px 0 #00afe4
    }

    .section--company-history {
        padding: 3rem 0 5rem
    }

    .section--company-history .slick--company-history {
        display: flex
    }

    @media (max-width:767.98px) {
        .section--company-history .slick--company-history {
            display: block
        }
    }

    .section--company-history .slick--company-history .slick__item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 20%;
        height: 525px;
        padding: 0 1rem 3rem 3rem
    }

    @media (max-width:991.98px) {
        .section--company-history .slick--company-history .slick__item {
            flex-direction: row;
            width: 30%
        }
    }

    @media (max-width:767.98px) {
        .section--company-history .slick--company-history .slick__item {
            width: auto;
            height: auto;
            padding: 1rem 1rem 3rem
        }
    }

    .section--company-history .slick--company-history .slick__year-item {
        display: flex;
        flex-direction: column;
        justify-content: center
    }

    @media (max-width:767.98px) {
        .section--company-history .slick--company-history .slick__year-item {
            flex-direction: row
        }
    }

    .section--company-history .slick--company-history .slick__year-item .slick-track {
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        top: 0;
        left: 0;
        margin-left: auto;
        margin-right: auto
    }

    .section--company-history .slick--company-history .slick__year-item .slick-track .items {
        display: block;
        position: relative;
        height: 40px;
        color: #888d90;
        text-align: center;
        cursor: pointer;
        padding-right: 5rem;
        margin: 12px 0;
        transition: all .3s ease-in-out
    }

    .section--company-history .slick--company-history .slick__year-item .slick-track .items.slick-current {
        color: #00afe4;
        font-weight: 700;
        position: relative
    }

    .section--company-history .slick--company-history .slick__year-item .slick-track .items.slick-current:after {
        content: " ";
        position: absolute;
        right: -23px;
        top: 23px;
        border: 2px solid #00afe4;
        height: 2px;
        width: 90px
    }

    .section--company-history .slick--company-history .slick-arrow {
        color: #00afe4;
        margin: 1.5rem;
        display: block !important;
        cursor: pointer
    }

    @media (max-width:767.98px) {
        .section--company-history .slick--company-history .slick-arrow {
            margin: 1.4rem 2rem
        }
    }

    .section--company-history .slick--company-history .slick__info {
        display: flex;
        position: relative;
        width: 60%;
        align-items: center;
        justify-content: center;
        margin-left: 1rem
    }

    @media (max-width:991.98px) {
        .section--company-history .slick--company-history .slick__info {
            width: 70%
        }
    }

    @media (max-width:767.98px) {
        .section--company-history .slick--company-history .slick__info {
            width: 95%
        }
    }

    .section--company-history .slick--company-history .slick__main {
        width: 100%;
        height: 100%
    }

    .section--company-history .slick--company-history .slick__main .slick-list {
        padding: 0 !important
    }

    .section--company-history .slick--company-history .slick__main::-webkit-scrollbar {
        display: none
    }

    .section--company-history .slick--company-history .slick__main .slick-items .element-slide {
        display: flex;
        width: 100%;
        justify-content: space-between
    }

    .section--company-history .slick--company-history .slick__main .slick-items .element-slide .element-slide__detail .title {
        color: #00afe4;
        position: relative;
        padding-left: 20px
    }

    .section--company-history .slick--company-history .slick__main .slick-items .element-slide .element-slide__detail .title:before {
        content: "";
        position: absolute;
        top: 15px;
        left: 0;
        width: 12px;
        height: 1px;
        background: #e5f7fc;
        display: block
    }

    .section--company-history .slick--company-history .slick__main .slick-items .element-slide.element--reverse>div:first-child {
        order: 2
    }

    .section--company-history .slick--company-history .slick__main .slick-items .element-slide.element--reverse>div:nth-child(2) {
        order: 1;
        margin-right: 2rem;
        margin-left: 0
    }

    .section--company-history .slick--company-history .slick__main .slick-items .element-slide:last-child {
        border-bottom: none
    }

    .section__background-message-chairman {
        background-size: cover;
        background-position: bottom;
        background-repeat: no-repeat;
        padding-top: 200px
    }

    @media (max-width:767.98px) {
        .section__background-message-chairman {
            padding-top: 100px
        }
    }

    .chairman {
        position: relative;
        padding-top: 50px
    }

    .chairman .chairman__img {
        padding: 0 50px
    }

    .chairman .chairman__detail {
        padding: 40px 0 30px;
        margin-top: 50px;
        border-top: 2px solid #00afe4;
        border-bottom: 2px solid #00afe4
    }

    .chairman .chairman__highlight {
        margin: 50px;
        padding: 0 30px;
        border-left: 2px solid #00afe4
    }

    .board--background-detail {
        background-size: cover;
        background-position: bottom;
        background-repeat: no-repeat;
        padding-top: 100px
    }

    .board--background-detail .board__img {
        padding: 0
    }

    @media (max-width:991.98px) {
        .board--background-detail .board__img {
            text-align: center
        }
    }

    .board--background-detail .board__header {
        display: flex;
        flex: 0 0 100%;
        flex-direction: column
    }

    @media (max-width:991.98px) {
        .board--background-detail .board__header {
            flex-direction: column-reverse
        }
    }

    .board--background-detail .board__body {
        background-image: url(/themes/default/assets/static/images/default/background-board-name.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        padding: 40px 10%;
        color: #fff
    }

    .board--background-detail .board__body .board__title {
        border-bottom: 1px solid #00afe4;
        padding-bottom: 20px;
        margin-bottom: 20px
    }

    .board__detail {
        padding-top: 50px
    }

    .board__detail .card-deck .card:first-child {
        border-right: 1px solid #00afe4;
        border-radius: 0;
        padding-right: 15px
    }

    @media (max-width:991.98px) {
        .board__detail .card-deck .card:first-child {
            border-right: 0
        }
    }

    .board__detail .board__back {
        margin-top: 50px
    }

    .board__detail .board__back i {
        margin-right: 5px
    }

    .background-financial-highlight {
        background-size: cover;
        background-position: bottom;
        background-repeat: no-repeat;
        border-bottom: 3px solid #001f53;
        padding-bottom: 60px
    }

    @media (max-width:767.98px) {
        .background-financial-highlight {
            padding-bottom: 100px
        }
    }

    .background-financial-highlight:before {
        content: "";
        position: absolute;
        top: -30px;
        left: -170px;
        width: 420px;
        height: 420px;
        background-image: url(/themes/default/assets/static/images/default/element-circle.png);
        background-repeat: no-repeat
    }

    .background-financial-highlight .slick--highlight .slick-list .slick-track {
        display: flex
    }

    .background-financial-highlight .slick--highlight .slick-list .slick__block {
        margin-left: 15px;
        margin-right: 15px;
        padding-top: 25px
    }

    .background-financial-highlight .slick--highlight .slick-list .slick-slide {
        outline: none
    }

    @media (max-width:767.98px) {
        .background-financial-highlight .slick--highlight .slick-dots {
            margin-bottom: 30px
        }
    }

    .background-financial-highlight .block--chart .block__area {
        max-width: 300px;
        padding-top: 50px
    }

    @media (max-width:767.98px) {
        .background-financial-highlight .block--chart .block__area {
            max-width: 97%;
            padding-bottom: 4rem
        }
    }

    .background-financial-highlight .block--chart .block__area--revenue {
        max-width: 400px;
        padding-top: 0
    }

    @media (max-width:991.98px) {
        .background-financial-highlight .block--chart .block__area--revenue {
            max-width: 300px
        }
    }

    @media (max-width:767.98px) {
        .background-financial-highlight .block--chart .block__area--revenue {
            max-width: 97%;
            padding-bottom: 0
        }
    }

    .tabs--financail-highlight .nav-tabs .nav-item .nav-link {
        height: 51px
    }

    html[lang=en] .card--ir-contact .text__title {
        font-size: 1.25rem;
        font-weight: 400
    }

    html[lang=th] .card--ir-contact .text__title {
        font-size: 1.5rem;
        font-weight: 300
    }

    .card--ir-contact .card__item {
        display: flex;
        flex-direction: row;
        position: relative
    }

    @media (max-width:991.98px) {
        .card--ir-contact .card__item {
            flex-direction: column
        }
    }

    .card--ir-contact .card__item:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-image: url(/themes/default/assets/static/images/default/background-publication.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #001751;
        background-position: 50%;
        border-radius: 0 30px 0 30px
    }

    .card--ir-contact .card__info {
        flex: 0 0 60%;
        position: relative;
        color: #fff;
        padding: 2rem 4rem
    }

    @media (max-width:1199.98px) {
        .card--ir-contact .card__info {
            flex: 0 0 50%
        }
    }

    @media (max-width:767.98px) {
        .card--ir-contact .card__info {
            padding: 2rem
        }
    }

    .card--ir-contact .text__title {
        text-transform: uppercase;
        margin-bottom: 35px
    }

    .card--ir-contact .card__img {
        display: flex;
        flex: 0 0 40%;
        position: relative;
        align-items: center;
        text-align: center;
        justify-content: center;
        padding: 2rem
    }

    @media (max-width:1199.98px) {
        .card--ir-contact .card__img {
            flex: 0 0 50%
        }
    }

    @media (max-width:991.98px) {
        .card--ir-contact .card__img {
            padding-top: 0
        }
    }

    .card--ir-contact .img-large {
        position: relative;
        display: block
    }

    .card--ir-contact .img-large:before {
        content: "";
        position: absolute;
        right: 27px;
        bottom: 27px;
        background-image: url(/themes/default/assets/static/images/icon/zoom-in.svg);
        background-repeat: no-repeat;
        width: 26px;
        height: 26px
    }

    html[lang=en] #capital_gain,
    html[lang=en] #capital_gain_value,
    html[lang=en] #tsr_percent,
    html[lang=en] #tsr_value {
        font-weight: 600;
        color: #001f53 !important
    }

    html[lang=en] .text-calculator-title {
        font-size: 1.125rem;
        color: #0eb173
    }

    html[lang=en] .table--calculator thead th {
        font-size: 1.125rem;
        font-weight: 600
    }

    html[lang=en] .table--calculator tbody td {
        font-size: 1rem
    }

    html[lang=th] #capital_gain,
    html[lang=th] #capital_gain_value,
    html[lang=th] #tsr_percent,
    html[lang=th] #tsr_value {
        font-weight: 500;
        color: #001f53 !important
    }

    html[lang=th] .text-calculator-title {
        font-size: 1.25rem;
        color: #0eb173
    }

    html[lang=th] .table--calculator thead th {
        font-size: 1.25rem;
        font-weight: 500
    }

    html[lang=th] .table--calculator tbody td {
        font-size: 1.125rem
    }

    .calculator {
        display: table;
        width: 100%;
        padding: 3rem 4rem;
        background-color: #00afe4;
        color: #fff;
        box-shadow: 0 10px 15px rgba(0, 0, 0, .16);
        border-radius: 0 20px;
        margin-bottom: 3rem
    }

    @media (max-width:767.98px) {
        .calculator {
            display: block
        }
    }

    .calculator>div {
        display: table-cell;
        width: 50%
    }

    @media (max-width:767.98px) {
        .calculator>div {
            display: block;
            width: 100%
        }
    }

    .calculator-left {
        border-right: 1px solid hsla(0, 0%, 100%, .34);
        padding-right: 40px
    }

    @media (max-width:767.98px) {
        .calculator-left {
            border-right: 0;
            padding-right: 0;
            padding-bottom: 10px
        }
    }

    .calculator-left .datepicker-box {
        position: relative
    }

    .calculator-left .datepicker-box input {
        width: 100%
    }

    .calculator-right {
        padding-left: 40px
    }

    .calculator-right input[type=text] {
        width: 100%
    }

    @media (max-width:767.98px) {
        .calculator-right {
            padding-left: 0;
            padding-top: 10px
        }
    }

    .calculator-box>div {
        margin: -.8rem 0
    }

    .calculator-box input {
        padding: 5px 10px
    }

    .calculator .custom-radio .custom-control-indicator {
        border: 1px solid #fff;
        background-color: #fff
    }

    .calculator .custom-radio .custom-control-description {
        color: #fff !important
    }

    .calculator .custom-radio .custom-control-input:checked~.custom-control-indicator {
        background-color: #001f53
    }

    .calculator .custom-radio .custom-control-input:checked~.custom-control-indicator:before {
        background-color: #fff
    }

    .form .calculator .form-control:disabled,
    .form .calculator .form-control[readonly] {
        background-color: #fff;
        opacity: 1
    }

    .form .calculator .form-datepicker {
        position: relative
    }

    .form .calculator .form-datepicker input {
        background-color: #fff;
        border-radius: 0;
        color: #001f53
    }

    .form .calculator .form-group .form-control {
        background-color: #fff
    }

    .table--calculator {
        width: 100%;
        border-collapse: collapse;
        border-bottom: 2px solid #001f53
    }

    .table--calculator thead tr th {
        border: none;
        text-align: center
    }

    .table--calculator thead tr.first th {
        padding: 10px;
        text-align: center;
        background: #00afe4;
        color: #fff
    }

    @media (max-width:767.98px) {
        .table--calculator thead {
            display: block
        }

        .table--calculator thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
            display: block
        }
    }

    .table--calculator tbody tr td {
        color: #000 !important;
        padding: 20px 10px;
        text-align: center
    }

    @media (min-width:768px) {
        .table--calculator tbody tr td:last-child {
            color: #001f53 !important;
            background-color: #e5f7fc
        }
    }

    @media (max-width:767.98px) {
        .table--calculator tbody tr td {
            position: relative;
            text-align: right;
            width: 100% !important;
            display: block !important;
            float: left;
            border-top: 0;
            padding: 20px 0
        }

        .table--calculator tbody tr td:before {
            content: attr(data-title);
            display: inline-block;
            position: absolute;
            left: 0
        }

        .table--calculator tbody tr td:first-child {
            border-top: 1px solid #001f53
        }
    }

    .table-shadow {
        background: #fff;
        padding: 2rem 3rem;
        box-shadow: 0 10px 15px rgba(0, 0, 0, .16);
        border-radius: 10px
    }

    .text-calculator-title {
        padding-top: 1rem;
        border-top: 1px solid hsla(0, 0%, 92.2%, .26)
    }

    #invest_header,
    #period_header {
        color: #fff;
        margin-bottom: .75rem
    }

    #ir_chart_setting {
        position: relative;
        z-index: 1
    }

    #ir_chart_setting fieldset {
        padding: 5px 0;
        border: none;
        margin: 0
    }

    #ir_chart_setting fieldset div,
    #ir_chart_setting fieldset legend {
        margin-bottom: 15px
    }

    @media (max-width:767.98px) {

        #ir_chart_setting fieldset div,
        #ir_chart_setting fieldset legend {
            width: 120px;
            float: left
        }
    }

    #ir_chart_setting fieldset input {
        vertical-align: middle
    }

    #ir_chart_setting fieldset input[type=radio] {
        margin: 0 3px 8px 15px
    }

    @media (max-width:575px) {
        #ir_chart_setting .custom-radio {
            width: 100%;
            float: left;
            padding: 0 0 0 40px
        }

        #ir_chart_setting .custom-radio .custom-control-indicator {
            margin: 0 0 0 10px
        }

        #ir_chart_setting .ir_chart_interval {
            top: 165px !important;
            width: calc(100% - 30px);
            margin: 0 15px
        }
    }

    .custom-radio {
        display: inline-block;
        padding-right: 1rem;
        margin-bottom: 13px
    }

    .custom-radio .custom-control-indicator {
        position: absolute;
        left: 0;
        top: 4px;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        transition: all .2s;
        border: 1px solid #707070
    }

    .custom-radio .custom-control-indicator:focus {
        border: 0
    }

    .custom-radio .custom-control-description {
        color: #707070 !important
    }

    .custom-radio .custom-control-input:checked~.custom-control-indicator {
        border: 1px solid #001f53;
        background-color: #001f53
    }

    .custom-radio .custom-control-input:checked~.custom-control-indicator:before {
        content: "";
        position: absolute;
        left: 3px;
        top: 3px;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background-color: #fff;
        z-index: 2
    }

    .highcharts-range-selector-buttons>text {
        fill: #000 !important;
        font-size: .875rem;
        font-weight: 700
    }

    .ir_chart_interactive_loading {
        text-align: center
    }

    #ir_loading_indicator {
        display: inline-block;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        margin: 10px auto;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
        border: 10px solid #00afe4;
        border-top-color: #ebebeb
    }

    @-webkit-keyframes spin {
        0% {
            -ms-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        to {
            -ms-transform: rotate(1turn);
            -webkit-transform: rotate(1turn);
            -moz-transform: rotate(1turn);
            -o-transform: rotate(1turn);
            transform: rotate(1turn)
        }
    }

    @keyframes spin {
        0% {
            -ms-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg)
        }

        to {
            -ms-transform: rotate(1turn);
            -webkit-transform: rotate(1turn);
            -moz-transform: rotate(1turn);
            -o-transform: rotate(1turn);
            transform: rotate(1turn)
        }
    }

    .ir_chart_interval {
        position: absolute
    }

    @media (min-width:576px) {
        .ir_chart_interval {
            top: 57px;
            right: 280px
        }
    }

    .ir_chart_interval #chart_interval {
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none
    }

    @media (min-width:576px) {
        .ir_chart_interval #chart_interval {
            height: 25px;
            font-size: 1rem;
            padding: 0 0 0 10px
        }
    }

    .ir_insider_trades_tooltip,
    .ir_news_tooltip {
        white-space: normal;
        display: block;
        width: 400px
    }

    .ir_corporate_actions_tooltip {
        white-space: normal;
        display: block;
        width: 200px
    }

    [class^=highstocks] {
        display: none
    }

    @media (max-width:575px) {
        #ir_chart_container {
            margin-top: 50px
        }
    }

    @media (max-width:480px) {
        #ir_chart_container>div {
            width: 0
        }
    }

    html[lang=en] .investor-kit__detail .download-all,
    html[lang=en] .investor-kit__detail>.quarter>.title,
    html[lang=en] .investor-kit__detail>.quarter a,
    html[lang=en] .investor-kit__detail>.yearly>.title,
    html[lang=en] .investor-kit__detail>.yearly a {
        font-size: .875rem;
        font-weight: 600
    }

    html[lang=th] .investor-kit__detail .download-all,
    html[lang=th] .investor-kit__detail>.quarter>.title,
    html[lang=th] .investor-kit__detail>.quarter a,
    html[lang=th] .investor-kit__detail>.yearly>.title,
    html[lang=th] .investor-kit__detail>.yearly a {
        font-size: 1rem;
        font-weight: 500
    }

    .investor-kit {
        position: relative;
        margin-bottom: 0;
        background: #fff
    }

    .investor-kit__header {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 55px;
        color: #fff;
        background-color: #001f53
    }

    .investor-kit__detail {
        color: #001f53
    }

    .investor-kit__detail>.quarter {
        padding: 5px 1.75rem .75rem;
        margin: 0
    }

    .investor-kit__detail>.quarter .form-group {
        margin-bottom: 0
    }

    .investor-kit__detail>.quarter>div {
        display: block;
        vertical-align: middle
    }

    .investor-kit__detail>.quarter>.title {
        width: 100%;
        display: block;
        padding: 5px 0;
        text-align: left;
        text-transform: uppercase
    }

    .investor-kit__detail>.quarter a {
        padding-right: 5px;
        color: #001f53 !important
    }

    .investor-kit__detail>.yearly {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 5px 1.75rem;
        height: 80px;
        margin: 0
    }

    .investor-kit__detail>.yearly>.title {
        width: 80%;
        text-align: left;
        text-transform: uppercase
    }

    .investor-kit__detail>.yearly:first-child {
        border-top: none
    }

    .investor-kit__detail>.yearly a {
        padding-right: 5px;
        color: #001f53 !important
    }

    .investor-kit__detail .btn-checkbox .form-group {
        margin-bottom: 0
    }

    .investor-kit__detail .download-all {
        border-bottom: 2px solid #001f53;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 5px 0;
        height: 80px;
        text-transform: uppercase
    }

    .investor-kit__detail .download-all>.title {
        text-align: left
    }

    .form .investor-kit .form-group .custom-control {
        padding-top: 4px
    }

    .form .investor-kit .form-group .custom-control.custom-checkbox .custom-control-label:before {
        border-color: #888d90 !important
    }

    .form .investor-kit .form-group .custom-control-input:disabled~.custom-control-label:before,
    .form .investor-kit .form-group .custom-control-input[disabled]~.custom-control-label:before {
        border-color: transparent !important;
        background-color: rgba(136, 141, 144, .34) !important
    }

    .form .investor-kit .form-group .custom-control-input:checked~.custom-control-label:before {
        background-color: #001f53
    }

    .form .investor-kit .form-group .custom-control-input:checked~.custom-control-label:after {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3E%3C/svg%3E") !important
    }

    .form.form--investor-kit .btn.btn--primary .btn__text>i {
        padding-left: 2.25rem !important;
        top: -2px !important
    }

    .sum_size {
        color: #001f53;
        border: 1px solid transparent;
        border-bottom-color: #00afe4;
        background-color: transparent
    }

    .sum_size__text {
        display: inline-block
    }

    @media (max-width:480px) {
        .sum_size__text {
            display: block
        }
    }

    .news-detail img {
        max-width: 100%;
        height: auto
    }

    .news-detail .slick--news-gallery {
        padding: 25px
    }

    .news-detail .slick--news-gallery .slick__item {
        text-align: center;
        padding: 0 5px;
        height: 300px
    }

    .news-detail .slick--news-gallery .slick__item img {
        object-fit: cover;
        object-position: center;
        width: 100%;
        height: 100%
    }

    .news-detail .slick--news-gallery .slick-arrow {
        display: block !important
    }

    .news-detail .slick--news-gallery .slick-prev {
        left: -10px
    }

    .news-detail .slick--news-gallery .slick-next {
        right: -10px
    }

    .news-detail .slick--news-gallery .slick-next:before,
    .news-detail .slick--news-gallery .slick-prev:before {
        color: #00afe4
    }

    .nav.nav--sitemap {
        display: block;
        flex-direction: column;
        column-count: 3
    }

    @media (max-width:991.98px) {
        .nav.nav--sitemap {
            column-count: 2
        }
    }

    @media (max-width:767.98px) {
        .nav.nav--sitemap {
            column-count: 1
        }
    }

    .nav.nav--sitemap>.nav-item {
        page-break-inside: avoid;
        break-inside: avoid
    }

    .nav.nav--sitemap .nav-item {
        margin-bottom: .75rem
    }

    .nav.nav--sitemap .nav-link {
        padding: .3rem 0
    }

    .nav.nav--sitemap .nav__lv-2 {
        flex-direction: column;
        padding-top: .5rem;
        padding-left: 1.25rem
    }

    .nav.nav--sitemap .nav__lv-3 {
        flex-direction: column;
        padding-top: .5rem;
        padding-left: 1rem
    }

    @font-face {
        font-family: Kanit;
        src: url(fonts/Kanit-Light.woff2) format("woff2"), url(fonts/Kanit-Light.woff) format("woff");
        font-weight: 300;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: Kanit;
        src: url(fonts/Kanit-Medium.woff2) format("woff2"), url(fonts/Kanit-Medium.woff) format("woff");
        font-weight: 500;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: Kanit;
        src: url(fonts/Kanit-Regular.woff2) format("woff2"), url(fonts/Kanit-Regular.woff) format("woff");
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: Kanit;
        src: url(fonts/Kanit-SemiBold.woff2) format("woff2"), url(fonts/Kanit-SemiBold.woff) format("woff");
        font-weight: 600;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: Montserrat;
        src: url(fonts/Montserrat-Bold.woff2) format("woff2"), url(fonts/Montserrat-Bold.woff) format("woff");
        font-weight: 700;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: Montserrat;
        src: url(fonts/Montserrat-Medium.woff2) format("woff2"), url(fonts/Montserrat-Medium.woff) format("woff");
        font-weight: 500;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: Montserrat;
        src: url(fonts/Montserrat-SemiBold.woff2) format("woff2"), url(fonts/Montserrat-SemiBold.woff) format("woff");
        font-weight: 600;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: Montserrat;
        src: url(fonts/Montserrat-Regular.woff2) format("woff2"), url(fonts/Montserrat-Regular.woff) format("woff");
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: icomoon;
        src: url(fonts/icomoon.ttf) format("truetype"), url(fonts/icomoon.woff) format("woff"), url(images/icomoon.svg#icomoon) format("svg");
        font-weight: 400;
        font-style: normal;
        font-display: block
    }

    [class*=" icon-"],
    [class^=icon-] {
        font-family: icomoon !important;
        speak: never;
        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .icon-instagram:before {
        content: "\E914"
    }

    .icon-add-event:before {
        content: "\E900"
    }

    .icon-arrow-right:before {
        content: "\E901"
    }

    .icon-arrow-left:before {
        content: "\E902"
    }

    .icon-calendar:before {
        content: "\E903"
    }

    .icon-chart:before {
        content: "\E904"
    }

    .icon-copy:before {
        content: "\E905"
    }

    .icon-download:before {
        content: "\E906"
    }

    .icon-email:before {
        content: "\E907"
    }

    .icon-facebook:before {
        content: "\E908"
    }

    .icon-give:before {
        content: "\E909"
    }

    .icon-ig:before {
        content: "\E90A"
    }

    .icon-arrow-down:before {
        content: "\E90B"
    }

    .icon-phone:before {
        content: "\E90C"
    }

    .icon-play-button:before {
        content: "\E90D"
    }

    .icon-presentation:before {
        content: "\E90E"
    }

    .icon-question:before {
        content: "\E90F"
    }

    .icon-arrow-up:before {
        content: "\E910"
    }

    .icon-target:before {
        content: "\E911"
    }

    .icon-vision:before {
        content: "\E912"
    }
</style>