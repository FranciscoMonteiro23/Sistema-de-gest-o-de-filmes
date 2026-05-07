 # 🎬 Cinema Digital - Sistema de Gestão de Filmes

---

## 📥 Instalação Completa (com GitHub)

# Clonar o repositório
git clone https://github.com/FranciscoMonteiro23/Sistema-de-gest-o-de-filmes.git

# Entrar na pasta do projeto
cd Sistema-de-gest-o-de-filmes

# Instalar dependências do Composer
composer install

# Copiar ficheiro de ambiente
cp .env.example .env

# Editar o ficheiro .env e configurar a base de dados:
# DB_DATABASE=cinema_a22405043
# DB_USERNAME=root
# DB_PASSWORD=

# Gerar chave da aplicação
php artisan key:generate

# Criar base de dados no MySQL (phpMyAdmin ou terminal MySQL)
CREATE DATABASE cinema_a22405043;

# Executar migrations para criar as tabelas
php artisan migrate

# Popular base de dados com dados de teste 
php artisan db:seed

# Iniciar servidor de desenvolvimento
php artisan serve

# Aceder à aplicação em: http://localhost:8000
```


## 🌐 URLs de Acesso
- **Homepage:** http://localhost:8000
- **Filmes:** http://localhost:8000/movies
- **Géneros:** http://localhost:8000/genres

---

## 🔑 Credenciais de Teste (se executaste seeders)
- **Email:** joao@teste.com | **Password:** password
- **Email:** maria@teste.com | **Password:** password
- **Email:** pedro@teste.com | **Password:** password

---

## 🗄️ Estrutura da Base de Dados

**genres:** id, name (varchar 100, único), description (text, nullable), timestamps

**movies:** id, title (varchar 255), director (varchar 255), genre_id (FK → genres, cascadeOnDelete), release_year (integer, nullable), available (boolean, default true), timestamps

**rentals:** id, movie_id (FK → movies, cascadeOnDelete), user_id (FK → users, restrictOnDelete), rental_date (date), return_date (date, nullable), returned (boolean, default false), timestamps

**Relações Eloquent:** Genre hasMany Movie | Movie belongsTo Genre | Movie hasMany Rental | Rental belongsTo Movie | Rental belongsTo User

---

## ✅ Funcionalidades 

**CRUD Filmes :** Listar, Criar (validação: title obrigatório max 255, director obrigatório, genre_id obrigatório exists:genres, release_year opcional numeric max ano atual, available boolean), Visualizar, Editar, Apagar

**CRUD Géneros :** Listar, Criar (validação: name obrigatório único max 100, description opcional), Editar, Apagar

**Migrations :** 3 tabelas (genres, movies, rentals) com FKs corretas | **Models (3v):** Genre, Movie, Rental com relações Eloquent e $fillable | **Configuração (2v):** Projeto Laravel funcional com BD configurada | **Código :** Organizado, boas práticas, README completo

**Seeders BÓNUS :** GenreSeeder (5 géneros: Ação, Comédia, Drama, Terror, Ficção Científica), UserSeeder (3 users: joao@teste.com, maria@teste.com, pedro@teste.com | password: password), MovieSeeder (5 filmes: Die Hard 1988, Superbad 2007, O Padrinho 1972, O Exorcista 1973, Blade Runner 1982)

---

## 📂 Estrutura de Ficheiros

**Controllers:** MovieController.php, GenreController.php (resource) | **Models:** Genre.php, Movie.php, Rental.php | **Views:** layouts/app.blade.php, movies/ (index, create, edit, show), genres/ (index, create, edit), welcome.blade.php | **Migrations:** create_genres_table, create_movies_table, create_rentals_table | **Seeders:** GenreSeeder, MovieSeeder, UserSeeder | **Routes:** web.php (resource routes)

---

## 🔗 Repositório GitHub

**Link:** https://github.com/FranciscoMonteiro23/Sistema-de-gest-o-de-filmes

---

## 🐛 Problemas Conhecidos

Nenhum. Aplicação 100% funcional.

---

## 🎓 Tecnologias

Laravel 11.x | PHP 8.2+ | MySQL 8.0 | Blade Templates | CSS3 | Git & GitHub


