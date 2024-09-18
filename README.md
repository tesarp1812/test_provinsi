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
Running the Application
To run the Lumen application, execute the following command:

bash
Salin kode
php -S localhost:8000 -t public
Now, you can access the API at http://localhost:8000.

Database Migration and Seeding
To create the necessary tables and seed the database with initial data, run:

bash
Salin kode
php artisan migrate --seed
This command will create the provinsi and ktp tables and populate them with sample data.

API Endpoints
Get All Provinces
URL: /api/provinsi
Method: GET
Response: Returns a list of all provinces.
Store Province
URL: /api/provinsi
Method: POST
Request Body:
json
Salin kode
{
    "nama_prop": "New Province",
    "jumlah_penduduk": 1000000
}
Response: Returns the created province object.
Get All KTP
URL: /api/ktp
Method: GET
Response: Returns a list of all KTP records.
Store KTP
URL: /api/ktp
Method: POST
Request Body:
json
Salin kode
{
    "Id_prop": 1,
    "nik": "1234567890123456",
    "nama": "John Doe"
}
Response: Returns the created KTP object.
Get KTP by NIK
URL: /api/ktp/{nik}
Method: GET
Response: Returns the KTP record for the given NIK.
