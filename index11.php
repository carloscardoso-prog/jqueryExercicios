<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<style type="text/css" media="screen">
		#pagina .caixa{
			margin-bottom: 1px;
			border: 1px solid #A52A2A;
			color: #333;
			font: 14px "Trebuchet MS", Arial, Helvetica, sans-serif;
		}
		#pagina .caixa .titulo{
			padding: 15px;
			background: #A52A2A;
			color:#FFF;
			font-weight: bold;
		}
		#pagina .caixa .titulo:hover{
			cursor:pointer;
			background:#900000;
		}
		#pagina .caixa. .conteudo{
			padding: 20px;
			line-height:150%;
		}
		#pagina .caixa .hide{
			display: none;
		}
</style>
<body>	
	<div id="pagina">

		<h1>Efeito Sanfona</h1>
		<div class="caixa">	
			<div class="titulo">Primeira Sessão</div>
			<div class="conteudo show">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	
			</div>
		</div>

		<div class="caixa">	
			<div class="titulo">Segunda Sessão</div>
			<div class="conteudo hide">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	
			</div>
		</div>	

		<div class="caixa">	
			<div class="titulo">Terceira Sessão</div>
			<div class="conteudo hide">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	
			</div>
		</div>	
	</div>
	
	<script>
			$('.titulo').click(function(){

				var conteudo = $(this).parent().find('.conteudo');

				if(!conteudo.hasClass('show')){//conteúdo diminui o escopo pro que foi clicado, caixa pega o de todos
					$('.caixa').find('.show').slideUp('fast', function(){
						$(this).addClass('hide').removeClass('show')
					});

					conteudo.slideDown('fast', function(){
						$(this).addClass('show').removeClass('hide')
					});
				}
			});
	</script>
</body>
</html>