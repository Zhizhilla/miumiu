# Miu Miu Website Project

## Langkah Setup Setelah Download / Clone Repo

Setiap kali mengunduh atau melakukan `git clone` repository ini ke perangkat baru (termasuk di Termux), jalankan perintah berikut secara berurutan:

1. **Install dependensi vendor:**
   ```bash
   composer install
   
2. **Salin konfigurasi environment & generate key:**
   ```bash
   cp .env.example .env
   php artisan key:generate

3. **Buat file database SQLite & jalankan migrasi:**
   ```bash
   touch database/database.sqlite
   php artisan migrate

4. **jalankan server lokal:**
   ```bash
   php artisan serve
