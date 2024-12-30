# Projeto Base Forte

## Sistema de Registro de Solicitações de Serviços
Este projeto é um sistema simples desenvolvido em PHP com integração ao banco de dados MySQL, que permite o registro e armazenamento de solicitações de serviços enviadas por meio de um formulário HTML.

### Funcionalidades
Formulário de Registro: Permite que usuários preencham informações como nome, e-mail, telefone e o serviço desejado.

Validação de Dados: Antes de enviar as informações ao banco, o sistema realiza validações para garantir que todos os campos obrigatórios foram preenchidos e que o e-mail inserido é válido.

Registro no Banco de Dados: Utiliza prepared statements para inserir os dados de forma segura na tabela aquisicoes do banco de dados, prevenindo ataques de injeção SQL.

Confirmação ao Usuário: Após o registro bem-sucedido, o sistema exibe uma mensagem de agradecimento com os detalhes da solicitação.

### Tecnologias Utilizadas
Backend: PHP

Banco de Dados: MySQL

Frontend: HTML

![Sem título](https://github.com/user-attachments/assets/4d23c3ae-aaf6-488d-80b4-6c4725549293)

