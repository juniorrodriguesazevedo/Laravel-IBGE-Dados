## Habitantes por Estado
Site feito em PHP/Laravel onde obtenho dados de projeção da população por estado/municipio a partir de uma API pública do IBGE.
Link: [https://habitantes-estado.herokuapp.com/](https://habitantes-estado.herokuapp.com/)

### Instalação: 

* Você precisará do PHP instalado em seu computador, [BAIXE AQUI](https://www.php.net/downloads). 
* Na raiz do projeto use o comando `composer install`.
* No arquivo `.ENV` edite o campo `DB_CONNECTION` e coloque os dados do seu banco de dados.
* Use o comando `php artisan migrate` para fazer as migrações.
* Use o comando `php artisan serve` para rodar em seu servidor.
* Navegue para `http://127.0.0.1:8000/`. O aplicativo será carregado automaticamente.
