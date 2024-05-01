<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("../config.php") ?>
<title>生日祝福网页_<?php echo $title ?></title>
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
                    <a href="http://www.eb89.com/web.php?id=RMdKFAy" target="_blank">
                        <div class="Input_divimg" style="background:url(logo.png) no-repeat"><div class="yulan">预览</div></div>
                        <div class="Input_divspan"><span class="TemSpan">生日祝福网页</span></div>
                    </a>
                </div>
                <div class="Input_bottom">
                    <form method="post" action="../result.php">
                    	<p><span class="redfh">* </span><span>请输入网页标题：</span><input class="input" type="text"  name="con1" placeholder="某某某，生日快乐！" /></p>
                        <p><span class="redfh">* </span><span>请输入起首语：</span><input class="input" type="text"  name="con2" placeholder="亲爱的某某某:" value="亲爱的宝贝：" /></p>
                        <p><span class="redfh">* </span><span>第一段祝福语：</span><textarea style="height:100px;" class="input" type="text"  name="con3" placeholder="第一段祝福语" >在你生日到来之际，我将快乐的音符，作为礼物送给你，愿您拥有365个美丽的日子，衷心地祝福你，生日快乐！在此诚挚地献上我的三个祝愿：一愿你身体健康；二愿你幸福快乐；三愿你万事如意！</textarea></p>
                        <p><span class="redfh">* </span><span>第二段祝福语：</span><textarea style="height:100px;" class="input" type="text"  name="con4" placeholder="第二段祝福语" >送你一个生日蛋糕，祝你生日快乐！第一层，体贴！第二层，关怀！第三层，浪漫！第四层，温馨！中间夹层，甜蜜！祝你天天都有一份好心情！</textarea></p>
                        <p><span class="redfh">* </span><span>文章底部信息：</span><input class="input" type="text"  name="con5" placeholder="你的朋友 - 某某某" value="彬宝宝 ★ 洁宝宝" /></p>
                        <p><span><span class="redfh">* </span>背景音乐地址：</span><input class="input" type="text"  name="con6" placeholder="背景音乐地址" value="http://m2.music.126.net/8_plcQybBU4g8MOzGF86NQ==/2145147185795961.mp3" /></p>
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
