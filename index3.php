<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>	
	
	<img src="maxresdefault´t.jpg">
	<script>
		// $("img").on('error', function() {
		// 	$(this).attr("src", "maxresdefault.jpg");
		// });
		
		$('img').on('error', function(){
			var imagem = $(this).attr("src");
			alert('Image ' + imagem + ' Unavailable');
			$(this).attr("src", "https://i.kym-cdn.com/entries/icons/facebook/000/031/045/maxresdefault_(1).jpg");
		});

		$('img').width($(window).width()).height($(window).height());
		
		$(window).resize(function(){
			$('img').width($(window).width()).height($(window).height());
		});

		$('body').css("height","5000");
		$(window).scroll(function(){
			$('img').fadeOut('400');
			// alert(scrolagem);
			// var scrolagem = $(window).scrollTop();
			// if(scrolagem > 100){
			// 	$('img').fadeOut('400');
			// }else{
			// 	$('img').fadeIn('400');
			// }
			//1.3333333730697632
		});
	</script>
</body>
</html>