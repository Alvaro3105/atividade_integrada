# 🧩 API REST de Questões em Laravel

Projeto acadêmico desenvolvido em **Laravel** para praticar a construção de uma API REST com operações de CRUD.

O foco do projeto é o gerenciamento da entidade **Questão**, utilizando rotas HTTP e organização típica de uma aplicação Laravel.

## 🚀 Funcionalidades

A API permite:

- listar questões;
- consultar uma questão por ID;
- cadastrar novas questões;
- atualizar questões;
- excluir questões.

## 🛠️ Tecnologias

- PHP
- Laravel
- MySQL
- API REST
- MVC
- Git e GitHub

## 🔗 Endpoints

| Método | Rota | Ação |
|---|---|---|
| GET | `/api/questoes` | Lista todas as questões |
| GET | `/api/questoes/{id}` | Busca uma questão |
| POST | `/api/questoes` | Cadastra uma questão |
| PUT | `/api/questoes/{id}` | Atualiza uma questão |
| PATCH | `/api/questoes/{id}` | Atualiza parcialmente uma questão |
| DELETE | `/api/questoes/{id}` | Exclui uma questão |

## 📂 Estrutura utilizada

O projeto segue a organização do Laravel, com destaque para:

- **Controller** para receber e processar as requisições;
- **Model** para representar a entidade;
- **Migrations** para estrutura do banco de dados;
- **Routes** para definição dos endpoints da API.

## ▶️ Como executar

```bash
git clone https://github.com/Alvaro3105/atividade_integrada.git
cd atividade_integrada
composer install
cp .env.example .env
php artisan key:generate
```

Configure a conexão com o banco de dados no arquivo `.env` e depois execute:

```bash
php artisan migrate
php artisan serve
```

A API poderá ser acessada pelas rotas em `/api/questoes`.

## 🎓 Contexto

Projeto acadêmico desenvolvido durante minha formação técnica em TI no COTEMIG para praticar Laravel, APIs REST, arquitetura MVC e persistência de dados.

---

**Álvaro Pires de Souza**  
[GitHub](https://github.com/Alvaro3105) • [LinkedIn](https://www.linkedin.com/in/alvaro-pires-de-souza/)
