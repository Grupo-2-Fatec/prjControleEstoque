<?php
	$erro = "";
	if($_POST)
	{
		if(empty($_POST["Nome"]))
		{
			$erro = "Preencha o Nome do Fornecedor";
		}
		else
		{
			require_once "../models/Conexao.class.php";
			require_once "../models/Fornecedor.class.php";
			require_once "../models/FornecedorDAO.class.php";
			$fornecedor = new Fornecedor(0 , $_POST["nome"]);
			//inserir
			$fornecedorDAO = new fornecedorDAO();
			$fornecedorDAO->inserir($fornecedor);
			header("location:listar_fornecedor.php");
		}
		
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Loja</title>
	</head>
	<body>
		<h1>Fornecedor</h1>
		<form action="#" method="post">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome">
			<div><?php echo $erro;?></div>
			<br><br>
            <label for="telefone">Telefone:</label>
			<input type="text" name="telefone" id="telefone">
			<div><?php echo $erro;?></div>
			<br><br>

            <div class="mb-3">
				<label for="produto" class="form-label">Produto</label>
				<select name="produto" id="produto">
					<option value="0">Escolha um Produto</option>
					<?php
						
						
				$produto = new Produto();
						
				$produtoDAO = new FornecedorDAO();
						
						
					?>
				</select>
				<div style="color:red"><?php echo $msg[0] != ""?$msg[0]:'';?></div>
			</div>
			<br><br>
            <div class="mb-3">
				<label for="endereco" class="form-label">Endereco</label>
				<select name="endereco" id="endereco">
					<option value="0">Escolha um Endereco</option>
					<?php
						
						
				$endereco = new Endereco();
								
						
					?>
				</select>
				<div style="color:red"><?php echo $msg[1] != ""?$msg[1]:'';?></div>
			</div>
			<br><br>
			
		            
			<br><br>
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>