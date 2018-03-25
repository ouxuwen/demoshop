<?php if (!defined('THINK_PATH')) exit();?><!-- 包含顶部 -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Unicorn Admin</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="__PUBLIC__/admin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/admin/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="__PUBLIC__/admin/css/uniform.css" />
        <link rel="stylesheet" href="__PUBLIC__/admin/css/select2.css" />  	
		<link rel="stylesheet" href="__PUBLIC__/admin/css/unicorn.main.css" />
		<link rel="stylesheet" href="__PUBLIC__/admin/css/unicorn.grey.css" class="skin-color" />
                        <script src="__PUBLIC__/admin/js/jquery.min.js"></script>
                        <script src="__PUBLIC__/admin/js/bootstrap.min.js"></script>
    </head>
	<body>
		<div id="header">
			<h1><a href="./dashboard.html">Unicorn Admin</a></h1>		
		</div>
		<!-- 顶部右侧 个人信息区域 开始 -->
		<div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav btn-group">
                <li class="btn btn-inverse">
                	<a title="" href="#"><i class="icon icon-user"></i> <span class="text">个人资料</span></a></li>
                <li class="btn btn-inverse dropdown" id="menu-messages">
                	<a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle">
                    	<i class="icon icon-envelope"></i> 
                        <span class="text">消息</span> 
                        <span class="label label-important">5</span> 
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="__APP__/Comment/lists">新消息</a></li>
                        <li><a class="sInbox" title="" href="__APP__/Comment/lists">收件箱</a></li>
                        <li><a class="sOutbox" title="" href="__APP__/Comment/lists">发件箱</a></li>
                        <li><a class="sTrash" title="" href="__APP__/Comment/lists">垃圾箱</a></li>
                    </ul>
                </li>
                <li class="btn btn-inverse">
                	<a title="" href="__APP__/Config/listsConfig"><i class="icon icon-cog"></i> <span class="text">偏好设置</span></a>
                </li>
                <li class="btn btn-inverse">
                    <a title="" href="__ROOT__"><i class="icon icon-eye-open"></i> <span class="text">查看店铺</span></a>
                </li>
                <li class="btn btn-inverse">
                	<a title="" href="__APP__/Login/logout"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a>
                </li>
            </ul>
        </div>
        <!-- 顶部右侧 个人信息区域 结束 -->
        <!-- 侧边 菜单栏 开始 -->
        <div id="sidebar">
            <a href="#" class="visible-phone"><i class="icon icon-home"></i> 控制面板</a>
            <ul>
                <li class="active" id="index"><a href="__APP__"><i class="icon icon-home"></i> <span>控制面板</span></a></li>
                <li class="submenu" id="user">
                    <a href="#"><i class="icon icon-user"></i> <span>用户管理</span></a>
                    <ul>
                        <li><a href="__APP__/User/lists">会员列表</a></li>
                        <li><a href="__APP__/User/add">添加会员</a></li>
                        <!-- <li><a href="__APP__/">会员等级</a></li>
                        <li><a href="__APP__/">会员留言</a></li>
                        <li><a href="__APP__/">……</a></li> -->
                    </ul>
                </li>
                <li class="submenu" id="role">
                    <a href="#"><i class="icon icon-lock"></i> <span>权限管理</span></a>
                    <ul>
                        <li><a href="__APP__/Auser/lists">管理员列表</a></li>
                        <li><a href="__APP__/Alog/lists">系统操作日志</a></li>
                    </ul>
                </li>
                <li class="submenu" id="goods">
                    <a href="#"><i class="icon icon-shopping-cart"></i> <span>商品管理</span></a>
                    <ul>
                        <li><a href="__APP__/Goods/lists">商品列表</a></li>
                        <li><a href="__APP__/Goods/add">添加商品</a></li>
                        <li><a href="__APP__/Class/lists">商品分类</a></li>
                        <li><a href="__APP__/Goodstype/lists">商品规格</a></li>
                        <li><a href="__APP__/Comment/lists">用户评论</a></li>
                        <li><a href="__APP__/Trash/lists">商品回收站</a></li>
                        <li><a href="__APP__/">……</a></li>
                    </ul>
                </li>
                <li class="submenu" id="order">
                    <a href="#"><i class="icon icon-tag"></i> <span>订单管理</span></a>
                    <ul>
                        <li><a href="__APP__/Order/lists">订单列表</a></li>
                        <li><a href="__APP__/Order/query">订单查询</a></li>
                        <li><a href="__APP__/Order/listsq">确认单</a></li>
                        <li><a href="__APP__/Order/listss">收款单</a></li>
                        <li><a href="__APP__/Order/listsf">发货单</a></li>
                        <li><a href="__APP__/Order/listsl">完成交易单</a></li>
                    </ul>
                </li>
                <!-- <li class="submenu" id="tmpl">
                    <a href="#"><i class="icon icon-bookmark"></i> <span>模版管理</span></a>
                    <ul>
                        <li><a href="__APP__/Model/lists">模版列表</a></li>
                        <li><a href="__APP__/Model/set">模版设置</a></li>
                         
                        <li><a href="__APP__/Mail/lists">邮件模板</a></li>
                    </ul>
                </li> -->
                <!-- <li id="count"><a href=""><i class="icon icon-signal"></i> <span>报表统计</span></a></li> -->
                <li id="config"><a href="__APP__/Config/listsConfig"><i class="icon icon-cog"></i> <span>网站设置</span></a></li>
                    <!-- 基本信息、自定义导航、系统公告 ... -->
                <!-- <li id="friend"><a href="__APP__/Friend/lists"><i class="icon icon-heart"></i> <span>友情链接</span></a></li> -->
            </ul>
        </div>
        <!-- 侧边 菜单栏 结束 -->

<link type="text/css" rel="stylesheet" href="__PUBLIC__/ueditor/themes/default/css/umeditor.min.css">

<!-- 加载编辑器js -->
<script>
         window.UMEDITOR_HOME_URL = "__PUBLIC__/ueditor/";
</script>
<script type="text/javascript" src="__PUBLIC__/ueditor/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/ueditor/umeditor.config.js"></script>
<script type="text/javascript" src="__PUBLIC__/ueditor/umeditor.js"></script>
<script type="text/javascript">
            ddaccordion.init({
            headerclass: "navhead", 
            contentclass: "navcontent", 
            revealtype: "click",    
            mouseoverdelay: 400, 
            collapseprev: true,   
            defaultexpanded: [],  
            onemustopen: false,   
            animatedefault: true,     
            persiststate: true,     
            toggleclass: ["", ""],  
            togglehtml: ["none", "", ""], 
            animatespeed: "normal",   
            oninit:function(expandedindices){ },
            onopenclose:function(header, index, state, isuseractivated){ }
          })

</script>

<div id="content">
	<!-- 顶部右侧快捷操作按钮 开始 -->
		<div id="content-header">
			<h1>分类管理</h1>
			<div class="btn-group">
				<a class="btn btn-large tip-bottom" title="订单管理"><i class="icon-file"></i></a>
				<a class="btn btn-large tip-bottom" title="用户管理"><i class="icon-user"></i></a>
				<a class="btn btn-large tip-bottom" title="评论管理"><i class="icon-comment"></i><span class="label label-important">5</span></a>
				<a class="btn btn-large tip-bottom" title="购物车管理"><i class="icon-shopping-cart"></i></a>
			</div>
		</div>
        <!-- 顶部右侧快捷操作按钮 结束 -->
        <!-- 顶部面包屑导航 开始 -->
		<div id="breadcrumb">
			<a href="__APP__" title="返回首页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
			<a href="__URL__/lists" title="返回用户管理" class="tip-bottom"> 分类管理</a>
			<a href="#" class="current"> 添加</a>
		</div>
		<!-- 顶部面包屑导航 结束 -->
		<!-- 主体区域 -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<!-- 组件盒子 开始 -->
					<div class="widget-box">
						<!-- 组件标题区域 -->
						<div class="widget-title">
							<span class="icon"><i class="icon-align-justify"></i></span>
							<h5>添加分类</h5>			
						</div>
						<!-- 组件内容区域 -->
						<div class="widget-content nopadding">
							<!-- 编辑表单 -->
							<form action="__URL__/inse"  method="post" enctype="multipart/form-data" class="form-horizontal">
								<div class="control-group">
									<label class="control-label">分类名称：</label>
									<div class="controls"><input type="text" name="cname"/></div>
								</div>
								
								<div class="control-group">
									<label class="control-label">上级分类：</label>
									<div class="controls">


   										<select name="sid" style="width:200px;">
                                            <option value="0" >顶级分类</option>
					     				 	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php echo ($vo['id'] == $data['sid'] ? 'selected' : ''); ?> >
						                		<?php $__FOR_START_11112__=1;$__FOR_END_11112__=$vo["num"];for($i=$__FOR_START_11112__;$i < $__FOR_END_11112__;$i+=1){ ?><span style="color: #cdcdcd;">|-----&nbsp;</span><?php } echo ($vo["cname"]); ?>
						                	</option><?php endforeach; endif; else: echo "" ;endif; ?>
    									</select>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">数量单位：</label>
									<div class="controls"><input type="text" name="danwei"/></div>
								</div>

								<div class="control-group">
									<label class="control-label">排序：</label>
									<div class="controls"><input type="text" name="ordernum"/></div>
								</div>

								<div class="control-group">
									<label class="control-label">是否显示：</label>
									<div class="controls">
										<select name="isallow" style="width:60px;">
										        <option value="1" selected >是</option>
										        <option value="2">否</option>
										 </select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">分类描述：</label>
									<div class="controls">
										<textarea id="description" name="description"></textarea>
									</div>
								</div>
								
								<!-- 提交提交按钮 -->
								<div class="form-actions">
									<button type="submit" class="btn btn-success">添加</button>
								</div>
							</form>
						</div>
						</div>	
				</div>
			</div>

<SCRIPT type=text/javascript>
//var editor = UM.getEditor('myEditor',{initialFrameWidth:600});

    var editor = UM.getEditor('description',{
            
            //默认的编辑区域高度
            initialFrameHeight:100,
             initialFrameWidth:725
            //更多其他参数，请参考umeditor.config.js中的配置项
        });

</SCRIPT>
<!-- 包含底部 -->
			
            <!-- 页面底部版权 -->
			
		</div>
	</div>


	<!-- 加载相关JS文件 -->
    <script src="__PUBLIC__/admin/js/excanvas.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.ui.custom.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.uniform.js"></script>
    <script src="__PUBLIC__/admin/js/select2.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.dataTables.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.flot.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.flot.resize.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.peity.min.js"></script>
    <script src="__PUBLIC__/admin/js/unicorn.js"></script>
    <script src="__PUBLIC__/admin/js/unicorn.tables.js"></script>
    <script src="__PUBLIC__/admin/js/unicorn.dashboard.js"></script>

    <script>
        // 侧边菜单栏，高亮当前模块 样式设置
    
        // 去除之前的样式
        $("li[class='active']").removeClass("active");
        // 高亮当前样式
        $("li[id='<?php echo (strtolower(MODULE_NAME)); ?>']").addClass("active");
    </script>

</body>
</html>