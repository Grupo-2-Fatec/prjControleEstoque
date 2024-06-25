<?php
	class FornecedorDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($fornecedor)
		{
			$sql = "INSERT INTO fornecedor (nome, telefone, idendereco, idproduto) VALUES(?,?,?,?)";
			
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $fornecedor->getNome());
			$stm->bindValue(2, $fornecedor->getTelefone());
            $stm->bindValue(2, $fornecedor->getEndereco()->getIdE());
            $stm->bindValue(2, $fornecedor->getProduto()->getIdproduto());
			$stm->execute();
			$this->db = null;
			return "Fornecedor inserido com sucesso";
		}//fim inserir
		public function buscar_fonecedor()
		{
			$sql = "SELECT * FROM fornecedor";
			$stm = $this->db->prepare($sql);
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}//fim buscar_fornecedor
		public function excluir($fornecedor)
		{
			$sql = "DELETE FROM fornecedor WHERE idfornecedor = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $fornecedor->getIdFornecedor());
				$stm->execute();
				$this->db = null;
				return "Fornecedor Excluido com Sucesso";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				if($e->getCode() == "23000")
				{
					return "Fornecedor tem produtos associado. Não pode ser excluido";
				}
				else
				{
					return "Problema ao excluir um Fornecedor de produto";
				}
			}
		}//excluir
		public function buscar_um_fonecedor($fornecedor)
		{
			$sql = "SELECT * FROM fornecedor WHERE idfornecedor = ?";
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $fornecedor->getIdFornecedor());
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
			
		}//fim buscar_um_fornecedor
		public function alterar($fornecedor)
		{
			$sql = "UPDATE fornecedor SET nome = ?, telefone = ?, idendereco = ?, idproduto =?  WHERE idfornecedor = ?";
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1, $fornecedor->getNome());
			$stm->bindValue(2, $fornecedor->getTelefone());
            $stm->bindValue(2, $fornecedor->getEndereco()->getIdEndereco());
            $stm->bindValue(2, $fornecedor->getProduto()->getIdproduto);
            $stm->bindValue(2, $fornecedor->getIdFornecedor());
			$stm->execute();
			$this->db = null;
			return "Fornecedor alterado com sucesso";
		}//fim alterar
		
	}//fim classe
?>