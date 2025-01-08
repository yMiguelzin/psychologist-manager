# Sistema de Gestão de Psicólogos
🧑🏻‍⚕️Sistema de Gerenciamento para Psicólogos com PHP | Projeto 

## Tópicos

- [Sobre o Projeto](#sobre-o-projeto)  
- [Funcionalidades](#funcionalidades)  
- [Tecnologias e Ferramentas](#tecnologias-e-ferramentas)  
- [Instalação e uso](#instalação-e-uso)  
- [Licença](#licença)

<br>

## Sobre o Projeto

Este projeto é um sistema simples de gestão para psicólogos, onde o psicólogo pode se cadastrar e também gerenciar as consultas dos pacientes. O sistema inclui funcionalidades para adicionar, editar, e excluir pacientes, com um banco de dados MySQL para persistência dos dados.

<br>

## Funcionalidades

- [X] Cadastro de psicólogos.
- [X] CRUD de consultas de pacientes (Criar, Ler, Atualizar e Deletar).
- [X] Sistema de login para psicólogos.
- [X] Cadastro de pacientes com informações como telefone, gênero, data e horário da consulta.
- [X] Relacionamento entre psicólogos e pacientes.

<br>

## Tecnologias e Ferramentas

As seguintes tecnologias foram utilizadas no desenvolvimento do projeto:

- [HTML](https://devdocs.io/html/)
- [CSS](https://devdocs.io/css/)
- [JavaScript](https://devdocs.io/javascript/)
- [MySQL](https://www.mysql.com/)
- [PHP](https://www.php.net/)
- [XAMPP](https://www.apachefriends.org/pt_br/index.html)

<br>

## Instalação e Uso

Para rodar a aplicação, você precisa ter o **XAMPP** ou algum outro servidor MySQL instalado.

### 1. Instale o XAMPP

- Baixe o XAMPP em [https://www.apachefriends.org/pt_br/index.html](https://www.apachefriends.org/pt_br/index.html) e siga as instruções para instalar em sua máquina.
- Após a instalação, abra o painel de controle do XAMPP e inicie os módulos **Apache** e **MySQL**.

### 2. Criação do Banco de Dados

1. Abra o navegador e acesse o PHPMyAdmin no endereço [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).
2. No PHPMyAdmin, crie o banco de dados com o nome **psicologia**.
   - No painel esquerdo, clique em **Novo**.
   - Dê o nome ao banco de dados como `psicologia` e clique em **Criar**.

3. Após criar o banco de dados, selecione o banco **psicologia** e crie as tabelas necessárias. Execute os seguintes comandos SQL na aba **SQL**:

```sql
-- Criação da tabela de pacientes
CREATE TABLE pacientes (
    id VARCHAR(50) PRIMARY KEY,
    paciente VARCHAR(50) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    genero VARCHAR(10) NOT NULL,
    data VARCHAR(10) NOT NULL,
    horario VARCHAR(5) NOT NULL,
    psicologo VARCHAR(50) NOT NULL,
    FK_CRP VARCHAR(50) NOT NULL
);

-- Criação da tabela de psicólogos
CREATE TABLE psicologo (
    CRP VARCHAR(50) PRIMARY KEY,
    psicologo VARCHAR(50) NOT NULL,
    senha VARCHAR(50) NOT NULL
);

-- Adicionando a restrição de chave estrangeira
ALTER TABLE pacientes 
ADD CONSTRAINT FK_CRP
FOREIGN KEY (FK_CRP)
REFERENCES psicologo(CRP);

```
4. Para cadastrar um psicólogo inicial, execute o comando SQL abaixo no seu banco de dados:

```sql
INSERT INTO `psicologo`(`CRP`, `psicologo`, `senha`) 
VALUES ('1', 'psicologo', '123123');
```

<br>

## Licença
<a href="https://opensource.org/licenses/MIT">
    <img alt="License" src="https://img.shields.io/badge/license-MIT-04D361?style=flat-square">
</a>

<br>

Esse projeto está sob a licença MIT. Veja o arquivo [LICENSE](/LICENSE) para mais detalhes.

---

Feito com :red_heart: by [Miguel Preto](https://github.com/yMiguelzin)
