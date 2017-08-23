<!DOCTYPE html>
<?php
require_once "function/function.php";
require_once "function/mysqlDb.php";
$info = initUser();
$mysql = new  mysqlDb();
$res = $mysql->getAllInfo($info["userid"]);
?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta content="email=no" name="format-detection" />
    <title>详情</title>
    <link href="./css/style.css?v=2" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
</head>
<body class="">
<div id="app">
    <div id="myList">
        <div class="weui-navbar">
            <div id="1" class="weui-navbar__item weui-bar__item_on">
                <div class="weui-navbar__title">
                    与我相关
                </div>
            </div>
        </div>
        <div>
            <div style="padding-top:58px">
                <div class="weui-media-box weui-media-box_appmsg">
                    <div class="weui-media-box__hd weui-media-box__hd_in-appmsg">
                        <img class="weui-media-box__thumb" lazy="loaded" src="./万言趣投_files/1490689845251.png" style="width: 60px; height: 88px; margin-top: -14px; margin-left: 0px;" />
                    </div>
                    <div class="weui-media-box__bd weui-media-box__bd_in-appmsg">
                        <div class="weui-media-box__title">
                            <span style="vertical-align: middle">地点</span>
                        </div>
                        <div class="weui-media-box__desc">
                            看累了
                        </div>
                    </div>
                </div>
                <div class="weui-media-box weui-media-box_appmsg">
                    <div class="weui-media-box__hd weui-media-box__hd_in-appmsg">
                        <img class="weui-media-box__thumb" lazy="loaded" src="./万言趣投_files/60@2x.png" style="width: 60px; height: 60px; margin-top: 0px; margin-left: 0px;" />
                    </div>
                    <div class="weui-media-box__bd weui-media-box__bd_in-appmsg">
                        <div class="weui-media-box__title">
                            <span style="vertical-align: middle">哈哈哈哈</span>
                        </div>
                        <div class="weui-media-box__desc">
                            兔兔
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="q-bottom box" style="display: none;">
            <div class="box-flex-1">
                <button type="button" class="btnOK bg-green">确定 0／2</button>
            </div>
        </div>
        <section class="tip" style="display: none;">
            <div class="tip_text hide">
                <h1 class="2" v-else=""></h1>
            </div>
            <div class="backdrop"></div>
        </section>
        <section class="wait" style="display: none;">
            <div class="backdrop" style="z-index:1002"></div>
            <div class="uil-default-css-container">
                <div class="uil-default-css" style="transform:scale(0.2)">
                    <div style="top:52px;left:78px;width:14px;height:40px;background:#d1d1d5;-webkit-transform:rotate(0deg) translate(0,-60px);transform:rotate(0deg) translate(0,-60px);border-radius:10px;position:absolute"></div>
                    <div style="top:52px;left:78px;width:14px;height:40px;background:#d1d1d5;-webkit-transform:rotate(30deg) translate(0,-60px);transform:rotate(30deg) translate(0,-60px);border-radius:10px;position:absolute"></div>
                    <div style="top:52px;left:78px;width:14px;height:40px;background:#d1d1d5;-webkit-transform:rotate(60deg) translate(0,-60px);transform:rotate(60deg) translate(0,-60px);border-radius:10px;position:absolute"></div>
                    <div style="top:52px;left:78px;width:14px;height:40px;background:#d1d1d5;-webkit-transform:rotate(90deg) translate(0,-60px);transform:rotate(90deg) translate(0,-60px);border-radius:10px;position:absolute"></div>
                    <div style="top:52px;left:78px;width:14px;height:40px;background:#d1d1d5;-webkit-transform:rotate(120deg) translate(0,-60px);transform:rotate(120deg) translate(0,-60px);border-radius:10px;position:absolute"></div>
                    <div style="top:52px;left:78px;width:14px;height:40px;background:#d1d1d5;-webkit-transform:rotate(150deg) translate(0,-60px);transform:rotate(150deg) translate(0,-60px);border-radius:10px;position:absolute"></div>
                    <div style="top:52px;left:78px;width:14px;height:40px;background:#d1d1d5;-webkit-transform:rotate(180deg) translate(0,-60px);transform:rotate(180deg) translate(0,-60px);border-radius:10px;position:absolute"></div>
                    <div style="top:52px;left:78px;width:14px;height:40px;background:#d1d1d5;-webkit-transform:rotate(210deg) translate(0,-60px);transform:rotate(210deg) translate(0,-60px);border-radius:10px;position:absolute"></div>
                    <div style="top:52px;left:78px;width:14px;height:40px;background:#d1d1d5;-webkit-transform:rotate(240deg) translate(0,-60px);transform:rotate(240deg) translate(0,-60px);border-radius:10px;position:absolute"></div>
                    <div style="top:52px;left:78px;width:14px;height:40px;background:#d1d1d5;-webkit-transform:rotate(270deg) translate(0,-60px);transform:rotate(270deg) translate(0,-60px);border-radius:10px;position:absolute"></div>
                    <div style="top:52px;left:78px;width:14px;height:40px;background:#d1d1d5;-webkit-transform:rotate(300deg) translate(0,-60px);transform:rotate(300deg) translate(0,-60px);border-radius:10px;position:absolute"></div>
                    <div style="top:52px;left:78px;width:14px;height:40px;background:#d1d1d5;-webkit-transform:rotate(330deg) translate(0,-60px);transform:rotate(330deg) translate(0,-60px);border-radius:10px;position:absolute"></div>
                </div>
            </div>
        </section>
    </div>
</div>

</body>
<script type="text/javascript" src="js/show.js"></script>
</html>