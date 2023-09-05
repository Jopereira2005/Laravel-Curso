# Preparando a Maquina
- Ter o PHP versão 7 no minimo
- Instalar o Composer

# Instalação do Laravel e criação de um projeto
- execute composer create-project --prefer-dist laravel/laravel lavarelLearning

## Iniciando o Laravel
- cd .\PastaUtilizada
- execute php artisan serve
- roda uma aplicação de laravel

# Migrate

## Conexão com o Banco de Dados
- php artisan migrate
- caso ocorra algum erro quando for rodar o php artisan migrate
- veja esse video: https://www.youtube.com/watch?v=uLOH0qqXptc
- php artisan migrate:fresh

## Comandos
- php artisan make:migrate nome_tabela <- cria tabela
- php artisan migrate:fresh <- deleta e roda de novo todas as migrate
- php artisan migrate:rollback <- volta uma migrate
- php artisan migrate:reset <- volta todas as migrate
- php artisan migrate:refresh <- faz o reset e roda de novo as migrate



