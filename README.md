# Lab11Web
# Praktikum 11 (Pemrograman Web)
## Ery Shandy
## 312010201
## TI.20.A.2
## Universitas Pelita Bangsa
## Langkah-Langkah Praktikum
Sebelum memulai menggunakan **Framework Codeigniter**, perlu dilakukan konfigurasi pada webserver. Beberapa ekstensi **PHP** perlu diaktifkan untuk kebutuhan pengembangan **Codeigniter 4**.

* **php-json** ekstension untuk bekerja dengan **JSON;**
* **php-mysqlnd** native driver untuk **MySQL;**
* **php-xml** ekstension untuk bekerja dengan **XML;**
* **php-intl** ekstensi untuk membuat aplikasi **multibahasa;**
* **libcurl** (opsional), jika ingin pakai **Curl**

### Langkah 1
#### Mengaktifkan Ekstensi
Aktifkan ekstensi tersebut melalui **XAMPP Control Panel** pada bagian **Apache** dengan cara klik **Config** -> **PHP.ini** seperti berikut.
<img width="960" alt="SS 1 lab web 11" src="https://user-images.githubusercontent.com/73053784/171123584-a75b8a34-4b0c-42e6-91aa-939656532049.png">

Lalu pada bagian **extention**, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan seperti berikut. Kemudian simpan kembali filenya dan restart **Apache** web server.

<img width="442" alt="SS 2 lab web 11" src="https://user-images.githubusercontent.com/73053784/171123781-b642ffe1-8343-4cd6-be2a-aa8d11b074f9.png">

### Langkah 2
#### Instalasi CodeIgniter 4
* **Codeigniter** dapat didownload dari website https://codeigniter.com/download
* Extrak file zip **Codeigniter** ke direktori **htdocs/lab11_php_ci**.
* Ubah nama directory **framework-4.x.xx** menjadi **ci4**.
* Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/
Untuk melakukan instalasi **Codeigniter 4** dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan  ***composer***. Pada praktikum ini kita menggunakan  cara manual seperti berikut.
<img width="960" alt="SS 3 lab web 11" src="https://user-images.githubusercontent.com/73053784/171124132-799ef1c4-1b87-46f2-89ba-5e9fcaac54f3.png">

### Langkah 3
#### Menjalankan CLI (Command Line Interface)
**Codeigniter 4** menyediakan **CLI** untuk mempermudah proses **development**. Untuk mengakses **CLI** buka **terminal/command prompt**, lalu arahkan lokasi direktori sesuai dengan direktori kerja project dibuat **(C:\xampp\htdocs\Lab11_php_ci\ci4).** Kemudian setelah itu jalankan perintah untuk memanggil **CLI Codeigniter** seperti berikut.

<img width="794" alt="SS 4 lab web 11" src="https://user-images.githubusercontent.com/73053784/171124340-db82b9c7-1cc9-4584-a23a-4ea4f3b88d86.png">

### Langkah 4
#### Mengaktifkan Mode Debugging
**Codeigniter 4** menyediakan fitur **debugging** untuk memudahkan **developer** untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.
<img width="960" alt="SS 5 lab web 11" src="https://user-images.githubusercontent.com/73053784/171124512-b3595fe5-5b93-4db0-9032-ccfb0d13ff0b.png">

Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu mengaktifkan mode **debugging** dengan mengubah nilai konfigurasi pada environment variable **CI_ENVIRONMENT** menjadi **development.** Kemudian mengubah nama file **env** menjadi **.env** lalu setelah itu  buka  file  tersebut  dan  ubah  nilai  variable **CI_ENVORNMENT** menjadi **development.** Setelah mengubah nilai konfigurasi pada environment variable **CI_ENVIRONMENT** menjadi **development.** maka hapus tanda tagar **(#)** pada awal baris **CI_ENVIRONMENT.** Dan yang terakhir, ubah kode pada file **app/Controller/Home.php** kemudian hilangkan titik koma **(;)** pada akhir kode seperti berikut.
<img width="960" alt="SS 6 lab web 11" src="https://user-images.githubusercontent.com/73053784/171124747-f43577b0-b019-435e-b282-e7af1ff91de2.png">

Maka hasilnya akan terjadi error seperti berikut. 
<img width="960" alt="SS 7 lab web 11" src="https://user-images.githubusercontent.com/73053784/171124919-77b44813-8171-4c0c-864d-03bf863661a2.png">

### Langkah 5
#### Membuat Route Baru.
Menambahkan kode di dalam **Routes.php** seperti berikut.
<img width="960" alt="SS 8 lab web 11" src="https://user-images.githubusercontent.com/73053784/171125067-ce4476e4-c840-4f29-ac4c-5100c98e3b4d.png">

Untuk mengetahui **route** yang ditambahkan sudah benar, buka **CLI** dan jalankan perintah berikut.

<img width="799" alt="SS 9 lab web 11" src="https://user-images.githubusercontent.com/73053784/171125174-a1f48456-5a30-4fff-9bfb-2214e2d0c00f.png">

Selanjutnya coba akses **route** yang telah dibuat dengan mengakses alamat url http://localhost:8080/about seperti berikut. Maka hasilnya akan terjadi error, yang artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu **Contoller** yang sesuai dengan **routing** yang dibuat yaitu **Contoller Page.**
<img width="960" alt="SS 10 lab web 11" src="https://user-images.githubusercontent.com/73053784/171125298-4ecad1c0-c93e-4c7a-8dc9-7a18957b6633.png">

### Langkah 6
#### Membuat Controller
Selanjutnya adalah membuat **Controller Page.**  Buat **file** baru dengan nama **page.php** pada direktori **Controller** kemudian isi kodenya seperti berikut.
<img width="960" alt="SS 11 lab web 11" src="https://user-images.githubusercontent.com/73053784/171125429-f636eb24-d7ae-42fb-b8a6-8abf3574918c.png">

### Langkah 7
#### Auto Routing
Secara default fitur *autoroute* pada **Codeiginiter** sudah aktif. Untuk mengubah status *autoroute* dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai **true** menjadi **false.**
Kemudian tambahkan method baru pada **Controller Page** seperti berikut.
Method ini belum ada pada **routing**, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos
<img width="960" alt="SS 12 lab web 11" src="https://user-images.githubusercontent.com/73053784/171125536-c467c373-f8a6-433c-af01-14e1d4a8d399.png">

### Langkah 8
#### Membuat View
Selanjutnya adalah membuat **view** untuk tampilan web agar lebih menarik. Buat file baru dengan nama **about.php** pada direktori view **(app/view/about.php)** kemudian isi kodenya seperti berikut.
Kemudian ubah method **about** pada class **Controller Page** menjadi seperti berikut.
<img width="960" alt="SS 13 lab web 11" src="https://user-images.githubusercontent.com/73053784/171125748-31cdfaa0-9c37-4484-be14-10f9a7f0703d.png">

Maka hasilnya akan seperti berikut.
<img width="960" alt="SS 14 lab web 11" src="https://user-images.githubusercontent.com/73053784/171125898-2a6cd153-066b-476d-a378-8e83e20ff36e.png">

### Langkah 9
### Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan **css** dapat diimplementasikan dengan mudah pada **Codeigniter.** Yang perlu diketahui adalah pada **Codeigniter 4** file yang menyimpan asset **css** dan **javascript** terletak pada direktori public. Buat file **css** pada direktori public dengan nama **style.css** seperti berikut.
<img width="960" alt="SS 15 lab web 11" src="https://user-images.githubusercontent.com/73053784/171126037-c284d633-5da0-4a39-9653-a8ba192f9e4d.png">

Kemudian buat folder **template** pada direktori **view** ke mudian buat file **header.php** dan **footer.php** seperti berikut.
<img width="960" alt="SS 16 lab web 11" src="https://user-images.githubusercontent.com/73053784/171126161-c70a50d8-e7c4-45fe-bf67-3efb0cdce960.png">

Maka hasilnya seperti berikut.
<img width="960" alt="SS 17 lab web 11" src="https://user-images.githubusercontent.com/73053784/171126257-0b91588e-dc37-4629-951f-b2391f3c85cf.png">

## Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada **Controller Page**, sehingga semua **link** pada **navigasi header** dapat menampilkan tampilan dengan layout yang sama.

## Hasilnya
<img width="960" alt="SS 18 lab web 11" src="https://user-images.githubusercontent.com/73053784/171126409-57caaeeb-ca1b-472c-91aa-783d923d2319.png">

<img width="960" alt="SS 19 lab web 11" src="https://user-images.githubusercontent.com/73053784/171126486-b752e2cb-2d4c-4c7a-ab16-838b9a8a5ed5.png">

# Praktikum 12: Framework Lanjutan (CRUD) - Pemrograman Web
## Langkah-langkah Praktikum
### Persiapan
Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP seperti berikut.
<img width="960" alt="SS 1 lab web 12" src="https://user-images.githubusercontent.com/73053784/173177512-23753f91-1725-4a78-a258-b22121d9bab6.png">

### Langkah 1
Membuat database kemudian membuat Tabel dan masukkan kode pada database query seperti berikut.
<img width="960" alt="SS 2 lab web 12" src="https://user-images.githubusercontent.com/73053784/173177851-251b2d7e-f9d7-4609-be26-771195783d9c.png">


### Langkah 2
#### Konfigurasi koneksi database
Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Kemudian melakukan konfigurasi dengan cara mengubah beberapa kode pada file `htdocs\lab11_php_ci\ci4\.env.` Lalu cari pada line **DATABASE** dan hilangkan tanda pagar (`#`) didepan seperti berikut ini. 

<img width="960" alt="SS 3 lab web 12" src="https://user-images.githubusercontent.com/73053784/173177553-928e9ea5-70a7-47ce-8ff9-7806226f5b14.png">

### Langkah 3
#### Membuat Model
Selanjutnya adalah membuat Model untuk memproses data **Artikel**. Buat file baru pada direktori **app/Models** dengan nama **ArtikelModel.php** lalu masukkan kode seperti berikut.
<img width="960" alt="SS 4 lab web 12" src="https://user-images.githubusercontent.com/73053784/173177579-de9ec6e1-54f5-4934-bd10-a7b84c842a67.png">

### Langkah 4
#### Membuat Controller
Buat `Controller` baru dengan nama **Artikel.php** pada direktori **app/Controllers** lalu masukkan kode seperti berikut. 
<img width="960" alt="SS 5 lab web 12" src="https://user-images.githubusercontent.com/73053784/173177590-7d7731fb-a924-43ef-9e05-2b60fa327ac9.png">

### Langkah 5
#### Membuat View
Buat folder baru dengan nama **artikel** pada direktori **app/views**, kemudian buat file baru dengan nama **index.php** seperti berikut.
<img width="960" alt="SS 6 lab web 12" src="https://user-images.githubusercontent.com/73053784/173177605-389844f9-edf4-49c9-a46b-95f326e00f83.png">

Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel maka hasilnya akan seperti berikut.
<img width="960" alt="SS 7 lab web 12" src="https://user-images.githubusercontent.com/73053784/174608030-9d182999-4417-4a56-8b98-1b2baeee45f9.png">

Terlihat belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database query agar dapat ditampilkan datanya seperti berikut.
<img width="960" alt="SS 8 lab web 12" src="https://user-images.githubusercontent.com/73053784/174608388-d9ec88af-543c-4118-b975-09d59116c1d0.png">

Lalu refresh kembali browser, sehingga akan ditampilkan hasilnya seperti berikut.
<img width="960" alt="SS 9 lab web 12" src="https://user-images.githubusercontent.com/73053784/174608539-9efce80a-9914-4c95-9d9c-9a126491d99a.png">

### Langkah 6
#### Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada **Controller Artikel** dengan nama **view()** seperti berikut.
<img width="960" alt="SS 10 lab web 12" src="https://user-images.githubusercontent.com/73053784/174608681-f6c0338e-f53c-40a8-9c31-30197e759ed6.png">

### Langkah 7
#### Membuat View Detail
Buat view baru untuk halaman detail dengan nama **app/views/artikel/detail.php** seperti berikut.
<img width="960" alt="SS 11 lab web 12" src="https://user-images.githubusercontent.com/73053784/174608831-2299966b-d8cd-4875-b0ce-dd1ea2ec52fb.png">

### Langkah 8
#### Membuat Routing untuk artikel detail
Buka kembali file **app/config/Routes.php**, kemudian tambahkan `routing` untuk `artikel detail` maka hasilnya akan seperti berikut.
<img width="960" alt="SS 12 lab web 12" src="https://user-images.githubusercontent.com/73053784/174608935-347bc7e4-9f17-41fe-b656-716c4a8aba9f.png">

### Langkah 9
#### Membuat Menu Admin
Menu `admin` adalah untuk proses `CRUD` data `artikel`. Buat method baru pada **Controller Artikel** dengan nama **admin_index()** seperti berikut.
<img width="960" alt="SS 13 lab web 12" src="https://user-images.githubusercontent.com/73053784/174609063-9308c5a3-2a63-4725-9a7e-86c7df359850.png">

Selanjutnya buat `view` untuk tampilan `admin` dengan nama **admin_index.php** seperti berikut.
<img width="960" alt="SS 14 lab web 12" src="https://user-images.githubusercontent.com/73053784/174609182-3529237e-54bf-4d6c-a9ae-3ce0952874c4.png">

Setelah itu tambahkan **routing** untuk menu `admin` seperti berikut.
<img width="960" alt="SS 15 lab web 12" src="https://user-images.githubusercontent.com/73053784/174609330-804e14d7-5163-4ef6-ba4f-743be33c04d9.png">

Setelah itu buat `template header dan footer` baru untuk `Halaman Admin.` Kemudian buat file baru dengan nama **admin_header.php** pada direktori app/view/template seperti berikut.
<img width="960" alt="SS 16 lab web 12" src="https://user-images.githubusercontent.com/73053784/174609462-837d25f2-d8e5-4009-8be1-de53e6d77168.png">

Lalu buat file baru lagi dengan nama **admin_footer.php** pada direktori **app/view/template** seperti berikut.
<img width="960" alt="SS 17 lab web 12" src="https://user-images.githubusercontent.com/73053784/174609587-498992f3-6629-4305-b3de-e9010db0f946.png">

Dan yang terakhir buat file baru lagi dengan nama **admin.css** pada direktori **ci4/public** untuk memperindah tampilan Halaman Admin seperti berikut.
<img width="960" alt="SS 18 lab web 12" src="https://user-images.githubusercontent.com/73053784/174609707-2be2dfe8-3290-4c94-9f1e-1b16d8905173.png">
<img width="960" alt="SS 19 lab web 12" src="https://user-images.githubusercontent.com/73053784/174609717-05c2885e-1efe-4b52-a8d0-327160ec1285.png">

Kemudian akses menu admin dengan url http://localhost:8080/admin/artikel seperti berikut.

<img width="494" alt="SS 20 lab web 12" src="https://user-images.githubusercontent.com/73053784/174626742-45e57c5e-b4e3-4ade-a5f7-b73b17471640.png">

### Langkah 10
#### Menambah Data Artikel
Tambahkan fungsi/method baru pada **Controller Artikel** dengan nama **add()** seperti berikut.
<img width="960" alt="SS 21 lab web 12" src="https://user-images.githubusercontent.com/73053784/174626923-8ecd5952-8896-4839-b8b1-c612bdee54c9.png">

Kemudian buat `view` untuk form tambah dengan nama **form_add.php** seperti berikut.
<img width="960" alt="SS 22 lab web 12" src="https://user-images.githubusercontent.com/73053784/174627050-845f7419-da39-467b-a8cd-f8d08a20fb09.png">

Setelah itu, lalu klik **Tambah Artikel** pada menu **Halaman Admin** Maka hasilnya akan seperti berikut.

<img width="495" alt="SS 23 lab web 12" src="https://user-images.githubusercontent.com/73053784/174627172-c99aa590-e18b-43f7-9774-4cf7d7b800ad.png">

### Langkah 11
#### Mengubah Data
Tambahkan fungsi/method baru pada **Controller Artikel** dengan nama **edit()** seperti berikut.
<img width="960" alt="SS 24 lab web 12" src="https://user-images.githubusercontent.com/73053784/174627270-c20ed204-e1d3-402f-9e40-8392aa97b3b0.png">

Kemudian buat `view` untuk form tambah dengan nama **form_edit.php**
<img width="960" alt="SS 25 lab web 12" src="https://user-images.githubusercontent.com/73053784/174627424-aed6480f-e9af-4aa4-9dfe-307f08b5b9d5.png">

Setelah itu, lalu klik **Ubah** pada salah satu judul artikel, maka hasilnya akan seperti berikut.

<img width="499" alt="SS 26 LAB WEB 12" src="https://user-images.githubusercontent.com/73053784/174627536-9edcad77-23d3-4bed-b2c8-d0c50a7e5f5f.png">

### Langkah 12
#### Menghapus Data
Tambahkan fungsi/method baru pada **Controller Artikel** dengan nama **delete()** seperti berikut. 
<img width="960" alt="SS 27 lab web 12" src="https://user-images.githubusercontent.com/73053784/174627665-dc7c3fa0-da57-4eec-8700-f3df28aa7f18.png">

# Praktikum 13: Framework Lanjutan (Modul Login)
## Langkah-langkah Praktikum
### Persiapan
Untuk memulai membuat modul Login, yang perlu dipersiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP seperti berikut.




