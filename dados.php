<?php 
$nome = $_POST['nome'];
$valorIdade;
$portadorDoenca = $_POST['doenca'];
$faixaEtaria = $_POST['idade'];
switch($faixaEtaria){
	case '1':
		$valorIdade = 200;
		break;
	case '2':
		$valorIdade = 300;
		break;
	case '3':
		$valorIdade = 450;
		break;
	case '4':
		$valorIdade = 675;
		break;
	case '5':
		$valorIdade = 1012.5;
		break;
	case '6':
		$valorIdade = 1518.75;
		break;
	default:
		echo "Faixa etária não selecionada.";
}
if($portadorDoenca == 'sim'){
	$valorSeguro = $valorIdade + ($valorIdade * 0.30);
}else{
	$valorSeguro = $valorIdade;
}