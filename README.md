# 📌 Laravel 8 Multi-Auth Category Management (Interview Task)

A Laravel 8 based project implementing **multi-authentication (Admin & User)** and **N-level category management with tree view**, created as part of a Codebuddy interview task.

---

## 🚀 Features

### 🔐 Authentication
- Separate **Admin** and **User** login system  
- Redirect based on roles:
  - **Admin → Admin Dashboard**
  - **User → User Dashboard**
- Middleware protected routes  
- Custom isAdmin middleware  

### 🗂️ Category Management (CRUD)
- Admin can:
  - Create unlimited **N-level nested categories**
  - View categories in a **Tree View Structure**
  - Edit, Update, Delete categories
- Parent-child category relationship  
- Dynamic recursive tree rendering  

---

## 🛠️ Technology Stack

| Component | Version |
|----------|---------|
| Laravel | **8.x** |
| PHP | **7.3** (Compatible version) |
| MySQL | **5.7+** |
| Bootstrap | **4/5** |
| Composer | Latest |

---

## 📁 Database Setup

1. Create database:
   ```sql
   CREATE DATABASE task1_db;

2. Update .env file:
   DB_DATABASE=task1_db
   DB_USERNAME=root
   DB_PASSWORD=

# 💻 Task 1: Category Management System

This project implements a multi-auth system (Admin/User) with CRUD functionality for n-level nested categories, as required for the Codebuddy interview task.

---

## ▶️ Project Setup Instructions

Follow these steps to get the development environment running locally.

1.  **Clone the project:**
    ```bash
    git clone https://github.com/hritwik-lg/Codebuddy-.git
    cd task1
    ```

2.  **Install PHP dependencies (Composer):**
    ```bash
    composer install
    ```

3.  **Run Migrations and Seed Database:**
    *(This command will drop all tables, re-run migrations, and populate the database with test data.)*
    ```bash
    php artisan migrate:fresh --seed
    ```

4.  **Start the Development Server:**
    ```bash
    php artisan serve
    ```

5.  **Visit the Application:**
    Open your web browser and navigate to:
    `http://localhost:8000`

---

## 🔑 Login Credentials

The seeding process automatically creates two default accounts for testing.

### 🛡️ Admin Login

| Field | Value |
| :--- | :--- |
| **Email** | `admin@task1.com` |
| **Password** | `password` |
| **Dashboard URL** | `/admin/dashboard` |

### 👤 User Login

| Field | Value |
| :--- | :--- |
| **Email** | `karan@task1.com` |
| **Password** | `password` |
| **Dashboard URL** | `user/dashboard` |

---

## 📂 Seeder Information

The primary seeding command (`php artisan migrate:fresh --seed`) automatically executes the necessary seeders.

The seeders are responsible for creating:
* An **Admin User** (`admin@task1.com`)
* A **Regular User** (`karan@task1.com`)
* **Default sample categories** structured in a nested hierarchy.

**Run manually (if needed):**
```bash
php artisan db:seed

##🌳 Category Tree View Example
The default categories are seeded in the following structure:

Category 1
 ├── Category 1-1
 │     ├── Category 1-1-1
 │     └── Category 1-1-2
 └── Category 1-2

Category 2
 ├── Category 2-1
 └── Category 2-2

##✔️ Completed Requirements
This project fulfills the following requirements specified in the interview task:

✅ Multi Auth implementation for Admin and Regular Users.

✅ Role-based Redirection upon login.

✅ Admin CRUD functionality for managing categories.

✅ Supports N-level nested categories using the Adjacency List (parent_id) database design.

✅ Tree view representation of the category hierarchy on the Admin dashboard.

✅ Bootstrap-based UI for responsiveness and styling.

✅ Compatibility with Laravel 8 and PHP 7.3+.

✅ Includes a Seeder to populate the database with necessary test data.

##📜 License
This project is developed solely for the Codebuddy interview assignment and is not intended for commercial use or distribution.
