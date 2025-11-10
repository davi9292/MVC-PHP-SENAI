<!-- Davi de Assis Fabricio -->
<?php include 'view/header.php'; ?>

<main class="main-content">
    <div class="actions-bar">
        <a href="index.php?action=create" class="btn btn-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
            </svg>
            Novo Produto
        </a>
        
        <form class="search-form" method="GET">
            <input type="hidden" name="action" value="index">
            <input type="text" name="search" placeholder="Buscar produtos..." 
                   value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <button type="submit">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                </svg>
            </button>
        </form>
    </div>

    <div class="products-table-container">
        <table class="products-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td class="product-name"><?php echo htmlspecialchars($row['nome']); ?></td>
                    <td class="product-price">R$ <?php echo number_format($row['preco'], 2, ',', '.'); ?></td>
                    <td class="product-category">
                        <span class="category-tag"><?php echo htmlspecialchars($row['categoria']); ?></span>
                    </td>
                    <td class="product-actions">
                        <a href="index.php?action=edit&id=<?php echo $row['id']; ?>" class="btn btn-edit" title="Editar">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
                            </svg>
                        </a>
                        <a href="index.php?action=delete&id=<?php echo $row['id']; ?>" 
                           class="btn btn-delete" 
                           title="Excluir"
                           onclick="return confirmDelete()">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                            </svg>
                        </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        
        <?php if($stmt->rowCount() == 0): ?>
            <div class="empty-state">
                <svg width="64" height="64" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                </svg>
                <h3>Nenhum produto encontrado</h3>
                <p>Comece adicionando seu primeiro produto ao sistema.</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php include 'view/footer.php'; ?>