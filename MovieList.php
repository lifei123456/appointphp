<!DOCTYPE html>
<html lang="en">
<?php
$res = json_decode(file_get_contents("./resource/config.json"),true);
//var_dump($res);
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>
        MovieList
    </title>
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/self.css" rel="stylesheet">
    <link href="./css/list.css?v=2" rel="stylesheet">
    <script src="./js/jquery-2.1.4.js"></script>
    <script src="./js/jquery.cookie.js"></script>
</head>

<body class="">
<div id="app">
    <div id="shopList" style="height: 594px;">
        <div class="vContainer">
            <div class="vMain"
                 style="transition-property: transform; transform-origin: 0px 0px 0px; transform: translate(0px, 0px) translateZ(0px);">
                <ul id="now" class="dataList">
                    <?php foreach ($res as $item){ ?>
                    <li id="1" class="listItem box ">
                        <div class="shop-img">
                            <img src="<?php echo $item['Url'] ?>">
                        </div>
                        <div class="box-flex-1">
                            <dl class="shop-info">
                                <dt class="shop-name text-ellipsis">
                                    <?php echo $item['Name'] ?>
                                </dt>
                                <dd class="text-ellipsis">
                                    <label>
                                        导演：
                                    </label>
                                    <?php echo $item['Director'] ?>
                                </dd>
                                <dd class="text-ellipsis">
                                    <label>
                                        主演：
                                    </label>
                                    <?php echo $item['Staring'] ?>
                                </dd>
                                <dd class="text-ellipsis">
                                    <label>
                                        片长：
                                    </label>
                                    <?php echo $item['Duration'] ?>
                                </dd>
                                <dd class="text-ellipsis">
                                    <label>
                                        上映日期：
                                    </label>
                                    <?php echo $item['Date'] ?>
                                </dd>
                            </dl>
                        </div>
                        <div class="checked">
                            <div class="circle">
                                <span class="hook2"></span>
                            </div>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
                <div class="no-data" style="display: none;">
                    未找到相关数据！
                </div>
                <div class="fill-bottom">
                </div>
            </div>
        </div>
    </div>
    <section class="tip" style="display: none;">
        <div class="tip_text hide">
            <h1 class="2" v-else="">
            </h1>
        </div>
        <div class="backdrop">
        </div>
    </section>
    <footer id="moiveFooter" class="border-box box">
        <div class="box-flex-1">
            <div class="hContainer" style="overflow: hidden;">
                <div class="hMain"
                     style="transition-property: transform; transform-origin: 0px 0px 0px; transform: translate(0px, 0px) translateZ(0px); width: 48px;">
                </div>
            </div>
        </div>
        <div>
                    <span class="choose-count" id="num">
                            0/4
                    </span>
            <input type="button" id="btnOK" class="btnOK" value="确定">
        </div>
    </footer>
</div>
</body>
<script src="./js/MovieList.js?v=<?php echo rand(10,1000); ?>"></script>

</html>