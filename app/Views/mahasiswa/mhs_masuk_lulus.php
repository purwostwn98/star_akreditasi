<?= $this->extend("/template/index.php"); ?>
<?= $this->section("konten"); ?>
<!--  Row 1 -->
<div class="row">
    <div class="col-md-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="row d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0 col-md-4">
                        <h5 class="card-title fw-semibold">Mahasiswa Masuk dan Lulus</h5>
                    </div>
                    <!-- pilihan jenjang, tahun, prodi -->
                    <?= $this->include("template/opsi_select"); ?>
                </div>
                <div class="table-responsive">
                    <div data-v-5b7f5439="" class="table-responsive">
                        <table data-v-5b7f5439="" id="mhs-perangkatan" class="table">
                            <thead data-v-5b7f5439="" class="text-center bg-primary text-white">
                                <tr data-v-5b7f5439="">
                                    <th data-v-5b7f5439="" rowspan="2">Tahun Akademik</th>
                                    <th data-v-5b7f5439="" rowspan="2">Daya Tampung</th>
                                    <th data-v-5b7f5439="" rowspan="1" colspan="2">Jumlah Calon Mahasiswa Reguler</th>
                                    <th data-v-5b7f5439="" rowspan="1" colspan="2">Jumlah Mahasiswa Baru</th>
                                    <th data-v-5b7f5439="" rowspan="1" colspan="2">Jumlah Total Mahasiswa</th>
                                    <th data-v-5b7f5439="" rowspan="1" colspan="2">Jumlah Lulusan</th>
                                    <th data-v-5b7f5439="" rowspan="1" colspan="3">IPK Lulusan Reguler</th>
                                    <th data-v-5b7f5439="" rowspan="1" colspan="3">Presentasi Lulusan Reguler dengan IPK:</th>
                                </tr>
                                <tr data-v-5b7f5439="">
                                    <th data-v-5b7f5439="">Ikut seleksi</th>
                                    <th data-v-5b7f5439="">Lulus Seleksi</th>
                                    <th data-v-5b7f5439="">Reguler bukan Transfer</th>
                                    <th data-v-5b7f5439="">Transfer</th>
                                    <th data-v-5b7f5439="">Reguler bukan Transfer</th>
                                    <th data-v-5b7f5439="">Transfer</th>
                                    <th data-v-5b7f5439="">Reguler bukan Transfer</th>
                                    <th data-v-5b7f5439="">Transfer</th>
                                    <th data-v-5b7f5439="">Min</th>
                                    <th data-v-5b7f5439="">Rat</th>
                                    <th data-v-5b7f5439="">Max</th>
                                    <th data-v-5b7f5439="">2,75</th>
                                    <th data-v-5b7f5439="">2.75 - 3,50</th>
                                    <th data-v-5b7f5439="">&gt; 3,50</th>
                                </tr>
                            </thead>
                            <tbody data-v-5b7f5439="" class="bodi_tabel">
                                <tr data-v-5b7f5439="">
                                    <td data-v-5b7f5439="" class="year-data">2020</td>
                                    <td data-v-5b7f5439=""></td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        21208
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        13619
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        8545
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        35850
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        5614
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="">2.28</td>
                                    <td data-v-5b7f5439="">3.43</td>
                                    <td data-v-5b7f5439="">4</td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        112
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        3000
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        2502
                                    </td>
                                </tr>
                                <tr data-v-5b7f5439="">
                                    <td data-v-5b7f5439="" class="year-data">2021</td>
                                    <td data-v-5b7f5439=""></td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        9297
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        8224
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        0
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        36662
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        6108
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="">0</td>
                                    <td data-v-5b7f5439="">2.82</td>
                                    <td data-v-5b7f5439="">4</td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        1198
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        2642
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        2268
                                    </td>
                                </tr>
                                <tr data-v-5b7f5439="">
                                    <td data-v-5b7f5439="" class="year-data">2022</td>
                                    <td data-v-5b7f5439=""></td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        9042
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        7839
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        0
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        36717
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        9557
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="">0</td>
                                    <td data-v-5b7f5439="">3.01</td>
                                    <td data-v-5b7f5439="">4</td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        1395
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        4029
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        4133
                                    </td>
                                </tr>
                                <tr data-v-5b7f5439="">
                                    <td data-v-5b7f5439="" class="year-data">2023</td>
                                    <td data-v-5b7f5439=""></td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        0
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        0
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        0
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        34924
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        11823
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="">0</td>
                                    <td data-v-5b7f5439="">3</td>
                                    <td data-v-5b7f5439="">4</td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        1886
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        4002
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        5935
                                    </td>
                                </tr>
                                <tr data-v-5b7f5439="">
                                    <td data-v-5b7f5439="" class="year-data">2024</td>
                                    <td data-v-5b7f5439=""></td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        0
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        0
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        0
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        0
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        3077
                                    </td>
                                    <td data-v-5b7f5439="">

                                    </td>
                                    <td data-v-5b7f5439="">0</td>
                                    <td data-v-5b7f5439="">3.63</td>
                                    <td data-v-5b7f5439="">4</td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        34
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        813
                                    </td>
                                    <td data-v-5b7f5439="" class="mhs-data-perangkatan">
                                        2230
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $("#Demotooltip2").tooltip();
        $("#Demotooltip3").tooltip();

        var jenjang = $(".opt_jenjang").val();
        loadProdi(jenjang);
        $(".opt_jenjang").change(function() {
            var jenjang = $(this).val();
            loadProdi(jenjang);
        });

        var prodi = $(".opt_prodi").val();
        var tahun = $(".tahun").val();
        loadTabel(jenjang, prodi, tahun);

        $(".tahun").change(function() {
            // Get the value of the changed input
            var prodi = $(".opt_prodi").val();
            var jenjang = $(".opt_jenjang").val();
            var tahun = $(this).val();
            loadTabel(jenjang, prodi, tahun);
        });

    });
</script>

<script>
    function loadTabel(jenjang, prodi, tahun) {
        $.ajax({
            url: "<?= site_url('dinamis/load_masuk_lulus'); ?>",
            type: "POST",
            dataType: "json",
            data: {
                tahun: tahun,
                prodi: prodi,
                jenjang: jenjang
            },
            beforeSend: function() {},
            complete: function() {},
            success: function(response) {
                $(".bodi_tabel").html(response.tr);
                // for (var i = response.tahun_akhir; i <= response.tahun_awal; i++) {
                //     for (var a = response.tahun_akhir; a <= response.tahun_awal; a++) {
                //         $("#" + i + "-" + a).tooltip();
                //     }
                // }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }

    function loadProdi(jenjang) {
        $.ajax({
            url: "<?= site_url('dinamis/load_prodi'); ?>",
            type: "POST",
            dataType: "json",
            data: {
                jenjang: jenjang
            },
            beforeSend: function() {},
            complete: function() {},
            success: function(response) {
                $(".opt_prodi").html(response.opt);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
        return false;
    }
</script>


<?= $this->endSection(); ?>