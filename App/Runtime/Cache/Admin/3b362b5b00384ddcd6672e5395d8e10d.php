<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1" name="viewport"/>
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<title>上传</title>
		<!-- 引用控制层插件样式 -->
		<link rel="stylesheet" href="/Public/tools/php_img_upload/control/css/zyUpload.css" type="text/css">
		
		<!--图片弹出层样式 必要样式-->
		<script type="text/javascript" src="/Public/tools/php_img_upload/jquery-1.7.2.js"></script>
		<!-- 引用核心层插件 -->
		<script type="text/javascript" src="/Public/tools/php_img_upload/core/zyFile.js"></script>
		<!-- 引用控制层插件 -->
		<script type="text/javascript" src="/Public/tools/php_img_upload/control/js/zyUpload.js"></script>
		
	</head>
	<body>
		<h1 style="text-align:center;">图片上传</h1>
	    <div id="demo" class="demo"></div>   
	    <div id="successinfo">
	    
	    </div>
	    <script>
	    var img_id = '<?php echo ($goods_sn); ?>';	//定义img_id，demo.js里面即可引用img_id作为post的参数传输
	    </script>
	    <!-- 引用初始化JS -->
		<script type="text/javascript" src="/Public/tools/php_img_upload/demo.js"></script>
	</body>
</html>