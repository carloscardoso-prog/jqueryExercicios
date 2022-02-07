<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<style type="text/css" media="screen">
	body{
		font:14px;
	}
	#slide{
		width: 650px;
		overflow: hidden;
		height: 300px;
		margin: 50px auto;
		box-shadow: 0 0 8px #000;
		position: relative;
	}
	#slide img{
		position: absolute;
		z-index: 1;
		display: none;
		left: 0;
	}
	#slide p{
		z-index:2;
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		padding: 10px;
		font-family: arial;
		font-size: 14px;
		background: rgba(0,0,0,0.5);
		color: #fff;
		margin: 0;
	}

</style>
<body>	
	<div>
		<figure id="slide">
			<img src="https://th.bing.com/th/id/R.23200966e70a6013b3fce87c0dc88767?rik=8CfFdR8FiX0rdQ&pid=ImgRaw&r=0" alt="Paisagem 1">		
			<img src="https://th.bing.com/th/id/OIP.NnvRPxrCZ0HI1NnPZhwE0AHaHa?pid=ImgDet&rs=1" alt="Paisagem 2">		
			<img src="https://th.bing.com/th/id/OIP.aOPqBsVFzuVKXGE8qzOuPwHaEO?pid=ImgDet&w=2400&h=1368&rs=1" alt="Paisagem 3">		
		</figure>
	</div>

	<script>
		$('#slide img:eq(0)').addClass("ativo").show(); //:eq(0) pega a tag img no index 0
		var texto = $(".ativo").attr("alt");
		$('#slide').prepend("<p>" + texto + "</p>");
		setInterval(slide,3000);

		function slide(){
			if ($('.ativo').next().length) {
				$('.ativo').fadeOut().removeClass("ativo").next().fadeIn().addClass("ativo");
			}else{
				$('.ativo').fadeOut().removeClass("ativo");
				$('#slide img:eq(0)').fadeIn().addClass("ativo");
			}
			$('#slide p').hide().html(texto).delay(500).fadeIn().text($(".ativo").attr("alt"));
		}
	</script>
</body>
</html>