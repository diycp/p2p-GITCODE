<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册-蓝源Eloan-p2p平台</title>
    <!-- 引入bootstrap.css样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
     <!-- 引入bootstrapvalidator.css -->
     <link rel="stylesheet" href="./lib/bootstrapvalidator/css/bootstrapValidator.min.css">
    <!-- 引入css样式 -->
    <link rel="stylesheet" href="./dist/css/minCss/regLogin.min.css">
</head>
<body>
   <!-- 引入导航一 -->
   <?php
   require_once("topNan.php");
   
   ?>
  <!-- 导航二 -->
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="./images/logo.png" alt="logo"></a>
      <span class="yourPlace ">用户注册</span>
    </div>
    
  </div><!-- /.container-fluid -->
  </nav>
<!-- 注册 -->
<!-- 模板的内容开始 -->
<div class="container reglogin">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">用户注册</h3>
            </div>
            <div class="panel-body">
                <form id="login" class="form-horizontal">
                  <p>请输入用户名和密码</p>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">用户名：</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" name="username" placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">密码：</label>
                        <div class="col-sm-4">
                        <input type="password" class="form-control" name="password" placeholder="请输入密码">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-4">
                        <button type="submit" class="btn btn-success">立即注册</button>
                        <a href="#" style="margin: 10px;font-size:16px;">新用户，马上注册</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- 页脚 -->
<?php
require_once("footer.php");
  ?>
 <!-- 引入jquery -->
 <script src="./lib/jquery/jquery.min.js"></script>
   
   <!-- 引入bootstrap.js -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
     <!-- 引入bootstrapvalidator.js -->
     <script src="./lib/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
     <!-- 引入自己的jquery -->
   <script src="./dist/js/p2p.min.js"></script>
   <!-- 引入表单的js -->
  <script src="./dist/js/login.min.js"></script>
</body>
</html>