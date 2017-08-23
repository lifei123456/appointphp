var baseURL = "./server/ajaxFunction.php";
function retu() {
    var site_0=$("#q-title").val();
    var site_1=$(".site1").val();
    var site_2=$(".site2").val();
    var site_3=$(".site3").val();
    var site_4=$(".site4").val();
    var site_5=$(".selected").attr("id");
    var site_6=$("#on_off").attr("class");
    var  arr=[site_0,site_1,site_2,site_3,site_4,site_5,site_6];
    return arr;
}
function empty() {
    var site_2=retu();
    if ($.trim(site_2[0]).length <= 0) {
        alert('请输入标题');
    }
    else {
        var a=$.trim(site_2[1]).length <= 0;
        var b=$.trim(site_2[2]).length <= 0;
        var c=$.trim(site_2[3]).length <= 0;
        var d=$.trim(site_2[4]).length <= 0;
        if(a&&b&&c&&d){
            alert("请输入地点");
        }
        else {
            if(site_2[5]==null){
                alert("time")
            }
            else {
            }

        }

    }
    $.ajax({
        url : baseURL+"?type=where",
        data : {data : site_2 },
        type : "POST",
        dataType : "JSON",
        success : function (data) {
            console.log(data);
            if(data.errcode == "1") {
                window.location.href="show.php?id="+data.id;
            }
            else {
                alert(data.info);
            }
        },
        error : function (err) {
            console.log(err)
        }
    });
    console.log(site_2) ;
}