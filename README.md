# 🌟 Personal Portfolio Website

Portfolio website built using **Laravel** and **Tailwind CSS**, designed to showcase my profile, experiences, and projects in a clean, responsive, and modern layout.

---

## 🧭 Overview

This project is a **personal portfolio** built with Laravel’s MVC structure and styled with TailwindCSS for fast, responsive UI.  
It includes several main sections such as:

- 👤 **About Me** — brief introduction and background  
- 💼 **Experience** — work, volunteer, and organizational history  
- ⚙️ **Skills** — programming languages, frameworks, and tools  
- 📁 **Projects** — highlighted works with details and images  
- 📞 **Contact** — easy-to-use contact or social media links

---

## 🖼️ Live Preview


[![Website Preview](./preview.gif)]

---

## 🧩 Tech Stack

| Layer | Tools / Frameworks |
|-------|--------------------|
| **Frontend** | Tailwind CSS, Blade Templates |
| **Backend** | Laravel (PHP Framework) |
| **Server** | PHP Artisan (Local), optional deployment on Vercel / Render / 000webhost |
| **Version Control** | Git & GitHub |

---

## 🚀 Installation & Setup (Local)

Follow these steps to run the project on your local machine:

```bash
# 1. Clone the repository
git clone https://github.com/Rnvz/Profile.git

# 2. Go to project directory
cd Profile

# 3. Install PHP dependencies
composer install

# 4. Copy environment file
copy .env.example .env

# 5. Generate application key
php artisan key:generate

# 6. Run development server
php artisan serve
