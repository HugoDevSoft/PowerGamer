PowerGamer - API E-commerce

Este projeto é a parte de back-end de uma plataforma de e-commerce, focada em segurança e autenticação. A API é desenvolvida usando Spring Boot e Spring Security.

🚀 Funcionalidades Principais

Sistema de Autenticação com JWT: A API utiliza JSON Web Tokens (JWT) para um sistema de autenticação e autorização seguro e sem estado.

Cadastro de Usuário: Endpoint público para registro de novos usuários. As senhas são criptografadas usando o BCryptPasswordEncoder para garantir a segurança.

Autenticação de Usuário: Endpoint para login, que retorna um token JWT após a validação das credenciais do usuário.

Integração com MySQL: O banco de dados utilizado é o MySQL, gerenciado pelo Spring Data JPA e Hibernate.

Controle de Acesso: Rotas públicas (/api/users/register, /api/users/login) são liberadas, enquanto as demais são protegidas e exigem um token de autenticação válido.

🛠️ Tecnologias Utilizadas

Java 17

Spring Boot 3.5.5

Spring Security

Spring Data JPA

MySQL

Lombok

JJWT (Java JWT)

⚙️ Como Executar o Projeto

Configuração do Banco de Dados:

Garanta que o MySQL está instalado e rodando na sua máquina.

Abra o arquivo src/main/resources/application.properties.

Verifique se as configurações de conexão (spring.datasource.url, username, password) estão corretas para o seu ambiente.

Executar a Aplicação:

Você pode rodar a classe Application.java diretamente da sua IDE (IntelliJ, por exemplo).

A aplicação irá iniciar no endereço http://localhost:8080.

🔒 Endpoints de Segurança

POST /api/users/register: Endpoint para criar um novo usuário.

Corpo da Requisição: JSON com email e password.

Observação: Este é um endpoint público e não requer autenticação.

POST /api/users/login: Endpoint para autenticar um usuário.

Corpo da Requisição: JSON com email e password.

Retorno: Se as credenciais estiverem corretas, a resposta conterá um token JWT.

Qualquer Outro Endpoint Protegido: Requer que o token JWT seja incluído no cabeçalho Authorization da requisição, no formato Bearer <token>.

###### Autor ######
 HUGO DEV SOFT 

<img width="700" height="460" alt="Index_powergamer" src="https://github.com/user-attachments/assets/da313fbd-f2fc-4939-aaa8-ed8eceb478f6" />

<img width="310" height="601" alt="Index_powergamer_Mobile" src="https://github.com/user-attachments/assets/da1fc988-df03-4a11-8c0e-d79bead4dee4" />

<img width="310" height="601" alt="image" src="https://github.com/user-attachments/assets/3660e58c-35c9-4d3e-90a0-e02cec71be4e" />

<img width="310" height="601" alt="pc_powergamer_mobile" src="https://github.com/user-attachments/assets/0ef6fd84-b772-4cc0-8753-ed207905eec7" />


<img width="700" height="460" alt="pc_powergamer" src="https://github.com/user-attachments/assets/144a9493-2f41-4c86-a9c1-5141866740d6" />















