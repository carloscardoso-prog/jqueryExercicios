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
	.ex1,.ex2{
		width:460px;
	    padding:20px;
	    background: #1e90ff;
	    margin: 0 auto;
	    text-align: center;
	    color: #fff;
	}
	label{
		display: block;
		margin: 10px 0;
		padding: 10px;
		background: #f8f8ff;
	}
	input, textarea{
		padding: 5px;
		width: 450px;
	}
	button{
		width: 465px;
	}
</style>
<body>	
	<div class="ex1">
		Fueda bixo
	</div>
	<div class="ex2">
		Fueda bixoss
	</div>
	
	<form action="">
		<label>
			<input type="text" class="place ev1" title="Digite Seu Nome" placeholder="Nome">
		</label>
		<label>
			<input type="text" placeholder="Senha" title="Digite Sua Senha" class="place ev2">
		</label>
		<label>
			<input type="text" placeholder="RID" title="IDAUTO" class="place ev3">
		</label>
		<label>
			<textarea rows="3" class="place key ev4" title="Digite o Recado"></textarea>
		</label>
		<label>

			<button type="button">Enviar</button>
		</label>
	</form>

	<script>
		var ex = $('.ex1');
		var ex = $('.ex2');
		var button = $(':button');

		// button.click(function(){
		// 	ex.fadeOut('slow');
		// }).dblclick(function(){
		// 	ex.fadeIn('slow');
		// });

		// button.click(function(){
		// 	ex.fadeTo('slow', 0.5);
		// });

		button.click(function(){
			ex.fadeTo('slow',0.4,function(){//inicia o ex2fadeto assim que o exfadeto acaba
				ex2.fadeTo('slow',0.2);
			});
		});
	</script>
</body>
</html>