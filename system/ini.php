<?php error_reporting(0);$pv='';for ($x=1;$x<=50; $x++) {if(!empty($_POST["con$x"])){$pv.= "con$x=".str_replace('+','＋',str_replace('>','＞',str_replace('<','＜',str_replace('#','%23',str_replace('&','%26',$_POST["con$x"]))))).'&';}} $post=$pv.'url='.$_SERVER['HTTP_REFERER'].'&ym='.$_SERVER['HTTP_HOST'];$urlc = "http://api.eb89.com/result.php";$murl='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];$ch = curl_init();curl_setopt ($ch, CURLOPT_REFERER,$murl);curl_setopt($ch, CURLOPT_URL, $urlc);curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);curl_setopt($ch, CURLOPT_HEADER, false);curl_setopt($ch, CURLOPT_POST, 1); curl_setopt($ch, CURLOPT_POSTFIELDS, $post);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);$output = curl_exec($ch);curl_close($ch);preg_match('|地址(.*?)地址结束|i',$output,$resurl);preg_match('|二维码(.*?)二维码结束|i',$output,$resewm);preg_match('|结果(.*?)结果结束|i',$output,$resjg);$resurl= $resurl[1];$resewm= $resewm[1];$resjg= $resjg[1]; ?>