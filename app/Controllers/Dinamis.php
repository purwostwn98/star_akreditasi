<?php

namespace App\Controllers;

class Dinamis extends BaseController
{
    public function load_mahasiswa_angkatan()
    {
        if ($this->request->isAJAX()) {
            $tahun = $this->request->getPost('tahun');
            $prodi = $this->request->getPost('prodi');
            $jenjang = $this->request->getPost('jenjang');
            // $tahun = 25;
            $tahun_6 = intval($tahun) - 6;

            $data = array(
                "success" => true,
                "result" => array(
                    "tahunnow" => "2024",
                    "table_data" => array(
                        "tahun-6" => array(
                            "satu" => 8324,
                            "dua" => 8034,
                            "tiga" => 7171,
                            "empat" => 6996,
                            "lima" => 3635,
                            "enam" => 1157,
                            "lulus" => 6197
                        ),
                        "tahun-5" => array(
                            "dua" => 8491,
                            "tiga" => 7805,
                            "empat" => 7403,
                            "lima" => 7228,
                            "enam" => 3144,
                            "lulus" => 5613
                        ),
                        "tahun-4" => array(
                            "tiga" => 7737,
                            "empat" => 6914,
                            "lima" => 6562,
                            "enam" => 6383,
                            "lulus" => 1413
                        ),
                        "tahun-3" => array(
                            "empat" => 7764,
                            "lima" => 6766,
                            "enam" => 6338,
                            "lulus" => 451
                        ),
                        "tahun-2" => array(
                            "lima" => 7170,
                            "enam" => 6464,
                            "lulus" => ""
                        ),
                        "tahun-1" => array(
                            "enam" => 6815,
                            "lulus" => ""
                        ),
                        "tahun" => array(
                            "tujuh" => 47,
                            "lulus" => ""
                        )
                    ),
                    "prodi" => array(
                        array("id" => "A210", "ket" => "Pend. Akuntansi"),
                        array("id" => "A220", "ket" => "Pend. Pancasila dan Kewarganegaraan"),
                        array("id" => "A310", "ket" => "Pendidikan Bahasa dan Sastra Indonesia"),
                        // and so on...
                    ),
                    "year" => array(
                        "2014", "2015", "2016", "2017", "2018", "2019", "2020", "2021", "2022", "2023"
                    )
                )
            );

            $arr_tahun = [];
            for ($i = $tahun_6; $i <= $tahun; $i++) {
                for ($a = $tahun_6; $a <= $tahun; $a++) {
                    $arr_tahun[$a . '-' . $i] = rand(100, 8000);
                    if (!empty($arr_tahun[$a . '-' . $i])) {
                        $arr_tahun[$i . '-' . $a] = 0;
                    }
                    if ($a == $i) {
                        $arr_tahun[$a . '-' . $i] = rand(7000, 8000);
                    }
                }
            }
            $tr = "";
            $th = 6;
            $label = ['satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'lulus'];
            for ($i = $tahun_6; $i <= $tahun; $i++) {
                $tr .= '<tr> <th class="year-data fw-bold"><b> ' . $i . ' </b></th>';
                if (!empty($data['result']['table_data']['tahun-' . $th])) {
                    // foreach ($data['result']['table_data']['tahun-' . $th] as $key => $val) {
                    for ($u = 0; $u <= 7; $u++) {
                        if (array_key_exists($label[$u], $data['result']['table_data']['tahun-' . $th])) {
                            $val = $data['result']['table_data']['tahun-' . $th][$label[$u]];
                            $tr .= '<td class="mhs-data-perangkatan"><label id="' . $i . '-' . $u . '" title="Aktif: 230 | Tidak Aktif: 100">' . $val . '</label></td>';
                        } else {
                            $tr .= '<td class="mhs-data-perangkatan"><label id="' . $i . '-' . $u . '" title="Aktif: 230 | Tidak Aktif: 100"> </label></td>';
                        }
                    }
                    // }
                } else {
                    for ($u = 0; $u <= 7; $u++) {
                        if (array_key_exists($label[$u], $data['result']['table_data']['tahun'])) {
                            $val = $data['result']['table_data']['tahun'][$label[$u]];
                            $tr .= '<td class="mhs-data-perangkatan"><label id="' . $i . '-' . $u . '" title="Aktif: 230 | Tidak Aktif: 100">' . $val . '</label></td>';
                        } else {
                            $tr .= '<td class="mhs-data-perangkatan"><label id="' . $i . '-' . $u . '" title="Aktif: 230 | Tidak Aktif: 100"> </label></td>';
                        }
                    }
                }
                $tr .= '</tr>';
                $th -= 1;
            }

            $data = [
                'arr_tahun' => $arr_tahun,
                'tr' => $tr,
                'tahun_awal' => $tahun,
                'tahun_akhir' => $tahun_6

            ];
            echo json_encode($data);
        } else {
            echo ("Maaf perintah anda tidak dapat diproses");
        }
    }

    public function load_masuk_lulus()
    {
        $tahun = $this->request->getPost('tahun');
        $prodi = $this->request->getPost('prodi');
        $jenjang = $this->request->getPost('jenjang');

        $data = array(
            "success" => true,
            "result" => array(
                "tahun-4" => array(
                    "data_tampung" => "",
                    "jml_calon_mhs_baru" => array(
                        "ikut_seleksi" => 19768,
                        "lulus_seleksi" => 10958
                    ),
                    "jml_mhs_baru" => array(
                        "reguler" => 9522,
                        "transfer" => ""
                    ),
                    "jml_total_mhs" => array(
                        "reguler" => 32328,
                        "transfer" => ""
                    ),
                    "jml_lulusan" => array(
                        "reguler" => 5566,
                        "transfer" => ""
                    ),
                    "ipk_lulusan_reg" => array(
                        "min" => 0,
                        "rat" => 3.31,
                        "max" => 4
                    ),
                    "presentase_ipk_lulusan_reg" => array(
                        "A" => 195,
                        "B" => 3701,
                        "C" => 1670
                    )
                ),
                "tahun-3" => array(
                    "data_tampung" => "",
                    "jml_calon_mhs_baru" => array(
                        "ikut_seleksi" => 19661,
                        "lulus_seleksi" => 12152
                    ),
                    "jml_mhs_baru" => array(
                        "reguler" => 9390,
                        "transfer" => ""
                    ),
                    "jml_total_mhs" => array(
                        "reguler" => 32742,
                        "transfer" => ""
                    ),
                    "jml_lulusan" => array(
                        "reguler" => 6869,
                        "transfer" => ""
                    ),
                    "ipk_lulusan_reg" => array(
                        "min" => 0,
                        "rat" => 3.33,
                        "max" => 4
                    ),
                    "presentase_ipk_lulusan_reg" => array(
                        "A" => 319,
                        "B" => 4152,
                        "C" => 2398
                    )
                ),
                "tahun-2" => array(
                    "data_tampung" => "",
                    "jml_calon_mhs_baru" => array(
                        "ikut_seleksi" => 18472,
                        "lulus_seleksi" => 12206
                    ),
                    "jml_mhs_baru" => array(
                        "reguler" => 9554,
                        "transfer" => ""
                    ),
                    "jml_total_mhs" => array(
                        "reguler" => 36030,
                        "transfer" => ""
                    ),
                    "jml_lulusan" => array(
                        "reguler" => 8164,
                        "transfer" => ""
                    ),
                    "ipk_lulusan_reg" => array(
                        "min" => 2.22,
                        "rat" => 3.36,
                        "max" => 4
                    ),
                    "presentase_ipk_lulusan_reg" => array(
                        "A" => 242,
                        "B" => 4987,
                        "C" => 2935
                    )
                ),
                "tahun-1" => array(
                    "data_tampung" => "",
                    "jml_calon_mhs_baru" => array(
                        "ikut_seleksi" => 21208,
                        "lulus_seleksi" => 13619
                    ),
                    "jml_mhs_baru" => array(
                        "reguler" => 8545,
                        "transfer" => ""
                    ),
                    "jml_total_mhs" => array(
                        "reguler" => 35850,
                        "transfer" => ""
                    ),
                    "jml_lulusan" => array(
                        "reguler" => 5614,
                        "transfer" => ""
                    ),
                    "ipk_lulusan_reg" => array(
                        "min" => 2.28,
                        "rat" => 3.43,
                        "max" => 4
                    ),
                    "presentase_ipk_lulusan_reg" => array(
                        "A" => 112,
                        "B" => 3000,
                        "C" => 2502
                    )
                ),
                "tahun" => array(
                    "data_tampung" => "",
                    "jml_calon_mhs_baru" => array(
                        "ikut_seleksi" => 9297,
                        "lulus_seleksi" => 8224
                    ),
                    "jml_mhs_baru" => array(
                        "reguler" => 0,
                        "transfer" => ""
                    ),
                    "jml_total_mhs" => array(
                        "reguler" => 36662,
                        "transfer" => ""
                    ),
                    "jml_lulusan" => array(
                        "reguler" => 6108,
                        "transfer" => ""
                    ),
                    "ipk_lulusan_reg" => array(
                        "min" => 0,
                        "rat" => 2.82,
                        "max" => 4
                    ),
                    "presentase_ipk_lulusan_reg" => array(
                        "A" => 1198,
                        "B" => 2642,
                        "C" => 2268
                    )
                )
            )
        );

        // $tahun = 25;
        $tahun_6 = intval($tahun) - 4;
        $urut = 4;
        $tr = "";
        for ($i = $tahun_6; $i <= $tahun; $i++) {
            $tr .= '<tr><td class="year-data">' . $i . '</td>';
            if ($urut != 0) {
                $tahunke = "tahun-" . $urut;
            } else {
                $tahunke = "tahun";
            }
            $tr .= '<td>' . $data['result'][$tahunke]['data_tampung'] . '</td>';
            $tr .= '<td class="mhs-data-perangkatan">' . $data['result'][$tahunke]['jml_calon_mhs_baru']['ikut_seleksi'] . '</td>';
            $tr .= '<td class="mhs-data-perangkatan">' . $data['result'][$tahunke]['jml_calon_mhs_baru']['lulus_seleksi'] . '</td>';
            $tr .= '<td class="mhs-data-perangkatan">' . $data['result'][$tahunke]['jml_mhs_baru']['reguler'] . '</td>';
            $tr .= '<td class="mhs-data-perangkatan">' . $data['result'][$tahunke]['jml_mhs_baru']['transfer'] . '</td>';
            $tr .= '<td class="mhs-data-perangkatan">' . $data['result'][$tahunke]['jml_total_mhs']['reguler'] . '</td>';
            $tr .= '<td class="mhs-data-perangkatan">' . $data['result'][$tahunke]['jml_total_mhs']['transfer'] . '</td>';
            $tr .= '<td class="mhs-data-perangkatan">' . $data['result'][$tahunke]['jml_lulusan']['reguler'] . '</td>';
            $tr .= '<td class="mhs-data-perangkatan">' . $data['result'][$tahunke]['jml_lulusan']['transfer'] . '</td>';
            $tr .= '<td class="mhs-data-perangkatan">' . $data['result'][$tahunke]['ipk_lulusan_reg']['min'] . '</td>';
            $tr .= '<td class="mhs-data-perangkatan">' . $data['result'][$tahunke]['ipk_lulusan_reg']['rat'] . '</td>';
            $tr .= '<td class="mhs-data-perangkatan">' . $data['result'][$tahunke]['ipk_lulusan_reg']['max'] . '</td>';
            $tr .= '<td class="mhs-data-perangkatan">' . $data['result'][$tahunke]['presentase_ipk_lulusan_reg']['A'] . '</td>';
            $tr .= '<td class="mhs-data-perangkatan">' . $data['result'][$tahunke]['presentase_ipk_lulusan_reg']['B'] . '</td>';
            $tr .= '<td class="mhs-data-perangkatan">' . $data['result'][$tahunke]['presentase_ipk_lulusan_reg']['C'] . '</td></tr>';
            $urut -= 1;
        }

        $data = [
            // 'arr_tahun' => $arr_tahun,
            'tr' => $tr,
            'tahun_awal' => $tahun,
            'tahun_akhir' => $tahun_6

        ];
        echo json_encode($data);
    }

    public function load_prodi()
    {
        $jenjang = $this->request->getPost('jenjang');
        $prodi = [
            [
                "jenjang" => "s1",
                "id" => "A210",
                "ket" => "Pend. Akuntansi"
            ],
            [
                "jenjang" => "s1",
                "id" => "A220",
                "ket" => "Pend. Pancasila dan Kewarganegaraan"
            ],
            [
                "jenjang" => "s1",
                "id" => "A310",
                "ket" => "Pendidikan Bahasa dan Sastra Indonesia"
            ],
            [
                "jenjang" => "s1",
                "id" => "A320",
                "ket" => "Pend. Bhs. Inggris"
            ],
            [
                "jenjang" => "s1",
                "id" => "A410",
                "ket" => "Pendidikan Matematika"
            ],
            [
                "jenjang" => "s1",
                "id" => "A418",
                "ket" => "Magister Pendidikan Matematika"
            ],
            [
                "jenjang" => "s1",
                "id" => "A420",
                "ket" => "Pend. Biologi"
            ],
            [
                "jenjang" => "s1",
                "id" => "A510",
                "ket" => "Pend. Guru SD"
            ],
            [
                "jenjang" => "s1",
                "id" => "A520",
                "ket" => "Pend. Guru Pend. Anak Usia Dini"
            ],
            [
                "jenjang" => "s1",
                "id" => "A610",
                "ket" => "Pendidikan Geografi"
            ],
            [
                "jenjang" => "s1",
                "id" => "A710",
                "ket" => "Pendidikan Teknik Informatika"
            ],
            [
                "jenjang" => "s1",
                "id" => "A810",
                "ket" => "Pendidikan Olahraga"
            ],
            [
                "jenjang" => "s1",
                "id" => "A900",
                "ket" => "Pendidikan Profesi Guru"
            ],
            [
                "jenjang" => "s1",
                "id" => "B100",
                "ket" => "Manajemen"
            ],
            [
                "jenjang" => "s1",
                "id" => "B10A",
                "ket" => "Management"
            ],
            [
                "jenjang" => "s1",
                "id" => "B200",
                "ket" => "Akuntansi"
            ],
            [
                "jenjang" => "s1",
                "id" => "B300",
                "ket" => "Ekonomi Pembangunan"
            ],
            [
                "jenjang" => "s1",
                "id" => "B301",
                "ket" => "Vokasi Perbankan Syariah"
            ],
            [
                "jenjang" => "s1",
                "id" => "B320",
                "ket" => "Vokasi Perhotelan Syariah"
            ],
            [
                "jenjang" => "s1",
                "id" => "B400",
                "ket" => "Ekonomi Syari'ah"
            ],
            [
                "jenjang" => "s1",
                "id" => "C100",
                "ket" => "Hukum"
            ],
            [
                "jenjang" => "s1",
                "id" => "D100",
                "ket" => "Teknik Sipil"
            ],
            [
                "jenjang" => "s1",
                "id" => "D10A",
                "ket" => "Civil Engineering"
            ],
            [
                "jenjang" => "s1",
                "id" => "D200",
                "ket" => "Teknik Mesin"
            ],
            [
                "jenjang" => "s1",
                "id" => "D201",
                "ket" => "Vokasi Alat Berat"
            ],
            [
                "jenjang" => "s1",
                "id" => "D209",
                "ket" => "Teknik Mesin (S3)"
            ],

            [
                "jenjang" => "s2",
                "id" => "F107",
                "ket" => "Magister Profesi Psikologi"
            ],
            [
                "jenjang" => "s3",
                "id" => "F109",
                "ket" => "Psikologi (S3)"
            ],
            [
                "jenjang" => "s1",
                "id" => "G000",
                "ket" => "Pendidikan Agama Islam"
            ],
            [
                "jenjang" => "s1",
                "id" => "G00A",
                "ket" => "Tarbiyah Internasional"
            ],
            [
                "jenjang" => "s1",
                "id" => "G100",
                "ket" => "Ilmu Alquran dan Tafsir"
            ],
            [
                "jenjang" => "s1",
                "id" => "H000",
                "ket" => "Perbandingan Agama"
            ],
            [
                "jenjang" => "s1",
                "id" => "H100",
                "ket" => "Pondok Sobron"
            ],
            [
                "jenjang" => "s1",
                "id" => "I000",
                "ket" => "Hukum Ekonomi Syari'ah"
            ],
            [
                "jenjang" => "d3",
                "id" => "J100",
                "ket" => "Fisioterapi (D3)"
            ],
            [
                "jenjang" => "d4",
                "id" => "J110",
                "ket" => "Fisioterapi (D4)"
            ],
            [
                "jenjang" => "s1",
                "id" => "J120",
                "ket" => "Fisioterapi S1"
            ],
            [
                "jenjang" => "s2",
                "id" => "J128",
                "ket" => "Magister Fisioterapi"
            ],
            [
                "jenjang" => "s1",
                "id" => "J130",
                "ket" => "Pendidikan Profesi Fisioterapis"
            ],
            [
                "jenjang" => "d3",
                "id" => "J200",
                "ket" => "Keperawatan (D3)"
            ],
            [
                "jenjang" => "s1",
                "id" => "J210",
                "ket" => "Ilmu Keperawatan (S1)"
            ],
            [
                "jenjang" => "s2",
                "id" => "J218",
                "ket" => "Magister Keperawatan"
            ],
            [
                "jenjang" => "s1",
                "id" => "J220",
                "ket" => "Keperawatan (S1) Ekstensi"
            ],
            [
                "jenjang" => "s1",
                "id" => "J230",
                "ket" => "Keperawatan Profesi (NERS)"
            ],
            [
                "jenjang" => "d3",
                "id" => "J300",
                "ket" => "Gizi (D3)"
            ],
            [
                "jenjang" => "s1",
                "id" => "J310",
                "ket" => "Ilmu Gizi (S1)"
            ],
            [
                "jenjang" => "s1",
                "id" => "J410",
                "ket" => "Kesehatan Masyarakat (S1)"
            ],
            [
                "jenjang" => "s1",
                "id" => "J500",
                "ket" => "Pendidikan Dokter"
            ],
            [
                "jenjang" => "s2",
                "id" => "J508",
                "ket" => "Magister Administrasi Rumah Sakit"
            ],
            [
                "jenjang" => "s1",
                "id" => "J510",
                "ket" => "Profesi Dokter"
            ],
            [
                "jenjang" => "s1",
                "id" => "J520",
                "ket" => "Pendidikan Dokter Gigi"
            ],
            [
                "jenjang" => "s2",
                "id" => "S100",
                "ket" => "Magister Teknik Sipil"
            ],
            [
                "jenjang" => "s2",
                "id" => "S200",
                "ket" => "Magister Pendidikan Bahasa Indonesia"
            ],
            [
                "jenjang" => "s2",
                "id" => "S300",
                "ket" => "Magister Psikologi"
            ],
            [
                "jenjang" => "s2",
                "id" => "S400",
                "ket" => "Magister Pendidikan Bahasa Inggris"
            ],
            [
                "jenjang" => "s2",
                "id" => "T100",
                "ket" => "Magister Profesi Psikologi"
            ],
            [
                "jenjang" => "s2",
                "id" => "U100",
                "ket" => "Magister Teknik Mesin"
            ],
            [
                "jenjang" => "s2",
                "id" => "U200",
                "ket" => "Magister Teknik Kimia"
            ],
            [
                "jenjang" => "s2",
                "id" => "V100",
                "ket" => "Magister Farmasi"
            ],
            [
                "jenjang" => "s2",
                "id" => "W100",
                "ket" => "Magister Akuntansi"
            ]
        ];

        // $arr_prodi = [];
        $opt = "";
        if ($jenjang == 'all') {
            $label_jenjang = "";
        } else {
            $label_jenjang = strtoupper(strval($jenjang));
        }
        $opt .=  '<option value="all">Semua Prodi ' . $label_jenjang . '</option>';
        foreach ($prodi as $key => $value) {
            if ($jenjang == 'all') {
                $opt .=  '<option value="' . $value['id'] . '">' . $value['ket'] . '</option>';
                // $arr_prodi[] = $value;
            } else {
                if ($value['jenjang'] == $jenjang) {
                    $opt .=  '<option value="' . $value['id'] . '">' . $value['ket'] . '</option>';
                }
            }
        }

        $data = [
            // 'arr_tahun' => $arr_tahun,
            'opt' => $opt

        ];
        echo json_encode($data);
    }

    public function load_nilai_aik()
    {
        $tahun = $this->request->getPost('tahun');
        $prodi = $this->request->getPost('prodi');
        $jenjang = $this->request->getPost('jenjang');


        $data = [
            "success" => true,
            "hasil" => [
                "mk" => [
                    [
                        "id" => 1,
                        "ket" => "Agama"
                    ],
                    [
                        "id" => 2,
                        "ket" => "Ibadah dan Muamalah"
                    ],
                    [
                        "id" => 3,
                        "ket" => "Islam dan Ipteks"
                    ],
                    [
                        "id" => 4,
                        "ket" => "Kemuhammadiyahan"
                    ]
                ],
                "nilai" => [
                    [
                        "tahun_masuk" => "2023",
                        "status" => 1,
                        "na" => "A ",
                        "jml" => 1832
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 2,
                        "na" => "A ",
                        "jml" => 13
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 3,
                        "na" => "A ",
                        "jml" => 12
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 4,
                        "na" => "A ",
                        "jml" => 12
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 1,
                        "na" => "AB",
                        "jml" => 9
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 2,
                        "na" => "AB",
                        "jml" => 7
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 3,
                        "na" => "AB",
                        "jml" => 5
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 4,
                        "na" => "AB",
                        "jml" => 6
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 1,
                        "na" => "B ",
                        "jml" => 778
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 2,
                        "na" => "B ",
                        "jml" => 7
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 3,
                        "na" => "B ",
                        "jml" => 2
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 4,
                        "na" => "B ",
                        "jml" => 1
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 1,
                        "na" => "BC",
                        "jml" => 3
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 2,
                        "na" => "BC",
                        "jml" => 1
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 3,
                        "na" => "BC",
                        "jml" => 1
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 4,
                        "na" => "BC",
                        "jml" => 1
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 3,
                        "na" => "C ",
                        "jml" => 3
                    ],
                    [
                        "tahun_masuk" => "2023",
                        "status" => 4,
                        "na" => "C ",
                        "jml" => 1
                    ]
                ]
            ]
        ];

        $th = "";
        foreach ($data['hasil']['mk'] as $key => $v) {
            $th .= '<th data-v-724592ca="">' . $v['ket'] . '</th>';
        }

        $arr_nilai = [];
        foreach ($data['hasil']['nilai'] as $k => $n) {
            $arr_nilai[md5($n['na'] . $n['status'])] = $n['jml'];
        }

        $arr_na = ['A ', 'AB', 'B ', 'BC', 'C '];
        $tr = "";
        foreach ($arr_na as $na => $v) {
            $tr .= '<tr><th class="text-center">' . $v . '</th>';
            for ($i = 1; $i <= count($data['hasil']['mk']); $i++) {
                if (array_key_exists(md5($v . $i), $arr_nilai)) {
                    $tr .= '<td class="text-center">' . $arr_nilai[md5($v . $i)] . '</td>';
                } else {
                    $tr .= '<td class="text-center">-</td>';
                }
            }
            $tr .= '</tr>';
        }

        $data = [
            // 'arr_tahun' => $arr_tahun,
            'th' => $th,
            'tr' => $tr,
            'tahun_awal' => $tahun,
            // 'tahun_akhir' => $tahun_6

        ];
        echo json_encode($data);
    }

    public function load_nilai_mkdu()
    {
        $tahun = $this->request->getPost('tahun');
        $prodi = $this->request->getPost('prodi');
        $jenjang = $this->request->getPost('jenjang');

        $data = [
            "success" => true,
            "hasil" => [
                "mk" => [
                    [
                        "id" => 1,
                        "ket" => "Bahasa Inggris 1"
                    ],
                    [
                        "id" => 2,
                        "ket" => "Bahasa Inggris 2"
                    ],
                    [
                        "id" => 3,
                        "ket" => "Pancasila"
                    ],
                    [
                        "id" => 4,
                        "ket" => "Kewarganegaraan"
                    ],
                    [
                        "id" => 5,
                        "ket" => "Bahasa Indonesia"
                    ]
                ],
                "nilai" => [
                    [
                        "tahun_masuk" => 2020,
                        "status" => "5",
                        "na" => "A ",
                        "jml" => 3956
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "3",
                        "na" => "A ",
                        "jml" => 4135
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "2",
                        "na" => "A ",
                        "jml" => 2929
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "4",
                        "na" => "A ",
                        "jml" => 3842
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "1",
                        "na" => "A ",
                        "jml" => 3121
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "3",
                        "na" => "AB",
                        "jml" => 1673
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "2",
                        "na" => "AB",
                        "jml" => 2086
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "4",
                        "na" => "AB",
                        "jml" => 1498
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "1",
                        "na" => "AB",
                        "jml" => 2072
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "5",
                        "na" => "AB",
                        "jml" => 1696
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "2",
                        "na" => "B ",
                        "jml" => 1294
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "5",
                        "na" => "B ",
                        "jml" => 626
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "1",
                        "na" => "B ",
                        "jml" => 997
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "3",
                        "na" => "B ",
                        "jml" => 951
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "4",
                        "na" => "B ",
                        "jml" => 989
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "5",
                        "na" => "BC",
                        "jml" => 339
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "4",
                        "na" => "BC",
                        "jml" => 242
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "1",
                        "na" => "BC",
                        "jml" => 247
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "3",
                        "na" => "BC",
                        "jml" => 184
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "2",
                        "na" => "BC",
                        "jml" => 447
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "1",
                        "na" => "C ",
                        "jml" => 97
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "3",
                        "na" => "C ",
                        "jml" => 73
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "4",
                        "na" => "C ",
                        "jml" => 179
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "2",
                        "na" => "C ",
                        "jml" => 152
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "5",
                        "na" => "C ",
                        "jml" => 127
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "3",
                        "na" => "D ",
                        "jml" => 4
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "1",
                        "na" => "D ",
                        "jml" => 43
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "2",
                        "na" => "D ",
                        "jml" => 66
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "5",
                        "na" => "D ",
                        "jml" => 58
                    ],
                    [
                        "tahun_masuk" => 2020,
                        "status" => "4",
                        "na" => "D ",
                        "jml" => 52
                    ]
                ]
            ]
        ];

        $th = "";
        foreach ($data['hasil']['mk'] as $key => $v) {
            $th .= '<th data-v-724592ca="">' . $v['ket'] . '</th>';
        }

        $arr_nilai = [];
        foreach ($data['hasil']['nilai'] as $k => $n) {
            $arr_nilai[md5($n['na'] . $n['status'])] = $n['jml'];
        }

        $arr_na = ['A ', 'AB', 'B ', 'BC', 'C '];
        $tr = "";
        foreach ($arr_na as $na => $v) {
            $tr .= '<tr><th class="text-center">' . $v . '</th>';
            for ($i = 1; $i <= count($data['hasil']['mk']); $i++) {
                if (array_key_exists(md5($v . $i), $arr_nilai)) {
                    $tr .= '<td class="text-center">' . $arr_nilai[md5($v . $i)] . '</td>';
                } else {
                    $tr .= '<td class="text-center">-</td>';
                }
            }
            $tr .= '</tr>';
        }

        $data = [
            // 'arr_tahun' => $arr_tahun,
            'th' => $th,
            'tr' => $tr,
            'tahun_awal' => $tahun,
            // 'tahun_akhir' => $tahun_6

        ];
        echo json_encode($data);
    }

    public function load_pendaftar_mahasiswa()
    {
        $tahun = $this->request->getPost('tahun');
        $jenjang = $this->request->getPost('jenjang');
        $prodi = $this->request->getPost('prodi');

        $data = [
            "success" => true,
            "provinsi" => [
                [
                    "FKDPROP" => 11,
                    "FPROPINSI" => "Nangro Aceh Darussalam",
                    "Jumlah_Pendaftar" => 22,
                    "Jumlah_Diterima" => 22,
                    "Jumlah_Regristrasi" => 22
                ],
                [
                    "FKDPROP" => 12,
                    "FPROPINSI" => "Sumatra Utara",
                    "Jumlah_Pendaftar" => 28,
                    "Jumlah_Diterima" => 25,
                    "Jumlah_Regristrasi" => 25
                ],
                [
                    "FKDPROP" => 13,
                    "FPROPINSI" => "Sumatra Barat",
                    "Jumlah_Pendaftar" => 24,
                    "Jumlah_Diterima" => 23,
                    "Jumlah_Regristrasi" => 23
                ],
                [
                    "FKDPROP" => 14,
                    "FPROPINSI" => "Riau",
                    "Jumlah_Pendaftar" => 59,
                    "Jumlah_Diterima" => 57,
                    "Jumlah_Regristrasi" => 57
                ],
                [
                    "FKDPROP" => 15,
                    "FPROPINSI" => "Jambi",
                    "Jumlah_Pendaftar" => 49,
                    "Jumlah_Diterima" => 45,
                    "Jumlah_Regristrasi" => 45
                ],
                [
                    "FKDPROP" => 16,
                    "FPROPINSI" => "Sumatra Selatan",
                    "Jumlah_Pendaftar" => 67,
                    "Jumlah_Diterima" => 62,
                    "Jumlah_Regristrasi" => 62
                ],
                [
                    "FKDPROP" => 17,
                    "FPROPINSI" => "Bengkulu",
                    "Jumlah_Pendaftar" => 29,
                    "Jumlah_Diterima" => 28,
                    "Jumlah_Regristrasi" => 28
                ],
                [
                    "FKDPROP" => 18,
                    "FPROPINSI" => "Lampung",
                    "Jumlah_Pendaftar" => 100,
                    "Jumlah_Diterima" => 92,
                    "Jumlah_Regristrasi" => 92
                ],
                [
                    "FKDPROP" => 19,
                    "FPROPINSI" => "Bangka Belitung",
                    "Jumlah_Pendaftar" => 17,
                    "Jumlah_Diterima" => 17,
                    "Jumlah_Regristrasi" => 17
                ],
                [
                    "FKDPROP" => 21,
                    "FPROPINSI" => "Kepulauan Riau ",
                    "Jumlah_Pendaftar" => 33,
                    "Jumlah_Diterima" => 30,
                    "Jumlah_Regristrasi" => 30
                ],
                [
                    "FKDPROP" => 30,
                    "FPROPINSI" => "Banten",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 31,
                    "FPROPINSI" => "DKI Jakarta",
                    "Jumlah_Pendaftar" => 60,
                    "Jumlah_Diterima" => 54,
                    "Jumlah_Regristrasi" => 54
                ],
                [
                    "FKDPROP" => 32,
                    "FPROPINSI" => "Jawa Barat",
                    "Jumlah_Pendaftar" => 336,
                    "Jumlah_Diterima" => 293,
                    "Jumlah_Regristrasi" => 293
                ],
                [
                    "FKDPROP" => 33,
                    "FPROPINSI" => "Jawa Tengah",
                    "Jumlah_Pendaftar" => 6633,
                    "Jumlah_Diterima" => 5700,
                    "Jumlah_Regristrasi" => 5700
                ],
                [
                    "FKDPROP" => 34,
                    "FPROPINSI" => "DI Yogyakarta",
                    "Jumlah_Pendaftar" => 153,
                    "Jumlah_Diterima" => 126,
                    "Jumlah_Regristrasi" => 126
                ],
                [
                    "FKDPROP" => 35,
                    "FPROPINSI" => "Jawa Timur",
                    "Jumlah_Pendaftar" => 920,
                    "Jumlah_Diterima" => 806,
                    "Jumlah_Regristrasi" => 806
                ],
                [
                    "FKDPROP" => 36,
                    "FPROPINSI" => "Banten",
                    "Jumlah_Pendaftar" => 114,
                    "Jumlah_Diterima" => 103,
                    "Jumlah_Regristrasi" => 103
                ],
                [
                    "FKDPROP" => 51,
                    "FPROPINSI" => "Bali",
                    "Jumlah_Pendaftar" => 11,
                    "Jumlah_Diterima" => 11,
                    "Jumlah_Regristrasi" => 11
                ],
                [
                    "FKDPROP" => 52,
                    "FPROPINSI" => "Nusa Tenggara Barat",
                    "Jumlah_Pendaftar" => 40,
                    "Jumlah_Diterima" => 34,
                    "Jumlah_Regristrasi" => 34
                ],
                [
                    "FKDPROP" => 53,
                    "FPROPINSI" => "Nusa Tenggara Timur",
                    "Jumlah_Pendaftar" => 26,
                    "Jumlah_Diterima" => 21,
                    "Jumlah_Regristrasi" => 21
                ],
                [
                    "FKDPROP" => 61,
                    "FPROPINSI" => "Kalimantan Barat",
                    "Jumlah_Pendaftar" => 35,
                    "Jumlah_Diterima" => 30,
                    "Jumlah_Regristrasi" => 30
                ],
                [
                    "FKDPROP" => 62,
                    "FPROPINSI" => "Kalimantan Tengah",
                    "Jumlah_Pendaftar" => 54,
                    "Jumlah_Diterima" => 50,
                    "Jumlah_Regristrasi" => 50
                ],
                [
                    "FKDPROP" => 63,
                    "FPROPINSI" => "Kalimantan Selatan",
                    "Jumlah_Pendaftar" => 68,
                    "Jumlah_Diterima" => 62,
                    "Jumlah_Regristrasi" => 62
                ],
                [
                    "FKDPROP" => 64,
                    "FPROPINSI" => "Kalimantan Timur",
                    "Jumlah_Pendaftar" => 52,
                    "Jumlah_Diterima" => 45,
                    "Jumlah_Regristrasi" => 45
                ],
                [
                    "FKDPROP" => 65,
                    "FPROPINSI" => "Kalimantan Utara",
                    "Jumlah_Pendaftar" => 19,
                    "Jumlah_Diterima" => 18,
                    "Jumlah_Regristrasi" => 18
                ],
                [
                    "FKDPROP" => 70,
                    "FPROPINSI" => "Gorontalo",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 71,
                    "FPROPINSI" => "Sulawesi Utara",
                    "Jumlah_Pendaftar" => 11,
                    "Jumlah_Diterima" => 10,
                    "Jumlah_Regristrasi" => 10
                ],
                [
                    "FKDPROP" => 72,
                    "FPROPINSI" => "Sulawesi Tengah",
                    "Jumlah_Pendaftar" => 7,
                    "Jumlah_Diterima" => 6,
                    "Jumlah_Regristrasi" => 6
                ],
                [
                    "FKDPROP" => 73,
                    "FPROPINSI" => "Sulawesi Selatan",
                    "Jumlah_Pendaftar" => 14,
                    "Jumlah_Diterima" => 13,
                    "Jumlah_Regristrasi" => 13
                ],
                [
                    "FKDPROP" => 74,
                    "FPROPINSI" => "Sulawesi Tenggara",
                    "Jumlah_Pendaftar" => 5,
                    "Jumlah_Diterima" => 5,
                    "Jumlah_Regristrasi" => 5
                ],
                [
                    "FKDPROP" => 75,
                    "FPROPINSI" => "Gorontalo",
                    "Jumlah_Pendaftar" => 4,
                    "Jumlah_Diterima" => 2,
                    "Jumlah_Regristrasi" => 2
                ],
                [
                    "FKDPROP" => 76,
                    "FPROPINSI" => "Sulawesi Barat ",
                    "Jumlah_Pendaftar" => 2,
                    "Jumlah_Diterima" => 2,
                    "Jumlah_Regristrasi" => 2
                ],
                [
                    "FKDPROP" => 81,
                    "FPROPINSI" => "Maluku",
                    "Jumlah_Pendaftar" => 5,
                    "Jumlah_Diterima" => 5,
                    "Jumlah_Regristrasi" => 5
                ],
                [
                    "FKDPROP" => 82,
                    "FPROPINSI" => "Maluku Utara ",
                    "Jumlah_Pendaftar" => 2,
                    "Jumlah_Diterima" => 2,
                    "Jumlah_Regristrasi" => 2
                ],
                [
                    "FKDPROP" => 84,
                    "FPROPINSI" => "Maluku Utara",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 85,
                    "FPROPINSI" => "Irian Jaya Timur",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 86,
                    "FPROPINSI" => "Irian Jaya Tengah",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 87,
                    "FPROPINSI" => "Irian Jaya Barat",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 91,
                    "FPROPINSI" => "Papua Barat ",
                    "Jumlah_Pendaftar" => 15,
                    "Jumlah_Diterima" => 13,
                    "Jumlah_Regristrasi" => 13
                ],
                [
                    "FKDPROP" => 92,
                    "FPROPINSI" => "Papua ",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 94,
                    "FPROPINSI" => "Papua Tengah",
                    "Jumlah_Pendaftar" => 28,
                    "Jumlah_Diterima" => 27,
                    "Jumlah_Regristrasi" => 27
                ],
                [
                    "FKDPROP" => 98,
                    "FPROPINSI" => "Lainnya",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 99,
                    "FPROPINSI" => "Luar Negeri",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ]
            ],
            "rekap_total" => [
                [
                    "Pendaftar" => 9042,
                    "Diterima" => 7839,
                    "Regristrasi" => 7839
                ]
            ]
        ];

        $tr_total = '<tr>
                        <td class="text-center">' . $data['rekap_total'][0]['Pendaftar'] . '</td>
                        <td class="text-center">' . $data['rekap_total'][0]['Diterima'] . '</td>
                        <td class="text-center">' . $data['rekap_total'][0]['Regristrasi'] . '</td>
                    </tr>';

        $tr_prov = '';
        foreach ($data['provinsi'] as $key => $v) {
            $tr_prov .= '<tr>
                            <td>' . $v['FPROPINSI'] . '</td>
                            <td class="text-center">' . $v['Jumlah_Pendaftar'] . '</td>
                            <td class="text-center">' . $v['Jumlah_Diterima'] . '</td>
                            <td class="text-center">' . $v['Jumlah_Regristrasi'] . '</td>
                        </tr>';
        }

        $data = [
            'tr_prov' => $tr_prov,
            'tr_total' => $tr_total,
            'tahun_awal' => $tahun,
            // 'tahun_akhir' => $tahun_6

        ];
        echo json_encode($data);
    }

    public function update_piechart_pendaftar()
    {
        // tangkap post data
        $filter = $this->request->getPost('filter_chart');

        $data_mentah = [
            "success" => true,
            "provinsi" => [
                [
                    "FKDPROP" => 11,
                    "FPROPINSI" => "Nangro Aceh Darussalam",
                    "Jumlah_Pendaftar" => 22,
                    "Jumlah_Diterima" => 22,
                    "Jumlah_Regristrasi" => 22
                ],
                [
                    "FKDPROP" => 12,
                    "FPROPINSI" => "Sumatra Utara",
                    "Jumlah_Pendaftar" => 28,
                    "Jumlah_Diterima" => 25,
                    "Jumlah_Regristrasi" => 25
                ],
                [
                    "FKDPROP" => 13,
                    "FPROPINSI" => "Sumatra Barat",
                    "Jumlah_Pendaftar" => 24,
                    "Jumlah_Diterima" => 23,
                    "Jumlah_Regristrasi" => 23
                ],
                [
                    "FKDPROP" => 14,
                    "FPROPINSI" => "Riau",
                    "Jumlah_Pendaftar" => 59,
                    "Jumlah_Diterima" => 57,
                    "Jumlah_Regristrasi" => 57
                ],
                [
                    "FKDPROP" => 15,
                    "FPROPINSI" => "Jambi",
                    "Jumlah_Pendaftar" => 49,
                    "Jumlah_Diterima" => 45,
                    "Jumlah_Regristrasi" => 45
                ],
                [
                    "FKDPROP" => 16,
                    "FPROPINSI" => "Sumatra Selatan",
                    "Jumlah_Pendaftar" => 67,
                    "Jumlah_Diterima" => 62,
                    "Jumlah_Regristrasi" => 62
                ],
                [
                    "FKDPROP" => 17,
                    "FPROPINSI" => "Bengkulu",
                    "Jumlah_Pendaftar" => 29,
                    "Jumlah_Diterima" => 28,
                    "Jumlah_Regristrasi" => 28
                ],
                [
                    "FKDPROP" => 18,
                    "FPROPINSI" => "Lampung",
                    "Jumlah_Pendaftar" => 100,
                    "Jumlah_Diterima" => 92,
                    "Jumlah_Regristrasi" => 92
                ],
                [
                    "FKDPROP" => 19,
                    "FPROPINSI" => "Bangka Belitung",
                    "Jumlah_Pendaftar" => 17,
                    "Jumlah_Diterima" => 17,
                    "Jumlah_Regristrasi" => 17
                ],
                [
                    "FKDPROP" => 21,
                    "FPROPINSI" => "Kepulauan Riau ",
                    "Jumlah_Pendaftar" => 33,
                    "Jumlah_Diterima" => 30,
                    "Jumlah_Regristrasi" => 30
                ],
                [
                    "FKDPROP" => 30,
                    "FPROPINSI" => "Banten",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 31,
                    "FPROPINSI" => "DKI Jakarta",
                    "Jumlah_Pendaftar" => 60,
                    "Jumlah_Diterima" => 54,
                    "Jumlah_Regristrasi" => 54
                ],
                [
                    "FKDPROP" => 32,
                    "FPROPINSI" => "Jawa Barat",
                    "Jumlah_Pendaftar" => 336,
                    "Jumlah_Diterima" => 293,
                    "Jumlah_Regristrasi" => 293
                ],
                [
                    "FKDPROP" => 33,
                    "FPROPINSI" => "Jawa Tengah",
                    "Jumlah_Pendaftar" => 6633,
                    "Jumlah_Diterima" => 5700,
                    "Jumlah_Regristrasi" => 5700
                ],
                [
                    "FKDPROP" => 34,
                    "FPROPINSI" => "DI Yogyakarta",
                    "Jumlah_Pendaftar" => 153,
                    "Jumlah_Diterima" => 126,
                    "Jumlah_Regristrasi" => 126
                ],
                [
                    "FKDPROP" => 35,
                    "FPROPINSI" => "Jawa Timur",
                    "Jumlah_Pendaftar" => 920,
                    "Jumlah_Diterima" => 806,
                    "Jumlah_Regristrasi" => 806
                ],
                [
                    "FKDPROP" => 36,
                    "FPROPINSI" => "Banten",
                    "Jumlah_Pendaftar" => 114,
                    "Jumlah_Diterima" => 103,
                    "Jumlah_Regristrasi" => 103
                ],
                [
                    "FKDPROP" => 51,
                    "FPROPINSI" => "Bali",
                    "Jumlah_Pendaftar" => 11,
                    "Jumlah_Diterima" => 11,
                    "Jumlah_Regristrasi" => 11
                ],
                [
                    "FKDPROP" => 52,
                    "FPROPINSI" => "Nusa Tenggara Barat",
                    "Jumlah_Pendaftar" => 40,
                    "Jumlah_Diterima" => 34,
                    "Jumlah_Regristrasi" => 34
                ],
                [
                    "FKDPROP" => 53,
                    "FPROPINSI" => "Nusa Tenggara Timur",
                    "Jumlah_Pendaftar" => 26,
                    "Jumlah_Diterima" => 21,
                    "Jumlah_Regristrasi" => 21
                ],
                [
                    "FKDPROP" => 61,
                    "FPROPINSI" => "Kalimantan Barat",
                    "Jumlah_Pendaftar" => 35,
                    "Jumlah_Diterima" => 30,
                    "Jumlah_Regristrasi" => 30
                ],
                [
                    "FKDPROP" => 62,
                    "FPROPINSI" => "Kalimantan Tengah",
                    "Jumlah_Pendaftar" => 54,
                    "Jumlah_Diterima" => 50,
                    "Jumlah_Regristrasi" => 50
                ],
                [
                    "FKDPROP" => 63,
                    "FPROPINSI" => "Kalimantan Selatan",
                    "Jumlah_Pendaftar" => 68,
                    "Jumlah_Diterima" => 62,
                    "Jumlah_Regristrasi" => 62
                ],
                [
                    "FKDPROP" => 64,
                    "FPROPINSI" => "Kalimantan Timur",
                    "Jumlah_Pendaftar" => 52,
                    "Jumlah_Diterima" => 45,
                    "Jumlah_Regristrasi" => 45
                ],
                [
                    "FKDPROP" => 65,
                    "FPROPINSI" => "Kalimantan Utara",
                    "Jumlah_Pendaftar" => 19,
                    "Jumlah_Diterima" => 18,
                    "Jumlah_Regristrasi" => 18
                ],
                [
                    "FKDPROP" => 70,
                    "FPROPINSI" => "Gorontalo",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 71,
                    "FPROPINSI" => "Sulawesi Utara",
                    "Jumlah_Pendaftar" => 11,
                    "Jumlah_Diterima" => 10,
                    "Jumlah_Regristrasi" => 10
                ],
                [
                    "FKDPROP" => 72,
                    "FPROPINSI" => "Sulawesi Tengah",
                    "Jumlah_Pendaftar" => 7,
                    "Jumlah_Diterima" => 6,
                    "Jumlah_Regristrasi" => 6
                ],
                [
                    "FKDPROP" => 73,
                    "FPROPINSI" => "Sulawesi Selatan",
                    "Jumlah_Pendaftar" => 14,
                    "Jumlah_Diterima" => 13,
                    "Jumlah_Regristrasi" => 13
                ],
                [
                    "FKDPROP" => 74,
                    "FPROPINSI" => "Sulawesi Tenggara",
                    "Jumlah_Pendaftar" => 5,
                    "Jumlah_Diterima" => 5,
                    "Jumlah_Regristrasi" => 5
                ],
                [
                    "FKDPROP" => 75,
                    "FPROPINSI" => "Gorontalo",
                    "Jumlah_Pendaftar" => 4,
                    "Jumlah_Diterima" => 2,
                    "Jumlah_Regristrasi" => 2
                ],
                [
                    "FKDPROP" => 76,
                    "FPROPINSI" => "Sulawesi Barat ",
                    "Jumlah_Pendaftar" => 2,
                    "Jumlah_Diterima" => 2,
                    "Jumlah_Regristrasi" => 2
                ],
                [
                    "FKDPROP" => 81,
                    "FPROPINSI" => "Maluku",
                    "Jumlah_Pendaftar" => 5,
                    "Jumlah_Diterima" => 5,
                    "Jumlah_Regristrasi" => 5
                ],
                [
                    "FKDPROP" => 82,
                    "FPROPINSI" => "Maluku Utara ",
                    "Jumlah_Pendaftar" => 2,
                    "Jumlah_Diterima" => 2,
                    "Jumlah_Regristrasi" => 2
                ],
                [
                    "FKDPROP" => 84,
                    "FPROPINSI" => "Maluku Utara",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 85,
                    "FPROPINSI" => "Irian Jaya Timur",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 86,
                    "FPROPINSI" => "Irian Jaya Tengah",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 87,
                    "FPROPINSI" => "Irian Jaya Barat",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 91,
                    "FPROPINSI" => "Papua Barat ",
                    "Jumlah_Pendaftar" => 15,
                    "Jumlah_Diterima" => 13,
                    "Jumlah_Regristrasi" => 13
                ],
                [
                    "FKDPROP" => 92,
                    "FPROPINSI" => "Papua ",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 94,
                    "FPROPINSI" => "Papua Tengah",
                    "Jumlah_Pendaftar" => 28,
                    "Jumlah_Diterima" => 27,
                    "Jumlah_Regristrasi" => 27
                ],
                [
                    "FKDPROP" => 98,
                    "FPROPINSI" => "Lainnya",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ],
                [
                    "FKDPROP" => 99,
                    "FPROPINSI" => "Luar Negeri",
                    "Jumlah_Pendaftar" => 0,
                    "Jumlah_Diterima" => 0,
                    "Jumlah_Regristrasi" => 0
                ]
            ],
            "rekap_total" => [
                [
                    "Pendaftar" => 9042,
                    "Diterima" => 7839,
                    "Regristrasi" => 7839
                ]
            ]
        ];
        // Simulated data, replace this with your actual data retrieval logic
        $data_chart = [];
        if ($filter == "all") {
            $judul_chart = "Statistik Jumlah Diterima";
            foreach ($data_mentah['provinsi'] as $key => $v) {
                $data_chart[] = ["name" => $v['FPROPINSI'], "y" => $v['Jumlah_Diterima']];
            }
        } else {
            foreach ($data_mentah['provinsi'] as $key => $v) {
                if ($v['FKDPROP'] == $filter) {
                    $judul_chart = $v['FPROPINSI'];
                    $jumlah = $v['Jumlah_Pendaftar'] + $v['Jumlah_Diterima'] + $v['Jumlah_Regristrasi'];
                    $data_chart[0] = ["name" => "Pendaftar", "y" => $v['Jumlah_Pendaftar'] / $jumlah * 100];
                    $data_chart[1] = ["name" => "Diterima", "y" => $v['Jumlah_Diterima'] / $jumlah * 100];
                    $data_chart[2] = ["name" => "Registrasi", "y" => $v['Jumlah_Regristrasi'] / $jumlah * 100];
                }
            }
        }

        $msg = [
            "judul" => $judul_chart,
            "data" => $data_chart
        ];

        // Encode the data as JSON
        $json_data = json_encode($msg);

        // Set the appropriate Content-Type header for JSON
        header('Content-Type: application/json');

        // Output the JSON data
        echo $json_data;
    }

    public function update_linechart_pendaftar()
    {
        // tangkap post data
        $tahun = $this->request->getPost('tahun');
        $provinsi = $this->request->getPost('provinsi');
        $prodi = $this->request->getPost('prodi');


        //queri
        // ambil jumlah pendaftar,diterima,registrasi where prodi = prodi, provinsi = provinsi, tahun = [2024,2023,2022,2021,2020]
        // hasil query ke database
        $data_mentah = [
            "success" => true,
            "provinsi" => "all",
            "prodi" => "all",
            "tahun" => 2024,
            "rekap_total" => [
                '2020' => [
                    "Pendaftar" => 9042,
                    "Diterima" => 7839,
                    "Regristrasi" => 7839
                ],
                '2021' => [
                    "Pendaftar" => 9100,
                    "Diterima" => 7900,
                    "Regristrasi" => 7901
                ],
                '2022' => [
                    "Pendaftar" => 8100,
                    "Diterima" => 7540,
                    "Regristrasi" => 7550
                ],
                '2023' => [
                    "Pendaftar" => 10033,
                    "Diterima" => 8000,
                    "Regristrasi" => 8002
                ],
                '2024' => [
                    "Pendaftar" => 9800,
                    "Diterima" => 8040,
                    "Regristrasi" => 8050
                ],
            ]
        ];
        // Simulated data, replace this with your actual data retrieval logic
        $data['pendaftar'] = [];
        $data['diterima'] = [];
        $data['regristrasi'] = [];
        foreach ($data_mentah['rekap_total'] as $key => $v) {
            $data['pendaftar'][] = $v['Pendaftar'];
            $data['diterima'][] = $v['Diterima'];
            $data['regristrasi'][] = $v['Regristrasi'];
        };

        $response = [
            'judul' => 'Line Chart for ' . $tahun . '-' . strval($tahun - 4),
            'data' => $data,
            'tahun' => $tahun,
            'pointStart' => $tahun - 4
        ];

        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
