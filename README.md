# API REST de Questões em Laravel

Projeto acadêmico desenvolvido em **Laravel** para praticar construção de APIs REST, validação, persistência com Eloquent e relacionamento entre questões e temas.

## Funcionalidades

A API permite:

- listar questões;
- consultar uma questão por ID;
- cadastrar novas questões;
- atualizar questões com `PUT` ou `PATCH`;
- excluir questões;
- validar a existência do tema associado;
- preparar um tema inicial por seeder para facilitar testes locais.

## Tecnologias

- PHP
- Laravel 11
- Eloquent ORM
- MySQL ou SQLite
- PHPUnit
- Git e GitHub

## Endpoints

| Método | Rota | Ação |
|---|---|---|
| GET | `/api/questoes` | Lista todas as questões |
| GET | `/api/questoes/{id}` | Busca uma questão por ID |
| POST | `/api/questoes` | Cadastra uma questão |
| PUT | `/api/questoes/{id}` | Atualiza uma questão |
| PATCH | `/api/questoes/{id}` | Atualiza parcialmente |
| DELETE | `/api/questoes/{id}` | Exclui uma questão |

## Exemplo de payload

```json
{
  "enunciado": "Quanto é 2 + 2?",
  "alternativa_correta": "A",
  "id_tema": 1
}
```

O campo `id_tema` precisa apontar para um tema existente. O projeto inclui uma migration para a tabela `tema` e um registro inicial criado pelo seeder.

## Como executar

```bash
git clone https://github.com/Alvaro3105/atividade_integrada.git
cd atividade_integrada
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

No Windows CMD, caso `cp` não esteja disponível:

```cmd
copy .env.example .env
```

Por padrão, o `.env.example` utiliza SQLite. Para MySQL, configure `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` e `DB_PASSWORD` no `.env`.

## Testes

O projeto possui teste de integração para o fluxo CRUD de questões e para a validação de tema inexistente.

```bash
php artisan test
```

O ambiente de testes utiliza SQLite em memória, conforme `phpunit.xml`.

## Estrutura principal

```text
app/
├── Http/Controllers/QuestaoController.php
└── Models/Questao.php

database/
├── migrations/
│   ├── ...create_tema_table.php
│   └── ...create_questao_table.php
└── seeders/DatabaseSeeder.php

routes/api.php
tests/Feature/QuestaoApiTest.php
```

## Contexto

Projeto acadêmico desenvolvido durante minha formação técnica em TI no COTEMIG para praticar Laravel, APIs REST, MVC, validação de requisições, migrations e persistência de dados.

## Autor

**Álvaro Pires de Souza**

- GitHub: https://github.com/Alvaro3105
- LinkedIn: https://www.linkedin.com/in/alvaro-pires-de-souza/
- Portfólio: https://alvaro3105.github.io/Portfolio/
