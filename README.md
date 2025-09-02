PowerGamer - Back-end de E-commerce
Este projeto é a API de back-end para uma plataforma de e-commerce chamada PowerGamer. Ele foi desenvolvido como parte de um estudo aprofundado em Java com o framework Spring Boot, focando nas melhores práticas de desenvolvimento, segurança e persistência de dados.

Tecnologias e Ferramentas
O projeto foi construído utilizando as seguintes tecnologias:

Java 17: A linguagem de programação principal.

Spring Boot 3.5.5: Framework para construção de aplicações robustas.

Spring Security: Módulo de segurança para autenticação e autorização, com implementação de JWT para login.

Spring Data JPA: Mapeamento Objeto-Relacional para interagir com o banco de dados.

Hibernate: Provedor de persistência.

MySQL: Banco de dados relacional.

Maven: Gerenciador de dependências e build.

Lombok: Biblioteca para reduzir código boilerplate (getters, setters, construtores).

Funcionalidades da API
A API oferece os seguintes endpoints:

Registro de Usuário: Cria um novo usuário no sistema com senha criptografada.

Autenticação de Usuário: Realiza o login, verificando credenciais e gerando um token JWT.

Segurança: Implementa uma camada de segurança robusta para proteger os endpoints da API.

CORS: Configuração de Cross-Origin Resource Sharing para permitir requisições de outras origens.

Como Executar o Projeto
Siga os passos abaixo para rodar a aplicação localmente:

1. Pré-requisitos
Java 17 ou superior instalado.

Maven instalado.

MySQL instalado e em execução (versão 8.0.0 ou superior recomendada).

2. Configuração do Banco de Dados
Abra o arquivo src/main/resources/application.properties e configure as credenciais do seu banco de dados MySQL:

Properties

spring.datasource.url=jdbc:mysql://localhost:3306/powergamerdb
spring.datasource.username=seu_usuario
spring.datasource.password=sua_senha
spring.jpa.hibernate.ddl-auto=update
spring.jpa.show-sql=true
3. Build e Execução
No terminal, navegue até o diretório do projeto (PowerGamer/BACK-END/ecommerce) e execute o seguinte comando para construir e instalar as dependências:

Bash

mvn clean install
Após a conclusão do build, inicie a aplicação através da sua IDE (IntelliJ, VS Code, etc.) ou via terminal:

Bash

java -jar target/ecommerce-3.5.5.jar
A aplicação estará disponível em http://localhost:8080.

Endpoints da API
A seguir, os endpoints disponíveis para testes, que podem ser acessados via Postman:

Endpoint	Método	Descrição
/api/users/register	POST	Registra um novo usuário no sistema.
/api/auth/login	POST	Autentica um usuário e retorna um token JWT.

Exportar para as Planilhas

![image](https://github.com/user-attachments/assets/18c16c6f-282c-48c3-8ceb-62c61badd4e7)

![image](https://github.com/user-attachments/assets/ebf773b8-3e84-4907-860f-c3d7534792ea)


![image](https://github.com/user-attachments/assets/1d9a3eb9-ac3c-40a3-bba9-558eb76dc637)

![image](https://github.com/user-attachments/assets/3f62a0ba-e3c8-4478-baeb-b452a6f909de)





