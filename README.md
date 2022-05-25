# supermarrios-MVC-Framework

EM DESENVOLVIMENTO!

Resolvi criar esse framework para estudo. Se for útil pra você, pode usar e contribuir como quiser :)
Grande abraço!

<hr>

## Doc 
## 1 - Loader de Helper
### Você pode carregar funções de uma arquivo de Helper dentro do seu controller, utilize o:
```
$this->helper->load("HelperName");
```
### Com isso você inclui o arquivo de Helper de forma elegante no seu controller.

<hr>

## 2 - Acessando inputs de uma request
```
$this->request->nomeInput;
```
<hr>

## 3 - Criando response
### O response->make cria uma nova resposta Json
```
return $this->response->make(201, ["Olá, eu sou uma resposta JSON"]);
```
### O primeiro parâmetro é referente ao status HTTP da resposta, o segundo parâmetro é referente ao conteúdo do corpo da resposta.

<hr>

## 4 - Roteamento
### Aqui está a documentação do gerenciador de rotas
### https://github.com/edmariooliver/Router
