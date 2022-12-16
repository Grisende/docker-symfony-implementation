# Datum Test
#### Esse projeto serve para criar um hash, de certo formato, para uma certa string fornecida como input.

### Instrução de rotas para execução

- [POST] /hashes/create
  - Parâmetros: [input_string, requests_number]
  - Descrição : { 
      "input_string" : "string de entrada", 
      "requests_number" : "Número de requisições"
  - Exemplo: {"input_string" : "avato, "requests_number":100}

- [GET] /hashes
  - Parâmetros: [limit, after]
  - Descrição : { 
      "limit" : "Quantidade de itens por página, limitado à 20", 
      "after" : "Número da paginação"
  - Exemplo: {"limit" : 10, "after" : 2}
  
### Execução do comando

 - php bin/console avato:test string requests
    - Descrição: {"string" : "string inicial", "requests" : "número de requisições desejada"
    - Exemplo : 
       - php bin/console avato:test avato 100
