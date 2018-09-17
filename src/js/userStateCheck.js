//发送ajax验证后端api是否登录
$.get("./api/checkState.php",function(data){
  //console.log("验证的结果",data);
  
    if(!data.isSuccess){
        alert(data.msg);
        location.href="login.php";
    }
},"json");


