# Tugas Web Pertemuan 9 — Laravel Setup

## 👤 Identitas

- **Nama:** Rahmat Hamonangan Nasution
- **NIM:** 4253250053
- **Universitas:** Universitas Negeri Medan
- **Mata Kuliah:** Pemrograman Web
- **Pertemuan:** 9
- **Project:** Laravel Setup

---

## 📌 Deskripsi

Tugas Web Pertemuan 9 merupakan implementasi dasar framework Laravel dengan menerapkan konsep MVC (Model-View-Controller), routing, Blade View, database, serta penggunaan Artisan.

Project ini dibuat menggunakan Laravel dan dijalankan menggunakan `php artisan serve`.

---

## 🎯 Tujuan

Project ini bertujuan untuk memahami dasar penggunaan Laravel, meliputi:

- Instalasi Laravel menggunakan Composer
- Konfigurasi database melalui file `.env`
- Menjalankan aplikasi menggunakan Laravel Artisan
- Membuat route sederhana
- Membuat Blade View
- Menampilkan data dinamis dari route ke View
- Membuat Controller menggunakan Artisan
- Membuat Model dan Migration menggunakan Artisan
- Menerapkan konsep dasar MVC

---

## 🛠️ Teknologi yang Digunakan

- PHP
- Laravel
- Composer
- MySQL
- Laragon
- Blade Template
- Artisan CLI
- Visual Studio Code

---

## ✅ Implementasi Tugas

### 1. Instalasi Laravel

Project dibuat menggunakan Composer dengan perintah:

`composer create-project laravel/laravel TugasWeb-P9-LaravelSetup`

Kemudian masuk ke folder project:

`cd TugasWeb-P9-LaravelSetup`

### 2. Konfigurasi Database

Database yang digunakan adalah MySQL dengan nama:

`tugasweb_p9`

Konfigurasi database dilakukan melalui file `.env`.

- `DB_CONNECTION=mysql`
- `DB_HOST=127.0.0.1`
- `DB_PORT=3306`
- `DB_DATABASE=tugasweb_p9`
- `DB_USERNAME=root`
- `DB_PASSWORD=`

### 3. Menjalankan Laravel

Aplikasi dijalankan menggunakan:

`php artisan serve`

Aplikasi dapat diakses melalui:

`http://127.0.0.1:8000`

---

## 🌐 Routing

Route dibuat pada file `routes/web.php`.

Route yang tersedia:

| Route | Fungsi |
|---|---|
| `/` | Halaman utama |
| `/about` | Halaman About |
| `/contact` | Halaman Contact |
| `/hello/{nama}` | Menampilkan nama berdasarkan parameter |
| `/students` | Halaman Students |

---

## 🏠 Halaman Utama

Halaman utama menampilkan data dinamis yang dikirim dari route menuju Blade View.

Data yang ditampilkan meliputi:

- Nama
- Pesan sambutan
- Mata kuliah

Data dinamis ditampilkan menggunakan Blade seperti `{{ $name }}` dan perulangan `@foreach`.

---

## 👤 Controller

Controller dibuat menggunakan Artisan:

`php artisan make:controller StudentController`

Controller digunakan untuk menangani proses aplikasi sebelum diteruskan ke View.

---

## 🗃️ Model dan Migration

Model dan migration dibuat menggunakan Artisan:

`php artisan make:model Student -m`

Perintah tersebut menghasilkan:

- Model `Student`
- File Migration untuk tabel `students`

Pembuatan Controller, Model, dan Migration digunakan untuk menerapkan konsep dasar MVC Laravel.

---

## 🧩 Struktur Folder

    TugasWeb-P9-LaravelSetup/
    │
    ├── app/
    │   ├── Http/
    │   │   └── Controllers/
    │   │       └── StudentController.php
    │   │
    │   └── Models/
    │       └── Student.php
    │
    ├── bootstrap/
    ├── config/
    │
    ├── database/
    │   ├── migrations/
    │   ├── factories/
    │   └── seeders/
    │
    ├── public/
    │
    ├── resources/
    │   └── views/
    │       ├── welcome.blade.php
    │       ├── about.blade.php
    │       ├── contact.blade.php
    │       └── students.blade.php
    │
    ├── routes/
    │   └── web.php
    │
    ├── storage/
    ├── tests/
    ├── .env
    ├── artisan
    ├── composer.json
    └── README.md

---

## 🔄 Konsep MVC

Alur sederhana aplikasi Laravel:

**User → Route → Controller → Model → Database → View (Blade) → Browser**

MVC digunakan untuk memisahkan tanggung jawab routing, logika aplikasi, pengolahan data, dan tampilan.

---

## ⭐ Bonus

Project juga menerapkan route parameter:

`/hello/{nama}`

Contoh:

`http://127.0.0.1:8000/hello/Rahmat`

Route tersebut menampilkan nama berdasarkan parameter yang diberikan melalui URL.

---

## 📸 Dokumentasi Tampilan

### 1. Laravel Artisan Serve

Server Laravel dijalankan menggunakan `php artisan serve`.



<img width="1366" height="768" alt="Screenshot (366)" src="https://github.com/user-attachments/assets/4b95a3d3-9a5c-49ad-8dcb-abb80e9152b7" />


---

### 2. Halaman Utama

URL: `http://127.0.0.1:8000`

Halaman utama menampilkan nama, pesan sambutan, mata kuliah, dan navigasi halaman.


<img width="1365" height="653" alt="Screenshot 2026-10-08 150243" src="https://github.com/user-attachments/assets/b8d25dbe-4cac-4a67-a6c2-ed638f0782f4" />


---

### 3. Halaman About

URL: `http://127.0.0.1:8000/about`

<img width="1366" height="768" alt="Screenshot (370)" src="https://github.com/user-attachments/assets/0fee6715-6059-4226-a6b3-b69bd8a9e54f" />

---

### 4. Halaman Contact

URL: `http://127.0.0.1:8000/contact`

<img width="1366" height="768" alt="Screenshot (370)" src="https://github.com/user-attachments/assets/0fee6715-6059-4226-a6b3-b69bd8a9e54f" />


---

### 5. Route Parameter

URL: `http://127.0.0.1:8000/hello/Rahmat`

Route ini merupakan implementasi bonus route parameter.

<img width="1366" height="768" alt="Screenshot (371)" src="https://github.com/user-attachments/assets/61accc5c-2da8-4114-bde3-9f9a6938dd93" />

---

### 6. Halaman Students

URL: `http://127.0.0.1:8000/students`

Menampilkan halaman Students pada project.

<img width="1366" height="768" alt="Screenshot (372)" src="https://github.com/user-attachments/assets/1f35906d-7588-4ed9-a1c1-5a93d4bc6a44" />


---

## ▶️ Cara Menjalankan Project

1. Pastikan Laragon/Apache dan MySQL sudah aktif.
2. Clone repository:

`git clone https://github.com/rhmtnst/TugasWeb-Pertemuan9-LaravelSetup.git`

3. Masuk ke folder project:

`cd TugasWeb-Pertemuan9-LaravelSetup`

4. Install dependency:

`composer install`

5. Siapkan file `.env`.

6. Konfigurasikan database:

`DB_DATABASE=tugasweb_p9`

`DB_USERNAME=root`

`DB_PASSWORD=`

7. Generate application key:

`php artisan key:generate`

8. Jalankan migration:

`php artisan migrate`

9. Jalankan server:

`php artisan serve`

10. Buka browser:

`http://127.0.0.1:8000`

---

## 📚 Kesimpulan

Tugas Web Pertemuan 9 telah menerapkan dasar framework Laravel mulai dari instalasi menggunakan Composer, konfigurasi database, menjalankan server dengan Artisan, membuat route, menampilkan Blade View dengan data dinamis, serta membuat Controller, Model, dan Migration.

Project ini menjadi dasar untuk memahami pengembangan aplikasi web menggunakan framework Laravel dan konsep MVC.

---

## 🔗 Repository

[GitHub — TugasWeb-Pertemuan9-LaravelSetup](https://github.com/rhmtnst/TugasWeb-Pertemuan9-LaravelSetup)
