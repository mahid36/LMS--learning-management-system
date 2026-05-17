# 🎓 LMS — Learning Management System

![GitHub repo size](https://img.shields.io/github/repo-size/mahid36/LMS--learning-management-system?style=for-the-badge)
![GitHub stars](https://img.shields.io/github/stars/mahid36/LMS--learning-management-system?style=for-the-badge)
![GitHub forks](https://img.shields.io/github/forks/mahid36/LMS--learning-management-system?style=for-the-badge)

> A web-based Learning Management System for managing courses, students, instructors, and assessments efficiently. Built with Laravel for scalable and interactive e-learning experiences.

---

## 📸 Screenshots

### 🏠 Homepage
![Homepage](screenshots/home.png)

### 🎓 Student Dashboard
![Dashboard](screenshots/dashboard.png)

### 📚 Course List
![Courses](screenshots/courses.png)

### 👤 Edit Profile
![Edit Profile](screenshots/edit_profile.png)

### 👤 Edit Profile
![Edit Profile](screenshots/biling_history.png)

---

## ✨ Features

### 👨‍🎓 Student Panel
- ✅ Student Registration & Login
- ✅ Custom Student Guard Authentication
- ✅ Student Dashboard
- ✅ Profile Update (Name, Email, Username, Phone, Location, Education)
- ✅ Profile Picture Upload
- ✅ Password Update with Current Password Verification
- ✅ My Courses List with Progress Bar
- ✅ Payment Info / Billing History
- ✅ Wishlist
- ✅ Course Resume

### 📚 Course Management
- ✅ Course Browsing
- ✅ Course Details
- ✅ Course Progress Tracking
- ✅ Quiz System

### 🔐 Authentication & Security
- ✅ Custom Guard for Student
- ✅ Middleware Protected Routes
- ✅ Password Hashing with bcrypt
- ✅ Session Management
- ✅ Form Validation with Error Messages

---

## 🛠️ Tech Stack

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

---

## ⚙️ Installation

```bash
# Repository clone করুন
git clone https://github.com/mahid36/LMS--learning-management-system.git

# Project folder এ যান
cd LMS--learning-management-system

# Dependencies install করুন
composer install
npm install

# .env file setup করুন
cp .env.example .env
php artisan key:generate

# Database migrate করুন
php artisan migrate

# Server run করুন
php artisan serve
```

---

## 🗂️ Project Structure

```
├── app/
│   ├── Http/Controllers/
│   ├── Models/
│       ├── Student.php
├── resources/
│   ├── views/
│   │   ├── frontend/
│   │   │   ├── student/
│   │   │   │   ├── dashboard.blade.php
│   │   │   │   ├── edit-profile.blade.php
│   │   │   │   ├── course-list.blade.php
├── routes/
│   ├── web.php
├── screenshots/
└── README.md
```

---

## 🤝 Contributing

Pull requests are welcome! For major changes, please open an issue first.

---

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---

## 👨‍💻 Author

**Mahid**
[![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/mahid36)
