Max Gym — Performance Website

Modern gym website dengan tampilan dark mode, responsif, dan dukungan multi-bahasa. Dibangun menggunakan PHP dan Tailwind CSS untuk performa ringan dan struktur yang modular.

🚀 Overview

Max Gym adalah website profil gym yang dirancang untuk:

Menampilkan layanan dan fasilitas secara menarik

Mendukung dua bahasa (Indonesia & English)

Memberikan pengalaman pengguna yang smooth dan modern

✨ Key Features

🌐 Multilingual — Bahasa Indonesia & English (JSON-based)

📱 Responsive Design — Optimal di mobile & desktop

🎨 Modern UI — Dark theme + gradient accent

🧩 Modular Structure — Komponen PHP reusable

⚡ Smooth Animations — Scroll-based effects

🏋️ Services & Facilities — Layout informatif berbasis icon

🛠️ Tech Stack

PHP 7.4+ — Backend & templating

Tailwind CSS (CDN) — Styling

Iconify — Icon system

JSON — Manajemen konten multi-bahasa

Vanilla JavaScript — Interaksi & animasi

📁 Project Structure
max-gym/
├── components/        # Navbar, footer, dll
├── pages/             # Section halaman
├── includes/          # Logic (language loader)
├── lang/              # File bahasa (en.json, id.json)
├── image/             # Asset gambar
├── js/                # Script interaksi
├── services/          # Halaman services
└── style.css          # Custom styling
⚙️ Getting Started
1. Clone Repository
git clone https://github.com/your-username/max-gym.git
2. Pindahkan ke Web Server

Contoh (XAMPP):

C:/xampp/htdocs/max-gym
3. Jalankan Server

Aktifkan Apache di XAMPP / Laragon

4. Akses Website
http://localhost/max-gym
🌐 Multilingual System

Bahasa diatur menggunakan parameter URL:

?lang=en  → English
?lang=id  → Indonesia

Contoh:

http://localhost/max-gym/services?lang=id
Cara Kerja

Konten disimpan di folder /lang

Format menggunakan JSON

Dipanggil melalui PHP (language.php)

Menambahkan Bahasa Baru

Copy en.json

Rename (misal: fr.json)

Terjemahkan isi tanpa mengubah key

Akses dengan ?lang=fr

⚠️ Common Issues

Teks tidak muncul → Key JSON tidak sama

Data kosong → Struktur JSON salah

Error decode → JSON tidak valid

Layout rusak di mobile → Meta viewport belum ada

📄 License

Project ini dibuat untuk pembelajaran dan portfolio.
© Max Gym
