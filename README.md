# Gerenciador de Produtos - Original MVC

![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![MVC](https://img.shields.io/badge/Architecture-MVC-009688?style=for-the-badge)
![Bootstrap Free](https://img.shields.io/badge/Design-Custom_CSS-FF6B6B?style=for-the-badge)

Sistema completo de gerenciamento de produtos desenvolvido em PHP seguindo o padrão MVC (Model-View-Controller), com design moderno e totalmente responsivo.

## Sobre o Projeto

Este projeto é um CRUD (Create, Read, Update, Delete) completo para gerenciamento de produtos, desenvolvido como parte do curso SENAI. A aplicação utiliza PDO para conexão com banco de dados MySQL e implementa um design original sem dependência de frameworks como Bootstrap.

### Funcionalidades

-  **Listagem de produtos** em tabela estilizada
-  **Adicionar novo produto** com validação
-  **Editar produtos** existentes
-  **Excluir produtos** com confirmação
-  **Busca em tempo real** por nome ou categoria
-  **Design responsivo** mobile-first
-  **Animações CSS** modernas e suaves
-  **Feedback visual** para todas as ações

## Screenshots

### Página Principal - Lista de Produtos
![Página Principal](<img width="1898" height="904" alt="image" src="https://github.com/user-attachments/assets/0f78a61b-3405-4b8d-af1e-9de9a4b5a9c0" />)
*Interface principal com tabela de produtos e barra de busca*

### Formulário de Adicionar Produto
![Formulário](<img width="1898" height="917" alt="image" src="https://github.com/user-attachments/assets/89c51931-2ba6-4389-b0fa-c39da8a634d6" />
)
*Formulário para cadastro de novos produtos com validação*

## Tecnologias Utilizadas

- **Backend:** PHP 8.0+
- **Banco de Dados:** MySQL com PDO
- **Padrão:** MVC (Model-View-Controller)
- **Frontend:** HTML5, CSS3, JavaScript Vanilla
- **Design:** CSS Customizado (sem Bootstrap)
- **Ícones:** SVG inline

## Estrutura do Projeto

```
produtos-mvc/
├── config/
│   └── database.php
├── model/
│   └── Product.php
├── controller/
│   └── ProductController.php
├── view/
│   ├── header.php
│   ├── footer.php
│   ├── list.php
│   ├── create.php
│   └── edit.php
├── public/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── script.js
├── index.php
└── database.sql
```

## 🚀 Instalação e Configuração

### Pré-requisitos
- Servidor web (Apache/Nginx)
- PHP 8.0 ou superior
- MySQL 5.7 ou superior
- phpMyAdmin (opcional)

### Passos para Instalação

1. **Clone ou baixe o projeto**
   ```bash
   git clone [url-do-repositorio]
   ```

2. **Configure o banco de dados**
   - Execute o script `database.sql` no phpMyAdmin ou MySQL
   - O script criará o banco `gerenciador_produtos` e a tabela `produtos`

3. **Configure a conexão com o banco**
   - Edite o arquivo `config/database.php`
   - Ajuste as credenciais conforme seu ambiente:
   ```php
   private $host = 'localhost';
   private $db_name = 'gerenciador_produtos';
   private $username = 'seu_usuario';
   private $password = 'sua_senha';
   ```

4. **Acesse a aplicação**
   - Coloque os arquivos no diretório do servidor web
   - Acesse via: `http://localhost/produtos-mvc/`

## Estrutura do Banco de Dados

### Tabela: produtos
| Campo | Tipo | Descrição |
|-------|------|-----------|
| id | INT AUTO_INCREMENT | Chave primária |
| nome | VARCHAR(255) | Nome do produto |
| preco | DECIMAL(10,2) | Preço do produto |
| categoria | VARCHAR(100) | Categoria do produto |
| data_criacao | TIMESTAMP | Data de criação |
| data_atualizacao | TIMESTAMP | Data da última atualização |

## Funcionalidades Detalhadas

### Listagem de Produtos
- Tabela responsiva com design moderno
- Ordenação por data de criação
- Efeitos hover suaves nas linhas
- Ícones SVG para ações

### Busca Inteligente
- Filtra por nome do produto
- Filtra por categoria
- Busca em tempo real
- Interface limpa e intuitiva

### Gestão de Produtos
- **Criar:** Formulário com validação client-side e server-side
- **Editar:** Preenchimento automático dos dados
- **Excluir:** Modal de confirmação antes da exclusão

### Design e UX
- **Cores:** Tons de azul escuro e cinza
- **Animações:** Transições suaves e efeitos hover
- **Responsivo:** Adaptável a todos os dispositivos
- **Acessibilidade:** Feedback visual para todas as ações

## Personalização

### Cores do Tema
As cores podem ser personalizadas editando as variáveis CSS no arquivo `public/css/style.css`:

```css
:root {
    --primary-color: #1e293b;
    --secondary-color: #334155;
    --accent-color: #3b82f6;
    /* ... outras variáveis */
}
```

### Categorias
As categorias disponíveis podem ser modificadas no arquivo `view/create.php` e `view/edit.php`:

```php
<option value="Eletrônicos">Eletrônicos</option>
<option value="Periféricos">Periféricos</option>
<!-- Adicione mais categorias conforme necessário -->
```

## Responsividade

A aplicação é totalmente responsiva e se adapta a:

- **Desktop:** Layout completo com sidebar
- **Tablet:** Layout adaptado com elementos reorganizados
- **Mobile:** Design mobile-first com menu compacto

## Solução de Problemas

### Problemas Comuns

1. **Erro de conexão com o banco**
   - Verifique as credenciais no `config/database.php`
   - Confirme se o banco foi criado corretamente

2. **Página em branco**
   - Verifique se o PHP está com display_errors habilitado
   - Confirme a versão do PHP (mínimo 8.0)

3. **Problemas de CSS/JS**
   - Verifique os caminhos dos arquivos estáticos
   - Confirme as permissões dos diretórios

## Contribuição

Contribuições são bem-vindas! Para contribuir:

1. Fork o projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## Licença

Este projeto foi desenvolvido para fins educacionais como parte do curso SENAI.

## 👨‍💻 Desenvolvido por

**Davi Fabricio**  
*Estudante de Desenvolvimento Web - SENAI*

## 👨‍💻 Orientado por

**PROFESSORES-**
**Luis Felipe Cardozo**  
**Wesley Fiorezi**  
---

<div align="center">

**🚀 Pronto para usar! Configure o ambiente e comece a gerenciar seus produtos.**

</div>
