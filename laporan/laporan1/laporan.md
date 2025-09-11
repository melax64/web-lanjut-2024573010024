# Laporan Modul 1: Perkenalan Laravel
**Mata Kuliah:** Workshop Web Lanjut   
**Nama:** Maila Aziza
**NIM:** 2024573010024
**Kelas:** TI 2C

---

## Abstrak 
Laporan ini membahas tentang pengertian, komponen utama, struktur folder dan file dalam laravel. Tujuan membuat laporan ini adalah untuk mengetahui MVC (Model View Controller), cara kerja, dan kelebihan laravel.

---

## 1. Pendahuluan
Laravel adalah framework web PHP yang populer, open source, yang aman. Framework web adalah kumpulan pustaka dan alat yang membantu pengembang membangun aplikasi lebih cepat. Laravel dibuat oleh Taylor Otwell pada tahun 2011 dan hingga kini menjadi salah satu framework PHP paling 
populer.

Laravel adalah framework PHP open-source yang dirancang untuk membuat pengembangan web menjadi lebih mudah dan cepat.

Karakteristik utamanya ada MVC (Model-View-Controller) yang membantu memisahkan logika aplikasi dari tampilan dan pengelolaan data. Arsitektur MVC membantu dalam memisahkan tanggung jawab di dalam aplikasi, membuat kode lebih terstruktur, mudah dipelihara, dan scalable. Dengan menggunakan MVC, pengembang dapat bekerja secara terpisah pada bagian-bagian yang berbeda dari aplikasi tanpa saling mengganggu sehingga meningkatkan efisiensi pengembangan.

Laravel sangat cocok untuk membangun berbagai jenis aplikasi web, mulai dari aplikasi sederhana hingga yang kompleks, seperti sistem e-commerce, CMS, platform blogging, portal lowongan kerja, aplikasi manajemen inventaris, hingga aplikasi internal perusahaan. Kemampuan Laravel dalam mengelola berbagai fitur, database, otentikasi, dan UI/UX menjadikannya pilihan serbaguna untuk berbagai proyek web. 

---

## 2. Komponen Utama Laravel 
- Blade (templating)
-> Template tampilan web dengan sintaks simpel dan include layout.

- Eloquent (ORM)
-> Fitur ORM (Object Relational Mapping) yang membuat interaksi dengan database jadi lebih mudah.

- Routing
-> Mekanisme untuk mengatur URL mengakses halaman tertentu di aplikasi. 

- Controllers
-> Tempat untuk mengatur logika aplikasi, dan mengolah data.

- Migrations & Seeders
-> Migration dipakai untuk membuat atau mengubah struktur table database, sedangkan seeder untuk mengisi data awal (dummy) ke table.

- Artisan CLI
-> Command line bawaan laravel untuk menjalankan perintah cepat, misal membuat controller, migration, dan menjalankan server lokal.

- Testing (PHPUnit)
-> Testing dipakai agar semua aplikasi berjalan lancar.

---

## 3. Penjelasan untuk setiap folder dan files yang ada didalam struktur sebuah project laravel.

### app/:
Berisi inti logika aplikasi, termasuk model, pengontrol, dan tampilan.

### bootstrap/:
Folder bootstrap berisi file app.php yang dimana akan dipakai oleh Laravel untuk boot setiap kali dijalankan.

### config/:
Untuk menyimpan file konfigurasi untuk berbagai pengaturan aplikasi, seperti database, pencatatan kesalahan, dan rute. File-file ini digunakan untuk menyesuaikan perilaku aplikasi tanpa mengubah kode sumber.

### database/:
Folder database berisi file migrasi dan seeder untuk mengelola skema database.

### public/:
Folder public memiliki file index.php yaitu entry point dari semua requests yang masuk/diterima ke aplikasi. Folder ini juga tempat menampung gambar, Javascript, dan CSS.

### resources/:
Folder resources menampung aset statis aplikasi Anda, seperti file CSS, JavaScript, dan tampilan Blade.

### routes/:
Folder routes berisi file rute yang menentukan bagaimana permintaan HTTP dipetakan ke metode pengontrol.

### storage/:
Folder storage digunakan untuk menyimpan file yang diunggah, file cache, dan file sesi.

### tests/:
Folder tests disediakan untuk menulis pengujian unit dan fitur untuk aplikasi Anda.

### vendor/:
Folder vendor berisi dependensi perpustakaan dan paket pihak ketiga yang digunakan oleh aplikasi Anda. Perpustakaan ini dimuat menggunakan Composer, pengelola dependensi PHP.

### Files
**.editorconfig**
Berguna untuk memberi IDE/text editor instruksi tentang standar coding Laravel seperti whitespace, besar identasi, dll.

**.env** dan **.env.example**
File .env menyimpan variabel lingkungan yang digunakan oleh aplikasi Anda. Variabel ini dapat digunakan untuk mengonfigurasi database, cache, dan pengaturan lainnya.

**.gitattributes** dan **.gitignore**
File konfigurasi git.

**artisan**
Memungkinkan anda untuk menjalankan perintah artisan dari command line.

**composer.json** dan **composer.lock**
File composer.json mendefinisikan dependensi paket dan versi yang diperlukan untuk aplikasi Anda. Digunakan oleh Composer untuk menginstal dan memperbarui dependensi.

**package.json**
Mirip-mirip dengan composer.json tapi untuk aset-aset dan dependencies front-end.

**phpunit.xml**
Sebuah file konfigurasi untuk PHPUnit, tools yang digunakan Laravel untuk testing.

**README.md**
Sebuah markdown file yang memberikan pengenalan dasar tentang Laravel.

**vite.config.js**
Sebuah tool untuk melakukan compile frontend.

---

## 4. Diagram MVC dan Cara kerjanya

![Diagram MVC][tampilkan_gambar]

[tampilkan_gambar]: gambar\MVC-Diagram.webp "gambar diagram mvc"

---

## 5. Kelebihan & Kekurangan 
- Kelebihan Laravel
Laravel sangat sangat membantu untuk membuat berbagai jenis aplikasi web.

- Hal yang mungkin menjadi tantangan bagi pemula
Hal yang mungkin menjadi tantangan bagi pemula saat menggunakan laravel terletak pada fitur yang terlalu banyak dan struktur folder yang kompleks.

---

## 6. Referensi

Kenalan dengan Laravel: Framework PHP yang Keren dan Serbaguna — https://www.dicoding.com/blog/kenalan-dengan-laravel-framework-php-yang-keren-dan-serbaguna/

Memahami Struktur Dasar Proyek Laravel: Penjelasan Setiap Folder dan File — https://www.himsiubsitegal.my.id/artikel/memahami-struktur-dasar-proyek-laravel-penjelasan-setiap-folder-dan-file

Mengenal Struktur Folder dan File pada Laravel — https://www.barajacoding.or.id/mengenal-struktur-folder-dan-file-pada-laravel/

---
