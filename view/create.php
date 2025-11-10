<!-- Davi de Assis Fabricio -->
<?php include 'view/header.php'; ?>

<main class="main-content">
    <div class="form-header">
        <h2>Adicionar Novo Produto</h2>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </div>

    <form class="product-form" method="POST">
        <div class="form-group">
            <label for="nome">Nome do Produto *</label>
            <input type="text" id="nome" name="nome" required 
                   placeholder="Digite o nome do produto">
        </div>

        <div class="form-group">
            <label for="preco">Preço (R$) *</label>
            <input type="number" id="preco" name="preco" step="0.01" min="0" required 
                   placeholder="0,00">
        </div>

        <div class="form-group">
            <label for="categoria">Categoria *</label>
            <select id="categoria" name="categoria" required>
                <option value="">Selecione uma categoria</option>
                <option value="Eletrônicos">Eletrônicos</option>
                <option value="Periféricos">Periféricos</option>
                <option value="Móveis">Móveis</option>
                <option value="Informática">Informática</option>
                <option value="Games">Games</option>
                <option value="Outros">Outros</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Salvar Produto</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</main>

<?php include 'view/footer.php'; ?>