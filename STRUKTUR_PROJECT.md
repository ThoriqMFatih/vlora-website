# 📁 Dokumentasi Struktur Project Webku (Laravel)

## 🎯 Alur Request Laravel (Request Lifecycle)

```
1. User mengakses URL → public/index.php
2. Bootstrap Laravel → bootstrap/app.php
3. Routing → routes/web.php
4. Controller → app/Http/Controllers/
5. Model → app/Models/
6. Database → database/database.sqlite
7. View → resources/views/
8. Response → Kembali ke User
```

---

## 📂 Struktur Folder & File Penting

### 🔴 **ROOT DIRECTORY**

#### `composer.json`
**Fungsi:** File konfigurasi Composer (PHP package manager)
- Mendefinisikan dependencies PHP yang digunakan
- Autoloading untuk class App
- Scripts untuk setup, dev, test
- **Dependencies utama:**
  - `laravel/framework: ^12.0` - Framework Laravel
  - `php: ^8.2` - Versi PHP minimum

#### `artisan`
**Fungsi:** Command-line tool Laravel
- Menjalankan perintah seperti: `php artisan migrate`, `php artisan serve`
- Entry point untuk semua artisan commands

#### `package.json`
**Fungsi:** Konfigurasi untuk Node.js dependencies
- Untuk frontend assets (CSS, JS)
- Build tools (Vite)

---

### 🔴 **PUBLIC/** (Web Root - Dapat Diakses Public)

#### `public/index.php`
**Fungsi:** Entry point utama aplikasi web
**Alur:**
1. Menentukan maintenance mode
2. Load Composer autoloader
3. Bootstrap Laravel application
4. Handle HTTP request
5. Return response ke browser

**Kode Penting:**
```php
$app = require_once __DIR__.'/../bootstrap/app.php';
$app->handleRequest(Request::capture());
```

#### `public/dokumentasi/`
**Fungsi:** Folder untuk file statis (gambar, video, logo)
- Dapat diakses langsung via URL: `http://localhost:8000/dokumentasi/logo.png`
- Berisi: Logo, gambar dokumentasi, video

---

### 🔴 **BOOTSTRAP/** (Aplikasi Bootstrap)

#### `bootstrap/app.php`
**Fungsi:** File bootstrap utama Laravel
**Tugas:**
- Konfigurasi aplikasi Laravel
- Register routing (web.php, console.php)
- Setup middleware
- Setup exception handling
- **Ini adalah jantung aplikasi Laravel**

**Kode Penting:**
```php
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',  // Web routes
        commands: __DIR__.'/../routes/console.php',  // Console commands
    )
    ->withMiddleware(...)
    ->withExceptions(...)
    ->create();
```

---

### 🔴 **ROUTES/** (Routing - URL Mapping)

#### `routes/web.php`
**Fungsi:** Mendefinisikan semua URL routes untuk web
**Alur:**
- User mengakses URL → Laravel cek routes/web.php
- Cocokkan URL dengan route pattern
- Eksekusi closure atau controller method

**Routes yang ada:**
```php
GET  /              → view('home')           → Homepage
GET  /about         → view('about')         → About page
GET  /services      → view('services')      → Services page
GET  /contact       → ContactController@index → Contact form
POST /contact       → ContactController@store → Simpan pesan
GET  /documentation → view('documentation') → Documentation page
```

**Cara Kerja:**
1. User klik link `/contact`
2. Laravel cek `routes/web.php`
3. Temukan `Route::get('/contact', ...)`
4. Panggil `ContactController@index()`
5. Return view `contact.blade.php`

#### `routes/console.php`
**Fungsi:** Mendefinisikan Artisan commands (CLI)
- Custom commands untuk console
- Saat ini belum ada custom commands

---

### 🔴 **APP/** (Application Logic - Business Logic)

#### `app/Http/Controllers/Controller.php`
**Fungsi:** Base controller class
- Semua controller extends dari class ini
- Berisi method-method umum yang bisa digunakan semua controller

#### `app/Http/Controllers/ContactController.php`
**Fungsi:** Controller untuk handle contact form
**Method:**
1. **`index()`** - Menampilkan halaman contact form
   - Return view `contact.blade.php`
   
2. **`store(Request $request)`** - Menyimpan pesan ke database
   - Validasi input (name, email, message)
   - Simpan ke database via Model `ContactMessage`
   - Return success/error message

**Alur Contact Form:**
```
User submit form
    ↓
POST /contact
    ↓
ContactController@store()
    ↓
Validasi input
    ↓
ContactMessage::create() → Simpan ke database
    ↓
Return success message
```

#### `app/Models/ContactMessage.php`
**Fungsi:** Eloquent Model untuk tabel `contact_messages`
**Tugas:**
- Representasi tabel database sebagai PHP object
- `$fillable` - Field yang bisa diisi mass assignment
- `$casts` - Convert data type (datetime, etc)

**Cara Pakai:**
```php
// Create
ContactMessage::create(['name' => 'John', ...]);

// Read
ContactMessage::all();
ContactMessage::find(1);

// Update
$message = ContactMessage::find(1);
$message->status = 'read';
$message->save();
```

#### `app/Models/User.php`
**Fungsi:** Model untuk user authentication
- Default Laravel model
- Belum digunakan di website ini

#### `app/Models/Post.php`
**Fungsi:** Model untuk blog posts
- Default Laravel model
- Belum digunakan di website ini

#### `app/Providers/AppServiceProvider.php`
**Fungsi:** Service Provider untuk register services
- Bootstrapping services saat aplikasi start
- Saat ini masih kosong (default)

---

### 🔴 **CONFIG/** (Konfigurasi Aplikasi)

#### `config/app.php`
**Fungsi:** Konfigurasi utama aplikasi
**Setting Penting:**
- `APP_NAME` - Nama aplikasi
- `APP_ENV` - Environment (local, production)
- `APP_DEBUG` - Debug mode (true/false)
- `APP_URL` - Base URL aplikasi
- `APP_TIMEZONE` - Timezone

#### `config/database.php`
**Fungsi:** Konfigurasi database
**Setting:**
- Default connection: `sqlite`
- Database file: `database/database.sqlite`
- Bisa diubah ke MySQL, PostgreSQL, dll

#### `config/auth.php`
**Fungsi:** Konfigurasi authentication
- User model, guards, providers
- Belum digunakan (website ini belum ada login)

#### `config/mail.php`
**Fungsi:** Konfigurasi email
- SMTP settings
- Bisa digunakan untuk kirim email notifikasi

#### `config/session.php`
**Fungsi:** Konfigurasi session
- Session driver, lifetime, cookie settings

---

### 🔴 **DATABASE/** (Database & Migrations)

#### `database/database.sqlite`
**Fungsi:** File database SQLite
- Menyimpan semua data (users, contact_messages, dll)
- SQLite = database file-based (tidak perlu server terpisah)

#### `database/migrations/`
**Fungsi:** File migration untuk membuat struktur tabel
**File Migration:**

1. **`0001_01_01_000000_create_users_table.php`**
   - Membuat tabel `users` untuk authentication
   - Kolom: id, name, email, password, timestamps

2. **`0001_01_01_000001_create_cache_table.php`**
   - Membuat tabel `cache` untuk caching
   - Laravel internal use

3. **`0001_01_01_000002_create_jobs_table.php`**
   - Membuat tabel `jobs` untuk queue jobs
   - Untuk background jobs

4. **`2026_01_27_103237_create_posts_table.php`**
   - Membuat tabel `posts` untuk blog
   - Belum digunakan

5. **`2026_01_28_042722_create_contact_messages_table.php`** ⭐
   - Membuat tabel `contact_messages`
   - Kolom: id, name, email, message, status, timestamps
   - **Ini yang digunakan untuk menyimpan pesan contact form**

**Cara Kerja Migration:**
```bash
php artisan migrate        # Jalankan migration (buat tabel)
php artisan migrate:rollback  # Rollback migration (hapus tabel)
php artisan migrate:status    # Cek status migration
```

#### `database/factories/UserFactory.php`
**Fungsi:** Factory untuk generate fake data
- Untuk testing atau seeding
- Generate fake user data

#### `database/seeders/DatabaseSeeder.php`
**Fungsi:** Seeder untuk populate database dengan data awal
- Bisa isi data dummy untuk testing

---

### 🔴 **RESOURCES/** (Views & Assets)

#### `resources/views/`
**Fungsi:** File Blade templates (HTML dengan PHP)
**File View:**

1. **`layouts/app.blade.php`** ⭐
   - Layout utama (header, navbar, footer)
   - Semua halaman extend dari ini
   - Berisi: Navbar, main content area, footer
   - CSS styling premium (Apple/Xiaomi style)

2. **`home.blade.php`**
   - Halaman homepage
   - Hero section, featured products, why choose us

3. **`about.blade.php`**
   - Halaman about
   - Background, vision, workflow, company details

4. **`services.blade.php`**
   - Halaman services
   - Products, trading terms

5. **`contact.blade.php`** ⭐
   - Halaman contact form
   - Form dengan action `POST /contact`
   - Menampilkan success/error messages

6. **`documentation.blade.php`**
   - Halaman documentation
   - Gallery images, videos

**Cara Kerja Blade:**
```blade
@extends('layouts.app')  // Extend layout utama

@section('content')     // Section content
    <h1>Hello</h1>
@endsection
```

#### `resources/css/app.css`
**Fungsi:** File CSS utama
- Custom styling (jika ada)

#### `resources/js/app.js`
**Fungsi:** File JavaScript utama
- Custom JavaScript (jika ada)

---

### 🔴 **STORAGE/** (File Storage)

#### `storage/app/`
**Fungsi:** File uploads, generated files
- File yang di-upload user
- File yang di-generate aplikasi

#### `storage/framework/`
**Fungsi:** Framework cache files
- Compiled views
- Session files
- Cache files

#### `storage/logs/`
**Fungsi:** Log files
- Error logs
- Application logs
- File: `laravel.log`

---

### 🔴 **TESTS/** (Testing)

#### `tests/TestCase.php`
**Fungsi:** Base test case class

#### `tests/Feature/`
**Fungsi:** Feature tests
- Test untuk fitur lengkap (HTTP requests)

#### `tests/Unit/`
**Fungsi:** Unit tests
- Test untuk unit kecil (functions, methods)

---

## 🔄 Alur Lengkap Request-Response

### Contoh: User Submit Contact Form

```
1. User mengisi form di /contact
   ↓
2. User klik "Send Message" (POST request)
   ↓
3. Browser kirim POST /contact dengan data:
   - name: "John Doe"
   - email: "john@example.com"
   - message: "Hello..."
   - _token: CSRF token
   ↓
4. Laravel terima request di public/index.php
   ↓
5. Bootstrap aplikasi (bootstrap/app.php)
   ↓
6. Routing (routes/web.php) cocokkan POST /contact
   ↓
7. Panggil ContactController@store()
   ↓
8. Validasi input (name, email, message required)
   ↓
9. Jika valid → ContactMessage::create()
   ↓
10. Model ContactMessage save ke database
    ↓
11. Database (database.sqlite) simpan data
    ↓
12. Controller return back()->with('success', ...)
    ↓
13. Laravel render view contact.blade.php
    ↓
14. View tampilkan success message
    ↓
15. Browser tampilkan halaman dengan pesan sukses
```

---

## 📊 Database Schema

### Tabel: `contact_messages`
```sql
id          INTEGER PRIMARY KEY
name        VARCHAR(255)
email       VARCHAR(255)
message     TEXT
status      VARCHAR(20) DEFAULT 'new'  -- new, read, replied
created_at  TIMESTAMP
updated_at  TIMESTAMP
```

### Tabel: `users` (default Laravel)
```sql
id, name, email, password, remember_token, timestamps
```

---

## 🎯 File Penting untuk Development

### Untuk Menambah Fitur Baru:
1. **Route** → `routes/web.php`
2. **Controller** → `app/Http/Controllers/`
3. **Model** → `app/Models/`
4. **Migration** → `database/migrations/`
5. **View** → `resources/views/`

### Untuk Mengubah Tampilan:
1. **Layout** → `resources/views/layouts/app.blade.php`
2. **View** → `resources/views/*.blade.php`
3. **CSS** → Styling di layout atau `resources/css/`

### Untuk Mengubah Konfigurasi:
1. **App Config** → `config/app.php`
2. **Database** → `config/database.php`
3. **Environment** → `.env` file (jika ada)

---

## 🔧 Command Artisan Penting

```bash
# Development
php artisan serve              # Jalankan server development
php artisan migrate            # Jalankan migration
php artisan migrate:rollback   # Rollback migration

# Database
php artisan tinker             # Interactive shell (test query)
php artisan db:seed            # Seed database

# Cache
php artisan cache:clear        # Clear cache
php artisan config:clear       # Clear config cache
php artisan view:clear         # Clear view cache

# Make Files
php artisan make:controller    # Buat controller baru
php artisan make:model        # Buat model baru
php artisan make:migration     # Buat migration baru
```

---

## 📝 Kesimpulan

**File Paling Penting:**
1. ⭐ `routes/web.php` - Routing (URL mapping)
2. ⭐ `app/Http/Controllers/ContactController.php` - Business logic
3. ⭐ `app/Models/ContactMessage.php` - Database model
4. ⭐ `resources/views/layouts/app.blade.php` - Layout utama
5. ⭐ `database/migrations/*_create_contact_messages_table.php` - Database schema
6. ⭐ `bootstrap/app.php` - Bootstrap aplikasi
7. ⭐ `public/index.php` - Entry point web

**Alur Utama:**
```
Request → index.php → bootstrap/app.php → routes/web.php 
→ Controller → Model → Database → View → Response
```
