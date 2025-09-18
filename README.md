<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Manajemen Produk

Aplikasi web sederhana untuk manajemen produk (CRUD - Create, Read, Update, Delete) yang dibangun dengan Laravel.

## Tentang Project

Proyek ini adalah aplikasi **Product Management** yang memungkinkan pengguna untuk mengelola daftar produk. Pengguna dapat menambah, melihat, mengedit, dan menghapus produk dari daftar. Aplikasi ini dibuat sebagai contoh dasar penggunaan framework Laravel untuk operasi CRUD.

### Dibangun Dengan

  * **[Laravel](https://laravel.com/)**: Framework aplikasi web dengan sintaks yang ekspresif dan elegan.
  * **[Vite](https://vitejs.dev/)**: Alat build frontend modern.
  * **[Tailwind CSS](https://tailwindcss.com/)**: Kerangka kerja CSS untuk desain yang cepat dan modern.
  * **[MySQL](https://www.mysql.com/)**: Sistem manajemen basis data relasional open-source.

## Memulai

Untuk menjalankan proyek ini di lingkungan lokal Anda, ikuti langkah-langkah di bawah ini.

### Prasyarat

Pastikan Anda memiliki perangkat lunak berikut yang terinstal di sistem Anda:

  * PHP 8.2 atau lebih tinggi
  * Composer
  * Node.js & NPM
  * MySQL

### Instalasi

1.  **Clone repositori**

    ```sh
    git clone https://your-repository-url/product-management.git
    cd product_management
    ```

2.  **Instal dependensi Composer**

    ```sh
    composer install
    ```

3.  **Instal dependensi NPM**

    ```sh
    npm install
    ```

4.  **Buat file `.env`**
    Salin file `.env.example` menjadi `.env` baru.

    ```sh
    cp .env.example .env
    ```

5.  **Hasilkan kunci aplikasi**

    ```sh
    php artisan key:generate
    ```

6.  **Konfigurasi Database**

      * Buat database baru di MySQL untuk aplikasi ini.
      * Buka file `.env` dan perbarui variabel koneksi database:
        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=nama_database_anda
        DB_USERNAME=user_database_anda
        DB_PASSWORD=password_anda
        ```

7.  **Jalankan migrasi dan seeder database**
    Ini akan membuat tabel `products` dan mengisinya dengan data awal.

    ```sh
    php artisan migrate --seed
    ```

8.  **Jalankan server pengembangan**

    ```sh
    php artisan serve
    ```

9.  **Compile aset frontend**
    Buka terminal baru dan jalankan perintah berikut untuk meng-compile aset dengan Vite.

    ```sh
    npm run dev
    ```

Sekarang, Anda dapat membuka aplikasi di `http://localhost:8000` di browser Anda.

## Penggunaan

Setelah aplikasi berjalan, Anda dapat melakukan operasi berikut:

  * **Melihat Daftar Produk**: Halaman utama menampilkan semua produk yang ada di database.
  * **Menambah Produk**: Klik tombol "Tambah Produk" untuk membuka formulir dan menambahkan produk baru.
  * **Mengedit Produk**: Klik tombol "Edit" pada setiap produk untuk memperbarui detailnya.
  * **Menghapus Produk**: Klik tombol "Hapus" pada setiap produk untuk menghapusnya dari database.
