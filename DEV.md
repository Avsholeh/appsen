### Kebutuhan Sistem

- Laravel v8
- PHP 7.4
- MySQL 8.0

### Kebutuhan Pengembangan

- VSCode

#### VSCode Plugins
- Auto Close Tag
- Auto Import
- Auto Rename Tag
- Git Graph
- Laravel Blade Snippets
- Laravel Blade Spacer
- Laravel Blade Formatter
- Laravel Goto
- PHP Intelephense
- PHP Namespace Resolver

### Skema Database

Aplikasi ini memiliki beberapa tabel dalam database untuk menyimpan data absensi karyawan. Berikut adalah skema database yang digunakan:

#### 1. Tabel Karyawan (karyawan)
Tabel ini berisi informasi tentang semua karyawan di perusahaan.
Kolom-kolom dalam tabel ini mencakup:
- `id`: ID unik untuk setiap karyawan (primary key).
- `nama`: Nama lengkap karyawan.
- `email`: Alamat email karyawan.
- `posisi`: Posisi atau jabatan karyawan.
- `departemen_id`: ID departemen karyawan bekerja (foreign key mengacu ke tabel Departemen).
- `created_at` dan `updated_at`: Tanggal pembuatan dan pembaruan data karyawan.

#### 2. Tabel Departemen (departemen)
Tabel ini berisi informasi tentang departemen-departemen di perusahaan.
Kolom-kolom dalam tabel ini mencakup:
- `id`: ID unik untuk setiap departemen (primary key).
- `nama`: Nama departemen.
- `deskripsi`: Deskripsi singkat tentang departemen.
- `created_at` dan `updated_at`: Tanggal pembuatan dan pembaruan data departemen.

#### 3. Tabel Absensi (absensi)
Tabel ini digunakan untuk mencatat absensi harian karyawan.
Kolom-kolom dalam tabel ini mencakup:
- `id`: ID unik untuk setiap entri absensi (primary key).
- `karyawan_id`: ID karyawan yang terkait dengan entri ini (foreign key mengacu ke tabel Karyawan).
- `tanggal`: Tanggal absensi.
- `jam_masuk`: Jam masuk karyawan.
- `jam_keluar`: Jam keluar karyawan.
- `keterangan`: Keterangan tambahan (misalnya, izin, sakit, libur, dll.).
- `created_at` dan `updated_at`: Tanggal pembuatan dan pembaruan data absensi.

#### 4. Tabel Izin (izin)
Tabel ini digunakan untuk mencatat permintaan izin karyawan.
Kolom-kolom dalam tabel ini mencakup:
- `id`: ID unik untuk setiap permintaan izin (primary key).
- `karyawan_id`: ID karyawan yang mengajukan permintaan izin (foreign key mengacu ke tabel Karyawan).
- `tanggal_mulai`: Tanggal mulai izin.
- `tanggal_selesai`: Tanggal selesai izin.
- `alasan`: Alasan permintaan izin.
- `status`: Status permintaan izin (misalnya, diajukan, disetujui, ditolak, dll.).
- `created_at` dan `updated_at`: Tanggal pembuatan dan pembaruan data permintaan izin.

#### 5. Tabel User (users)
Tabel ini berisi informasi tentang pengguna yang memiliki akses ke aplikasi.
Kolom-kolom dalam tabel ini mencakup:
- `id`: ID unik untuk setiap pengguna (primary key).
- `nama_pengguna`: Nama pengguna untuk masuk ke aplikasi.
- `email`: Alamat email pengguna.
- `password`: Password pengguna (di-hash).
- `karyawan_id`: ID karyawan terkait (foreign key mengacu ke tabel Karyawan).
- `created_at` dan `updated_at`: Tanggal pembuatan dan pembaruan data pengguna.

### Daftar Tugas Pengembangan

Berikut adalah daftar tugas pengembangan yang perlu dilakukan untuk membangun aplikasi Absensi Karyawan ini:

Keterangan: [❌] Belum dikerjakan [✔️] Sudah dikerjakan

#### 1. Pengaturan Awal
- [✔️] Buat proyek Laravel baru.
- [✔️] Konfigurasi koneksi database.
- [❌] Instalasi dan konfigurasi Laravel Authentication.

#### 2. Membuat Model dan Database Migration
- [❌] Buat model `Karyawan` dengan migration.
- [❌] Buat model `Departemen` dengan migration.
- [❌] Buat model `Absensi` dengan migration.
- [❌] Buat model `Izin` dengan migration.
- [❌] Buat model `User` dengan migration.

#### 2. Membuat Factory dan Seeder
- [❌] Buat factory dan seeder `Karyawan`.
- [❌] Buat factory dan seeder `Departemen`.
- [❌] Buat factory dan seeder `Absensi`.
- [❌] Buat factory dan seeder `Izin`.
- [❌] Buat factory dan seeder `User`.

#### 3. Membuat CRUD
- [❌] Buat CRUD pada `KaryawanController`.
- [❌] Buat CRUD pada `DepartemenController`.
- [❌] Buat CRUD pada `AbsensiController`.
- [❌] Buat CRUD pada `IzinController`.
- [❌] Buat CRUD pada `UserController`.

#### 5. Membuat View
- [❌] Buat tampilan dashboard
- [❌] Buat tampilan profil pengguna.
- [❌] Buat tampilan CRUD karyawan.
- [❌] Buat tampilan CRUD departemen.
- [❌] Buat tampilan CRUD absensi.
- [❌] Buat tampilan CRUD izin.
- [❌] Buat tampilan CRUD users.

#### 4. Membuat Routing
- [❌] Definisikan rute untuk dashboard.
- [❌] Definisikan rute untuk profil pengguna.
- [❌] Definisikan rute untuk CRUD karyawan.
- [❌] Definisikan rute untuk CRUD departemen.
- [❌] Definisikan rute untuk CRUD absensi.
- [❌] Definisikan rute untuk CRUD izin.

#### 6. Pengembangan Logika Bisnis
- [❌] Implementasikan logika untuk mencatat absensi karyawan.
- [❌] Implementasikan logika untuk mengajukan izin.
- [❌] Buat laporan absensi karyawan.
- [❌] Buat fitur pengelolaan data karyawan dan departemen.

#### 7. Pengujian
- [❌] Buat unit test untuk model dan controller.
- [❌] Uji semua fitur aplikasi.

#### 9. Dokumentasi
- [❌] Buat dokumentasi lengkap untuk pengguna aplikasi.
- [❌] Buat dokumentasi untuk pengembang (README).

Pastikan untuk memprioritaskan tugas-tugas ini sesuai dengan kebutuhan proyek dan waktu yang tersedia. Semua tugas harus diuji dengan baik sebelum meluncurkan aplikasi ke produksi.