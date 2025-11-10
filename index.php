<!-- Davi de Assis Fabricio -->
<?php
// Incluir configurações
include_once 'config/database.php';
include_once 'model/Product.php';
include_once 'controller/ProductController.php';

// Inicializar banco de dados
$database = new Database();
$db = $database->getConnection();

// Inicializar controller
$productController = new ProductController($db);

// Roteamento simples
$action = $_GET['action'] ?? 'index';

switch($action) {
    case 'create':
        $productController->create();
        break;
    case 'edit':
        $productController->edit();
        break;
    case 'delete':
        $productController->delete();
        break;
    case 'index':
    default:
        $productController->index();
        break;
}
?>