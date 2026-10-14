# Sistema de Fotógrafos

Aplicação desenvolvida em Laravel para compartilhamento de fotografias, com galeria, autenticação, perfis de usuários e fotógrafos, publicação de fotos e curtidas.

## Tecnologias

- **Backend:** PHP 8.4+, Laravel 13
- **Frontend:** Blade, Tailwind CSS 4 e Alpine.js
- **Banco de dados:** MySQL (configurável)
- **Ferramentas:** Composer, Node.js, npm e Vite

## Instalação

Instale as dependências:

```bash
composer install
npm install
```

Configure o ambiente copiando `.env.example` para `.env` e ajustando as informações necessárias.

Execute:

```bash
php artisan key:generate
php artisan migrate
php artisan storage:link
npm run build
```

## Execução

Inicie o servidor Laravel:

```bash
php artisan serve
```

Em outro terminal, execute:

```bash
npm run dev
```

Acesse **http://localhost:8000**.

## Funcionalidades

- Cadastro e autenticação de usuários e fotógrafos.
- Publicação e visualização de fotografias.
- Curtidas nas publicações.
- Edição de perfil e avatar.
- Recuperação de senha.
- Interface responsiva.

## Estrutura do projeto

- `app/`: modelos e controllers.
- `resources/views/`: páginas e componentes Blade.
- `resources/css/`: estilos da aplicação.
- `routes/`: rotas do sistema.
- `database/`: migrations e banco de dados.
- `tests/`: testes automatizados.
