<?php
error_reporting(0);//压制错误输出  可以删除
$url = $_GET['url'];//获取M3U8地址   此解析接口支持M3U8
//本文件直接放在网站就能使用 
//列如宝塔  目录放在a.com网站根目录下  /a.com/dp.php
//调用方法  http://a.com/dp.php?url=
?>
<html>
<head>
<title>DPlayer</title>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-language" content="zh-CN" />
<meta http-equiv="X-UA-Compatible" content="chrome=1" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta name="referrer" content="never" />
<meta name="renderer" content="webkit" />
<meta name="msapplication-tap-highlight" content="no" />
<meta name="HandheldFriendly" content="true" />
<meta name="x5-page-mode" content="app" />
<meta name="Viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
<link rel="stylesheet" type="text/css" href="//v1.szjal.cn/html/dplayer/DPlayer.min.css">
<script type="text/javascript" src="//v1.szjal.cn/html/js/m3u8-parser.min.js"></script>
<script type="text/javascript" src="//v1.szjal.cn/html/js/jquery-1.11.2.min.js" charset="utf-8"></script>
<script type="text/javascript" src="//v1.szjal.cn/html/dplayer/hls.min.js" charset="utf-8"></script>
<script type="text/javascript" src="//v1.szjal.cn/html/dplayer/DPlayer.min.js" charset="utf-8"></script>
<script type="text/javascript">
window.onload = function(){
		var dp = new DPlayer({
			container:document.getElementById('dpplayer'),
                        autoplay: true,
                        screenshot: true,
                        preload: 'auto',
			video:{
				quality:[{
					type:'hls',					
					url: '<? echo $url; ?>'
				}],
				pic:'/dp_css_js/loading.gif',
				defaultQuality:0
			}
		});
		dp.play();
};
</script>
<body>
<div id="dpplayer"></div>
</body>
</html>
