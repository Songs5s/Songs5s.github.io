<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("config.php") ?>
<title><?php echo $title ?></title>
<meta name="keywords" content="<?php echo $keywords ?>"/>
<meta name="description" content="<?php echo $description ?>"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/nav.css"/>
<script src="http://cdn.bootcss.com/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="js/gundong.js"></script></head>
<link rel="stylesheet" type="text/css" href="css/tx.css"/>
</head> 
<!--生成地址、二维码-->
<?php include 'ini.php'; ?>
<body>
	<!--顶部代码-->
    <!--外链工具调用的是官方的，捐助版可提供插件页源码-->
	<div id="Herd">
    	<div class="Herd_Main">
        	<div class="Herd_Logo">
           		<a href="./"><img src="image/logo.png" alt="logo" /></a>
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
        	<div class="Main_Img3"><div class="gundong"><div class="numberts2">次</div><div class="numberRun2"></div><div class="numberts">累计制作：</div></div></div>
        	<div class="Main_Res">
            	<div class="Resbt" style="background:url(image/correct.png) no-repeat;"><h1><?php echo $resjg; ?></h1></div>
                <div class="Restext">
                	<p><img src="<?php echo 'http:'.$resewm; ?>" width="200px" height="200px;" alt="二维码" /></p>
                	<p><span>网页地址：</span><a href="<?php echo $resurl; ?>" target="_blank"><?php echo $resurl; ?></a></p>
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