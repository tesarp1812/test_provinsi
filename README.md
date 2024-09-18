# Lumen API for Provinsi and KTP Management

This is a simple Lumen API for managing data related to provinces (`provinsi`) and identity cards (`KTP`). It includes endpoints for retrieving, creating, and showing records from the database.

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Running the Application](#running-the-application)
- [Database Migration and Seeding](#database-migration-and-seeding)
- [API Endpoints](#api-endpoints)
  - [Get All Provinces](#get-all-provinces)
  - [Store Province](#store-province)
  - [Get All KTP](#get-all-ktp)
  - [Store KTP](#store-ktp)
  - [Get KTP by NIK](#get-ktp-by-nik)
- [Contributing](#contributing)
- [License](#license)

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/repository-name.git
   cd repository-name
2. Install dependencies using Composer:
   ```bash
   composer install
3. Create a .env file and configure your database connection:
   ```bash
   cp .env.example .env
5. Set your database connection details in the .env file.
   ```bash
7. To run the Lumen application, execute the following command:
   ```bash
   php -S localhost:8000 -t public
9. To create the necessary tables and seed the database with initial data, run:
    ```bash
    php artisan migrate --seed
    
Get All KTP
URL: /api/ktp
Method: GET
Response: Returns a list of all KTP records.. 

Store Province
URL: /api/provinsi
Method: POST
Request Body:
```bash
{
    "nama_prop": "New Province",
    "jumlah_penduduk": 1000000
}
```

Get All KTP
URL: /api/ktp
Method: GET
Response: Returns a list of all KTP records.

Store KTP
URL: /api/ktp
Method: POST
Request Body:
```
{
    "Id_prop": 1,
    "nik": "1234567890123456",
    "nama": "John Doe"
}
```

Get KTP by NIK
URL: /api/ktp/{nik}
Method: GET
Response: Returns the KTP record for the given NIK.
