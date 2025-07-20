# 📝 PHP Mini Blog

![PHP](https://img.shields.io/badge/PHP-7.4+-777bb4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-00758f?style=for-the-badge&logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)
![Status](https://img.shields.io/badge/Project-Active-success?style=for-the-badge)

> A lightweight, secure, and beginner-friendly **PHP + MySQL** blogging system that supports full CRUD functionality with admin login and session-based protection. Perfect for learning core backend development concepts.

---

## ⚙️ Features

✅ Create, Read, Update, Delete blog posts  
✅ Admin-only access to dashboard (session-based login)  
✅ Password hashing with `password_hash()`  
✅ SQL injection protection using `mysqli_real_escape_string()`  
✅ Clean UI and code, beginner-friendly structure  
✅ Scalable for adding comments, rich text editors, and more

---

## 💻 Tech Stack

| Technology | Use |
|------------|-----|
| **PHP** | Core scripting logic |
| **MySQL** | Data storage |
| **HTML/CSS** | Frontend layout |
| **Sessions** | Login/auth management |
| **Password Hashing** | Secure password handling |

---

## 🧠 How It Works

- The **frontend** (index.php) fetches all posts from the DB.
- Clicking a post takes you to `post.php` to read full content.
- Admin logs in via `login.php` → session starts.
- Admin can access `admin/index.php` to manage posts.
- Add/Edit/Delete done via respective admin pages.
- Protected with `auth_check.php` for session validation.

---

## 🛠️ Setup Guide

1. **Clone the Repo**

```bash
git clone https://github.com/Aditya-9944/php-mini-blog.git
cd php-mini-blog
