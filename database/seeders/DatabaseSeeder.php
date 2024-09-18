<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            // Menambahkan data ke tabel 'provinsi'
            DB::table('provinsi')->insert([
                ['nama_prop' => 'Aceh', 'jumlah_penduduk' => 5274871, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Sumatera Utara', 'jumlah_penduduk' => 14799361, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Sumatera Barat', 'jumlah_penduduk' => 5534472, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Riau', 'jumlah_penduduk' => 6394087, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Jambi', 'jumlah_penduduk' => 3548228, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Sumatera Selatan', 'jumlah_penduduk' => 8467432, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Bengkulu', 'jumlah_penduduk' => 2010670, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Lampung', 'jumlah_penduduk' => 9007848, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Kepulauan Bangka Belitung', 'jumlah_penduduk' => 1455678, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Kepulauan Riau', 'jumlah_penduduk' => 2064564, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'DKI Jakarta', 'jumlah_penduduk' => 10562088, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Jawa Barat', 'jumlah_penduduk' => 48274162, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Jawa Tengah', 'jumlah_penduduk' => 36516035, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'DI Yogyakarta', 'jumlah_penduduk' => 3668719, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Jawa Timur', 'jumlah_penduduk' => 40665696, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Banten', 'jumlah_penduduk' => 11904562, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Bali', 'jumlah_penduduk' => 4317404, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'SMDNG', 'jumlah_penduduk' => 705, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Nusa Tenggara Barat', 'jumlah_penduduk' => 5320092, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Nusa Tenggara Timur', 'jumlah_penduduk' => 5325566, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Kalimantan Barat', 'jumlah_penduduk' => 5414390, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Kalimantan Tengah', 'jumlah_penduduk' => 2669969, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Kalimantan Selatan', 'jumlah_penduduk' => 4073584, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Kalimantan Timur', 'jumlah_penduduk' => 3766039, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Kalimantan Utara', 'jumlah_penduduk' => 701814, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Sulawesi Utara', 'jumlah_penduduk' => 2621923, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Sulawesi Tengah', 'jumlah_penduduk' => 2985734, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Sulawesi Selatan', 'jumlah_penduduk' => 9073509, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Sulawesi Tenggara', 'jumlah_penduduk' => 2624875, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Gorontalo', 'jumlah_penduduk' => 1171681, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Sulawesi Barat', 'jumlah_penduduk' => 1419229, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Maluku', 'jumlah_penduduk' => 1848923, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Maluku Utara', 'jumlah_penduduk' => 1282937, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Papua Barat', 'jumlah_penduduk' => 1134068, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['nama_prop' => 'Papua', 'jumlah_penduduk' => 4303707, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ]);
            
            // Menambahkan data ke tabel 'ktp'
            DB::table('ktp')->insert([
                ['Id_prop' => 12, 'nik' => '1234567890123456', 'nama' => 'Claravel', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['Id_prop' => 3, 'nik' => '2345678901234567', 'nama' => 'Rara JS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['Id_prop' => 1, 'nik' => '3456789012345678', 'nama' => 'Abdul', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['Id_prop' => 13, 'nik' => '4567890123456789', 'nama' => 'Jeson', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['Id_prop' => 24, 'nik' => '5678901234567890', 'nama' => 'Pipiton', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ]);
        });
    }
}
