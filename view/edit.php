<!-- Davi de Assis Fabricio -->
<?php include 'view/header.php'; ?>

<main class="main-content">
    <div class="form-header">
        <h2>Editar Produto</h2>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </div>

    <form class="product-form" method="POST">
        <div class="form-group">
            <label for="nome">Nome do Produto *</label>
            <input type="text" id="nome" name="nome" required 
                   value="<?php echo htmlspecialchars($this->productModel->nome); ?>"
                   placeholder="Digite o nome do produto">
        </div>

        <div class="form-group">
            <label for="preco">Preço (R$) *</label>
            <input type="number" id="preco" name="preco" step="0.01" min="0" required 
                   value="<?php echo htmlspecialchars($this->productModel->preco); ?>"
                   placeholder="0,00">
        </div>

        <div class="form-group">
            <label for="categoria">Categoria *</label>
            <select id="categoria" name="categoria" required>
                <option value="">Selecione uma categoria</option>
                <option value="Eletrônicos" <?php echo $this->productModel->categoria == 'Eletrônicos' ? 'selected' : ''; ?>>Eletrônicos</option>
                <option value="Periféricos" <?php echo $this->productModel->categoria == 'Periféricos' ? 'selected' : ''; ?>>Periféricos</option>
                <option value="Móveis" <?php echo $this->productModel->categoria == 'Móveis' ? 'selected' : ''; ?>>Móveis</option>
                <option value="Informática" <?php echo $this->productModel->categoria == 'Informática' ? 'selected' : ''; ?>>Informática</option>
                <option value="Games" <?php echo $this->productModel->categoria == 'Games' ? 'selected' : ''; ?>>Games</option>
                <option value="Outros" <?php echo $this->productModel->categoria == 'Outros' ? 'selected' : ''; ?>>Outros</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Atualizar Produto</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</main>

<?php include 'view/footer.php'; ?>