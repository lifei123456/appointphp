$(".img-hook").click(function (e) {
    $(this).removeClass("img-no");
    $(this).addClass("change-img");
    console.log("asd");
});
$(".weui-navbar__item").click(function (e) {
    $(".weui-navbar__item").removeClass("weui-bar__item_on");
    $(this).addClass("weui-bar__item_on");
});
