<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pesquisa_dinamica extends CI_Controller
{
	public function index()
	{
		$conexao = mysqli_connect('localhost', 'root', '', 'concessionaria');

		$termo_pesquisa = $_POST['pesquisa'];

		// Evite injeção de SQL (sanitize)
		$termo_pesquisa = mysqli_real_escape_string($conexao, $termo_pesquisa);

		// Crie a consulta SQL
		$sql = "SELECT * FROM sua_tabela WHERE campo LIKE '%$termo_pesquisa%'";

		// Execute a consulta
		$resultado = mysqli_query($conexao, $sql);
		if (mysqli_num_rows($resultado) > 0) {
			// Exiba os resultados
			echo '<pre>';
		} else {
			echo "Nenhum resultado encontrado.";
		}
	}
}
