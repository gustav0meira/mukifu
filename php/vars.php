<?php 

	$appWpp = '55';
	$appInsta = '';

	$userName = 'Gustavo';
	$userSurname = 'Meira';


?>

<link rel="icon" type="image/png" href="https://thecircle.com.br/mukifu/assets/favicon.png">

<?php 

	function nextMonth($month) {
		if ($month == 'janeiro') {
		    $month = 'fevereiro';
		} elseif ($month == 'fevereiro') {
		    $month = 'março';
		} elseif ($month == 'março') {
		    $month = 'abril';
		} elseif ($month == 'abril') {
		    $month = 'maio';
		} elseif ($month == 'maio') {
		    $month = 'junho';
		} elseif ($month == 'junho') {
		    $month = 'julho';
		} elseif ($month == 'julho') {
		    $month = 'agosto';
		} elseif ($month == 'agosto') {
		    $month = 'setembro';
		} elseif ($month == 'setembro') {
		    $month = 'outubro';
		} elseif ($month == 'outubro') {
		    $month = 'novembro';
		} elseif ($month == 'novembro') {
		    $month = 'dezembro';
		} elseif ($month == 'dezembro') {
		    $month = 'janeiro';
		}

		return $month;
	}

	function beforeMonth($beforeMonth) {
		if ($beforeMonth == 'janeiro') {
		    $beforeMonth = 'dezembro';
		} elseif ($beforeMonth == 'fevereiro') {
		    $beforeMonth = 'janeiro';
		} elseif ($beforeMonth == 'março') {
		    $beforeMonth = 'fevereiro';
		} elseif ($beforeMonth == 'abril') {
		    $beforeMonth = 'março';
		} elseif ($beforeMonth == 'maio') {
		    $beforeMonth = 'abril';
		} elseif ($beforeMonth == 'junho') {
		    $beforeMonth = 'maio';
		} elseif ($beforeMonth == 'julho') {
		    $beforeMonth = 'junho';
		} elseif ($beforeMonth == 'agosto') {
		    $beforeMonth = 'julho';
		} elseif ($beforeMonth == 'setembro') {
		    $beforeMonth = 'agosto';
		} elseif ($beforeMonth == 'outubro') {
		    $beforeMonth = 'setembro';
		} elseif ($beforeMonth == 'novembro') {
		    $beforeMonth = 'outubro';
		} elseif ($beforeMonth == 'dezembro') {
		    $beforeMonth = 'novembro';
		}

		return $beforeMonth;
	}

	function initialDate($nomeMes) {
	    $meses = array(
	        'janeiro' => 1, 'fevereiro' => 2, 'março' => 3, 'abril' => 4,
	        'maio' => 5, 'junho' => 6, 'julho' => 7, 'agosto' => 8,
	        'setembro' => 9, 'outubro' => 10, 'novembro' => 11, 'dezembro' => 12
	    );

	    $mes = $meses[$nomeMes];
	    $ano = date('Y');

	    $dataInicial = date('Y-m-d', strtotime("{$ano}-{$mes}-01"));
	    return $dataInicial;
	}

	function finishDate($nomeMes) {
	    $meses = array(
	        'janeiro' => 1, 'fevereiro' => 2, 'março' => 3, 'abril' => 4,
	        'maio' => 5, 'junho' => 6, 'julho' => 7, 'agosto' => 8,
	        'setembro' => 9, 'outubro' => 10, 'novembro' => 11, 'dezembro' => 12
	    );

	    $mes = $meses[$nomeMes];
	    $ano = date('Y');

	    $ultimoDiaMes = date('t', strtotime("{$ano}-{$mes}-01"));
	    $dataFinal = date('Y-m-d', strtotime("{$ano}-{$mes}-{$ultimoDiaMes}"));
	    return $dataFinal;
	}

?>