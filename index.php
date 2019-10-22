<?php
	if((isset($_GET['lg'])) && ($_GET['lg'] != '')){
		$sl = $_GET['lg'];
	}else{
		$sl = 'en';
	}
	$str = file_get_contents('data.json');
	$data = json_decode($str, true);
	if(isset($data[$sl])){$arr = $data[$sl];}else{$arr = $data['en'];}
	if(isset($_REQUEST['name'])){
		$name = $_REQUEST['name'];
	}else{
		$name = $arr[0]["defaultHeading"];
	}
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
<title><?=$arr[0]["websiteTitle"]?></title>
<meta name="description" content="<?=$arr[0]["metaDescription"]?>">
<meta name="keywords" content="<?=$arr[0]["metaKeys"]?>">
<meta property="og:type" content="<?=$arr[0]["ogType"]?>" />
<meta property="og:title" content="<?=$arr[0]["websiteTitle"]?>" />
<meta property="og:url" content="<?=$arr[0]["websiteUrl"]?>">
<meta property="og:description" content="<?=$arr[0]["metaDescription"]?>" >
<meta property="og:site_name" content="<?=$arr[0]["websiteTitle"]?>" />
<meta property="og:image" content="<?=$arr[0]["ogImg"]?>"> 
<meta property="og:image:type" content="<?=$arr[0]["ogImg"]?>" />
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="420">
<link rel="stylesheet" href="css/style.css">
<script src="js/script.js"></script>
</head>
<body>
	<div class="main">
		<div class="topnav">
		  <a href="#home" class="active"><?=$arr[0]["websiteTitle"]?></a>
		  <div id="menuItems">
			<a href="<?=$arr[0]["websiteUrl"]?>">Home</a>
			<a href="privacy-policy.html">Privacy Policy</a>
			<a href="disclaimer.html">Disclaimer</a>
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
				<?php if(isset($_REQUEST['name'])){?>	
					<div class="share-btn">
						<a class="facebook" href="#" title="<?=$arr[0]["fbShareBtn"]?>"> <?=$arr[0]["fbShareBtn"]?> </a>
					</div>
				<?php }?>
			<div class="header-content">
				<h1 class="linear-wipe"><?=$name?></h1>
				<h2><?=$arr[0]["headerText"]?></h2>
			</div><!--/header-content-->
			
			<div class="middle-content">
				<img src="imgs/<?=$arr[0]["middleImg"]?>" width="60%"/>
			</div><!--/middle-content-->

			<div class="footer-content">
				<h3><?=$arr[0]["footerText"]?></h3>
				<h2>- <?=$name?></h2>
					<?php if(isset($_REQUEST['name'])){?>	
						<div class="share-btn">
							<a class="whatsapp" href="#" title="<?=$arr[0]["whatsappShareBtn"]?>"> <?=$arr[0]["whatsappShareBtn"]?> </a>
						</div>
					<?php }else{?>	
						<form method="post" onsubmit="" action="">
							<input id="input-text" name="name" type="text" placeholder="<?=$arr[0]["inputText"]?>" pattern="(?!@).*" oninvalid="checkWord();" oninput="checkWord();" style="background-color: <?=$arr[0]["inputTextbg"]?>;color:<?=$arr[0]["inputTextcolor"]?>;">
							<input onclick="return notEmp();" type="submit" value="<?=$arr[0]["inputBtn"]?>" style="background-color: <?=$arr[0]["inputBtnbg"]?>;color:<?=$arr[0]["inputBtncolor"]?>;">
						</form>
					<?php }?>	
			</div><!--/footer-content-->
			
					<?php if((isset($_GET['n'])) && ($_GET['n'] != '')){?>	
						<div id="welcome-container">
								<div class="welcome-inner">
									<div><img width="<?=$arr[1]["WelcomeImgSize"]?>" src="imgs/<?=$arr[1]["WelcomeImg"]?>"> </div>
								<br>
								<p><?=$arr[1]["WelcomeText"]?></p>
								<a href="#" class="welcome-btn" onclick="document.getElementById('welcome-container').style.display='none'" style="background-color:<?=$arr[0]["inputBtnbg"]?>;color:<?=$arr[0]["inputBtncolor"]?>;">
								<?=$arr[1]["WelcomeBtn"]?>
								</a> 
								</div>
						</div>
					<?php }?>
			
			<div class="marquee marq">
				<ul>
				<?php
					$icons = explode(', ', $arr[2]["scrollingIcons"]);
					$len = count($icons);
					for($x=0; $x<$len; $x++){
						echo '<li><img src="imgs/'.$icons[$x].'" width="'.$arr[2]["iconsWidth"].'"/></li>';
					}
					?>
				</ul>
			</div><!--/marquee-->
			
			<div class="marquee marquee-right marq">
				<ul>
				<?php
					$icons = explode(', ', $arr[2]["scrollingIcons"]);
					$len = count($icons);
					for($x=0; $x<$len; $x++){
						echo '<li><img src="imgs/'.$icons[$x].'" width="'.$arr[2]["iconsWidth"].'"/></li>';
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