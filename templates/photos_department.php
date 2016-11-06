﻿<head>
	<title>Фото</title>
	<meta http-equiv="Content-type" content="text/html; charset=Windows-1251" />
        <link href="../static/css/css_menu/style.css" rel="stylesheet" type="text/css" />
		<link href="../static/css/css_menu/menu.css" rel="stylesheet" type="text/css" /> 
		
		<link rel="stylesheet" type="text/css" href="../static/css/css_photo/slick.css">
		<link rel="stylesheet" type="text/css" href="../static/css/css_photo/slick-theme.css">
		<link href="../static/css/css_menu/increase.css" rel="stylesheet" type="text/css" /> 
		
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Dancing+Script|Philosopher" rel="stylesheet">
		<link rel="shortcut icon" href="../static/images/images/icon.jpg" type="image/jpg">
		
		<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="../static/js/js_photo/slick.js" type="text/javascript" charset="utf-8"></script>
		
		<style type="text/css">

    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: content-box;
    }

    .slider {
        width: 85%;
        margin: 5px auto;
    }

    .slick-slide {
      margin: 100px 5px;
    }

    .slick-slide img {
      width: 99%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }
	
	img:hover{
 width: 100%;
 height: 100%;
 box-shadow: 0 12px 6px -6px #666,0 0 3px 0 #ccc;
 margin: -1% 0% 0% -1%;
 border-radius:75px;
 CURSOR:pointer;
}
	
 .blockimgs img{ 
-webkit-transition:all 0.9s ease-out;/* Заставляем плавно изменять css св-ва*/ 
-moz-transition:all 0.25s ease-out; 
-o-transition:all 0.25s ease-out; 
-ms-transition:all 0.25s ease-out; 
height:300px; 
width:100ppx; 
overflow:hidden; 
-webkit-box-shadow:2mm 3mm 10px #6E6E6E; 
box-shadow:2px 3px 10px #6E6E6E; 
float:center; 
cursor:pointer; 
} 
.blockimgs { display:table-cell; float:left; height:230; min-height:180px; width:212px;} 
.blockimgs img:hover{ 
transform:scale(2); /* Увеличиваем картинку при наведении*/ 
-webkit-transform:scale(2); 
-moz-transform:scale(2); 
-o-transform:scale(2); 

margin-left:10px;
margin-top:20px;
box-shadow:0 10px 15px rgba(0,0,0,0.5);
z-index:200;}

#amazingcarousel-1 .amazingcarousel-title {
	position:relative;
	font: bold 12px 'Open Sans', sans-serif;
	color:#333333;
	margin:6px;
	text-align:center;
	line-height: 14px;
	height: 14px;
	overflow: hidden;
}

#amazingcarousel-1 .amazingcarousel-description {
	position:relative;
	font: 14px 'Open Sans', sans-serif;
	color:#333333;
	margin:6px;
	text-align:left;
	line-height: 10px;		
	height: 50px;
	overflow: hidden;
}

  </style>
		
</head>

<body>
<table width="100%">
	<?php
		require_once "../static/blocks/top.php";
	?>		
</table>
	<?php
		require_once "../static/blocks/content_photo.php";
	?>	
	<?php
		require_once "../static/blocks/footer.php";
	?>
		
		  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 5
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
    });
  </script>
</body>
</html>