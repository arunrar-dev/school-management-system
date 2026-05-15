# Residential School ERP (Core PHP)

A Residential School Management System (Boarding School ERP) built using **Core PHP** with **Composer autoloading**.

---

## Goals
- Clean modular architecture (MVC + Services + Repositories)
- Secure authentication + RBAC
- Hostel management + roll calls + outpass system
- Fees + exams + attendance + reports

---

## Tech Stack
- PHP 8.2+
- PostgreSQL (recommended)
- Composer (autoloading)
- PDO database layer
- Custom Router + Middleware system

---

## Architecture Overview

This project follows a clean layered approach:

### Presentation Layer
- Controllers (handle HTTP request/response)
- Views (PHP templates)

### Application Layer
- Services (business logic)
- Validators (input validation)

### Data Layer
- Repositories (database access abstraction)
- Query Builder (PDO wrapper)

### Core Framework Layer
- Router + Route Dispatcher
- Middleware (Auth, CSRF, Role)
- Session + Flash messages
- Error handling and exception pages

---

## Folder Structure
```txt
public/         -> entry point (index.php), assets
src/            -> application + core framework code
routes/         -> route definitions
config/         -> config files (app, database, auth)
resources/      -> views, templates, language files
storage/        -> logs, cache, uploads
database/       -> migrations + seeds
bin/            -> CLI tools (migrate, seed, scaffolding)
tests/          -> unit + feature tests
```

---

## Status
In development (micro-commit roadmap in progress) 

---
Author: Arun Rar