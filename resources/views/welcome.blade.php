<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8" />
	<title>Vue</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- build:css css/combined.css -->
	<link rel="stylesheet" href="libs/slick-carousel/slick/slick.css" />
	<link rel="stylesheet" href="libs/animate.css/animate.min.css" />
	<link rel="stylesheet" href="resourses/assets/css/main.css" />
	<!-- endbuild -->
</head>
<body class="main_page">
	<!-- menu button -->
	<div class="main__menu_btn">
		<span class="sandwich">
			<span class="sw-topper"></span>
			<span class="sw-bottom"></span>
			<span class="sw-footer"></span>
		</span>
	</div>




	<!-- popup window -->
	<div class="popup_wrapper">
		<div class="popup_window">
			<div class="btn_close"><img src="img/btn_close.png" alt=""></div>
			<div class="popup_window_content">
				<p>Залиште свої контактні дані, і ми зв’яжемося з Вами найближчим часом для надання обраної послуги</p>
				<form action="" method="post" class="popup_form">
					<input type="text" name="name" placeholder="Ім’я *">
					<input type="tel" name="tel" placeholder="Телефон *">
					<input type="email" name="email" placeholder="E-mail">
					<button type="submit" class="main_btn blue_btn">Замовити послугу</button>
				</form>
			</div>
		</div>
	</div>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/dist/es5-shim.min.js"></script>
	<script src="libs/html5shiv/dist/html5shiv.min.js"></script>
	<script src="libs/html5shiv/dist/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/dest/respond.min.js"></script>
	<![endif]-->

	<!-- build:js scripts/combined.js -->
	<script src="libs/jquery/dist/jquery.min.js"></script>
	<script src="libs/slick-carousel/slick/slick.min.js"></script>
	<script src="libs/wow/dist/wow.min.js"></script>
	<script src="libs/jquery.maskedinput/dist/jquery.maskedinput.min.js"></script>
	<script src="libs/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="libs/vue/dist/vue.js"></script>
	<script src="js/main.js"></script>
	<!-- endbuild -->
</body>
</html>