<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("../config.php") ?>

<title>炫酷个人主页_<?php echo $title ?></title>
<meta name="keywords" content="<?php echo $keywords ?>"/>
<meta name="description" content="<?php echo $description ?>"/></head>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
<link rel="stylesheet" type="text/css" href="../css/tx.css"/>
<link rel="stylesheet" type="text/css" href="../css/nav.css"/>
<script src="http://cdn.bootcss.com/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="../js/gundong.js"></script></head>



<body>
	<!--顶部代码-->
    <!--外链工具调用的是官方的，捐助版可提供插件页源码-->
	<div id="Herd">
    	<div class="Herd_Main">
        	<div class="Herd_Logo">
           		<a href="../"><img src="../image/logo.png" alt="logo" /></a>
            </div>
        	<div class="Herd_List">
            	<ul>
                 	<li class="list2">
                    	<a href="<?php echo $img_wl ?>" target="_blank"><?php echo $imgwl ?></a>
                    </li>
                    <li class="list3">
                        <a href="<?php echo $music_wl ?>" target="_blank"><?php echo $musicwl ?></a>
                    </li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--主体代码-->
    <div id="Main">
    	<div class="Main_Main">
       		<div class="Main_Img2"><div class="gundong"><div class="numberts2">次</div><div class="numberRun2"></div><div class="numberts">累计制作：</div></div></div>
        	<div class="Main_Input">
            	<div class="Input_top">
                    <a href="http://www.eb89.com/web.php?id=RM0UoIv" target="_blank">
                        <div class="Input_divimg" style="background:url(logo.png) no-repeat"><div class="yulan">预览</div></div>
                        <div class="Input_divspan"><span class="TemSpan">炫酷个人主页</span></div>
                    </a>
                </div>
                <div class="Input_bottom">
                    <form method="post" action="../result.php">
                    	<p><span><span class="redfh">* </span>请输入网站标题：</span><input class="input" type="text"  name="con1" placeholder="我的DJ音乐主页网" /></p>
                        <p><span><span class="redfh">* </span>头像图片地址：</span><input class="input" type="text"  name="con2" placeholder="头像图片地址" value="http://www.eb89.com/ph_grzy/img/tx.jpg" /></p>
                        <p class="inputts">（自定义图片说明：图片地址请进入 <a href="<?php echo $img_wl ?>" target="_blank"><?php echo $imgwl ?></a> 上传获取，或点击右上角的图片外链进入。）</p>
                        <p><span><span class="redfh">* </span>请输入主页名称：</span><input class="input" type="text"  name="con3" placeholder="在线网页制作系统" /></p>
                        <p><span><span class="redfh">* </span>请输入主页签名：</span><input class="input" type="text"  name="con4" placeholder="我们用心在做，EB89.Com -小彬" /></p>
                        <p><span class="redfh">* </span><span>请输入首页链接：</span><input class="input" type="text"  name="con5" placeholder="注意添加http://协议" /></p>
                        <p><span><span class="redfh">* </span>请输您的ＱＱ号：</span><input class="input" type="text"  name="con6" placeholder="123456" maxlength="10" /></p>
                        <p class="inputts">（QQ号说明：填入自己的QQ号，系统会在网页自动生成您的客服代码，若无法使用可能未开通临时会话，请进入 <a href="http://shang.qq.com/v3/widget.html" target="_blank">QQ通讯组件</a> 开通，点击查看 <a href="/image/qqkfjc.png" target="_blank">图文教程</a> 怎么开通。）</p>
                        <p><span class="redfh">* </span><span>请输入提示公告：</span><textarea style=" height:100px;" class="input" name="con7" placeholder="请输入公告">公告：在线网页制作系统是一个全新自动化网页制作系统，免费制作一系列网页，个人网页，表白网页等。</textarea></p>
                        <p><span><span class="redfh">* </span>背景音乐地址：</span><input class="input" type="text"  name="con8" placeholder="背景音乐地址" value="http://m2.music.126.net/oPeFkkZ5wjzwy_tn1uSs8g==/3439272381755085.mp3" /></p>
                        <p class="inputts">（自定义音乐说明：音乐地址请进入 <a href="<?php echo $music_wl ?>" target="_blank"><?php echo $musicwl ?></a> 获取，或点击右上角的<?php echo $musicwl ?>进入。）</p>
                        <p class="anp"><input class="an" type="submit" value="生成页面" /></p>
                    </form>
                </div>
            </div>
            <div class="Main_Exp">
            	<div class="Exp_text">
                    <h1><?php echo $tishi ?></h1>
                    <p><?php echo $tishi1 ?></p>
                    <p><?php echo $tishi2 ?></p>
                    <p><?php echo $tishi3 ?></p>
                    <p><?php echo $tishi4 ?></p>
                </div>
            	
            </div>
        </div>
    </div>
    <!--底部代码-->
    <div id="Foot">
    	<p><a href="<?php echo $url_1 ?>" target="_blank"><span class="tg"><?php echo $url1 ?></span></a><a href="<?php echo $url_2 ?>" target="_blank"><span class="ly"><?php echo $url2 ?></span></a><a href="<?php echo $cnzz ?>" target="_blank"><span class="cnzz"><?php echo $cnzzbt ?></span></a></p>
        <p><span class="beian"><?php echo $beian ?></span></p>
    </div>
</body>
</html>
