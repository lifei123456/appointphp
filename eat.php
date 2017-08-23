<!DOCTYPE html>
<?php

//$arr=$arr = array(
//    [
//        "Url"=>'./images/1491382615111.png',
//        "Name"=>'海鹰战警',"Director"=>'钟光琳',"Staring"=>'张一，吴青芸，牟凤彬',"Duration"=>'95分钟',"Date"=>'2017-04-11'
//    ],
//    [
//        "Url"=>'./images/1490689845251.png',
//        "Name"=>'攻壳机动队',"Director"=>'鲁伯特·山德斯',"Staring"=>'斯嘉丽·约翰逊',"Duration"=>'107分钟',"Date"=>'2017-04-07'
//    ],
//    [
//        "Url"=>'./images/1490689928843.png',
//        "Name"=>'海角有个五店市',"Director"=>'张柏瑞',"Staring"=>'王德顺，李纯',"Duration"=>'107分钟',"Date"=>'2017-04-07'
//    ],
//    [
//        "Url"=>'./images/1490689928843.png',
//        "Name"=>'鸡飞狗跳',"Director"=>'罗棋',"Staring"=>'狄威，陈观泰',"Duration"=>'89分钟',"Date"=>'2017-04-07'
//    ],
//    [
//        "Url"=>'./images/1490690098242.png',
//        "Name"=>'点五步',"Director"=>'陈志发',"Staring"=>'林耀声，廖启智',"Duration"=>'96分钟',"Date"=>'2017-04-07'
//    ],
//    [
//        "Url"=>'./images/1490690177329.png',
//        "Name"=>'六月与弓箭',"Director"=>'林波',"Staring"=>'王艺嘉，杨铮',"Duration"=>'91分钟',"Date"=>'2017-04-07'
//    ],[
//        "Url"=>'./images/1490690240658.png',
//        "Name"=>'惊悚小说',"Director"=>'白丽丽',"Staring"=>'吕聿来，康凯',"Duration"=>'90分钟',"Date"=>'2017-04-07'
//    ],[
//        "Url"=>'./images/1491382509489.png',
//        "Name"=>'一念无明',"Director"=>'黄进',"Staring"=>'余文乐，曾志伟',"Duration"=>'101分钟',"Date"=>'2017-04-07'
//    ],
//    [
//        "Url"=>'./images/1490689745708.png',
//        "Name"=>'麦兜当当伴我心',"Director"=>'谢立文',"Staring"=>'张正中，吴君如',"Duration"=>'80分钟',"Date"=>'2017-04-02'
//    ],
//    [
//        "Url"=>'./images/1490689645409.png',
//        "Name"=>'怨灵宿舍之白纸女生',"Director"=>'陆诗雷',"Staring"=>'谢容儿，薇拉贝儿，',"Duration"=>'87分钟',"Date"=>'2017-04-01'
//    ],
//    [
//        "Url"=>'./images/1490689561674.png',
//        "Name"=>'冰雪大作战',"Director"=>'François Brisson',"Staring"=>'Angela Galuppo，张震',"Duration"=>'83分钟',"Date"=>'2017-04-01'
//    ],
//    [
//        "Url"=>'./images/1490689431779.png',
//        "Name"=>'有完没完',"Director"=>'王啸坤',"Staring"=>'贾静雯，范伟',"Duration"=>'99分钟',"Date"=>'2017-04-01'
//    ]
//);
//
//file_put_contents("./resource/config.json",json_encode($arr,JSON_UNESCAPED_UNICODE));




require_once "function/function.php";
initUser();
?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>定日子</title>
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/eat.css" rel="stylesheet">
    <script src="js/jquery-2.1.4.js"></script>
</head>
<body class="">
<div id="app">
    <div id="createVoteDay" style="height:100%">
        <div class="content">

            <section id="choice_day" slot="voteTypeChoice">
                <div class="q-input padding-left empty">
                    <span class="hook"></span>
                    <input type="text" id="q-title" placeholder="标题(限20个字内)" maxlength="20">
                    <span class="b-voice"></span>
                </div>
                <div class="line"></div>
                <div class="q-img-options">
                    <ul class="q-img-box">
                        <li class="box-li ">
                            <span class="hook blue"></span>
                            <div class="img-item bg-white">
                                <span class="upload-text">日子 1</span>
                                <dl class="item-time day-1 data-value-1" data-value="">
                                    <dt class="time-1">时间</dt>
                                    <dd class="week-1">星期</dd>
                                    <dd class="data-1">日期</dd>
                                </dl>
                                <span class="option-del del-1" style="display: none">
                      <b>
                      </b>
                    </span>
                            </div>

                        </li>
                        <li class="box-li ">
                            <span class="hook blue"></span>
                            <div class="img-item bg-white">
                                <span class="upload-text">日子 2</span>
                                <dl class="item-time day-2 data-value-2" data-value="" style="display: none">
                                    <dt class="time-2">时间</dt>
                                    <dd class="week-2">星期</dd>
                                    <dd class="data-2">日期</dd>
                                </dl>
                                <span class="option-del del-2" style="display: none">
                      <b>
                      </b>
                    </span>
                            </div>

                        </li>
                        <li class="box-li ">
                            <span class="hook blue"></span>
                            <div class="img-item bg-white">
                                <span class="upload-text">日子 3</span>
                                <dl class="item-time day-3 data-value-3" data-value="" style="display: none">
                                    <dt class="time-3">时间</dt>
                                    <dd class="week-3">星期</dd>
                                    <dd class="data-3">日期</dd>
                                </dl>
                                <span class="option-del del-3" style="display: none">
                      <b>
                      </b>
                    </span>
                            </div>

                        </li>
                    </ul>
                </div>

            </section>


            <div class="q-input">
                <span class="hook"></span>
                <ul class="box q-time-button">
                    <li>截止时间：</li>
                    <li data-index="1" id="time-1" class="box-flex-1">一周</li>
                    <li data-index="2" id="time-2" class="box-flex-1">两周</li>
                    <li data-index="3" id="time-3" class="box-flex-1">一月</li>
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
        <div class="day-time-template" style="bottom: -300px;">
            <div class="day-content">
                <div class="time-head">
                </div>
                <div class="date-box">
                    <div class="time-box box">
                        <div class="box-flex-1"></div>
                        <div class="year-options">
                            <div class="sContainer" style="overflow: hidden;">
                                <ul class="roll-ul ul-1  vMain"
                                    style="transition-property: transform; transform-origin: 0px 0px 0px; transform: translate(0px, -2880px) scale(1) translateZ(0px);">
                                    <li>--</li>
                                    <li>2065</li>
                                    <li>2064</li>
                                    <li>2063</li>
                                    <li>2062</li>
                                    <li>2061</li>
                                    <li>2060</li>
                                    <li>2059</li>
                                    <li>2058</li>
                                    <li>2057</li>
                                    <li>2056</li>
                                    <li>2055</li>
                                    <li>2054</li>
                                    <li>2053</li>
                                    <li>2052</li>
                                    <li>2051</li>
                                    <li>2050</li>
                                    <li>2049</li>
                                    <li>2048</li>
                                    <li>2047</li>
                                    <li>2046</li>
                                    <li>2045</li>
                                    <li>2044</li>
                                    <li>2043</li>
                                    <li>2042</li>
                                    <li>2041</li>
                                    <li>2040</li>
                                    <li>2039</li>
                                    <li>2038</li>
                                    <li>2037</li>
                                    <li>2036</li>
                                    <li>2035</li>
                                    <li>2034</li>
                                    <li>2033</li>
                                    <li>2032</li>
                                    <li>2031</li>
                                    <li>2030</li>
                                    <li>2029</li>
                                    <li>2028</li>
                                    <li>2027</li>
                                    <li>2026</li>
                                    <li>2025</li>
                                    <li>2024</li>
                                    <li>2023</li>
                                    <li>2022</li>
                                    <li>2021</li>
                                    <li>2020</li>
                                    <li>2019</li>
                                    <li>2018</li>
                                    <li>2017</li>
                                    <li>2016</li>
                                    <li>2015</li>
                                    <li>2014</li>
                                    <li>2013</li>
                                    <li>2012</li>
                                    <li>2011</li>
                                    <li>2010</li>
                                    <li>2009</li>
                                    <li>2008</li>
                                    <li>2007</li>
                                    <li>2006</li>
                                    <li>2005</li>
                                    <li>2004</li>
                                    <li>2003</li>
                                    <li>2002</li>
                                    <li>2001</li>

                                    <li>--</li>
                                </ul>
                            </div>
                            <div class="float-text" style="left:0px">年</div>
                        </div>
                        <div class="month-options">
                            <div class="sContainer" style="overflow: hidden;">
                                <ul class="roll-ul ul-2 vMain"
                                    style="transition-property: transform; transform-origin: 0px 0px 0px; transform: translate(0px, -540px) scale(1) translateZ(0px);">
                                    <li>--</li>
                                    <li>12</li>
                                    <li>11</li>
                                    <li>10</li>
                                    <li>9</li>
                                    <li>8</li>
                                    <li>7</li>
                                    <li>6</li>
                                    <li>5</li>
                                    <li>4</li>
                                    <li>3</li>
                                    <li>2</li>
                                    <li>1</li>
                                    <li>--</li>
                                </ul>
                            </div>
                            <div class="float-text">月</div>
                        </div>
                        <div class="day-options">
                            <div class="sContainer" style="overflow: hidden;">
                                <ul class="roll-ul ul-3 vMain"
                                    style="transition-property: transform; transform-origin: 0px 0px 0px; transform: translate(0px, -240px) scale(1) translateZ(0px);">
                                    <li>--</li>
                                    <li>31</li>
                                    <li>30</li>
                                    <li>29</li>
                                    <li>28</li>
                                    <li>27</li>
                                    <li>26</li>
                                    <li>25</li>
                                    <li>24</li>
                                    <li>23</li>
                                    <li>22</li>
                                    <li>21</li>
                                    <li>20</li>
                                    <li>19</li>
                                    <li>18</li>
                                    <li>17</li>
                                    <li>16</li>
                                    <li>15</li>
                                    <li>14</li>
                                    <li>13</li>
                                    <li>12</li>
                                    <li>11</li>
                                    <li>10</li>
                                    <li>9</li>
                                    <li>8</li>
                                    <li>7</li>
                                    <li>6</li>
                                    <li>5</li>
                                    <li>4</li>
                                    <li>3</li>
                                    <li>2</li>
                                    <li>1</li>
                                    <li>--</li>
                                </ul>
                            </div>
                            <div class="float-text">日</div>
                        </div>
                        <div class="hour-options">
                            <div class="sContainer" style="overflow: hidden;">
                                <ul class="roll-ul ul-4 vMain"
                                    style="transition-property: transform; transform-origin: 0px 0px 0px; transform: translate(0px, -1080px) scale(1) translateZ(0px);">
                                    <li>--</li>
                                    <li>23</li>
                                    <li>22</li>
                                    <li>21</li>
                                    <li>20</li>
                                    <li>19</li>
                                    <li>18</li>
                                    <li>17</li>
                                    <li>16</li>
                                    <li>15</li>
                                    <li>14</li>
                                    <li>13</li>
                                    <li>12</li>
                                    <li>11</li>
                                    <li>10</li>
                                    <li>9</li>
                                    <li>8</li>
                                    <li>7</li>
                                    <li>6</li>
                                    <li>5</li>
                                    <li>4</li>
                                    <li>3</li>
                                    <li>2</li>
                                    <li>1</li>
                                    <li>0</li>
                                    <li>--</li>
                                </ul>
                            </div>
                            <div class="float-text">时</div>
                        </div>
                        <div class="minute-options">
                            <div class="sContainer" style="overflow: hidden;">
                                <ul class="roll-ul ul-5 vMain"
                                    style="transition-property: transform; transform-origin: 0px 0px 0px; transform: translate(0px, -1380px) scale(1) translateZ(0px);">
                                    <li>--</li>
                                    <li>59</li>
                                    <li>58</li>
                                    <li>57</li>
                                    <li>56</li>
                                    <li>55</li>
                                    <li>54</li>
                                    <li>53</li>
                                    <li>52</li>
                                    <li>51</li>
                                    <li>50</li>
                                    <li>49</li>
                                    <li>48</li>
                                    <li>47</li>
                                    <li>46</li>
                                    <li>45</li>
                                    <li>44</li>
                                    <li>43</li>
                                    <li>42</li>
                                    <li>41</li>
                                    <li>40</li>
                                    <li>39</li>
                                    <li>38</li>
                                    <li>37</li>
                                    <li>36</li>
                                    <li>35</li>
                                    <li>34</li>
                                    <li>33</li>
                                    <li>32</li>
                                    <li>31</li>
                                    <li>30</li>
                                    <li>29</li>
                                    <li>28</li>
                                    <li>27</li>
                                    <li>26</li>
                                    <li>25</li>
                                    <li>24</li>
                                    <li>23</li>
                                    <li>22</li>
                                    <li>21</li>
                                    <li>20</li>
                                    <li>19</li>
                                    <li>18</li>
                                    <li>17</li>
                                    <li>16</li>
                                    <li>15</li>
                                    <li>14</li>
                                    <li>13</li>
                                    <li>12</li>
                                    <li>11</li>
                                    <li>10</li>
                                    <li>9</li>
                                    <li>8</li>
                                    <li>7</li>
                                    <li>6</li>
                                    <li>5</li>
                                    <li>4</li>
                                    <li>3</li>
                                    <li>2</li>
                                    <li>1</li>
                                    <li>0</li>
                                    <li>--</li>
                                </ul>
                            </div>
                            <div class="float-text">分</div>
                        </div>
                        <div class="period-options" style="display: none;">

                            <div class="float-text" style="left:12px">时段</div>
                        </div>
                        <div class="box-flex-1"></div>
                    </div>
                    <div class="line-box">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="day-buttons box">
                    <div class="day-ok day1-ok box-flex-1">时间一</div>
                    <div class="day2-ok day-ok box-flex-1">时间二</div>
                    <div class="day3-ok day-ok box-flex-1">时间三</div>

                </div>
            </div>
        </div>
        <section class="tip" style="display: none">
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
<script src="./js/base.js"></script>
<script src="./js/eat.js?v=<?php echo rand(10,1000); ?>"></script>
</body>

</html>