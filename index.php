<?php

#Enter the domain you want to redirect invisibly

$domain_to_redirect = "https://symetry-certify-frontend.herokuapp.com/"




$page1 = <<<page1
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">  
    <link rel="icon" type="image/png" href="https://learnsteer.sasnaka.org/wp-content/uploads/2021/01/cropped-learn-steer-app-sasnaka.png">
<meta name="robots" content="max-snippet:-1,max-image-preview:standard,max-video-preview:-1" />

<meta name="theme-color" content="#00a8ff" />
    
    
    <!-- Primary Meta Tags -->
<title>Verify Certificates from Sasnaka Sansada</title>
<meta name="title" content="Verify Certificates from Sasnaka Sansada">
<meta name="description" content="Use this web portal to verify and validate certificates from Sasnaka Sansada">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://verify.sasnaka.org/">
<meta property="og:title" content="Verify Certificates from Sasnaka Sansada">
<meta property="og:description" content="Use this web portal to verify and validate certificates from Sasnaka Sansada">
<meta property="og:image" content="https://learnsteer.sasnaka.org/wp-content/uploads/2021/01/cropped-learn-steer-app-sasnaka.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://verify.sasnaka.org/">
<meta property="twitter:title" content="Verify Certificates from Sasnaka Sansada">
<meta property="twitter:description" content="Use this web portal to verify and validate certificates from Sasnaka Sansada">
<meta property="twitter:image" content="https://learnsteer.sasnaka.org/wp-content/uploads/2021/01/cropped-learn-steer-app-sasnaka.png">
    
    
    
</head>
<body>
	<style type="text/css">
		html, body, #form {
			margin: 0px;
			padding: 0px;
			border: 0px;
			width: 100%;
			height: 100%;
			font-family: arial;
			overflow: hidden;
		}
		#form {
			transition: padding-top .5s;
			box-sizing: border-box;
		}
		#banner {
			position: absolute;
			margin: 0px;
			padding: 0px;
			top: -50px;
			color: #ffffff;
			background-color: #4caf50;
			width: 100%;
			line-height: 50px;
			font-size: 30px;
			text-align: center;
			transition: top .5s, background-color .5s, line-height .5s;
		}
	</style>
	<iframe id="form" src="
page1;

$page2=<<<page2
">
	</iframe>
</body>
</html>
page2;

echo $page1.$domain_to_redirect.$_GET['path'].$page2;