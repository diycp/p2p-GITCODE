<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>借款信息列表-p2p金融借贷平台</title>
    <!-- 引入bootstrap核心库 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入编译和压缩后的css文件 -->
    <link rel="stylesheet" href="./dist/css/minCss/invest.min.css">
    <!-- 引入分页的css文件 -->
    <link rel="stylesheet" href="./lib/JqueryPagination/jquery.pagination.css">
    <!-- 兼容IE9以下的浏览器 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- 引入jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./dist/js/userStateCheck.min.js"></script>
</head>
<body>
    <!-- 引入头部信息 -->
    <?php
       require_once("topNan.php");
       require_once("header.php");
    ?>

   <!-- 模板的内容开始 -->
   <div class="container" id="personal">
     
            <!-- 右侧的内容 -->
            <div cslass="col-sm-9 col-xs-12" id="mainContent">
            <!-- <button type="button" class="btn btn-primary btn-xs" id="Btnon">隐藏</button> -->
                <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">投资列表</h3>
                    </div>
                    <div class="panel-body">
                    <div class="row">
                    <div id="biaozhungtai">
                    <span>标的状态</span>
                    <a class="btn btn-default" href="#" role="button">&emsp;全部&emsp;</a>
                    <a class="btn btn-default" href="#" role="button">&emsp;招标中&emsp;</a>
                    <a class="btn btn-default" href="#" role="button">&emsp;还款中&emsp;</a>
                    
                    </div>
                    <table class="table table-striped __web-inspector-hide-shortcut__">
                        <thead>
                        <tr>
                            <th>借款人</th>
                            <th>借款标题</th>
                            <th>借款金额(元)</th>
                            <th>还款方式</th>
                            <th>进度</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody  id="gridBody">
                        
                        </tbody>

                    </table>
                    <!-- 拷贝分页页面结构 -->
                            
                    <section id="demo">
                                
                        <div id="page" class="m-pagination"></div>
                        
                    </section>
                    </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <!-- 模板的内容结尾 -->
    <!-- 模板的内容结尾 -->

    <!-- 引入页脚 -->
     <?php
       require_once("footer.php");
    ?>
     <!-- 引入分页 -->
    <!-- 引入bootstrap核心库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  
    <script src="./dist/js/p2p.min.js"></script>
    <script id="borrowTmpl" type="text/html">
        <tr> 
            <td>zs</td>             
            <td>${borrowTitle}</td>
            <td class="text-info">${currentRate}%</td>
            <td class="text-info">${borrowAmount}</td>
            <td>${repayment}</td>
            <td>100.00%</td>
            <td><a class="btn btn-danger btn-sm" href="borrow_info.html?id=7">查看</a></td>
            
        </tr>
    </script> 
    
    <!-- 引入jqueryTemplate模板引擎的库文件 -->
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
 <!-- 引入自定义的效果JqueryPagination模板引擎的库文件-->
    <script src="./lib/JqueryPagination/jquery.pagination-1.2.7.min.js"></script>
    <script src="./dist/js/borrow.min.js"></script>
    <script>
        
        // //投资页面加载时自动发起ajax请求获取数据
        // $.get("./api/borroAll.php",function(result){
        //     //渲染模板
        //     var htmlStr=$("#borrowTmpl").tmpl(result);
        //     //把渲染后的结果更新到页面
        //     $("#gribBody").html(htmlStr);
        // },"json");


        //配置分页插件的参数
        $("#page").page({
            debug: false,
            showInfo: false,
            pageSize:5,
            showJump: true,
            showPageSizes: true,
            remote: {
                url: './api/borroAll.php',//请求的数据
                success: function (data) {
                    //console.log(data);
                    //渲染模板
                    var htmlStr=$("#borrowTmpl").tmpl(data.list);
                    //console.log(htmlStr);
                    //把渲染后的结果更新到页面
                    $("#gridBody").html(htmlStr);
                    //$("#eventLog").append(' remote callback : ' + JSON.stringify(data) + '<br />');
                }
            }
        });

        $("#page").on("pageClicked", function (event, pageIndex) {
            //$("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('jumpClicked', function (event, pageIndex) {
            //$("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('pageSizeChanged', function (event, pageSize) {
           // $("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
        });
    </script>
    
    
    
    </script>
        
    </body>
    </html>