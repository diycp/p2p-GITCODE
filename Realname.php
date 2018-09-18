<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>实名认证-p2p金融借贷平台</title>
	<!-- 引入bootstrap核心库 -->
	<link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
	<!-- 引入编译和压缩后的css文件 -->
	<link rel="stylesheet" href="./dist/css/minCss/Realname.min.css">
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
		<div class="row">
			<!-- 左侧的菜单 -->
			<div class="col-md-3 col-xs-6" id="leftTreeMenu">
				<?php 
					 require_once("userMingxi.php");
					?>
			</div>
		</div>

		<!-- 功能页面 -->
		<div class="col-sm-9 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					实名认证
				</div>
				<form class="form-horizontal" id="realAuthForm" method="post" action="realAuth_save.html" novalidate="novalidate">
					<fieldset>
						<div class="form-group">
							<p class="text-center text-danger">为保护您账户安全，实名认证成功之后不能修改信息，请认真填写！</p>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label ">用户名</label>
							<div class="col-sm-8">
								<p class="form-control-static">小强</p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="realName">姓名</label>
							<div class="col-sm-8">
								<input id="realName" name="realName" class="form-control" type="text" value="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4  control-label" for="sex">性别</label>
							<div class="col-sm-8">
								<select id="sex" class="form-control" name="sex" size="1">
									<option value="0">男</option>
									<option value="1">女</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4  control-label" for="idtype">证件类型</label>
							<div class="col-sm-8">
								<select id="idType" class="form-control" name="idtype" class="select_common" size="1">
									<option value="0">身份证</option>
									<option value="1">驾驶证</option>
									<option value="2">军官证</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4  control-label" for="idnumber">证件号码</label>
							<div class="col-sm-8">
								<input id="idNumber" class="form-control" name="idnumber" type="text" value="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4  control-label" for="birthdate">出生日期</label>
							<div class="col-sm-8">
								<input id="birthDate" class="form-control" name="birthdate" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4  control-label" for="address">证件地址</label>
							<div class="col-sm-8">
								<input id="address" class="form-control" name="address" type="text" style="max-width: 100%;width:500px;">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4  control-label" for="address">身份证照片</label>
							<div class="col-sm-8">
								<p class="text-help text-primary">请点击“选择图片”,选择证件的正反两面照片。</p>
								<a href="javascript:;" id="viewExample" data-html="true" data-toggle="tooltip" data-placement="top" title="hahahahahaha"
								 data-template="">查看样板</a>


								<div class="idCardItem">
									<div>
										<a href="javascript:;" id="uploa" "dBtn1">上传正面</a>
									</div>
									<img alt="" src="" class="uploadImg" id="uploadImg1" />
									<input type="hidden" value="" name="papersimg01" />
								</div>
								<div class="idCardItem">
									<div>
										<a href="javascript:;" id="uploadBtn2">上传反面</a>
									</div>
									<img alt="" src="" class="uploadImg" id="uploadImg2" />
									<input type="hidden" value="" name="papersimg02" />
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" id="asubmit" class="btn btn-primary col-sm-offset-4" data-loading-text="正在提交">
								<i class="icon-ok"></i> 提交认证</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
</div>
	</div>
	
	<!-- 模板的内容结尾 -->

	<!-- 引入页脚 -->
	<?php
       require_once("footer.php");
    ?>


	<!-- 引入bootstrap核心库 -->
	<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
	<!-- 引入自定义的效果 -->
	<script src="./dist/js/p2p.min.js"></script>
</body>

</html>