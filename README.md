# eHadir

# 📘 eHadir atau Buku Tamu Digital

Selamat datang di **Buku Tamu Digital**, sebuah aplikasi web yang dirancang untuk mencatat data tamu yang berkunjung ke sebuah institusi. Sistem ini dilengkapi dengan fitur CRUD lengkap, login admin, pencarian, dan desain modern menggunakan Tailwind CSS.
---
# landing page
<img width="1437" alt="image" src="https://github.com/user-attachments/assets/25eff9d6-e8da-422b-bcf1-d2b0d47c9917" />

<img width="1439" alt="image" src="https://github.com/user-attachments/assets/d4278f6d-066e-4d03-8271-569dce71f58d" />

# login 
ada dua role login yaitu admin dan resepsionis

<img width="1008" alt="image" src="https://github.com/user-attachments/assets/345a8ac1-697f-4f96-b7fb-4738e2a82a38" />


# 📚eHadir – Dashboard Admin
<img width="1432" alt="Screenshot 2025-06-21 at 21 55 17" src="https://github.com/user-attachments/assets/88b10605-9dfc-4123-9ce5-be2fb08a8dd9" />

## ✨ Penjelasan
Halaman ini merupakan pusat kendali (admin panel) dari sistem **Buku Tamu Digital**. Admin dapat memantau statistik kunjungan, mengelola data pengguna, serta melakukan konfigurasi data pendukung seperti departemen, jabatan, dan jenis keperluan.

---

## 🖥️ Dashboard Admin
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

## 📂 Navigasi Sidebar – Fungsi Menu

| Menu Sidebar            | Ikon     | Fungsi                                                                 |
|-------------------------|----------|------------------------------------------------------------------------|
| **HOME**                | 🏠       | Akses ke halaman dashboard utama.                                     |
| └── *Dashboard*         |          | Tampilan statistik dan visualisasi kunjungan.                         |
| **TOOLS & KOMPONEN**    | 🧰       | Modul pengelolaan data referensi yang mendukung sistem buku tamu.     |
| └── *Tamu*              | 👤       | Lihat data tamu secara keseluruhan.                                   |
| └── *Kelola Tamu*       | 🛠️       | CRUD (Create, Read, Update, Delete) data tamu.                        |
| └── *Jenis Keperluan*   | 📌       | CRUD (Create, Read, Update, Delete) jenis keperluan kunjungan.        |
| └── *Data Petugas*      | 👮       | CRUD (Create, Read, Update, Delete) pegawai yang dituju tamu.         |
| └── *Departemen*        | 🏢       |CRUD (Create, Read, Update, Delete) daftar departemen tujuan tamu.     |
| └── *Jabatan*           | 💼       | CRUD Data jabatan yang relevan untuk petugas maupun tamu.             |
| **Logout**              | 🔒       | Keluar dari sesi admin saat ini.                                      |

---

## ✅ Fitur Tambahan:
- **Sidebar Toggle**: Sidebar bisa dibuka/tutup lewat tombol hamburger.
- **Auto-Close Sidebar**: Sidebar otomatis tertutup jika pointer keluar dari area.
- **Tampilan Responsif**: Desain cocok untuk layar desktop dan mobile.
  
# Tamu  
<img width="1436" alt="image" src="https://github.com/user-attachments/assets/30aba7dd-f50f-4036-9ad4-f9596a979df1" />

# Kelola Tamu
<img width="1440" alt="image" src="https://github.com/user-attachments/assets/506f3af4-05ec-4631-8322-8605292d5b04" />

# Jenis Keperluan
<img width="1431" alt="image" src="https://github.com/user-attachments/assets/1727e94a-7c28-4ca3-a00c-1d8821c42cc2" />

# Data Petugas
<img width="1438" alt="image" src="https://github.com/user-attachments/assets/ddd575da-11a9-4e29-bba0-9e72b10771d5" />

# Departemen
<img width="1439" alt="image" src="https://github.com/user-attachments/assets/9a0c5d50-f087-4b78-9dfc-62bbc371f385" />

# Jabatan
<img width="1428" alt="image" src="https://github.com/user-attachments/assets/574bb673-a6f4-4cdb-8892-481cf3c287d9" />

# Logout
<img width="1440" alt="image" src="https://github.com/user-attachments/assets/0c2aad47-8920-40d6-ba1d-5403feef4def" />


    
### 👤 TAMU
Tamu dapat melakukan input ke sistem tanpa login:
- Mengisi form buku tamu
- Memilih jenis keperluan & tujuan
- Mencantumkan identitas & instansi
- Mendapat notifikasi bahwa data berhasil disimpan
- Melihat data yang sudah di inputkan

# form input tamu
<img width="1435" alt="image" src="https://github.com/user-attachments/assets/a2772567-7c40-41db-81fd-44b012fd698a" />

# daftar tamu 
<img width="1435" alt="image" src="https://github.com/user-attachments/assets/88f6618c-4393-4cb5-bb83-2d081e3a9b4a" />


### 🧑‍💼 Role Resepsionis
Role ini dirancang khusus untuk staf resepsionis yang bertugas mencatat kedatangan tamu tanpa akses ke data lainnya. Fiturnya meliputi:

- Meliahat statistik tamu yang datang hari ini pada dashboard
- Meliahat statistik total tamu yang datang pada dashboard
- Mengisi form buku tamu
- Melihat daftar tamu
- Download excel dan pdf

# dashboard resepsionis
<img width="1428" alt="image" src="https://github.com/user-attachments/assets/0f4d14ab-b6ef-4146-8b69-a8b1f586d172" />

# input tamu
<img width="1430" alt="image" src="https://github.com/user-attachments/assets/20f45548-9719-4de7-ac81-f8c099d9ec78" />

# daftar tamu
<img width="1419" alt="image" src="https://github.com/user-attachments/assets/b50b2c08-758e-4e09-bc63-021cf4e4f69e" />


---

## 📁 Struktur Folder

├── admin/
│ ├── dashboard.php # Dashboard utama untuk admin
│ └── data-tamu.php # Lihat seluruh data tamu

├── config/
│ ├── auth.php # Autentikasi umum
│ ├── auth_resepsionis.php # Autentikasi khusus resepsionis
│ ├── create_admin.php # Buat akun admin baru
│ └── koneksi.php # Koneksi ke database

├── departemen/
│ ├── index.php # Tampilan crud List departemen
│ ├── tambah.php # Tambah departemen
│ ├── edit.php # Edit departemen
│ └── hapus.php # Hapus departemen

├── jabatan/
│ ├── index.php # Tampilan crud List jabatan
│ ├── tambah.php # Tambah jabatan
│ ├── edit.php # Edit jabatan
│ └── hapus.php # Hapus jabatan

├── keperluan/
│ ├── index.php # Tampilan crud jenis keperluan
│ ├── tambah.php # Tambah jenis keperluan
│ ├── edit.php # Edit jenis keperluan
│ └── hapus.php # Hapus jenis keperluan

├── layouts/
│ ├── header.php # Header umum
│ ├── headeradmin.php # Header khusus admin
│ ├── sidebar-admin.php # Sidebar admin
│ ├── sidebar-resepsionis.php # Sidebar resepsionis
│ └── footer.php # Footer layout

├── petugas/
│ ├── index.php # Tampilan crud List data pegawai yang dituju client
│ ├── tambah.php # Tambah data pegawai yang dituju client
│ ├── edit.php # Edit data pegawai yang dituju client
│ └── hapus.php # Hapus data pegawai yang dituju client

├── resepsionis/
│ ├── dashboard.php # Dashboard untuk resepsionis
│ ├── daftar_tamu.php # Lihat daftar tamu
│ └── input-tamu.php # Input tamu baru

├── tamu/
│ ├── form_input.php # Form input tamu
│ ├── list_tamu.php # daftar  data tamu
│ ├── tambah.php # Tambah tamu
│ ├── edit.php # Edit data tamu
│ ├── update.php # Update tamu
│ ├── hapus.php # Hapus tamu

│ ├── index.php # Landing page 
│ ├── hash.php # Utility hashing password
│ ├── login.php # Login user
│ └── logout.php # Logout user

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
