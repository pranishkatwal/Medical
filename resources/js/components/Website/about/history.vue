<template>
    <div>
        <!-- Story Section -->
        <div id="story-section" class="ptb ptb-xs-60 gray-bg">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 col-lg-12">
                        <div class="block-title v-line mb-35">
                            <h2><span>Our</span> History</h2>
                            <p class="italic">
                                Aenean suscipit eget mi act
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="ui-timline-container">
                            <div class="ui-timeline">
                                <div class="tl-item">
                                    <div class="tl-body">
                                        <div class="tl-entry">
                                            <div class="tl-caption">
                                                <a href="#" class="btn btn-primary btn-block">JOURNEY</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tl-item">
                                    <div class="tl-body">
                                        <div class="tl-entry">
                                            <div class="tl-time">
                                                2013
                                            </div>
                                            <div class="tl-icon btn-icon-round btn-icon btn-icon-thin btn-info">
                                                <i class="fas fa-school"></i>
                                            </div>
                                            <div class="tl-content">
                                                <h4 class="tl-tile text-primary">We Started</h4>
                                                <p>
                                                    Consectetur adipisicing elit. Error, accusantium debitis voluptatem dolore excepturi ducimus fugiat nulla perspiciatis quo ipsum non eligendi nisi veniam maxime in quas atque omnis cumque!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tl-item alt">
                                    <div class="tl-body">
                                        <div class="tl-entry">
                                            <div class="tl-time">
                                                2014
                                            </div>
                                            <div class="tl-icon btn-icon-round btn-icon btn-icon-thin btn-warning">
                                                <i class="fas fa-feather"></i>
                                            </div>
                                            <div class="tl-content">
                                                <h4 class="tl-tile text-danger">Features Added</h4>
                                                <p>
                                                    Ullam, commodi, modi, impedit nostrum odio sit odit necessitatibus accusantium enim voluptates culpa cupiditate cum pariatur a recusandae tenetur aspernatur at beatae.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tl-item">
                                    <div class="tl-body">
                                        <div class="tl-entry">
                                            <div class="tl-time">
                                                2015
                                            </div>
                                            <div class="tl-icon btn-icon-round btn-icon btn-icon-thin btn-success">
                                                <i class="fas fa-code-branch"></i>
                                            </div>
                                            <div class="tl-content">
                                                <h4 class="tl-tile text-warning">New Branch</h4>
                                                <p>
                                                    Incidunt, molestias odio soluta nihil accusantium sit nostrum doloremque. Recusandae, ullam, odio consequatur facere totam reiciendis similique dicta explicabo!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tl-item alt">
                                    <div class="tl-body">
                                        <div class="tl-entry">
                                            <div class="tl-time">
                                                2016
                                            </div>
                                            <div class="tl-icon btn-icon-round btn-icon btn-icon-thin btn-danger">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="tl-content">
                                                <h4 class="tl-tile text-success">Level Increased</h4>
                                                <p>
                                                    Ullam, commodi, modi, impedit nostrum odio sit odit necessitatibus accusantium enim voluptates culpa cupiditate cum pariatur a recusandae tenetur aspernatur at beatae.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------->
        <fotter-component></fotter-component>
    </div>
</template>

<script>
    import fotterComponent from "../fotterComponent";
    export default {
        name: "history",
        component: {
            fotterComponent
        }
    }
</script>

<style scoped>
    .block-title h2{
        font-size: 40px;
        font-weight: bold;
    }
    .tl-time{
        font-size: 19px;
        font-weight: bold;
    }
    /*------------*/
    .ptb-xs-60 {
        padding-top: 60px;
        padding-bottom: 60px;
    }
    .gray-bg {
        background: #f8f8f8;
    }
    .v-line {
        border-left: 3px solid #cd2541;
        padding-left: 20px;
    }
    .mb-35 {
        margin-bottom: 35px;
    }
    .italic {
        font-style: italic;
    }
    /*Ui Timeline*/
    .ui-timline-left .ui-timeline:before {
        left: 0
    }
    @media (min-width: 768px) {
        .ui-timline-left .ui-timeline .tl-item:before {
            display: none
        }
        .ui-timline-left .ui-timeline .tl-item .tl-caption {
            margin-left: -55px
        }
        .ui-timline-left .ui-timeline .tl-item .tl-body .tl-time {
            left: auto;
            right: 15px;
            color: #777
        }
    }
    .ui-timeline {
        display: table;
        position: relative;
        table-layout: fixed;
        width: 100%;
        border-spacing: 0;
        border-collapse: collapse
    }
    .ui-timeline:before {
        background-color: #d5d5d5;
        bottom: 0px;
        content: "";
        position: absolute;
        left: 0;
        top: 30px;
        width: 1px;
        z-index: 0
    }
    @media (min-width: 768px) {
        .ui-timeline:before {
            left: 50%
        }
    }
    .ui-timeline .tl-item {
        display: table-row;
        margin-bottom: 5px
    }
    .ui-timeline .tl-item:before {
        display: none;
        content: ""
    }
    @media (min-width: 768px) {
        .ui-timeline .tl-item:before {
            display: block;
            width: 50%
        }
    }
    .ui-timeline .tl-item .tl-caption {
        width: 150px;
        margin-left: -55px
    }
    @media (min-width: 768px) {
        .ui-timeline .tl-item .tl-caption {
            margin-left: -110px
        }
    }
    @media (min-width: 768px) {
        .ui-timeline .tl-item.alt {
            text-align: right
        }
        .ui-timeline .tl-item.alt:before {
            display: none
        }
        .ui-timeline .tl-item.alt:after {
            content: "";
            display: block;
            width: 50%
        }
        .ui-timeline .tl-item.alt .tl-body .tl-entry {
            margin: 0 35px 15px 0
        }
        .ui-timeline .tl-item.alt .tl-body .tl-time {
            right: -220px;
            left: auto;
            text-align: left
        }
        .ui-timeline .tl-item.alt .tl-body .tl-icon {
            right: -53px;
            left: auto
        }
        .ui-timeline .tl-item.alt .tl-body .tl-content:after {
            right: -16px;
            left: auto;
            border: 8px solid transparent;
            border-left: 8px solid rgba(255, 255, 255, 0.9);
            border-top: 8px solid rgba(255, 255, 255, 0.9)
        }
    }
    .ui-timeline .tl-item .tl-body {
        display: table-cell;
        width: 50%;
        vertical-align: top
    }
    .ui-timeline .tl-item .tl-body .tl-entry {
        position: relative;
        margin: 0 0 35px 36px
    }
    .ui-timeline .tl-item .tl-body .tl-entry .btn-primary {
        background-color: #CD2541;
        border-color: #cd2541;
        padding: 10px 12px;
    }
    .ui-timeline .tl-item .tl-body .tl-time {
        z-index: 1;
        position: absolute;
        left: auto;
        right: 15px;
        top: 0;
        width: 150px;
        color: #777;
        line-height: 35px;
        text-align: right
    }
    @media (min-width: 768px) {
        .ui-timeline .tl-item .tl-body .tl-time {
            left: -220px;
            right: auto;
            color: #3D4051
        }
    }
    .ui-timeline .tl-item .tl-body .tl-icon {
        position: absolute;
        left: -53px;
        top: 0
    }
    .ui-timeline .tl-item .tl-body .tl-content {
        position: relative;
        padding: 15px;
        border-radius: 2px;
        background-color: rgba(255, 255, 255, 0.9)
    }
    .ui-timeline .tl-item .tl-body .tl-content:after {
        content: " ";
        line-height: 0;
        position: absolute;
        left: -16px;
        top: 0;
        border: 8px solid transparent;
        border-right: 8px solid rgba(255, 255, 255, 0.9);
        border-top: 8px solid rgba(255, 255, 255, 0.9)
    }
    .tooltip-inner {
        padding: .85em
    }
    .ui-timeline {
        display: table;
        position: relative;
        table-layout: fixed;
        width: 100%;
        border-spacing: 0;
        border-collapse: collapse
    }
    .ui-timeline:before {
        background-color: #d5d5d5;
        bottom: 0px;
        content: "";
        position: absolute;
        left: 0;
        top: 30px;
        width: 1px;
        z-index: 0
    }
    @media (min-width: 768px) {
        .ui-timeline:before {
            left: 50%
        }
    }
    .ui-timeline .tl-item {
        display: table-row;
        margin-bottom: 5px
    }
    .ui-timeline .tl-item:before {
        display: none;
        content: ""
    }
    @media (min-width: 768px) {
        .ui-timeline .tl-item:before {
            display: block;
            width: 50%
        }
    }
    @media (max-width: 767px) {
        .ui-timeline .tl-item .tl-caption {
            margin-left: -39px;
        }
        .ui-timeline .tl-item .tl-body .tl-icon {
            left: -48px;
        }
    }
    /*Ui Timeline Ends*/
    /*  Time Line Section  ||-----------*/
    .btn-icon {
        padding: 0;
        display: inline-block;
        text-align: center;
        border-radius: 2px;
        height: 35px;
        width: 35px;
        line-height: 35px
    }
    .btn-icon i {
        line-height: 35px
    }
    .btn-icon.btn-icon-lined {
        line-height: 31px
    }
    .btn-icon.btn-icon-lined i {
        line-height: 31px
    }
    .btn-icon.btn-icon-lined.btn-icon-thin {
        line-height: 33px
    }
    .btn-icon.btn-icon-lined.btn-icon-thin i {
        line-height: 33px
    }
    .btn-icon-lined {
        display: inline-block;
        text-align: center;
        border-radius: 2px;
        background-color: #fff;
        border-width: 2px;
        border-style: solid;
        border-color: #3D4051;
        color: #3D4051;
        height: 35px;
        width: 35px;
        line-height: 35px
    }
    .btn-icon-lined i {
        line-height: 35px
    }
    .btn-icon-lined.btn-icon-lined {
        line-height: 31px
    }
    .btn-icon-lined.btn-icon-lined i {
        line-height: 31px
    }
    .btn-icon-lined.btn-icon-lined.btn-icon-thin {
        line-height: 33px
    }
    .btn-icon-lined.btn-icon-lined.btn-icon-thin i {
        line-height: 33px
    }
    .btn-icon-lined.btn-icon-thin {
        border-width: 1px
    }
    .btn-icon-lined:hover {
        background-color: #fff;
        color: #fff
    }
    .btn-icon-lined.btn-default-light {
        color: #bbb;
        border: 2px solid #bbb
    }
    .btn-icon-lined.btn-default-light:hover {
        color: #bbb;
        border: 2px solid #bbb
    }
    .btn-icon-lined.btn-default {
        color: #777;
        border-color: #777
    }
    .btn-icon-lined.btn-default:hover {
        color: #777;
        border-color: #777
    }
    .btn-icon-lined.btn-primary {
        color: #009688;
        border-color: #009688
    }
    .btn-icon-lined.btn-success {
        color: #8BC34A;
        border-color: #8BC34A
    }
    .btn-icon-lined.btn-info {
        color: #00BCD4;
        border-color: #00BCD4
    }
    .btn-icon-lined.btn-warning {
        color: #FFCA28;
        border-color: #FFCA28
    }
    .btn-icon-lined.btn-danger {
        color: #F44336;
        border-color: #F44336
    }
    .btn-icon-round {
        border-radius: 50%
    }
    .btn-icon-sm {
        height: 30px;
        width: 30px;
        line-height: 30px
    }
    .btn-icon-sm i {
        line-height: 30px
    }
    .btn-icon-sm.btn-icon-lined {
        line-height: 26px
    }
    .btn-icon-sm.btn-icon-lined i {
        line-height: 26px
    }
    .btn-icon-sm.btn-icon-lined.btn-icon-thin {
        line-height: 28px
    }
    .btn-icon-sm.btn-icon-lined.btn-icon-thin i {
        line-height: 28px
    }
    .btn-icon-md {
        height: 45px;
        width: 45px;
        line-height: 45px;
        font-size: 18px
    }
    .btn-icon-md i {
        line-height: 45px
    }
    .btn-icon-md.btn-icon-lined {
        line-height: 41px
    }
    .btn-icon-md.btn-icon-lined i {
        line-height: 41px
    }
    .btn-icon-md.btn-icon-lined.btn-icon-thin {
        line-height: 43px
    }
    .btn-icon-md.btn-icon-lined.btn-icon-thin i {
        line-height: 43px
    }
    .btn-icon-lg {
        height: 65px;
        width: 65px;
        line-height: 65px;
        font-size: 28px
    }
    .btn-icon-lg i {
        line-height: 65px
    }
    .btn-icon-lg.btn-icon-lined {
        line-height: 61px
    }
    .btn-icon-lg.btn-icon-lined i {
        line-height: 61px
    }
    .btn-icon-lg.btn-icon-lined.btn-icon-thin {
        line-height: 63px
    }
    .btn-icon-lg.btn-icon-lined.btn-icon-thin i {
        line-height: 63px
    }
    .btn-icon-lg-alt {
        height: 70px;
        width: 70px;
        line-height: 70px
    }
    .btn-icon-lg-alt i {
        line-height: 70px
    }
    .btn-icon-lg-alt.btn-icon-lined {
        line-height: 66px
    }
    .btn-icon-lg-alt.btn-icon-lined i {
        line-height: 66px
    }
    .btn-icon-lg-alt.btn-icon-lined.btn-icon-thin {
        line-height: 68px
    }
    .btn-icon-lg-alt.btn-icon-lined.btn-icon-thin i {
        line-height: 68px
    }
</style>
