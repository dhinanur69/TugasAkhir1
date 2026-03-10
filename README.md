# PRAKTIKUM ISB-310 SISTEM INFORMASI BERBASIS WEB  
# 162023029 - Dhina Nur Rizki Ramadani
# penjelasan : 
*  index.php : 
    - Fungsi: Halaman utama (dashboard) sistem.
    - Keterangan:
       1. Menampilkan statistik pudding, daftar   produk, dan form tambah produk.
       2. Navbar menampilkan tombol login atau logout sesuai status session.
       3. Dilengkapi proteksi session: hanya user yang login bisa mengakses.
    - Tujuan: Menjadi halaman beranda untuk mengelola data sepatu.

*  login.php : 
    - Fungsi: Halaman untuk masuk (login) ke sistem.
    - Keterangan:
       1. Form login berisi username, password, dan checkbox “Remember me”.
       2. Menampilkan pesan error jika login gagal.
       3. Terdapat link “Kembali ke Beranda”.
    - Tujuan: Memastikan hanya user valid yang bisa masuk ke sistem.
    
*  controller/proses_login.php : 
    - Fungsi: Memproses data login dari form login.php.
    - Keterangan:
       1. Mengecek input username dan password terhadap data valid (misal: admin / 12345).
       2. Jika valid → membuat session ($_SESSION['username']) → redirect ke index.php.
       3. Jika salah → simpan pesan error di session → redirect kembali ke login.php.
    - Tujuan: Menjaga keamanan akses sistem dan memvalidasi user.

*  controller/logout.php : 
    - Fungsi: Menghapus session dan keluar dari sistem.
    - Keterangan:
       1. Menghapus semua data session user.
       2. Redirect user ke login.php setelah logout.
       3. Digunakan oleh tombol Logout di navbar.
    - Tujuan: Mengamankan sistem agar user yang sudah keluar tidak bisa mengakses halaman dashboard.
    
* css/style.css :
    - Fungsi: Mengatur tampilan dan layout halaman.
    - Keterangan:
       1. Menentukan warna background, font, card, tombol, navbar, dan footer.
       2. Menyediakan dark mode untuk halaman utama.
    - Tujuan: Membuat tampilan web menarik, konsisten, dan user-friendly.

* cjs/script.js :
    - Fungsi: Menambahkan interaktivitas pada halaman utama.
    - Keterangan:
       1. Tombol beli: mengurangi stok dan menampilkan alert.
       2. Tombol wishlist: menambah/hapus wishlist menggunakan sessionStorage.
       3. Mode gelap: toggle dark/light mode dan menyimpan preferensi di localStorage.
    - Tujuan: Membuat website dinamis dan interaktif.

* assets/ :
    - Fungsi: Menyimpan semua file gambar dan aset multimedia.
    - Keterangan:
       1. Gambar sepatu, background halaman login, dan ikon.
    - Tujuan: Menampilkan konten visual agar tampilan lebih menarik.

