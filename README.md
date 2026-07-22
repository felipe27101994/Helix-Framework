# 🧬 Helix Framework

> **Entenda como um framework funciona, construindo um.**

O **Helix Framework** é um projeto open source desenvolvido em PHP com o objetivo de estudar arquitetura de software e compreender, na prática, como frameworks modernos funcionam internamente.

> **Status:** 🚧 Em desenvolvimento

---

## Objetivo

O Helix não tem como objetivo competir com frameworks consolidados como Laravel ou Symfony.

Este projeto foi criado para aprofundar conhecimentos em desenvolvimento backend, explorando conceitos como:

* Arquitetura MVC
* Roteamento
* Controllers
* Sistema de Views
* Injeção de Dependências
* Middleware
* ORM
* Migrations
* CLI

Todo o desenvolvimento é realizado de forma incremental, com commits organizados e documentação da evolução do projeto.

---

## Funcionalidades implementadas

Atualmente o Helix já possui:

* Front Controller (`public/index.php`)
* Bootstrap da aplicação
* Sistema de roteamento (`GET` e `POST`)
* Arquivo dedicado para registro de rotas (`routes/web.php`)
* Resolução automática de Controllers
* Sistema básico de Views
* Classes base `Controller` e `View`
* Estrutura inicial do Core

---

## Roadmap

* [x] Estrutura inicial
* [x] Composer
* [x] Configuração do Apache (.htaccess)
* [x] Bootstrap da aplicação
* [x] Router
* [x] Controller
* [x] Sistema básico de Views

---

## Requisitos

* PHP 8.2 ou superior
* Composer

---

## Licença

Este projeto está licenciado sob a licença MIT.