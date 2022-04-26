## Projeto IMOB

Este projeto utiliza LARAVEL como Framework utilizado no backend. Para poder rodar o projeto é necessário que você tenha XAMP(Com MySQL e Apache), PHP, Composer, Laravel e Node ja instalados.

## Como Instalar 

Instalando todos os itens já mencionados, será necessário que você execute alguns comandos:

1- composer update/composer install <br>
2- npm install <br>
3- Abra o XAMP e dê um Start no Apache (Porta : 80, 43) e MySQL (Porta: 3306) <br>
4- php artisan migrate <br> 
5- php artisan serve <br>

## Alguns recursos do site não ficam disponíveis para usuários sem cadastro, para conseguir adicionar uma conta e liberar as opções de Adicionar, Editar e Deletar Imóveis, é necessário fazer o seguinte: <br>
- Cadastrar : no final da URL da home do site, coloque um "/register" para conseguir adicionar uma conta. <br>
- Logar : no final da URL da home do site, coloque um "/login" para conseguir logar com sua conta.
