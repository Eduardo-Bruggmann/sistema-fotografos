# Sistema Fotógrafos

Aplicação web em Laravel para fotógrafos publicarem fotos e usuários curtirem imagens em um feed autenticado.

## O que foi implementado

- Autenticação com Laravel Breeze e cadastro com papel de usuário ou fotógrafo.
- Feed paginado de fotos para usuários autenticados.
- Upload de imagens restrito a fotógrafos.
- Sistema de curtidas com contagem e indicação de foto já curtida.
- Relacionamentos Eloquent entre usuários, fotos e curtidas.

## Como funciona

Ao acessar `/`, visitantes veem a tela de login e usuários autenticados são enviados ao dashboard.

No `/dashboard`, as fotos aparecem em ordem decrescente de criação, com dados do fotógrafo, quantidade de curtidas e paginação de 9 itens.

Fotógrafos podem publicar em `/photos/create`. A imagem é validada, salva no disco público do Laravel e registrada no banco.

O endpoint `POST /photos/{photo}/like` alterna a curtida: se ela já existir, é removida; se não existir, é criada.

## Stack

- PHP 8.3+
- Laravel 13
- Laravel Breeze
- Blade
- Eloquent ORM
- SQLite por padrão no ambiente local
- Vite
- Tailwind CSS
- Alpine.js
- PHPUnit
- Blade Icons

## Estrutura principal

- `app/Models/User.php`: usuário autenticado, papel do usuário, fotos e curtidas.
- `app/Models/Photo.php`: foto publicada, fotógrafo autor e curtidas.
- `app/Models/Like.php`: registro de curtida entre usuário e foto.
- `app/Http/Controllers/PhotoController.php`: dashboard, envio de fotos e alternância de curtidas.
- `routes/web.php`: rotas públicas, autenticadas, perfil, dashboard, fotos e likes.
- `resources/views/dashboard.blade.php`: feed de fotos.
- `resources/views/photos/create.blade.php`: formulário de upload de foto.
- `database/migrations`: tabelas de usuários, fotos, curtidas, jobs, cache e índice único de curtidas.
- `tests/Feature/PhotoLikeTest.php`: cobertura do botão de curtir, criação e remoção de curtidas.

## Requisitos

Tenha instalado:

- PHP 8.3 ou superior
- Composer
- Node.js e npm
- SQLite habilitado no PHP

## Instalação

Clone o repositório e instale as dependências:

```bash
composer install
npm install
```

Crie o arquivo de ambiente:

```bash
cp .env.example .env
php artisan key:generate
```

Crie o banco SQLite local, se ele ainda não existir:

```bash
touch database/database.sqlite
```

No Windows PowerShell, use:

```powershell
New-Item -ItemType File database/database.sqlite
```

Execute as migrations:

```bash
php artisan migrate
```

Crie o link público para acessar uploads salvos em `storage/app/public`:

```bash
php artisan storage:link
```

Opcionalmente, popule o banco com dados de exemplo:

```bash
php artisan db:seed
```

## Ambiente

O `.env.example` já vem configurado para desenvolvimento local com SQLite:

```env
APP_NAME=sistema-fotografos
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite
SESSION_DRIVER=database
QUEUE_CONNECTION=database
CACHE_STORE=database
MAIL_MAILER=log
```

Se mudar o banco para MySQL, PostgreSQL ou outro driver, ajuste as variáveis `DB_*` no `.env` e rode as migrations novamente.

## Rodando o projeto

Em um terminal, suba o servidor Laravel:

```bash
php artisan serve
```

Em outro terminal, suba o Vite:

```bash
npm run dev
```

Acesse:

```text
http://localhost:8000
```

Também existe o script Composer:

```bash
composer run dev
```

Para gerar os assets de produção:

```bash
npm run build
```

## Testes

Rode a suite de testes com:

```bash
php artisan test
```

Ou pelo script Composer:

```bash
composer test
```

Os testes atuais cobrem o fluxo de curtidas:

- renderização do botão de curtir no dashboard;
- criação de curtida por usuário autenticado;
- remoção de curtida quando o usuário clica novamente.

## Regras de negócio

- Apenas usuários autenticados acessam o dashboard, perfil, upload de fotos e curtidas.
- Apenas usuários com papel `photographer` podem acessar a tela de upload e publicar fotos.
- Cada usuário pode curtir uma foto apenas uma vez.
- O índice único em `likes` impede duplicidade por par `photo_id` e `user_id`.
- Ao excluir um usuário, suas fotos são removidas por cascata.

## Comandos úteis

```bash
php artisan migrate:fresh --seed
php artisan route:list
php artisan config:clear
php artisan cache:clear
npm run dev
npm run build
```
