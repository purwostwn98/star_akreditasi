<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Mahasiswa::pendaftar_mahasiswa');
$routes->get('/mahasiswa-angkatan', 'Mahasiswa::mahasiswa_per_angkatan');
$routes->get('/masuk-lulus', 'Mahasiswa::mahasiswa_masuk_lulus');
$routes->get('/nilai-aik', 'Nilai::nilai_aik');
$routes->get('/nilai-mkdu', 'Nilai::nilai_mkdu');

$routes->post('/dinamis/load_mhs_angkatan', 'Dinamis::load_mahasiswa_angkatan');
$routes->post('/dinamis/load_masuk_lulus', 'Dinamis::load_masuk_lulus');
$routes->post('/dinamis/load_prodi', 'Dinamis::load_prodi');
$routes->post('/dinamis/load_nilai_aik', 'Dinamis::load_nilai_aik');
$routes->post('/dinamis/load_nilai_mkdu', 'Dinamis::load_nilai_mkdu');
$routes->post('/dinamis/load_pendaftar_mahasiswa', 'Dinamis::load_pendaftar_mahasiswa');
$routes->post('/dinamis/update_piechart_pendaftar', 'Dinamis::update_piechart_pendaftar');
$routes->post('/dinamis/update_linechart_pendaftar', 'Dinamis::update_linechart_pendaftar');
$routes->post('/dinamis/load_tabel_keberhasilan', 'Dinamis::load_tabel_keberhasilan');
$routes->post('/dinamis/load_tabel_lulusan', 'Dinamis::load_tabel_lulusan');
