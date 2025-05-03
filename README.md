# 📰 وب‌سایت خبری با Laravel

[![Build Status](https://img.shields.io/badge/build-passing-brightgreen)](https://github.com/MansourLiaghat/blog-web-app)  
[![License](https://img.shields.io/badge/license-MIT-blue)](LICENSE)  
[![Version](https://img.shields.io/badge/version-1.0.0-blue)](https://github.com/MansourLiaghat/blog-web-app/releases)

> 📌 **توجه:**  
> این پروژه در حال حاضر در مرحله توسعه فعال قرار دارد و نسخه نهایی هنوز منتشر نشده است.

این پروژه یک وب‌سایت خبری ساده است که با استفاده از فریم‌ورک Laravel توسعه یافته است. هدف اصلی این پروژه، تمرین و یادگیری مفاهیم مختلف Laravel از جمله مسیریابی، کنترلرها، مدل‌ها، ویوها و تعامل با پایگاه داده است.

## 📚 فهرست مطالب

- [ویژگی‌ها](#-ویژگیها)
- [پیش‌نیازها](#-پیشنیازها)
- [نصب و راه‌اندازی](#-نصب-و-راهاندازی)
- [نحوه استفاده](#-نحوه-استفاده)
- [ساختار پروژه](#-ساختار-پروژه)
- [مجوز](#-مجوز)
- [اطلاعات تماس](#-اطلاعات-تماس)
- [تشکر و قدردانی](#-تشکر-و-قدردانی)

## ✨ ویژگی‌ها

- نمایش لیست اخبار با استفاده از پایگاه داده  
- مشاهده جزئیات هر خبر  
- افزودن، ویرایش و حذف اخبار (CRUD)  
- استفاده از Blade برای قالب‌بندی صفحات  
- طراحی واکنش‌گرا با استفاده از Tailwind CSS  
- ساختار ماژولار و قابل توسعه  

## ⚙️ پیش‌نیازها

- PHP نسخه 8.0 یا بالاتر  
- Composer  
- MySQL یا PostgreSQL  
- Node.js و NPM  
- Laravel نسخه 9 یا بالاتر  

## 🚀 نصب و راه‌اندازی

```bash
git clone https://github.com/MansourLiaghat/blog-web-app.git
cd blog-web-app

composer install

cp .env.example .env
php artisan key:generate

# ویرایش اطلاعات دیتابیس در فایل .env

php artisan migrate

npm install
npm run dev

php artisan serve
```

اکنون پروژه در آدرس `http://localhost:8000` در دسترس است.

## 🧪 نحوه استفاده

- دسترسی به صفحه اصلی برای مشاهده لیست اخبار  
- کلیک بر روی هر خبر برای مشاهده جزئیات آن  
- استفاده از فرم‌ها برای افزودن، ویرایش یا حذف اخبار  

## 📁 ساختار پروژه

```
blog-web-app/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
├── package.json
└── README.md
```

## 📄 مجوز

این پروژه تحت مجوز MIT منتشر شده است. برای اطلاعات بیشتر، فایل [LICENSE](LICENSE) را مشاهده کنید.

## 📬 اطلاعات تماس

- GitHub: [MansourLiaghat](https://github.com/MansourLiaghat)

## 🙏 تشکر و قدردانی

از استاد گرامی، **مهندس وحید صالحی**  
[@vahid-salehi](https://github.com/vahid-salehi)  
به‌خاطر آموزش‌های مفید، راهنمایی‌های کاربردی و نقش مؤثر ایشان در روند یادگیری و توسعه این پروژه، صمیمانه سپاسگزارم.
