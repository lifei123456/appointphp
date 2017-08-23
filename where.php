<!DOCTYPE html>
<html lang="en">
<?php
require_once "function/function.php";
initUser();
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>去哪吃</title>
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/self.css" rel="stylesheet">
    <script src="js/jquery-2.1.4.js"></script>
</head>
<body class="">
<div id="app">
    <div id="createVoteEat" style="height:100%">
        <div class="content">
            <section id="link2buy" slot="voteTipInfo">最多支持4个地点</section>
            <section id="choice_eat" slot="voteTypeChoice">
                <div class="q-input padding-left">
                    <span class="hook"></span>
                    <input type="text" id="q-title" name="title" class="q-title" placeholder="标题(限20个字内)" maxlength="20">
                    <span class="b-voice"></span>
                </div>
                <div class="line"></div>
                <div class="q-input padding-left">
                    <span class="hook"></span>
                    <input type="text"  name="site"  class="q-title site1" placeholder="地点一" maxlength="20">
                    <span class="b-voice"></span>
                </div>
                <div class="q-input hidden padding-left">
                    <span class="hook"></span>
                    <input type="text"  name="site"  class="q-title site2" placeholder="地点二" maxlength="20">
                    <span class="b-voice"></span>
                </div>
                <div class="q-input padding-left">
                    <span class="hook"></span>
                    <input type="text"  name="site" class="q-title site3" placeholder="地点三" maxlength="20">
                    <span class="b-voice"></span>
                </div>
                <div class="q-input padding-left">
                    <span class="hook"></span>
                    <input type="text"  name="site" class="q-title site4" placeholder="地点四" maxlength="20">
                    <span class="b-voice"></span>
                </div>
            </section>
            <div class="q-input">
                <span class="hook"></span>
                <ul class="box q-time-button">
                    <li>截止时间：</li>
                    <li data-index="1" id="time-1"  class="box-flex-1">一周</li>
                    <li data-index="2" id="time-2"  class="box-flex-1">两周</li>
                    <li data-index="3" id="time-3"  class="box-flex-1">一月</li>
                </ul>
            </div>
            <div class="q-input push-mode-fri">
                <div class="box box-flex-1 hanggao-30">
                    <div class="box-flex-1">是否公开：
                        <span class="isOpen"></span></div>
                    <div id="on_off" class="push-open"></div>
                </div>

            </div>
        </div>
        <div class="fill-bottom"></div>
        <div class="q-bottom box">
            <div class="box-flex-1">
                <button type="button" onclick="empty()" class="btnOK bg-green">发 布</button>
            </div>
        </div>
    </div>
</div>
</body>
<script src="js/base.js"></script>
<script src="js/where.js?v=<?php echo rand(10,1000); ?>"></script>

</html>