<?php
class ProductController {
    private $productModel;

    public function __construct($db) {
        $this->productModel = new Product($db);
    }

    public function index() {
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        
        if(!empty($search)) {
            $stmt = $this->productModel->search($search);
        } else {
            $stmt = $this->productModel->read();
        }
        
        include 'view/list.php';
    }

    public function create() {
        if($_POST) {
            $this->productModel->nome = $_POST['nome'];
            $this->productModel->preco = $_POST['preco'];
            $this->productModel->categoria = $_POST['categoria'];

            if($this->productModel->create()) {
                $_SESSION['message'] = "Produto criado com sucesso!";
                $_SESSION['message_type'] = "success";
                header("Location: index.php");
                exit();
            } else {
                $_SESSION['message'] = "Erro ao criar produto.";
                $_SESSION['message_type'] = "error";
            }
        }
        include 'view/create.php';
    }

    public function edit() {
        $this->productModel->id = $_GET['id'] ?? die('ID do produto não especificado.');

        if($_POST) {
            $this->productModel->nome = $_POST['nome'];
            $this->productModel->preco = $_POST['preco'];
            $this->productModel->categoria = $_POST['categoria'];

            if($this->productModel->update()) {
                $_SESSION['message'] = "Produto atualizado com sucesso!";
                $_SESSION['message_type'] = "success";
                header("Location: index.php");
                exit();
            } else {
                $_SESSION['message'] = "Erro ao atualizar produto.";
                $_SESSION['message_type'] = "error";
            }
        } else {
            $this->productModel->readOne();
        }
        include 'view/edit.php';
    }

    public function delete() {
        $this->productModel->id = $_GET['id'] ?? die('ID do produto não especificado.');
        
        if($this->productModel->delete()) {
            $_SESSION['message'] = "Produto excluído com sucesso!";
            $_SESSION['message_type'] = "success";
        } else {
            $_SESSION['message'] = "Erro ao excluir produto.";
            $_SESSION['message_type'] = "error";
        }
        header("Location: index.php");
        exit();
    }
}
?>