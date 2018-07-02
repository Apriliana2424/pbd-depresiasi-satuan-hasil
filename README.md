
# Perhitungan Depresiasi Menggunakan Metode Satuan Hasil di Konveksi


***Deskripsi Aplikasi***
---

Setiap perusahaan tentu menginginkan keuntungan sebesar-besarnya dari
produk yang dijualnya kepada konsumen, dengan pengeluaran biaya yang sekecil
kecilnya perusahaan menghasilkan keuntungan yang sebesar-besarnya. Hal ini
juga berlaku pada perusahaan Konveksi.
Untuk mendukung kelancaran usahanya maka perusahaan memiliki beberapa peralatan
untuk menunjang berlangsungnya produksi tersebut termasuk mesin-mesin.
Mesin untuk merelialisasikan pendapatan akan membuat berkurangnya manfaat 
potensial mesin terkait sehingga akan semakin menurun produksi dari perusahaan
tersebut. Sehingga dengan masalah tersebut dapat saya teliti menggunakan 
'Perhitungan Depresiasi Menggunakan Metode Satuan Hasil di Konveksi'
Penyusutan (Depresiasi) Aktiva Tetap dengan Metode Satuan Hasil Produksi, beban 
penyusutan ditetapkan berdasarkan jumlah output yang dihasilkan oleh 
aset pada periode yang berjalan atau bahasa lain beban penyusutan dihitung 
dengan Satuan Hasil Produksi, sehingga beban penyusutan tiap periode akan 
berfluktuasi mengikuti jumlah produksi yang dihasilkan.

• Pokok Masalah :
1. Bagaimana menghitung hasil satuan produksi menggunakan metode 
    Depresiasi metode satuan hasil produksi.
    
• Batasan Masalah :
1. Perhitungan menggunakan depresiasi metode satuan hasil produksi.
2. Penggunaan Aplikasi untuk membuat, mengedit, menghapus data produksi.
3. Menentukan jumlah hasil produksi terhadap aset (mesin) yang digunakan.

    Berikut asumsi asumsi penyusutan metode hasil produksi digunakan :
    
    •	Nilai aset tetap menurun karena penggunaan, bukan karena faktor waktu.
    
    •	Kerusakan serta ke-aus-an fisik aset adalah faktor penting, sedangkan tingkat 
        Ke-usang-an bukan hal penting,
        
    •	Biaya maintenance dan perbaikan sifatnya proporsional terhadap penggunaan,
    
    •	Tingkat efesiensi operasi sifatnya proporsional terhadap pemakaian aset, 
        contohnya bahan bakar yang jumlahnya berfluktuasi.
        
    •	Pendapatan sifatnya proporsional terhadap penggunaan aset tetap
    

Metode satuan hasil produksi merupakan metode penyusutan yang mengalokasikan beban 
penyusutan ke beberapa periode berdasarkan pada satuan unit yang diperoleh dari 
penggunaan aset tetap. Umur ekonomis aset tetap dinyatakan dalam satuan unit 
produksi, bukan berdasarkan tahun.

> Depresiasi Per Unit = (harga perolehan - nilai sisa)/taksiran jml produksi

> Depresiasi tahun yang bersangkutan = produksi setahun x depresiasi per unit


***Pembuat Aplikasi***
---

**Apriliana Puspitasari**


***Development Tools Aplikasi***
---

1. Sistem Operasi     : Windows 7 Ultimate
2. Web Server         : apache :httpd
3. Data Base          : MySQL
4. Bahasa Pemrograman : PHP
5. Aplikasi Pendukung : XAMPP 


***Instalasi Development Tools Aplikasi***
---

Karena disini saya menggunakan web server apache maka untuk mendukung pembuatan
aplikasi maka saya menginstall xampp terlebih dahulu, setelah diinstal xampp 
maka baru masuk dalam pembuatan program dengan bahasa pemrograman PHP.

Cara instal XAMPP :
Langkah ini dapat dilihat dari web ini :
[Link untuk Langkah Instalasi XAMPP](https://webhostmu.com/cara-instal-xampp/)


***Cara Menjalankan Aplikasi***
---

Karena kita menggunakan aplikasi XAMPP maka pertama ketika kita ingin Menjalankan
program yang telah dibuat maka kita jalankan XAMPP terlebih dahulu.
cara menjalankannya dapat dilihat di 

[Link Cara menjalankan XAMPP](https://webhostmu.com/cara-instal-xampp/)
setelah itu baru kita dapat membuka database kita di localhost/phpmyadmin/
lalu menjalankan database'nya setelah itu kita buka aplikasi perhitungannya 
kemudian kita jalankan aplikasinya. Untuk menjalankan aplikasinya mungkin
belum bisa saya jelaskan detail karena saat ini sedang dalam proses 
pengerjaan aplikasinya.


***Lisensi Aplikasi***
---

[Link untuk Lisensi XAMPP](https://id.wikipedia.org/wiki/XAMPP)

---

#Change Logs

##16 April 2018


Pada Pertemuan kali ini saya mengerjakan aplikasi depresiasi satuan hasil dengan awal membuat
database terlebih dahulu. Disini saya membuat database depresiasi dengan tabel admin yang digunakan 
untuk membuat login pada aplikasi.
Setelah tabel admin dibuat maka dibuatlah form input login admin.

---

#Change Logs

##7 Mei 2018


Pada pertemuan ini saya melengkapi tabel dalam database, membuat login proses,
membuat tampilan home dan tampilan input merk mesin, membuat respons dari input merk mesin.
Kemudian setelah membuat input merk mesin dan direspons lalu akan ditampilkan pada tampilan
output untuk merk mesin.
Membuat tampilan untuk proses logout.

---

#Change Logs

##14 Mei 2018


-Membuat Input Jenis Mesin Jahit

-Membuat Proses Hasil Input Mesin Jahit

-Membuat Tampilan Output Hasil Input Mesin Jahit.


---

#Change Logs

##21 Mei 2018

-Input Mesin Jahit => OK

-Proses Mesin Jahit => OK

-Hapus_merk.php => OK

-Hapus_mesin.php => OK

-Hapus_jenis.php => OK

-Menghasilkan tampilan mesin dalam Mesin_t.php => OK


---

#Change Logs

##28 Mei 2018

1. detailMesin_i.php => OK

2. detailMesin_p.php => OK

3. detailMesin_t.php => OK

4 hapus_detailMesin.php => Baru diedit belum selesai. (Error)


---

#Change Logs

##04 Juni 2018

Membuat File hitung untuk depresiasi.php => OK

Mengedit font color untuk setiap tampilan output.


---

#Change Logs

##25 Juni 2018

- Membuat menu tambahan untuk file edit.

- Menu depresiasi perunit sudah ok, masih revisi untuk perhitungan

depresiasi tahun yang bersangkutan.

- Menu laporan masih dalam tahap revisi'an.


---
