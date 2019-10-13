<?php
	$str = file_get_contents('data.json');
	$data = json_decode($str, true);
	$arr = $data['en'];
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
<title><?=$arr[0]["websiteTitle"]?></title>
<link rel="stylesheet" href="css/style.css">
<script src="js/script.js"></script>
</head>
<body>
	<div class="main">
		<div class="topnav">
		  <a href="#home" class="active"><?=$arr[0]["websiteTitle"]?></a>
		  <div id="menuItems">
			<a href="#home">Home</a>
			<a href="#Privacy-policy">Privacy Policy</a>
			<a href="#Disclaimer">Disclaimer</a>
		  </div>
		  <a href="javascript:void(0);" class="icon" onclick="menu()">
			<span class="bars"></span><span class="bars"></span><span class="bars"></span>
		  </a>
		</div>

		<div class="wrapper">
			<div class="add-placeholder">
				<!--Paste your add code here-->
			</div><!--/add-placeholder-->
		<div class="inner">	
			<div class="header-content">
				<h1 class="linear-wipe"><?=$arr[0]["defaultHeading"]?></h1>
				<h2><?=$arr[0]["headerText"]?></h2>
			</div><!--/header-content-->
			
			<div class="middle-content">
				<img src="imgs/<?=$arr[0]["middleImg"]?>" width="60%"/>
			</div><!--/middle-content-->

			<div class="footer-content">
				<h3><?=$arr[0]["footerText"]?></h3>
				<h1>- Shashank</h1>
				<form method="post" onsubmit="" action="">
					<input id="input-text" name="name" type="text" placeholder="<?=$arr[0]["inputText"]?>">
					<input type="submit" value="<?=$arr[0]["inputBtn"]?>">
				</form>
		
			</div><!--/footer-content-->
			<div class="marquee marq">
				<ul>
				<?php
					$icons = explode(', ', $arr[1]["scrollingIcons"]);
					$len = count($icons);
					for($x=0; $x<$len; $x++){
						echo '<li><img src="imgs/'.$icons[$x].'" width="'.$arr[1]["iconsWidth"].'"/></li>';
					}
					?>
				</ul>
			</div><!--/marquee-->
			<div class="marquee marquee-right marq">
				<ul>
				<?php
					$icons = explode(', ', $arr[1]["scrollingIcons"]);
					$len = count($icons);
					for($x=0; $x<$len; $x++){
						echo '<li><img src="imgs/'.$icons[$x].'" width="'.$arr[1]["iconsWidth"].'"/></li>';
					}
					?>
				</ul>
			</div><!--/marquee-->
		</div>	
			<div class="add-placeholder">
				<!--Paste your add code here-->
			</div><!--/add-placeholder-->
			
		</div><!--/wrapper-->
	</div><!--/main-->
</body>
</html>