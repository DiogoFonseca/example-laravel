## Laravel

### Instalação:

- composer global require laravel/installer
- laravel new example-app --git
- code example-app

### Mostrar a estrutura em MVC

- Explicar rotas usando o site do laravel.com como exemplo
- Mostar o arquivo routes/web.php
- Mostrar os views (blades)

### Iniciar a aplicação

- php artisan serve
- Acessar
- Criar uma nova blade com o Hello Laravel

### Adicionar o ui com auth

- composer require laravel/ui
- php artisan ui bootstrap --auth
- npm install && npm run dev
- Editar a rota / para redirecionar para o dashboard
- Tentar criar usuário
- php artisan migrate
- Tentar criar usuário

- Editar o homecontroller para listar usuários

- Pedir para que cada alune acesse o app e crie seu próprio usuário

### Criar novos modelos

- Pergunta
- php artisan make:model Question --migration
- Adicionar 'text'
- Adicionar string no migration
- Resposta
- php artisan make:model Answer --migration
- Adicionar 'user', 'question' e 'answer'
- Criar a migration com as foreign keys

### Criar controladores

- Criar perguntas
- Listar perguntas
- Responder
- Listar respostas

### Criar blades

- Criar pergunta
- Exibir pergunta (listar resposta)
- Deletar pergunta
- Responder pergunta (criar resposta)