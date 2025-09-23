# Laporan Modul 2: Laravel Fundamentals
**Mata Kuliah:** Workshop Web Lanjut   
**Nama:** Maila Aziza 
**NIM:** 2024573010024
**Kelas:** TI 2C

---

## Abstrak 
Laporan ini bertujuan untuk membahas tentang fondasi utama dalam membangun aplikasi laravel. Laporan ini untuk memahami routing, middleware, penanganan request/response, controller, view, dan Blade templating sangat penting untuk mulai mengembangkan dengan Laravel secara efektif.

---

## 1. Dasar Teori
- Apa itu MVC (Model, View, Controller).
MVC adalah singkatan dari Model-View-Controller, sebuah pola arsitektur perangkat lunak yang digunakan untuk memisahkan concern dalam aplikasi web:
a. Model:   Mempresentasikan data dan logika bisnis. Dalam Laravel, biasanya ditangani oleh Eloquent models yang berinteraksi dengan database.
b. View:    Menangani lapisan presentasi, yaitu HTML yang ditampilkan kepada pengguna. Laravel menggunakan Blade sebagai template engine untuk view.
c. Controller: Mengatur alur antara model dan view. Controller menerima input dari pengguna melalui route, memprosesnya, dan mengembalikan view atau resppons yang sesuai.

- Konsep Routing di Laravel.
Routing di laravel mendefinisikan bagaimana aplikasi merespons permintaan yang masuk. Route di larael didefinisikan di file routes/web.php untuk permintaan web dan di routes/api.php untuk route API. Routing memetakan URI ke aksi controller atau closure.

- Fungsi Middleware.
Middleware menyediakan mekanisme untuk memfilter permintaan HTTP yang masuk ke aplikasi. Middleware bertindak sebagai lapisan yang berada di antara siklus request dan response.

- Bagaimana cara Laravel menangani Request dan Response.
Laravel mempermudah dalam menangani HTTP request dan menghasilkan response. Kita dapat mengakses data request menggunakan objek Request dan juga dapat dengan mudah mengakses parameter query, data form, dan payload JSON.

- Peran Controller dan View.
Controller digunakan untuk mengatur logika aplikasi. File controller berada di dalam app/Http/Controllers. 
View disimpan di dalam resources/views. Contoh file view sederhana bisa dibuat di resources/views/home.blade.php.

- Fungsi Blade Templating Engine.
Blade merupakan template engine yang disediakan oleh laravel. Contoh penggunaan template engine blade:

```
<h1>
    Hello, {{$name}}
</h1>
```
---

## 2. Langkah-Langkah Praktikum
Tuliskan langkah-langkah yang sudah dilakukan, sertakan potongan kode dan screenshot hasil.

2.1 Praktikum 1 – Route, Controller, dan Blade View

- Tambahkan route pada routes/web.php.
![Route][tampilkan_route]

[tampilkan_route]: gambar\web_php.png "gambar route pada routes/web.php."

- Buat controller WelcomeController.
![WelcomeController][tampilkan_controller]

[tampilkan_controller]: gambar\WelcomeController.png "Controller WelcomeController"

- Buat view mywelcome.blade.php.
![View][tampilkan_mywelcome]

[tampilkan_mywelcome]: gambar\mywelcome_blade.png "View mywelcome.blade.php"

- Jalankan aplikasi dan tunjukkan hasil di browser.
Screenshot Hasil:
![Laravel Welcome][tampilkan_hasilhelo]

[tampilkan_hasilhelo]: gambar\welcome.png "hasil di browser"

2.2 Praktikum 2 – Membuat Aplikasi Sederhana "Calculator"

- Tambahkan route untuk kalkulator.
![Route Calculator][tampilkan_routecalculator]

[tampilkan_routecalculator]: gambar\webphpcalculator.png "routes/web.php"

- Buat controller CalculatorController.
![Controller][tampilkan_calculatorcontroller]

[tampilkan_calculatorcontroller]: gambar\CalculatorController.png "controller CalculatorController."

- Tambahkan view calculator.blade.php.
![View][tampilkan_calculatorblade]

[tampilkan_calculatorblade]: gambar\calculatorblade.png "view calculator.blade.php."

- Jalankan aplikasi dan coba dengan beberapa input berbeda.
Screenshot Hasil:
![Aplikasi][tampilkan_calculator]

[tampilkan_calculator]: gambar\calculator.png "input dengan operasi perkalian"

- ![Aplikasi][tampilkan_calculator2]

[tampilkan_calculator2]: gambar\calculator2.png "input dengan operasi pembagian"

---

## 3. Hasil dan Pembahasan
- Apakah aplikasi berjalan sesuai harapan?
Aplikasi sudah berjalan sesuai yang diharapkan. Fitur-fiturnya juga sudah dapat digunakan, didalam aplikasi sudah terdapat operasi aritmatika seperti penjumlahan, pengurangan, perkalian dan pembagian.

- Apa yang terjadi jika ada input yang salah (misalnya pembagian dengan 0)?
Jika pembagian dilakukan dengan input 0, maka hasilnya adalah: <strong>Hasil: Error: Division by 0</strong>

- Bagaimana validasi input bekerja di Laravel?
Laravel Validasi Input dan penanganan kesalahan adalah dua aspek krusial dalam membangun aplikasi web yang aman, handal, dan user-friendly.
Cara paling umum dan direkomendasikan untuk melakukan validasi di Laravel adalah dengan menggunakan metode validate() yang tersedia pada objek Request di dalam controller kamu. Metode ini secara otomatis akan mengalihkan pengguna kembali ke lokasi sebelumnya jika validasi gagal, dan akan menyimpan semua pesan kesalahan dalam session. Untuk validasi yang lebih kompleks atau ketika kamu ingin memisahkan logika validasi dari controller untuk menjaga kebersihan kode, Laravel Form Request adalah pilihan terbaik. Form Request adalah kelas khusus yang dapat kamu buat menggunakan Laravel Artisan.

- Apa peran masing-masing komponen (Route, Controller, View) dalam program yang dibuat?
a. Route:   Route yang menerima request dari user lewat URL, lalu menentukan request tersebut dibawa ke controller mana.
b. Controller:  Bagian yang mengatur logika. misalnya menghitung penjumlahan, perkalian atau mengambil data dari database.
c. View:    View adalah tampilan untuk user. Berisi file HTML + Blade syntax untuk menampilkan data yang dikirim controller.

---

## 4. Kesimpulan
Dari praktikum ini dapat diambil kesimpulan bahwa dengan adanya MVC sangat membantu dalam pengembangan aplikasi. MVC membantu memisahkan logika aplikasi tampilan dan pengaturan sehingga lebih terstrukstur.
Pada praktikum kali ini dapat disimpulkan  juga mengenai alur kerja laravel mulai dari menerima request hingga memberi response.

---

## 5. Referensi
Laravel Fundamentals — https://hackmd.io/@mohdrzu/B1zwKEK5xe
Laravel Validasi Input dan Error Handling — https://neon.web.id/onphpid/laravel-validasi-input-dan-error-handling.html

---
