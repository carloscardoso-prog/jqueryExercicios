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
	.ex1{
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
	
	<form action="">
		<label>
			<input type="text" class="place ev1" title="Digite Seu Nome" placeholder="Nome">
		</label>
		<label>
			<input type="text" placeholder="Senha" title="Digite Sua Senha" class="place ev2">
		</label>
		<label>
			<input type="text" placeholder="RID" title="IDAUTO" class="place">
		</label>
		<label>
			<textarea rows="3" class="place key ev3" title="Digite o Recado"></textarea>
		</label>
		<label>
			<button class="selecionar">
				Selecionar	
			</button>

			<button>
				Enviar	
			</button>
		</label>
	</form>

	<script>
		$('.place').each(function(){
			var place = $(this).attr('title');
			var input = $(this);

			input
				.val(place)
				.css('color', '#ccc')
				.focusin(function() {
					if(input.val() == place){
						input.val('');
					}
				})
				.focusout(function() {
					if(input.val() == ''){
						input.val(place);
					}
				});
			});
		
		var ex = $('.ex1');

		$('.ev1').focus(function(){
			ex.text('title');
		}).keyup(function(){
			if($(this).val() == 'pontocom'){
				$('.ev2').focus();
			}
		});

		// $('.ev1').blur(function(){
		// 	ex.text("Out of bounds of: " + $(this).attr('name'));
		// });

		$('.ev1').change(function(){
			ex.text("Changed bound: " + $(this).val());
		});

		$('.selecionar').click(function(){
			$('.ev3').select();
			$('form').submit(function(){
				return false;
			});
		});

	</script>
</body>
</html>