<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>js-typing-animation-effect</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="plugin/bootstrap-4.1.3/css/bootstrap.css">

	<script type="text/javascript" src="plugin/jquery-3.4.0/jquery.js"></script>
	<script type="text/javascript" src="plugin/bootstrap-4.1.3/js/bootstrap.js"></script>
	<link href="favicon.ico" type="image/x-icon" rel="icon">
	<script src="js/jquery.typetype.js"></script>
	<style>
		textarea {
			height:400px;
			width: 600px;
			padding:10px;
			font-size:200%;
			border: none;
		}
		.blinking-cursor {
			font-weight: 100;
			font-size: 30px;
			color: #2E3D48;
			-webkit-animation: 1s blink step-end infinite;
			-moz-animation: 1s blink step-end infinite;
			-ms-animation: 1s blink step-end infinite;
			-o-animation: 1s blink step-end infinite;
			animation: 1s blink step-end infinite;
		}

		@keyframes "blink" {
			from, to {
				color: transparent;
			}
			50% {
				color: black;
			}
		}

		@-moz-keyframes blink {
			from, to {
				color: transparent;
			}
			50% {
				color: black;
			}
		}

		@-webkit-keyframes "blink" {
			from, to {
				color: transparent;
			}
			50% {
				color: black;
			}
		}

		@-ms-keyframes "blink" {
			from, to {
				color: transparent;
			}
			50% {
				color: black;
			}
		}

		@-o-keyframes "blink" {
			from, to {
				color: transparent;
			}
			50% {
				color: black;
			}
		}
	</style>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
</head>
<body>
<h2 id="layout"></h2>

	<h2><span id="layout2"></span><span class="blinking-cursor">|</span></h2>



<script>
	$('#layout2')
		.typetype("The high tech ")
		.typetype("quality")
		.delay(1000)
		.backspace(7)
		.delay(1000)
		.typetype("solution")
		.delay(1000)
		.backspace(8)
		.delay(1000)
		.typetype("people")
		.delay(1000)
		.backspace(6)


	var mySwiper = new Swiper ('.swiper-container', {
		effect: "flip",
		loop: true,
		// pagination: '.swiper-pagination',
		// nextButton: '.swiper-button-next',
		// prevButton: '.swiper-button-prev',
	});


</script>

<?php
?>
</body>
</html>