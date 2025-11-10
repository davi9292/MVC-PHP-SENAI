-- Criar banco de dados
CREATE DATABASE IF NOT EXISTS gerenciador_produtos;
USE gerenciador_produtos;

-- Criar tabela produtos
CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Inserir alguns dados de exemplo
INSERT INTO produtos (nome, preco, categoria) VALUES
('Notebook Dell', 2899.90, 'Eletrônicos'),
('Mouse Gamer', 159.90, 'Periféricos'),
('Teclado Mecânico', 299.90, 'Periféricos'),
('Monitor 24"', 899.90, 'Eletrônicos'),
('Cadeira Gamer', 1299.90, 'Móveis');