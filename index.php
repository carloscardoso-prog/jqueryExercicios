<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	<div>
		<h1 id="teste">AAAAAAAAAAAAA</h1>
	</div>
	<div>
		<button id="btn">Click Here</button>
	</div>

	<a href="#">Eh mole</a>
	<a href="#">Eh mole</a>
	<a href="#">Eh mole</a>
	<a href="#" id="foda">Eh mole</a>

	<img src="https://i.ytimg.com/vi/sJSJI06QmJg/maxresdefault.jpg">
	<script>
		$(function() {
			$('#teste')
				.fadeOut(2000)
				.fadeIn(2000);

			$('#teste').delay(1000);
			$('#teste').css("color", "#f66");
			$('#teste').hide();
			$('#teste').show();
			$('#teste').text("foda");
			$('#teste').click(function(){
				$('body').css("background", "#C30").css("padding", "50px");
				$('h1').css("color", "#000");
			});
		});
	</script>
</body>
</html>