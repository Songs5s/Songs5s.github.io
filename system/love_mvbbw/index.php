
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("../config.php") ?>

<title>MV表白网页_<?php echo $title ?></title>
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
                    <a href="http://www.eb89.com/web.php?id=RMKIMAm" target="_blank">
                        <div class="Input_divimg" style="background:url(logo.png) no-repeat"><div class="yulan">预览</div></div>
                        <div class="Input_divspan"><span class="TemSpan">MV表白网页</span></div>
                    </a>
                </div>
                <div class="Input_bottom">
                    <form method="post" action="../result.php">
                    	<p><span><span class="redfh">* </span>请输入网页标题：</span><input class="input" type="text"  name="con1" placeholder="我的网页" /></p>
                        <p><span><span class="redfh">* </span>中部图片地址：</span><input class="input" type="text"  name="con2" placeholder="中部图片地址" value="http://www.eb89.com/love_mvbbw/1.jpg" /></p>
                        <p class="inputts">（自定义图片说明：图片地址请进入 <a href="<?php echo $img_wl ?>" target="_blank"><?php echo $imgwl ?></a> 上传获取，或点击右上角的图片外链进入。）</p>
                        <p><span><span class="redfh">* </span>鼠标跟随文字：</span><input class="input" type="text"  name="con3" placeholder="某某某，我爱你！" /></p>
                        <p><span><span class="redfh">* </span>顶部第一行文字：</span><input class="input" type="text"  name="con4" placeholder="顶部第一行文字" value="某某某，在未来的日子里，也许什么都无法确定，但唯一可以确定的是，我爱的人是你" /></p>
                        <p><span><span class="redfh">* </span>顶部第二行文字：</span><input class="input" type="text"  name="con5" placeholder="顶部第二行文字" value="某某某，我会珍惜和你在一起的每一刻，每一分，每一秒" /></p>
                        <p><span><span class="redfh">* </span>顶部第三行文字：</span><input class="input" type="text"  name="con6" placeholder="顶部第三行文字" value="某某某，我喜欢你，真的很喜欢，就像向日葵如此依赖太阳一般的喜欢" /></p>
                        <p><span><span class="redfh">* </span>顶部第四行文字：</span><input class="input" type="text"  name="con7" placeholder="顶部第四行文字" value="那么，你能答应，和我永远在一起吗？" /></p>
                        <p><span class="redfh">* </span><span>请输入网页内容：</span><textarea style="height:150px;" class="input" name="con8" placeholder="请输入要说的话">某某某，我只想给你一颗真心，我只想努力去疼爱你，我只想一辈子陪伴你，我想说 我爱你。表达出我自己的意思，不想憋在心里，我想要和你一起慢慢变老，我不要短暂的温存，只要你一世的陪伴</textarea></p>
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