<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class Nilai extends BaseController
{
    public function nilai_aik(): string
    {
        $data = [
            'title' => 'Nilai AIK',
            'tahun_now' => Time::now()->year,
            'tahun_6' => Time::now()->year - 6
        ];
        return view('nilai/nilai_aik', $data);
    }

    public function nilai_mkdu(): string
    {
        $data = [
            'title' => 'Nilai MKDU',
            'tahun_now' => Time::now()->year,
            'tahun_6' => Time::now()->year - 6
        ];
        return view('nilai/nilai_mkdu', $data);
    }
}
