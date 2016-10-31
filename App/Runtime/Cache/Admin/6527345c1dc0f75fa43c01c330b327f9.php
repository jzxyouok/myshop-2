<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Light App - Left</title>
<link href="/Public/Admin/css/page.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="/Public/Admin/js/window.js"></script>
</head>
<body bgcolor="#F5F5F5">
<div class="left_menu">
	<div class="menu_top">
		<div class="m_t_left">Welcome</div>
    	<a href="/admin/auth/exit" target="_parent" onclick="return window.confirm('你真的要退出管理吗？');"><div class="m_t_right">安全退出</div></a>
    </div>
    
	<div class="navMenu">
		<h3 onclick="switchMenu(this);">商品分类管理</h3>
		<ul style="display:none;">
            <li><a target="weilian" href="/Admin/Category/showList">分类列表</a></li>
            <li><a target="weilian" href="/Admin/Category/add">分类添加</a></li>
            <li><a target="weilian" href="/Admin/Category/edit">分类编辑</a></li>
		</ul>	
		
	</div>

	<div class="navMenu">
		<h3 onclick="switchMenu(this);">商品管理</h3>
		<ul style="display:none;">
            <li><a target="weilian" href="/Admin/Goods/showList">商品列表</a></li>
            <li><a target="weilian" href="/Admin/Goods/add">商品添加</a></li>
            <li><a target="weilian" href="/Admin/Goods/edit">商品编辑</a></li>
		</ul>	
		
	</div>

	<div class="navMenu">
		<h3 onclick="switchMenu(this);">订单管理</h3>
		<ul style="display:none;">
            <li><a target="weilian" href="/Admin/Order/showlist">订单列表</a></li>
            <li><a target="weilian" href="/Admin/Order/edit">订单编辑</a></li>
		</ul>	
		
	</div>

	<div class="navMenu">
		<h3 onclick="switchMenu(this);">会员管理</h3>
		<ul style="display:none;">
            <li><a target="weilian" href="__MEMBER__/showList">会员列表</a></li>
            <li><a target="weilian" href="__MEMBER__/edit">会员编辑</a></li>
		</ul>	
	</div>
	<div class="navMenu">
		<h3 onclick="switchMenu(this);">管理员管理</h3>
		<ul style="display:none;">
            <li><a target="weilian" href="/Admin/Account/showList">管理员列表</a></li>
            <li><a target="weilian" href="/Admin/Account/add">管理员添加</a></li>
		</ul>	
	</div>
	<div class="navMenu">
		<h3 onclick="switchMenu(this);">相册管理</h3>
		<ul style="display:none;">
            <li><a target="weilian" href="/Admin/Img/showList">相册列表</a></li>
            <li><a target="weilian" href="/Admin/Img/add">相册添加</a></li>
		</ul>	
	</div>
</div>
</body>
</html>