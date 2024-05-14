<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Mahasiswa::mahasiswa_per_angkatan');
$routes->get('/masuk-lulus', 'Mahasiswa::mahasiswa_masuk_lulus');
$routes->get('/nilai-aik', 'Nilai::nilai_aik');
$routes->get('/nilai-mkdu', 'Nilai::nilai_mkdu');

$routes->post('/dinamis/load_mhs_angkatan', 'Dinamis::load_mahasiswa_angkatan');
$routes->post('/dinamis/load_masuk_lulus', 'Dinamis::load_masuk_lulus');
$routes->post('/dinamis/load_prodi', 'Dinamis::load_prodi');
$routes->post('/dinamis/load_nilai_aik', 'Dinamis::load_nilai_aik');
$routes->post('/dinamis/load_nilai_mkdu', 'Dinamis::load_nilai_mkdu');
