Este projeto foi criado com o objetivo de estudar e praticar o uso de relacionamentos de banco de dados e migrations no framework Laravel. Através deste repositório, busco explorar diferentes tipos de relações, como:

One to One One to Many Many to Many Polymorphic Relations Além disso, será abordada a criação e gerenciamento de migrations para a construção e manutenção das tabelas de forma automatizada e eficiente.

Tecnologias Utilizadas PHP 8.x Laravel 10.x MySQL ou PostgreSQL (banco de dados relacional) Composer (gerenciador de dependências) Artisan (ferramenta de CLI do Laravel) Estrutura do Projeto O projeto está organizado da seguinte maneira:

app/Models: Contém os modelos das tabelas com as definições das relações. database/migrations: Contém as migrations para criação e atualização das tabelas. routes/web.php: Define as rotas de teste para verificar as relações. config/: Arquivos de configuração do Laravel. Funcionalidades Criação e manipulação de tabelas através de migrations. Definição de diferentes tipos de relacionamentos entre tabelas. Testes de CRUD (Create, Read, Update, Delete) com os modelos relacionados. Consultas utilizando Eloquent ORM para trabalhar com relações de banco de dados. Requisitos PHP >= 8.x Composer instalado Banco de dados MySQL ou PostgreSQL configurado

-Instalação Clone o repositório:

-bash Copiar código git clone https://github.com/seu-usuario/seu-projeto.git cd seu-projeto Instale as dependências:

-bash Copiar código composer install Configure o arquivo .env:

-Copie o arquivo de exemplo .env.example para .env Configure as credenciais do banco de dados. Gere a chave da aplicação:

-bash Copiar código php artisan key:generate Execute as migrations:

-bash Copiar código php artisan migrate Inicie o servidor local:

-bash Copiar código php artisan serve Como Usar Teste as rotas criadas para interagir com as tabelas e seus relacionamentos. Explore as migrations e modelos para entender como as relações são definidas e manipuladas. Contribuição Se você deseja contribuir para este projeto, sinta-se à vontade para enviar um pull request ou abrir uma issue com sugestões ou melhorias.
