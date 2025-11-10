<?php
class Product {
    private $conn;
    private $table_name = "produtos";

    public $id;
    public $nome;
    public $preco;
    public $categoria;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Ler todos os produtos
    public function read() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY data_criacao DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Ler um produto específico
    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row) {
            $this->nome = $row['nome'];
            $this->preco = $row['preco'];
            $this->categoria = $row['categoria'];
            return true;
        }
        return false;
    }

    // Criar produto
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET nome=:nome, preco=:preco, categoria=:categoria";
        $stmt = $this->conn->prepare($query);

        // Sanitização
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->preco = htmlspecialchars(strip_tags($this->preco));
        $this->categoria = htmlspecialchars(strip_tags($this->categoria));

        // Bind parameters
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":preco", $this->preco);
        $stmt->bindParam(":categoria", $this->categoria);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Atualizar produto
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nome=:nome, preco=:preco, categoria=:categoria WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        // Sanitização
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->preco = htmlspecialchars(strip_tags($this->preco));
        $this->categoria = htmlspecialchars(strip_tags($this->categoria));
        $this->id = htmlspecialchars(strip_tags($this->id));

        // Bind parameters
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":preco", $this->preco);
        $stmt->bindParam(":categoria", $this->categoria);
        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Excluir produto
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Buscar produtos
    public function search($keywords) {
        $query = "SELECT * FROM " . $this->table_name . " 
                  WHERE nome LIKE ? OR categoria LIKE ? 
                  ORDER BY data_criacao DESC";
        
        $stmt = $this->conn->prepare($query);
        $keywords = htmlspecialchars(strip_tags($keywords));
        $keywords = "%{$keywords}%";
        
        $stmt->bindParam(1, $keywords);
        $stmt->bindParam(2, $keywords);
        $stmt->execute();
        
        return $stmt;
    }
}
?>