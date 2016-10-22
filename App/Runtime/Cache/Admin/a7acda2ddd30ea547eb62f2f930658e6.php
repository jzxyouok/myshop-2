<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商品编辑</title>
<link href="/Public/Admin/css/page.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/webmallDialog.css" rel="stylesheet" type="text/css" />
<style>
.add_title_img {
   
    height: 35px;
    padding: 5px 5px;
    position: relative;
}
.add_title_img #title_img {
    border: 2px solid #c1c1c1;
    float: left;
    height: 30px;
    width: 50px;
}
.add_title_img #title_img img {
    height: 30px;
    width: 50px;
}
a.title_text {
    color: #999;
    float: left;
    letter-spacing: 2px;
    line-height: 35px;
    padding-left: 15px;
}

.eventlink{
	color: #fff;
    float: left;
    font-weight: 600;
    height: 32px;
    line-height: 32px;
    margin-right: 10px;
    padding: 0 10px;
    text-align: center; border-radius:3px; background:#09C;
	cursor:pointer
}
#title {width:450px;}
#ad_img {position:relative;top:-5px; display:none;}
#img-view {display:inline-block;border: 1px solid #CCC;position:relative;top: 7px;}
#img-view img {width: 60px;height:32px;}
#add_file {width: 70px;}
.type_content{
    width:530px;
    height:30px;
    display:block;
    margin-top:4px;
}
</style>
</head>
<body bgcolor="#F7F7F7">
<div class="content">
    
    <div class="content_top">&nbsp;&nbsp;&nbsp;现在的位置为：商品管理-&gt;商品编辑</div>
    <div class="m_content">
        <div class="keywords_show"></div>
        <div class="real_c">
            
            <?php if($errno != null): ?><p class="tip <?php echo ($errno["style"]); ?>"><?php echo ($errno["str"]); ?><span onclick="$(this.parentNode).slideUp();">X</span></p><?php endif; ?>
           

            <div class="s-space"></div>

            <div>
                
            <form name="goods_edit" method="post" action="/admin/goods/edit">
            <table border="0" cellpadding="0" cellspacing="0" id="add_table" width="100%">
                <tr>
                    <td class="left_td">商品名称：</td>
                    <td class="right_td"><input type="text" name="goods_name" class="input" value="<?php echo ($data["goods_name"]); ?>" id="title"/></td>
                </tr>
                <!-- <tr>
                    <td class="left_td">商品原价：</td>
                    <td class="right_td"><input type="text" name="goods_price" class="input" value="<?php echo ($data["goods_price"]); ?>" /></td>
                </tr>
                <tr>
                    <td class="left_td">商品促销价：</td>
                    <td class="right_td"><input type="text" name="goods_discount" class="input" value="<?php echo ($data["goods_discount"]); ?>"/></td>
                </tr>
                <tr>
                    <td class="left_td">商品系列号：</td>
                    <td class="right_td"><input type="text" name="goods_sn" class="input" value="<?php echo ($data["goods_sn"]); ?>" /></td>
                </tr>
                <tr>
                    <td class="left_td">商品库存：</td>
                    <td class="right_td"><input type="text" name="goods_nums" class="input" value="<?php echo ($data["goods_nums"]); ?>" /></td>
                </tr> -->
                <tr>
                    <td class="left_td">商品月销量：</td>
                    <td class="right_td"><input type="text" name="month_sales" class="input" value="<?php echo ($data["month_sales"]); ?>" /></td>
                </tr>
                <tr>
                    <td class="left_td">商品累计销量：</td>
                    <td class="right_td"><input type="text" name="cumulative_sales" class="input" value="<?php echo ($data["cumulative_sales"]); ?>" /></td>
                </tr>
                <tr>
                    <td class="left_td">商品评价总数：</td>
                    <td class="right_td"><input type="text" name="goods_evaluation" class="input" value="<?php echo ($data["goods_evaluation"]); ?>" /></td>
                </tr>
                <div id="append_tr">
                

                <tr >
                    <td class="left_td">商品<input style="width:40px;margin-left:1px;" type="text" name="goods_type" class="input" placeholder="规格名1" value="<?php echo ($data["goods_type"]); ?>">及信息：</td>
                    <td class="right_td" id="goods_type">
                    <?php if(is_array($data1)): foreach($data1 as $key=>$vo): ?><div class="type_content">
                            <input style="width:80px;float:left;" type="text" name="goods_sn[]" placeholder="商品货号" class="input" value="<?php echo ($vo["goods_sn"]); ?>" />
                            <input style="width:80px;float:left;" type="text" name="type1_name[]" placeholder="商品规格1" class="input" value="<?php echo ($vo["goods_type"]); ?>" />
                            <input style="width:80px;float:left;" type="text" name="goods_price[]" placeholder="商品原价" class="input" value="<?php echo ($vo["goods_price"]); ?>" />
                            <input style="width:80px;float:left;" type="text" name="goods_discount[]" placeholder="商品折扣价" class="input" value="<?php echo ($vo["goods_discount"]); ?>" />
                            <input style="width:80px;float:left;" type="text" name="goods_num[]" class="input" placeholder="库存数量" value="<?php echo ($vo["goods_num"]); ?>" />
                            <img src="/Public/images/minus sign.jpg" style="width:20px;height:20px;cursor:pointer;" onclick="delType(this)"/>
                        </div>
                        <input type="hidden" name="old_sn[]" value="<?php echo ($vo["goods_sn"]); ?>"/><?php endforeach; endif; ?>
                    </td>
                    <td>
                        <img src="/Public/images/add.jpg" style="width:20px;height:20px;cursor:pointer;float:right;" id="type1_add" />
                    </td>
                </tr>

                </div>
                
                <tr>
                    <td class="left_td">商品<input style="width:40px;margin-left:1px;" type="text" name="goods_type2" class="input" placeholder="规格名2" value="<?php echo ($data["goods_type2"]); ?>">：</td>
                    <td class="right_td" id="goods_package">
                    <?php if(is_array($data2)): foreach($data2 as $key=>$vo): ?><div class="type_content">
                        <input type="text" name="type2_name[]" class="input" value="<?php echo ($vo["type2_name"]); ?>" />
                        <img src="/Public/images/minus sign.jpg" style="width:20px;height:20px;cursor:pointer;" onclick="delType(this)" />
                    </div>
                    <input type="hidden" name="old_type2[]" value="<?php echo ($vo["type2_name"]); ?>"/><?php endforeach; endif; ?>
                        
                    </td>
                    <td>
                        <img src="/Public/images/add.jpg" style="width:20px;height:20px;cursor:pointer;float:right;" id="type2_add" />
                    </td>
                </tr>
                <tr>
                    <td class="left_td">商品简介：</td>
                    <td class="right_td">
                        <textarea  style="width:480px; height:80px" name="description" class="input" id="description"><?php echo ($data["goods_brief"]); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="left_td">商品范畴：</td>
                    <td class="right_td">
                        <select name="category_id" id="article_category" style="xbackground:#FFF;border:1px solid #CCC;">
                        
                            <option value="未分类" >--未分类--</option>
                            <?php if(is_array($cat)): foreach($cat as $key=>$vo): if(($key) == $data["category_id"]): ?><option value=<?php echo ($key); ?> selected><?php echo ($vo); ?></option>
                               <?php else: ?>
                               <option value=<?php echo ($key); ?>><?php echo ($vo); ?></option><?php endif; endforeach; endif; ?>
                        </select>  
                    </td>
                </tr>
                <tr>
                    <td class="left_td">商品来源名称：</td>
                    <td class="right_td"><input type="text" name="name" class="input" value="<?php echo ($data["goods_source"]); ?>" id="srcname"/></td>
                </tr>
                
                
              
                <tr style="clear:both">
                    <td class="left_td">商品内容：</td>
                    <td class="right_td">
                        <!-- 加载编辑器的容器 -->
                        <textarea style="z-index: 1;" name="goods_description" id="content" type="text/plain">
                            <?php echo ($data["goods_description"]); ?>
                        </textarea>
                    </td>
                </tr>
                
               
                <!-- 操作按钮 -->
                <tr><td colspan="4" valign="bottom" align="center"><div class="formHandleBox" style="padding-left:100px;">
                    <input type="hidden" name="act" value="update" />
                    <input type="hidden" name="id" value="<?php echo ($data["goods_id"]); ?>" />
                    <a href="javascript:void(0)" onclick="form_submit(); return false;" class="eventlink">保存数据</a>
                </div></td></tr>
            </table>
            </form>
            </div>
        </div>
    </div>
    <div class="b_border"></div>
    
</div>
<script type="text/javascript" src="/Public/tools/UEditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/Public/tools/UEditor/ueditor.all.js"></script>
<script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script>
<script language="javascript" src="/Public/Admin/js/Ajax.class.js"></script>
<script language="javascript" src="/Public/Admin/js/JWin.js"></script>
<script language="javascript" src="/Public/Admin/js/XHRUploader.class.js"></script>
<script language="javascript">
var ue = UE.getEditor('content',{
	textarea: 'content',
	initialFrameWidth: 800,
	initialFrameHeight: 400,
	autoHeightEnabled: false,
	autoFloatEnabled: false,
    enterTag: 'br',
});



function form_submit ()
{
	document.goods_edit.submit();
}

//动态添加商品种类
$(document).ready(function(){
    $("#type1_add").click(function(){
        $("#goods_type").append('<div class="type_content"><input style="width:80px;" type="text" name="goods_sn[]" placeholder="商品货号" class="input"  /><input style="width:80px;" type="text" name="type1_name[]" class="input" placeholder="规格子类名"  /><input style="width:80px;" type="text" name="goods_price[]" placeholder="商品原价" class="input"  /><input style="width:80px;" type="text" name="goods_discount[]" placeholder="商品折扣价" class="input"  /><input style="width:80px;" type="text" name="goods_num[]" class="input" placeholder="库存数量" /><img src="/Public/images/minus sign.jpg" style="width:20px;height:20px;cursor:pointer;" onclick="delType(this)" /></div>');
    });
})

//动态添加商品包装种类
$(document).ready(function(){
    $("#type2_add").click(function(){
        $("#goods_package").append('<div class="type_content"><input type="text" name="type2_name[]" class="input" /><img src="/Public/images/minus sign.jpg" style="width:20px;height:20px;cursor:pointer;" onclick="delType(this)" /></div>');
    });
})

function delType(obj){
    var bool = window.confirm("确定要删除吗？");
    if(bool != true) return;
    $(obj).parents(".type_content").remove();
}
</script>
</body>
</html>