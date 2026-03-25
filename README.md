# 📝 Task Management System

A simple and efficient **Task Management System** built with Laravel and MySQL. This system allows admins and users to manage tasks with role-based access.

---

## 🚀 Features

### 👨‍💼 Admin

* Admin login
* Add new tasks
* View all tasks
* View pending tasks
* View all users

### 👤 User

* User login
* View assigned tasks
* Edit tasks

---

## ⚙️ Tech Stack

* PHP (Laravel Framework)
* MySQL Database
* Blade Template Engine
* HTML, CSS, JavaScript, Bootstrap

---

## 🗂️ Project Structure

* Admin Dashboard
* User Dashboard
* Task CRUD Operations
* Authentication System

---

## 🛠️ Installation Guide

### 1. Clone the Repository

```bash
git clone https://github.com/Mohamed-Akram-ARM/task-manager.git
cd task-management
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Setup Environment File

```bash
cp .env.example .env
```

### 4. Configure Database

Update your `.env` file:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=TaskManagement
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate App Key

```bash
php artisan key:generate
```

### 6. Run Migrations

```bash
php artisan migrate
```

### 7. Start the Server

```bash
php artisan serve
```

---

## 🔐 Authentication

* Role-based login system (Admin & User)
* Secure login functionality

---

## 📌 Task Details

* Each task is linked with a user (user_id)
* Tasks can be edited by users
* Admin can monitor all tasks and users

---



## 📈 Future Improvements

* Task filtering & search
* Email notifications
* API integration
* Pagination
* File attachments

---

## 🤝 Contributing

Feel free to fork this project and improve it.

---

## 📄 License

This project is open-source and available for learning purposes.

---

## 👨‍💻 Author

Your Name
GitHub: https://github.com/your-username
# 📝 Task Management System

A simple and efficient **Task Management System** built with Laravel and MySQL. This system allows admins and users to manage tasks with role-based access.

---

## 🚀 Features

### 👨‍💼 Admin

* Admin login
* Add new tasks
* View all tasks
* View pending tasks
* View all users

### 👤 User

* User login
* View assigned tasks
* Edit tasks

---

## ⚙️ Tech Stack

* PHP (Laravel Framework)
* MySQL Database
* Blade Template Engine
* HTML, CSS, JavaScript

---

## 🗂️ Project Structure

* Admin Dashboard
* User Dashboard
* Task CRUD Operations
* Authentication System

---

## 🛠️ Installation Guide

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/task-management.git
cd task-management
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Setup Environment File

```bash
cp .env.example .env
```

### 4. Configure Database

Update your `.env` file:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=TaskManagement
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate App Key

```bash
php artisan key:generate
```

### 6. Run Migrations

```bash
php artisan migrate
```

### 7. Start the Server

```bash
php artisan serve
```

---

## 🔐 Authentication

* Role-based login system (Admin & User)
* Secure login functionality

---

## 📌 Task Details

* Each task is linked with a user (user_id)
* Tasks can be edited by users
* Admin can monitor all tasks and users

---



## 📈 Future Improvements

* Task filtering & search
* Email notifications
* API integration
* Pagination
* File attachments

---


## 👨‍💻 Author

Mohamed Akram
GitHub: https://github.com/Mohamed-Akram-ARM