# Laravel REST API - Company & Employee Management

Project ini adalah aplikasi backend yang dibangun menggunakan **Laravel** untuk mengelola perusahaan dan karyawan dengan format **REST API**.

---

## Instalasi

Untuk memulai project ini, ikuti langkah-langkah berikut:

1. Clone Repositori

```sh
git clone https://github.com/ernuyoga/tugas1-pwl.git
cd tugas1-pwl.git
```

2. Instal Dependensi

```sh
composer install
```

3. Copy File .env.example menjadi .env dan Sesuaikan Konfigurasi Database

```sh
cp .env.example .env
```

4. Generate Application Key

```sh
php artisan key:generate
```

5. Jalankan Migrasi dan Seeder

```sh
php artisan migrate --seed
```

6. Jalankan server lokal

```sh
php artisan serve
```

## Endpoint API

### **1. Company**

| **Aksi**                   | **Method** | **Endpoint**             |
|----------------------------|-----------|--------------------------|
| **Ambil semua company**    | `GET`     | `/companies`             |
| **Ambil company by ID**    | `GET`     | `/companies/{id}`        |
| **Jumlah employee di company** | `GET`  | `/companies/{id}/employee-count` |
| **Tambah company**         | `POST`    | `/companies`             |
| **Update company**         | `PUT`     | `/companies/{id}`        |
| **Hapus company**          | `DELETE`  | `/companies/{id}`        |

#### Contoh request **Tambah Company**

```json
{
    "company_name": "PT Telkom Indonesia",
    "address": "Jl. Japati No.1, Bandung, Jawa Barat",
    "industry": "Telecommunication",
    "email": "telkom@gmail.com",
    "phone": "0812-3456-7890",
    "website": "www.telkom.com"
}
```
#### Contoh request **Update Company**

```json
{
    "company_name": "PT Telkom Indonesia Raya",
    "address": "Jl. Japati No.1, Bandung, Jawa Barat",
    "industry": "Telecommunication",
    "email": "telkom@gmail.com",
    "phone": "0812-3456-7890",
    "website": "www.telkom.com"
}
```

### **2. Employee**

| **Aksi**                   | **Method** | **Endpoint**             |
|----------------------------|-----------|--------------------------|
| **Ambil semua employee**   | `GET`     | `/employees`             |
| **Ambil employee by ID**   | `GET`     | `/employees/{id}`        |
| **Tambah employee**        | `POST`    | `/employees`             |
| **Update employee**        | `PUT`     | `/employees/{id}`        |
| **Hapus employee**         | `DELETE`  | `/employees/{id}`        |

#### Contoh request **Tambah Employee**

```json
{
    "name": "Andress Fonollosa",
    "address": "Jl. Majapahit No. 16, Jakarta Barat",
    "position": "Tester",
    "birth_date": "1987-09-23",
    "email": "andressfonollosa@gmail.com",
    "phone": "0812-3456-7890",
    "company_id": 1
}
```

#### Contoh request **Update Employee**

```json
{
    "name": "Andress Fonollosa Jr.",
    "address": "Jl. Majapahit No. 16, Jakarta Barat",
    "position": "Tester",
    "birth_date": "1987-09-23",
    "email": "andressfonollosa@gmail.com",
    "phone": "0812-3456-7890",
    "company_id": 1
}
```