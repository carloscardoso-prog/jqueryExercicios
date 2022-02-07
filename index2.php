<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>	
	<div class="div1">
		<h2>H2</h2>
		<p class="p">p</p>
		<span><p>span</p></span>
	</div>
	<p>teste</p>
	<h2>H2</h2>
	<h2>H2</h2>
	<p>p</p>
	<span>span</span>
	<script>
		$('div > p').css('color','green'); //seleciona o filho direto, ignora tudo que estiver separado por alguma outra tag
		$('div span p').css('color','blue'); //seleciona somente o elemento dentro de alguma tag, css padrão
		$('h2').css({"background-color":"red"}); //só cololquei por que da pra fazer o css padronizado
		//primeiro elemento após o selecionado
		$('p + h2').fadeOut(2000); //to dizendo pro programa selecionar o próximo elemento h2 depois do p.
		//tem que estar fora da div, se estiver dentro ele ignora, pois não considcera o html como um todo
		$('p ~ h2').fadeIn(2000); //mesma coisa do de cima mas seleciona TODOS após e não só um
	</script>
</body>
</html>