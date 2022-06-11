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


