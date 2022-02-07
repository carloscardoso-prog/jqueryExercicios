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
	p, input{
		width: 480px;
		padding: 5px;
		background: #000;
		margin: 0 auto;
		text-align: center;
		color: #fff;
		border: 5px solid #ccc;
		margin-top: 10px;
		margin-left: 30.2%;
	}
	.ex1{
		width:460px;
	    padding:20px;
	    background: #1e90ff;
	    margin: 0 auto;
	    text-align: center;
	    color: #fff;
	}
</style>
<body>	
	<div class="ex1">Aguardando Ação</div>
	<p class="ev1">Um Clique</p>
	<input type="text">
	<p class="ev6">Entra e sai</p>
	<p class="quehype">X é coordenada e y também</p>
	<script>
		var ex = $('.ex1');
		// $('.ev1').click(function(){
		// 	$(this).css("background","#ccc");
		// 	ex.text("Clicado");
		// });

		// $('.ex1').click(function(){
		// 	ex.text("DON'T CLICK ME!");
		// });

		// $('.ev1').dblclick(function() {
		// 	ex.text("Clicado 2x");
		// });

		// $('input').focusin(function() {
		// 	$(this).css("background", "#ccc");
		// 	ex.text("Colored");
		// }).focusout(function() {
		// 	$(this).css("background", "#000");
		// 	ex.text("Uncolored");
		// }).hover(function() {
		// 	ex.text("Mouse Hovered");
		// }).mousedown(function() {
		// 	ex.text("Clicado");
		// }).mouseup(function() {
		// 	ex.text("Soltado");
		// });
		
		var a = 0;
		$('.ev6').mouseenter(function(){
			a +=1;
			ex.text("Entradas do mouse: " + a);
		}).mouseout(function(){
			ex.text("Saída")
		});

		$('.quehype').mousemove(function(move){
			var localx = move.pageX;
			var localy = move.pageY;
			ex.text("Mov X: " + localx + ", Mov Y: " + localy);
		});
	</script>
</body>
</html>