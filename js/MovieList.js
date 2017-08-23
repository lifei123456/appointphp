var storage = window.sessionStorage;
var a=storage.length;
var selected,selected_img;
$(function(){
    for(var i=0;i<storage.length;i++){
        var str= storage.getItem(storage.key(i));
        var strs = str.split(",");
        var id=jQuery.trim(strs[2]);
        $("#"+id).addClass("selected");
        $("#num").text(a+"/4");
    }
});
$(".listItem ").click(function (e) {
    if($(this).hasClass("selected")){
        $(this).removeClass("selected");
        a--;
        $("#num").text(a+"/4");
        selected=$(this).find("dt").html();
        selected_img=$(this).find("img").attr('src');
        storage.removeItem(selected);
    }else{
        if(a<4) {
            $(this).addClass("selected");
            a++;
            $("#num").text(a + "/4");
            selected=$(this).find("dt").html();
            selected_img=$(this).find("img").attr('src');
            var b=a-1;
            var Val=selected+","+selected_img+","+$(this).attr("id");
            storage.setItem(selected,Val);
        }
        else {
            alert("你点多了");
        }
    }
});
$("#right-line").click(function () {
    $(".half-line").addClass("right");
    $("#now").addClass("hid");
});
$("#left-line").click(function () {
    $(".half-line").removeClass("right");
    $("#now").removeClass("hid");
});
function return_arr() {
     return arr;
 }
$("#btnOK").click(function () {
    window.location.href='movie.php'
});



