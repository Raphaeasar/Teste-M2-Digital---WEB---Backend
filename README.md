Teste-M2-Digital---WEB---Backend

Para rodar o projeto: 1° passo:

1° Passo:
Crie o projeto na pasta de sua preferência. Digite o comando:

-> composer create-project --prefer-dist laravel/laravel m2

Após fazer isto, substitua todos os arquivos desta pasta para os arquivos que estão no zip deste projeto.

2° passo:

Dentro da pasta m2, digitar o comando: -> mysql -u root -e "DROP DATABASE IF EXISTS m2;CREATE DATABASE m2";

2° passo: Digitar o comando: -> php artisan migrate;

Agora é so rodar o projeto. Digitar o comando no terminal:

-> php artisan serve;

Usar o Insominia ou Postman para fazer teste das rotas.

Rota para criação de cidades: http://127.0.0.1:8000/api/cidades método POST,

Rota para listar cidades: http://127.0.0.1:8000/api/cidades método GET,

Rota para listar cidade pelo ID: http://127.0.0.1:8000/api/cidades/id método GET,

Rota para atualizar/alterar dados da cidade: http://127.0.0.1:8000/api/cidades método PUT,

Rota para excluir cidades http://127.0.0.1:8000/api/cidades método DELETE,

Rota para criação de grupo: http://127.0.0.1:8000/api/grupo método POST,

Rota para listar grupo: http://127.0.0.1:8000/api/grupo método GET,

Rota para listar grupo pelo ID: http://127.0.0.1:8000/api/grupo/id método GET,

Rota para atualizar/alterar dados da grupo: http://127.0.0.1:8000/api/grupo método PUT,

Rota para excluir grupo http://127.0.0.1:8000/api/grupo método DELETE,

Rota para criação de campanhas: http://127.0.0.1:8000/api/campanhas método POST,

Rota para listar campanhas: http://127.0.0.1:8000/api/campanhas método GET,

Rota para listar campanhas pelo ID: http://127.0.0.1:8000/api/campanhas/id método GET,

Rota para atualizar/alterar dados da campanhas: http://127.0.0.1:8000/api/campanhas método PUT,

Rota para excluir campanhas http://127.0.0.1:8000/api/campanhas método DELETE,

Rota para criação de desconto: http://127.0.0.1:8000/api/desconto método POST,

Rota para listar desconto: http://127.0.0.1:8000/api/desconto método GET,

Rota para listar desconto pelo ID: http://127.0.0.1:8000/api/desconto/id método GET,

Rota para atualizar/alterar dados da desconto: http://127.0.0.1:8000/api/desconto método PUT,

Rota para excluir desconto http://127.0.0.1:8000/api/desconto método DELETE,

Rota para criação de produto: http://127.0.0.1:8000/api/produto método POST,

Rota para listar produto: http://127.0.0.1:8000/api/produto método GET,

Rota para listar produto pelo ID: http://127.0.0.1:8000/api/produto/id método GET,

Rota para atualizar/alterar dados da produto: http://127.0.0.1:8000/api/produto método PUT,

Rota para excluir produto http://127.0.0.1:8000/api/produto método DELETE,
