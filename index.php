<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蓝源Eloan-p2p平台</title>
    <!-- 引入bootstrap.css样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入css样式 -->
    <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
</head>
<body>
  <!-- 头部 -->
  

<?php
require_once("topNan.php");
require_once("header.php");
?>


  <!-- 轮播 -->

  <!-- 轮播 -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./images/banner01.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="./images/banner02.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <!-- 三大特色介绍 -->
 <div class="container" id="feature">
<div class="row">
   <div class="col-sm-4 col-xs-12">
    <h4>投资理财</h4>
    <p>投资并非一个智商为160的人就一定能击败智商为130的人的游戏。</p>
    <p></p>
   </div>
   <div class="col-sm-4 col-xs-12">
   <h4>业界大牛</h4>
    <p>在马拉松比赛中，你想跑到第一的前提是必须跑完全程。</p>
     </div>
     <div class="col-sm-4 col-xs-12">
     <h4>资金管家</h4>
    <p>如果你的投资运行良好，那么，跟着感觉走，并且把你所有的资产投入进去。</p>
     </div>
</div>
 </div>





  <!-- 借款 -->
  <div class="panel panel-default container">
  <!-- Default panel contents -->
  <div class="panel-heading clearfix">
    <h3 class="pull-left">进行中借款</h3>
    <a  class="pull-right" href="#">进入投资列表</a>
  </div>
  <!-- Table -->
  <table class="table table-hover">
      <thead>
        <tr>
          <th>借款人</th>
          <th class="hideTitle">借款标题</th>
          <th>年利率</th>
          <th>金额</th>
          <th class="hideTitle">还款方式</th>
          <th>进度</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>		

        <tr>
          <td>张三</td>          
          <td class="hideTitle">给我2000度过难关</td>
          <td>10.00%</td>
          <td>2,000.00</td>
          <td class="hideTitle">按月分期还款	</td>
          <td>78.00%</td>
          <td><button type="button" class="btn btn-danger btn-sm">查看</td>
        </tr>
        <tr>
          <td>张三</td>          
          <td class="hideTitle">给我2000度过难关</td>
          <td>10.00%</td>
          <td>2,000.00</td>
          <td class="hideTitle">按月分期还款	</td>
          <td>78.00%</td>
          <td><button type="button" class="btn btn-danger btn-sm">查看</td>
        </tr>
      
        <tr>
          <td>张三</td>          
          <td class="hideTitle">给我2000度过难关</td>
          <td>10.00%</td>
          <td>2,000.00</td>
          <td class="hideTitle">按月分期还款	</td>
          <td>78.00%</td>
          <td><button type="button" class="btn btn-danger btn-sm">查看</td>
        </tr>
      
      
      </tbody>
    </table>
</div>	




  <!-- 信息咨询 -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="panel panel-default">
        <div class="panel-heading clearfix">
        <h3 class="pull-left">企业最新资讯</h3>
          <a class="pull-right" href="#">更多资讯>></a>
        </div>
        <div class="panel-body">
         <ul>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
         </ul>
        </div>
      </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="panel panel-default">
        <div class="panel-heading clearfix">
        <h3 class="pull-left">企业最新资讯</h3>
          <a class="pull-right" href="#">更多资讯>></a>
        </div>
        <div class="panel-body">
         <ul>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
         </ul>
        </div>
      </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="panel panel-default">
        <div class="panel-heading clearfix">
        <h3 class="pull-left">企业最新资讯</h3>
          <a class="pull-right" href="#">更多资讯>></a>
        </div>
        <div class="panel-body">
         <ul>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
         </ul>
        </div>
      </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="panel panel-default">
        <div class="panel-heading clearfix">
        <h3 class="pull-left">企业最新资讯</h3>
          <a class="pull-right" href="#">更多资讯>></a>
        </div>
        <div class="panel-body">
         <ul>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
           <li><a href="#">央视力挺互联网金融<span class="pull-right">发表日期：2015-03-23</span></a></li>
         </ul>
        </div>
      </div>
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
     <!-- 引入自己的jquery -->
   <script src="./dist/js/p2p.min.js"></script>
   
</body>
</html>