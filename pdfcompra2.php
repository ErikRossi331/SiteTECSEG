<?php	


$codigo = filter_input(INPUT_GET, "id_curso", FILTER_SANITIZE_NUMBER_INT);
include_once("conexao2.php");

include_once("conexaots.php");
$codigo = filter_input(INPUT_GET, "id_curso", FILTER_SANITIZE_NUMBER_INT);
$result_cursos = "SELECT * FROM compra order by id desc limit 1";
$resultado_cursos = mysqli_query($conn, $result_cursos);
$row_cursos = mysqli_fetch_assoc($resultado_cursos);

$resulta_cursos = "SELECT * FROM servico where codigo = $codigo";
$resultado_cursoss = mysqli_query($conn, $resulta_cursos);
$row_cursoss = mysqli_fetch_assoc($resultado_cursoss);

	$html = '<title> Boleto </title>';	
	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>Primeiro Nome</th>';
	$html .= '<th>Último Nome</th>';
	$html .= '<th>CPF</th>';
	$html .= '<th>Telefone</th>';
	$html .= '<th>E-mail</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';

	$html .= '<tr><td>' . $row_cursos['id'] . "</td>";
		$html .= '<td>' . $row_cursos['nome'] . "</td>";
		$html .= '<td>' . $row_cursos['sobnome'] . "</td>";
		$html .= '<td>' . $row_cursos['cpf'] . "</td>";
		$html .= '<td>' . $row_cursos['tel'] . "</td>";
		$html .= '<td>' . $row_cursos['email'] . "</td>";
		$html .= '</tbody>';

   $html .= '<br><br><br><thead>';
	$html .= '<tr>';
	$html .= '<th>Código do Produto</th>';
	$html .= '<th>Serviço</th>';
	$html .= '<th>Valor sem Desconto</th>';
	$html .= '<th>Preço a Pagar</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';

		$html .= '<tr><td>' . $row_cursoss['codigo'] . "</td>";
		$html .= '<td>' . $row_cursoss['nometec'] . "</td>";
		$html .= '<td> R$ ' . $row_cursoss['precodesc'] . "</td>";
		$html .= '<td> R$ ' . $row_cursoss['precovenda'] . "</td>";
		$html .= '</tbody>';
		$html .= '</table>';
		$html .= '<br><br<br>';
		$html .= '<br><center><img src="barra.png" height=200px></center>';


		

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
					<img src="banco.png" height=70px> <b><font size=32px>Banco | 230-1 | </font><font size=17px> 31245.11103 70000.003100 01000.000034 0 45670000000</font></b>


			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	$dompdf->add_info('Title', 'Boleto');

	//Exibibir a página
	$dompdf->stream(
		"boleto", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true

		
		)

	);

	header("Location: cadastro.php");
?>