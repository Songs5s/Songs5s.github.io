<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("config.php") ?>
<title>页面不存在_<?php echo $title ?></title>
<meta name="keywords" content="<?php echo $keywords ?>"/>
<meta name="description" content="<?php echo $description ?>"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/nav.css"/>
<style type="text/css">
/*404样式*/
.Main_Res{ min-height:300px; padding-top:70px;}
.Err_Text{ width:45%; margin:auto; padding-left:50px;}
.bt{ font-size:18px; font-weight:100;line-height:50px;}
.olts{ padding-left:50px;}
.norsTitle2{ line-height:30px;}
.olts li{ line-height:30px;}
.aindex{ font-size:18px; font-weight:600; float:right}
</style></head><body>

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
        	<div class="Main_Res">
            	<div class="Err_Text">
                    <h1 class="bt">很抱歉，您要访问的页面不存在！</h1>
                    <p class="norsTitle2">温馨提示：</p>
                        <ol class="olts">
                            <li>请检查您访问的网址是否正确</li>
                            <li>如果您不能确认访问的网址，请浏览<a href="https://www.baidu.com/s?wd=%e5%9c%a8%e7%ba%bf%e7%bd%91%e9%a1%b5%e5%88%b6%e4%bd%9c%e7%b3%bb%e7%bb%9f+-+%e5%b0%8f%e5%bd%ac%e7%bd%91%e7%bb%9c%e7%a7%91%e6%8a%80" target="_blank">收录网址查询</a>查看更多网址。</li>
                            <li>回到首页重新进入</li>
                            <li>如有任何意见或建议，请及时<a href="/message.html">反馈给我们</a>。</li>
                        </ol>
                        <a class="aindex" href="/index.php">返回首页</a>
                        <div class="clear"></div>
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