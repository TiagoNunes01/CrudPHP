# Sistema CRUD em PHP

Este é um sistema básico de CRUD (Create, Read, Update, Delete) desenvolvido em PHP, permitindo o gerenciamento de usuários através de operações básicas no banco de dados, projeto feito na cadeira de desevolvimento web.

## Funcionalidades

- Criar novos usuários
- Visualizar lista de usuários
- Atualizar informações de usuários
- Deletar usuários
- Interface simples e intuitiva

## Tecnologias Utilizadas

- PHP
- MySQL
- HTML
- CSS
- Bootstrap

## Estrutura do Projeto

```
crud01/
├── config/
│   └── conexao.php      # Configuração da conexão com o banco de dados
├── css/
│   └── style.css        # Estilos personalizados
├── cadastrar.php        # Página de cadastro de usuários
├── editar.php          # Página de edição de usuários
├── excluir.php         # Script de exclusão de usuários
├── index.php           # Página principal com listagem de usuários
└── salvar.php          # Script para salvar dados no banco
```

## Como Usar

1. Configure seu servidor web (Apache, XAMPP, etc.)
2. Importe o banco de dados MySQL
3. Configure as credenciais do banco de dados no arquivo `config/conexao.php`
4. Acesse o projeto através do navegador

## Configuração do Banco de Dados

O sistema utiliza uma tabela `usuarios` com os seguintes campos:
- id (INT, AUTO_INCREMENT)
- nome (VARCHAR)
- email (VARCHAR)
- telefone (VARCHAR)

## Funcionalidades Detalhadas

### Cadastro de Usuários
- Formulário para inserção de nome, email e telefone
- Validação básica dos campos
- Feedback de sucesso/erro após cadastro

### Listagem de Usuários
- Exibição em formato de tabela
- Opções de editar e excluir para cada registro
- Ordenação por ID

### Edição de Usuários
- Formulário preenchido com dados existentes
- Atualização simples de informações
- Feedback após edição

### Exclusão de Usuários
- Confirmação antes da exclusão
- Remoção permanente do registro
- Feedback após exclusão
  
## Autor
Tiago Nunes

