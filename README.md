## Appsen (Absensi Karyawan)

![Appsen](public/images/appsen.png)

### Pendahuluan

Appsen adalah aplikasi absensi karyawan yang dibangun menggunakan Laravel. Aplikasi ini berguna untuk membantu perusahaan dalam melacak dan mengelola absensi karyawan mereka dengan efisien.

### Fitur Aplikasi

Aplikasi ini memungkinkan pengguna untuk:
- Melihat daftar karyawan dan informasi mereka.
- Mencatat absensi harian karyawan.
- Mengajukan permintaan izin.
- Melihat laporan absensi dan izin karyawan.
- Mengelola data karyawan, departemen, dan pengguna.

### Instalasi

#### 1. Klon repositori
```
git clone https://github.com/avsholeh/appsen.git
```

#### 2. Install dependensi proyek
```
cd appsen
```
```php
composer install
```

#### 3. Konfigurasi database
Buat database dengan nama ```appsen```, kemudian perbarui file ```.env``` seperti berikut.
```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=appsen
DB_USERNAME=root
DB_PASSWORD=
```

#### 5. Menjalankan migration
```
php artisan migrate --seed
```

#### 4. Menjalankan server pengembangan lokal 
```
php artisan serve
```

#### 5. Authentication
```
Email   : admin@admin.com
Pass    : admin
```

### Kontributor

#### Muhammad Sholeh
[![Contributor](https://img.shields.io/badge/Contributor-avsholeh-blue?style=flat-square&logo=github)](https://github.com/avsholeh)

#### Rizki Julianto
[![Contributor](https://img.shields.io/badge/Contributor-darks07-blue?style=flat-square&logo=github)](https://github.com/darks07)
