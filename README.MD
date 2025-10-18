CRIANDO A ESTRUTURA DE PASTAS.
1. DENTRO DA PASTA RotasSimples CRIE AS PASTAS App, Public.
2. DENTRO DA PASTA pUBLIC CRIE O ARQUIVO índex.php.
3. DENTRO DA PASTA App CRIE AS PASTAS Controllers, Views E Routes.
4. DENTRO DA PASTA Controllers CRIE OS ARQUIVOS ContactController.php, Controller.php e HomeController.php.
5. DENTRO DA PASTA Routes CRIE O ARQUIVO Routes.php.
6. DENTRO DA PASTA Views CRIE OS ARQUIVOS Contact.php, Home.php e Master.php.
7. NA RAÍZ DO PROJECTO (PASTA RotasSimples) Executar os comandos: 
•	“composer init” para ter os arquivos composer.json e as pastas src e vendor.
Dentro das Configurações Name: Seu Nome, Descrition: “Uma pequena descrição sobre o Projeto”, Type: library, License: MIT ou outra que necessitar, Mini-mum-Stability: stable ou outra segundo sua necessidade.
No autoload mude o namespace para App\\ e troque o scr/ para App/ ficando da maneira seguinte:
"autoload": {
        "psr-4": {
            "App\\": "App/"
        }
    },
•	“composer du” atalho do “composer dump-autoload” permite generar o ficheiro de autoloading do Composer, que mapeia as classes do projeto para os respectivos caminhos de ficheiros.
•	“composer require league/plates” Para instalar a biblioteca Plates que oferece uma forma limpa e organizada de gerir a camada de visualização da aplica.
 
Até ao momento a estrutura final do projeto parece com a seguinte:
📦RotasSimples
 ┣ 📂App
 ┃ ┣ 📂Controllers
 ┃ ┃ ┣ 📜ContactController.php
 ┃ ┃ ┣ 📜Controller.php
 ┃ ┃ ┗ 📜HomeController.php
 ┃ ┣ 📂Routes
 ┃ ┃ ┗ 📜Routes.php
 ┃ ┗ 📂Views
 ┃ ┃ ┣ 📜Contact.php
 ┃ ┃ ┣ 📜Home.php
 ┃ ┃ ┗ 📜Master.php
 ┗ 📂Public
   ┗ 📜index.php
 ┗ 📂src
 ┗ 📂vendor
 ┗ 📜composer.json
 ┗ 📜composer.lock
