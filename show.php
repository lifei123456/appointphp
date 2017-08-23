<!DOCTYPE html>
<html lang="en">
<?php
require_once "function/function.php";
require_once "function/mysqlDb.php";
initUser();
$mysql = new  mysqlDb();
if(isset($_GET['id'])) {
    $res = $mysql->getOneInfo($_GET['id']);
//    var_dump($res);
}
else {
    die("EOF");
}
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta content="email=no" name="format-detection"/>
    <title>详情</title>
    <link href="./css/style.css?v=2" rel="stylesheet"/>
    <script src="js/jquery-2.1.4.js" type="text/javascript"></script>
</head>
<body class="day">
<div id="detailVoteScene">
    <div id="vote">
        <section id="voteStoryScene" slot="voteStory">
            <div class="top day">
                <div class="user-box box">
                    <div class="user-head">
                        <img class="head-img" src="./images/0"/>
                    </div>
                    <div class="box-flex-1">
                        <h3 class="nick-name day"><?php echo $res['name']; ?></h3>
                        <div class="box">
                            <div class="box-flex-1">
                                <span class="number fq-count"><?php echo substr(date("Y-m-d",$res['addtime']),2); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vote-hot-box day">
                    <h2 class="hot-num-box"><span class="number vote-num">0</span>票</h2>
                    <div class="hot-visit-box">
                        <span class="number vote-visit">0</span>浏览
                    </div>
                </div>
            </div>
            <div class="bg-story day">
                <span class="up-indicate day"></span>
                <div class="box">
                    <div class="biaodian"></div>
                    <div class="story-text-box box-flex-1">
                        <p class="story-text">兔兔</p>
                        <div class="more-text" style="display: none;">
                            更多
                            <span class="down-arrows"></span>
                        </div>
                    </div>
                    <div class="biaodian down"></div>
                </div>
            </div>
        </section>
        <section class="vote-info module_scene" slot="voteCard" sort-item="" pk-item="">
            <div class="vote-scene-title">
                <span>哈哈哈哈</span>
            </div>
            <div class="multiple-img-options">
                <ul style="display: flex;flex-flow: row wrap">
                    <li style="background:#fff;border:none">
                        <div style="position: relative;overflow:hidden" class="box-flex-1">
                            <div class="option-img" style="background-color: rgb(255, 255, 255); width: 168.5px;">
                                <div class="item-head">
                                    2017
                                </div>
                                <div class="item-ctx box">
                                    <div class="box-flex-1"></div>
                                    <div class="item-time-box box-flex-2">
                                        <div class="item-month">
                                            03月
                                        </div>
                                        <span class="item-time-circle1"></span>
                                        <span class="item-time-circle2"></span>
                                        <h3>22</h3>
                                        <div class="item-week box">
                                            <div class="box-flex-1">
                                                星期三 09:23
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-flex-1"></div>
                                </div>
                                <div class="item-desc-box" style="height: 50px; display: none;">

                                </div>
                                <div class="item-desc-box" style="height:45px">
                                    <div class="item-rect">
                                        <b></b>
                                        <span class="item-day-people">0人</span>
                                        <p style="text-align: center">－－－</p>
                                        <p style="display: none;"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="option-tool box no-bg">
                                <div class="hook-box">
                                    <div style="top:0; " class="img-hook  img-no">
                                        <div class="hook dayClass" style="display: none;">
                                            <b class="dayClass"></b>
                                        </div>
                                        <div class="progress rel">
                                            <canvas class="img-canvas" width="80" height="80"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background:#fff;border:none">
                        <div style="position: relative;overflow:hidden" class="box-flex-1">
                            <div class="option-img" style="background-color: rgb(255, 255, 255); width: 168.5px;">
                                <div class="item-head">
                                    2017
                                </div>
                                <div class="item-ctx box">
                                    <div class="box-flex-1"></div>
                                    <div class="item-time-box box-flex-2">
                                        <div class="item-month">
                                            03月
                                        </div>
                                        <span class="item-time-circle1"></span>
                                        <span class="item-time-circle2"></span>
                                        <h3>22</h3>
                                        <div class="item-week box">
                                            <div class="box-flex-1">
                                                星期三 09:20
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-flex-1"></div>
                                </div>
                                <div class="item-desc-box" style="height: 50px; display: none;">

                                </div>
                                <div class="item-desc-box" style="height:45px">
                                    <div class="item-rect">
                                        <b></b>
                                        <span class="item-day-people">0人</span>
                                        <p style="text-align: center">－－－</p>
                                        <p style="display: none;"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="option-tool box no-bg">
                                <div class="hook-box">
                                    <div style="top:0" class="img-hook  img-no">
                                        <div class="hook dayClass" style="display: none;">
                                            <b class="dayClass"></b>
                                        </div>
                                        <div class="progress rel">
                                            <canvas class="img-canvas" width="80" height="80"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <div class="footer-fill"></div>
    </div>
</div>
</body>
<script src="./js/show.js" type="text/javascript"></script>
</html>