# khobor-Theme
Themes for OpenSID 23 Januari 2020

 1. beberapa widget tidak ditampilkan saat memasuki halaman first(beranda)
2. meta tag property="og:image" silahkan ganti dengan foto desa masing2 file ada di khobor/assets/up.jpg (nama harus sama)
3. galeri foto di halaman firs menggunakan foto dari sub-galeri
   jika mau dirubah seperti diatas skripnya ada di
   donjo-app>models>First_gallery_m.php
   
   	// daftar album di widget
   line 93 > $sql = "SELECT * FROM gambar_gallery WHERE enabled = '1' and parrent = 0 order by rand() limit 4";
   
   ganti menjadi 
   
   $sql = "SELECT * FROM gambar_gallery WHERE enabled = '1' and  parrent != ''  order by id DESC limit 8";
   
4. (jika punya appid FB)untuk memasukan appid facebook file ada di > khobor/commons/source_js.php  

5. jangan ngerubah copyright ya...


Demo >>https://sukoharjo2.desa.id/sidsukoharjo2
Yang mau donasi mongo ke sini https://opendesa.id/donasi/

 bug fix (update 26 januari 2020)

- link berita slider halaman home
- halaman produk hukum
- halaman informasi publik
- Rensponsif Table

---------------------------------------

+ tambah menu login hal.admin
+ Widged APBDES in Home

terimakasih.....
