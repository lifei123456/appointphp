<!DOCTYPE html>
<!-- saved from url=(0059)http://m.wanyan.com/app/vote2/#!/send/moive?t=1490243579014 -->
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
    <title>去哪看</title>
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <script src="js/jquery-2.1.4.js"></script>
    <script src="./js/jquery.cookie.js"></script>
</head>
<body class="">
<div id="app">
    <div id="createVoteMoive" style="height:100%">
        <div class="content">
            <section id="link2buy" slot="voteTipInfo">最多支持4部电影</section>
            <section id="choice_moive" slot="voteTypeChoice">
                <div class="q-input padding-left">
                    <span class="hook"></span>
                    <input id="q-title" type="text" name="title" class="q-title" placeholder="看哪部电影？(限20个字内)" maxlength="20">
                    <span class="b-voice"></span>
                </div>
                <div class="line"></div>
                <div id="movie-q-img-options"  class="q-img-options">
                    <span class="hook"></span>
                    <ul class="q-img-box">
                        <li class="box2-li">
                            <div class="img-item bg-white">
                                <span class="upload-text">电影1</span>
                                <div id="option-M-1"  class="option-img" >
                                    <img id="M-1" lazy="loaded" src="" style="width: 100%; height: 100%; margin-top: 0px; margin-left: 0px;"></div>
                                <span id="option-del-1" class="option-del" style="display: none;">
                      <b>
                      </b>
                    </span>
                            </div>

                            <div class="img-item-desc">
                                <input type="text" id="itemUrlDesc-1" readonly="readonly" class="itemUrlDesc" value="添加描述" maxlength="7"></div>
                        </li>
                        <li class="box2-li">
                            <div class="img-item bg-white">
                                <span class="upload-text">电影2</span>
                                <div id="option-M-2" class="option-img" >
                                    <img id="M-2" lazy="loaded" src="" style="width: 100%; height: 100%; margin-top: 0px; margin-left: 0px;"></div>
                                <span id="option-del-2" class="option-del" style="display: none;">
                      <b>
                      </b>
                    </span>
                            </div>
                            <div class="img-item-desc">
                                <input type="text" id="itemUrlDesc-2" readonly="readonly" class="itemUrlDesc" value="添加描述" maxlength="7"></div>
                        </li>
                        <li class="box2-li">
                            <div class="img-item bg-white">
                                <span class="upload-text">电影3</span>
                                <div id="option-M-3" class="option-img" >
                                    <img id="M-3" lazy="loaded" src="" style="width: 100%; height: 100%; margin-top: 0px; margin-left: 0px;"></div>
                                <span id="option-del-3" class="option-del" style="display: none;">
                      <b>
                      </b>
                    </span>
                            </div>
                            <div class="img-item-desc">
                                <input type="text" id="itemUrlDesc-3" readonly="readonly" class="itemUrlDesc" value="添加描述" maxlength="7"></div>
                        </li>
                        <li class="box2-li">
                            <div class="img-item bg-white">
                                <span class="upload-text">电影4</span>
                                <div id="option-M-4"  class="option-img" >
                                    <img id="M-4" lazy="loaded" src="" style="width: 100%; height: 100%; margin-top: 0px; margin-left: 0px;"></div>
                                <span id="option-del-4" class="option-del" style="display: none;">
                      <b>
                      </b>
                    </span>
                            </div>
                            <div class="img-item-desc">
                                <input type="text" id="itemUrlDesc-4" readonly="readonly" class="itemUrlDesc" value="添加描述"  maxlength="7"></div>
                        </li>
                    </ul>
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

            <section class="q-input" style="display: none;">
                <div class="box">
                    <div class="row-title">最多可选：
                        <span class="num-ct">不限制</span></div>
                    <div class="oper-btns box">
                        <i class="reduce-btn box-flex-1"></i>
                        <span class="num-ct box-flex-2">--</span>
                        <i class="add-btn box-flex-1"></i>
                    </div>
                </div>
            </section>
            <section class="q-input" style="display: none;">
                <div class="box">
                    <div class="row-title">最少必选：
                        <span class="num-ct">1</span></div>
                    <div class="oper-btns box">
                        <i class="reduce-btn box-flex-1"></i>
                        <span class="num-ct box-flex-2">1</span>
                        <i class="add-btn box-flex-1"></i>
                    </div>
                </div>
            </section>
            <div class="q-input push-mode-fri">
                <div class="box box-flex-1 hanggao-30">
                    <div class="box-flex-1">是否公开：
                        <span class="isOpen"></span></div>
                    <div id="on_off"  class="push-open"></div>
                </div>
            </div>
        </div>
        <div class="fill-bottom"></div>
        <div class="q-bottom box">
            <div class="box-flex-1">
                <button type="button" onclick="empty()" class="btnOK bg-green">发 布</button></div>
        </div>
    </div>
</div>
<script src="./js/base.js?v=<?php echo rand(10,1000); ?>"></script>
<script src="./js/MovieList.js?v=<?php echo rand(10,1000); ?>"></script>
<script src="js/movie.js?v=<?php echo rand(10,1000); ?>"></script>
</body>

</html>