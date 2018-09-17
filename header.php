  <!-- 头部 -->
  <section>
 

<!-- 导航栏二 -->
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="./images/logo.png" alt="logo"></a>
    </div>
   
    <!-- Collect the nav links, forms, and other content for toggling -->
    
      <ul class="nav navbar-nav"  id="mainMenu">
        <li class="active"><a href="./index.php?menuid=1">首页</a></li>
        <li><a href="./invest.php?menuid=2">我要投资</a></li>
        <li><a href="./borrow.php?menuid=3">我要借款</a></li>
        <li><a href="./userInfo.php?menuid=4">个人中心</a></li>
        <li><a href="#">新手指引</a></li>
        <li><a href="#">关于我们</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
  </div><!-- /.container-fluid -->
  </nav>
  </section>
  <script>
   //点击那个栏目，那个栏目就添加高亮效果，添加active的类
   //网址
   var reqUrl=location.href;
   //菜单的id
   var menuid=reqUrl.split("=")[1];
   //console.log("菜单的id",menuid);
   //把菜单id对应所有的li添加active，兄弟元素移出active
   $("#mainMenu li").eq(menuid-1).addClass("active").siblings("li").removeClass("active");
</script>