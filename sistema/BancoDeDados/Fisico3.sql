CREATE TABLE Venda (
    id_venda INTEGER PRIMARY KEY,
    cliente VARCHAR(80),
    quantidade INTEGER,
    item VARCHAR(80)
);

CREATE TABLE itens_compras (
    quantidade INTEGER,
    produtos VARCHAR(80),
    id_itens_compras INTEGER PRIMARY KEY,
    id_pedido INTEGER,
    id_produto INTEGER
);

CREATE TABLE Estoque  (
    id_estoque  INTEGER PRIMARY KEY,
    quantidade INTEGER,
    Localizacao VARCHAR(100)
);

CREATE TABLE itens_vendas (
    produtos VARCHAR(80),
    quantidade INTEGER,
    id_itens_venda INTEGER PRIMARY KEY,
    id_venda INTEGER,
    FOREIGN KEY(id_venda) REFERENCES Venda(id_venda)
);

CREATE TABLE Pedido (
    id_pedido INTEGER PRIMARY KEY,
    data DATE,
    hora TIME,
    id_fornecedor INTEGER,
    id_estoque INTEGER,
    FOREIGN KEY(id_estoque) REFERENCES Estoque(id_estoque)
);

CREATE TABLE Fornecedor (
    id_fornecedor INTEGER PRIMARY KEY,
    telefone VARCHAR(11),
    nome VARCHAR(80)
);

CREATE TABLE Endereco (
    id_endereco INTEGER PRIMARY KEY,
    cep VARCHAR(10),
    logradouro VARCHAR(100),
    cidade VARCHAR(100),
    uf CHAR(2),
    id_fornecedor INTEGER,
    FOREIGN KEY(id_fornecedor) REFERENCES Fornecedor(id_fornecedor)
);

CREATE TABLE produto (
    id_produto INTEGER PRIMARY KEY,
    nome VARCHAR(10),
    marca VARCHAR(10),
    categoria VARCHAR(10),
    quantidade INTEGER,
    preco DECIMAL(10,2)
);

CREATE TABLE saida (
    id_estoque INTEGER,
    id_venda INTEGER,
    PRIMARY KEY(id_estoque, id_venda),
    FOREIGN KEY(id_estoque) REFERENCES Estoque(id_estoque),
    FOREIGN KEY(id_venda) REFERENCES Venda(id_venda)
);

CREATE TABLE contem (
    id_produto INTEGER,
    id_itens_venda INTEGER,
    PRIMARY KEY(id_produto, id_itens_venda),
    FOREIGN KEY(id_produto) REFERENCES produto(id_produto),
    FOREIGN KEY(id_itens_venda) REFERENCES itens_vendas(id_itens_venda)
);

CREATE TABLE fornece (
    id_fornecedor INTEGER,
    id_produto INTEGER,
    PRIMARY KEY(id_fornecedor, id_produto),
    FOREIGN KEY(id_fornecedor) REFERENCES Fornecedor(id_fornecedor),
    FOREIGN KEY(id_produto) REFERENCES produto(id_produto)
);

ALTER TABLE itens_compras ADD FOREIGN KEY(id_pedido) REFERENCES Pedido(id_pedido);
ALTER TABLE itens_compras ADD FOREIGN KEY(id_produto) REFERENCES produto(id_produto);
ALTER TABLE Pedido ADD FOREIGN KEY(id_fornecedor) REFERENCES Fornecedor(id_fornecedor);
