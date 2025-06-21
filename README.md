# eHadir

# 📘 eHadir atau Buku Tamu Digital

Selamat datang di **Buku Tamu Digital**, sebuah aplikasi web yang dirancang untuk mencatat data tamu yang berkunjung ke sebuah institusi. Sistem ini dilengkapi dengan fitur CRUD lengkap, login admin, pencarian, dan desain modern menggunakan Tailwind CSS.
---



# 📚eHadir – Dashboard Admin

## ✨ Deskripsi Singkat
Halaman ini merupakan pusat kendali (admin panel) dari sistem **Buku Tamu Digital**. Admin dapat memantau statistik kunjungan, mengelola data pengguna, serta melakukan konfigurasi data pendukung seperti departemen, jabatan, dan jenis keperluan.

---

## 🖥️ Dashboard Utama
Di bagian utama dashboard, admin dapat melihat **statistik real-time**:

| Informasi             | Keterangan                                                                 |
|-----------------------|-----------------------------------------------------------------------------|
| **Total Tamu**        | Jumlah total semua tamu yang pernah mengisi data kunjungan.                 |
| **Tamu Hari Ini**     | Jumlah tamu yang melakukan kunjungan hari ini.                              |
| **Rata-rata/Bulan**   | Jumlah kunjungan tamu rata-rata setiap bulan.                               |
| **Jumlah Petugas**    | Total petugas yang aktif dan tercatat di sistem.                            |

### 📊 Visualisasi Data:
- **Grafik Kunjungan per Departemen**  
  Menampilkan sebaran tamu berdasarkan departemen tujuan.
- **Topik Keperluan yang Sering Dibahas**  
  Menunjukkan topik/jenis keperluan yang paling banyak diminati tamu.

---


    
### 👤 TAMU (Frontend)
Tamu dapat melakukan input ke sistem tanpa login:
- Mengisi form buku tamu
- Memilih jenis keperluan & tujuan
- Mencantumkan identitas & instansi
- Mendapat notifikasi bahwa data berhasil disimpan
- Melihat data yang sudah di inputkan

### 🧑‍💼 Role Resepsionis
Role ini dirancang khusus untuk staf resepsionis yang bertugas mencatat kedatangan tamu tanpa akses ke data lainnya. Fiturnya meliputi:

- Meliahat statistik tamu yang datang hari ini pada dashboard
- Meliahat statistik total tamu yang datang pada dashboard
- Mengisi form buku tamu
- Melihat daftar tamu
- Download excel dan pdf


---

## 📁 Struktur Folder



## 🛠️ Teknologi yang Digunakan

| Teknologi | Deskripsi |
|----------|-----------|
| 🐘 PHP    | Bahasa backend |
| 🐬 MySQL  | Database relasional |
| 🎨 Tailwind CSS | Framework CSS modern |
| 🧠 jQuery | DOM manipulation & event |
| 📁 Apache | Server lokal via XAMPP/Laragon |
| 🛡️ Auth   | Sistem autentikasi session sederhana |

---

## 🚀 Instalasi & Menjalankan Proyek

1. **Clone repositori ini**
   ```bash
   git clone https://github.com/username/buku-tamu.git
   cd buku-tamu
