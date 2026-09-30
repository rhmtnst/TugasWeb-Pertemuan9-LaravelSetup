# Tugas Web Pertemuan 9 — Laravel Setup

## Identitas

**Nama:** Rahmat Hamonangan Nasution  
**NIM:** 4253250053
**Kelas:** PSIK 25B
**Program Studi:** Ilmu Komputer  
**Mata Kuliah:** Pemrograman Web  

## Deskripsi

Project ini dibuat untuk memenuhi Tugas Rutin Pertemuan 9 pada mata kuliah Pemrograman Web.

Project menggunakan Laravel untuk mempelajari dasar-dasar MVC, routing, Blade View, Controller, Model, Migration, dan koneksi database MySQL.

## Teknologi

- Laravel 13
- PHP 8.3
- Composer
- MySQL
- Laragon
- Blade
- Visual Studio Code

## Fitur dan Route

| Route | Fungsi |
|---|---|
| `/` | Halaman Home dengan data dinamis |
| `/about` | Halaman About |
| `/contact` | Halaman Contact |
| `/hello/{nama}` | Menampilkan nama secara dinamis |
| `/students` | Menampilkan data mahasiswa dari database |

## Dynamic Data

Halaman Home menggunakan data dari array yang dikirim melalui route:

- Nama: Rahmat
- Mata Kuliah: Pemrograman Web

Data tersebut ditampilkan menggunakan Blade `@foreach`.

## Database

Nama database:

`tugasweb_p9`

Tabel yang digunakan:

- users
- cache
- jobs
- students

### Tabel Students

Field:

- id
- name
- nim
- major
- created_at
- updated_at

## Struktur Folder Laravel

```text
TugasWeb-P9-LaravelSetup/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── StudentController.php
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
├── resources/
│   └── views/
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── contact.blade.php
│       ├── hello.blade.php
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

Cara Menjalankan Project
1. Clone atau masuk ke folder project
cd TugasWeb-P9-LaravelSetup
2. Install dependency
composer install
3. Konfigurasi database

Buat database MySQL dengan nama:

tugasweb_p9

Kemudian sesuaikan konfigurasi .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tugasweb_p9
DB_USERNAME=root
DB_PASSWORD=
4. Generate application key
php artisan key:generate
5. Jalankan migration
php artisan migrate
6. Jalankan Laravel
php artisan serve

Kemudian buka:

http://127.0.0.1:8000
Pengujian Route

Halaman yang dapat diakses:

/
 /about
 /contact
 /hello/Rahmat
 /students
 
Kesimpulan

Project Laravel berhasil dibuat dan dijalankan. Project telah menerapkan routing, Blade View, data dinamis menggunakan array, route parameter, Controller, Model, Migration, serta koneksi database MySQL.