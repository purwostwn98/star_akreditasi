<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class Mahasiswa extends BaseController
{
    public function mahasiswa_per_angkatan(): string
    {
        $data = [
            'title' => 'Mahasiswa per Angkatan',
            'tahun_now' => Time::now()->year,
            'tahun_6' => Time::now()->year - 6
        ];
        return view('mahasiswa/per_angkatan', $data);
    }

    public function mahasiswa_masuk_lulus(): string
    {
        $data = [
            'title' => 'Mahasiswa Masuk dan Angkatan',
            'tahun_now' => Time::now()->year,
            'tahun_6' => Time::now()->year - 6
        ];
        return view('mahasiswa/mhs_masuk_lulus', $data);
    }

    public function pendaftar_mahasiswa(): string
    {
        $data = [
            'title' => 'Pendaftar Mahasiswa UMS',
            'tahun_now' => Time::now()->year,
            'tahun_6' => Time::now()->year - 6
        ];
        return view('mahasiswa/pendaftar_ums', $data);
    }
}
