<?php
	require_once "../models/Conexao.class.php";
	require_once "../models/Produto.class.php";
	require_once "../models/produtoDAO.class.php";
	require_once "../models/Fornecedor.class.php";
	require_once "../models/FornecedorDAO.class.php";
	
	$msg = array("","","","","","");
	
	require_once "header.php";
	
?>
	<div class="content">
	  <div class="container">
		<h1>Produto</h1>
		<form class="form-control" action="/lojaMVC/inserir_produto" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="nome" class="form-label">Nome</label>
				<input type="text"  id="nome" name="nome" value="<?php echo isset($_POST['nome'])?$_POST['nome']:''?>">
				<div style="color:red"><?php echo $msg[0] != ""?$msg[0]:'';?></div>
			</div>
			<br><br>
			<div class="mb-3">
				<label for="categoria" class="form-label">Categoria</label><br>
				<textarea name="categoria" id="categoria"><?php echo isset($_POST['categoria'])?$_POST['categoria']:''?></textarea>
				<div style="color:red"><?php echo $msg[1] != ""?$msg[1]:'';?></div>
			</div>
			<br><br>
            <div class="mb-3">
				<label for="quantidade" class="form-label">Quantidade</label><br>
				<textarea name="quantidade" id="quantidade"><?php echo isset($_POST['quantidade'])?$_POST['quantidade']:''?></textarea>
				<div style="color:red"><?php echo $msg[2] != ""?$msg[3]:'';?></div>
			</div>
			<br><br>
            <div class="mb-3">
				<label for="marca" class="form-label">Marca</label><br>
				<textarea name="marca" id="marca"><?php echo isset($_POST['marca'])?$_POST['marca']:''?></textarea>
				<div style="color:red"><?php echo $msg[4] != ""?$msg[4]:'';?></div>
			</div>
			<br><br>

			<div class="mb-3">
				<label for="preco" class="form-label">Preço</label>
				<input type="text" class="form-control" id="preco" name="preco" value="<?php echo isset($_POST['preco'])?$_POST['preco']:''?>">
				<div style="color:red"><?php echo $msg[5] != ""?$msg[5]:'';?></div>
			</div>
			<br><br>
		            
			<div class="mb-3">
				<label for="fornecedor" class="form-label">Fornecedor</label>
				<select name="fornecedor" id="fornecedo">
					<option value="0">Escolha um Fornecedor</option>
					<?php
						//buscar categorias BD
						
				$fornecedor = new Fornecedor();
						
				$fornecedorDAO = new fornecedorDAO();
						
						
					?>
				</select>
				<div style="color:red"><?php echo $msg[6] != ""?$msg[6]:'';?></div>
			</div>
			<br><br>
			
			<input class="btn btn-primary" type="submit" value="Cadastrar">
		</form>
	  </div>
	</div>

	
<?php
	require_once "footer.html";
?>