# Curso | Curso Laravel Matheus Battisti - Hora de Codar
## Link : https://www.youtube.com/watch?v=qH7rsZBENJo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=1

## Aula 01

### O que é o Laravel

- Framework construido na linguagem PHP;
- Utiliza a arquitetura MVC(Model View Controller);
- Possui recursos interessante para o desenvolvimento de aplicações: artisan, migrations, blade e etc;
- Facil de codar, flexibiliza bastante  o desenvolvimento;
- A estrutura de pastas é simples, bem organizado;

##

## Aula 02

### Rotas e Views

- Vamos acessar as páginas do nosso projeto por meio de rotas;
- As rotas chamam as views, que são as representações gráficas das páginas;
- Nas views teremos os templates, onde há a estruturação da página por meio do HTML
- Os templates também renderizam dados dinâmicos por meio do PHP;

##

## Aula 03

### Conhecendo o Blade (template engine)

- Blade é a template engine do Laravel
- Com ele, vamos deixar as nossas views dinâmicas;
- Inserindo tags de HTML e também dados que são fornecidos pelo banco;
- Podemos dizer que as Views serão responsabilidade do Blade;

##

## Aula 04

### Explorando o Blade

- Podemos criar estruturas de repetição no Blade;
- Executar PHP puro;
- Escrever comentários nos arquivos de view;
- O Blade realmente é muito versátil e nos permite chegar num resultados excelentes de renderização de views;

##

## Aula 05

### Adicionando arquivos estáticos

- Uma aplicação web normalmente tem aquivos de CSS, JSS e imagens;
- O Laravel proporciona uma maneira muito fácil de incerir estes arquivos no projeto;
- Todos os recyrsis ficam na pasta public, e tem acesso direto nas tags que trabalham com arquivos estáticos;

##

## Aula 06

### Layouts com Blade

- A funcionalidade de criar um layout permite o reaproveitamento de código;
- Por exemplo: Podemos utilizar o mesmo header e footer em todas as páginas sem repetir o código;
- Mas o layout do blade não se limita a isso, podemos cria seçcões do site por meio do layout e também mudar o title da página; 

##

## Aula 07

### Parâmetros nas rotas

- Podemos mudar como uma view nos responde adicionando parâmetros a uma rota;
- Ao definir a rota devemos colocar o parâmetro desta maneira: {id};
- Podemos ter parâmetros opcionais também, adicionando uma ?;
- O Laravel aceita também query parameters, utizando a seguinte sintaxe: ?nome=Matheus&idade=29;

## Aula 08

### Controllers

- Os Controllers são parte fundamental de toda aplicação em Laravel;
- Geralmente condesam a maior parte da lógica;
- Tem o papel de enviar e esperar respostas do banco de dados;
- E também receber receber e enviar alguma resposta para as views;
- Os Controllers pdem ser criados via artisan;
- É comum retornar uma view ou redirecionar para uma URL pelo Controller;

## Aula 9

### Conexão com o banco

- A conexão do Laravel com o banco é configurado pelo arquivo .env;
- Isso nos proporciona maior liberdade e também segurança na aplicação;
- O Laravel utiliza um ORM(Object-Relation Mapping) chamada Eloquent;
- Etambém para a criação de tabelas as migrations;

## Aula 10

### Migrations 

- As Migrations funcionam como um versionamento de banco de dados;
- Podemos avançar e retroceder a qualquer momento;
- Adicionar colunas e remover de forma facilitada;
- Fazer o setup de DB de uma nova isntalação em apenas um comando;
- Podemos verificar as migrations com migrate:status