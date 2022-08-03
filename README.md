# Projeto Lumen 8.0 

## **Docker**

### **Mysql**
* version - 8.0.27

###  **PHP 8.1**
* compose 
* pdo 
* pdo_mysql
* mysqli
* zip git
* https://localhost:8000

### **phpMyAdmin**
* acessar - https://localhost:8085

## **Como executar**

    > git clone https://github.com/RicardoSantosSantana/lumen-docker.git
    > cd lumen-docker
* acesse o folder criado

#### **Acesse o folder docker**
#### Passo 1
 1. renomear o .env.example para .env
 2. configure o .env com os valores que deseja para sua base de dados.
 3. saia do folder docker e entre no folder blog
 4. renomear o .env .example para .env e configure com os mesmos dados do .env do docker.

#### Passo 2
**1** - acesse o folder docker e rode o comando abaixo em seu terminal
o comando  irá criar as 3 imagens mysql, php e phpmyadmin

    > docker-compose up -d --build 

**2** -  depois que todo o processo for concluído execute o comando abaixo.

    > docker exec -it php bash

**3** - Neste ponto você estará dentro do container php, execute a linha de comando abaixo para instalar as dependencias que faltam.
    
    > composer install
    > exit

### **Endereços**
Aplicação: http://localhost:8000/

phpMyAdmin: http://localhost:8085/