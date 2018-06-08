# travelogue
Travelogue with Code Igniter

Travelogue adalah aplikasi untuk memberi peminjaman penginapan dan kendaraan.

pada aplikasi ini menggunakan php, html, javascript, ajax
dan menggunakan framework Bootstrap dan Code Igniter dengan konsep MVC

cara menjalankan web ini:
1. menggunakan xampp
2. simpan folder travelogue_ di dalam folder htdocs yang berada di dalam folder xampp 
	(urutan directory : xampp/htdocs/travelogue_)
3. start apache dan MySQL
4. buka browser -> ketik : localhost/phpmyadmin
5. buat database dengan nama : kost
6. klik tab import -> masukan file kost.sql -> ok
7. ketik url : localhost/kost
8. anda akan masuk ke halaman awal

keterangan 
- akun
	1. masuk sebagai admin
		- email : anonim@gmail.com
		- pass : 123
	2. masuk sebagai member : terdapat 4 member
		- email : hugo.iman@yahoo.co.id		pass : 123
		- email : ogeno@gmail.com		pass : 123
		- email : irfan@gmail.com		pass : 123
		- email : iman@gmail.com		pass : 123

- member dapat memposting produk mereka yang selanjutnya akan di verifikasi oleh admin untuk ditampilkan
- member dapat meminjam produk member lain, yang nantinya member yg dipinjamkan dapat mengonfirmasi pinjaman tersebut
- admin dapat memverifikasi/tidak jika ada postingan produk baru dari member

