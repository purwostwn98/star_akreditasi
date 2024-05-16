<?= $this->extend("/template/index.php"); ?>
<?= $this->section("konten"); ?>
<!--  Row 1 -->
<div class="row">
    <div class="col-md-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="row d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0 col-md-4">
                        <h5 class="card-title fw-semibold">Nilai Mata Kuliah Dasar Umum</h5>
                    </div>
                    <!-- pilihan jenjang, tahun, prodi -->
                    <?= $this->include("template/opsi_select"); ?>
                </div>
                <div class="row">
                    <div data-v-6249aa96="" class="col-lg-12">
                        <div data-v-6249aa96="" class="white-box">
                            <div data-v-6249aa96="" class="table-responsive">
                                <table data-v-6249aa96="" id="mhs-nilai-aik" class="table">
                                    <thead class="text-center bg-dark text-white">
                                        <tr data-v-6249aa96="">
                                            <th data-v-6249aa96="" rowspan="2">Nilai</th>
                                            <th data-v-6249aa96="" class="text-center" colspan="7">Matakuliah</th>
                                        </tr>
                                        <tr data-v-6249aa96="" class="nama_mk">
                                            <th data-v-6249aa96="">Bahasa Inggris 1</th>
                                            <th data-v-6249aa96="">Bahasa Inggris 2</th>
                                            <th data-v-6249aa96="">Pancasila</th>
                                            <th data-v-6249aa96="">Kewarganegaraan</th>
                                            <th data-v-6249aa96="">Bahas</th>
                                        </tr>
                                    </thead>
                                    <tbody data-v-6249aa96="" class="bodi_tabel">
                                        <tr data-v-6249aa96="">
                                            <th data-v-6249aa96="">A </th>
                                            <td data-v-6249aa96="">
                                                1543
                                            </td>
                                            <td data-v-6249aa96="">
                                                54
                                            </td>
                                            <td data-v-6249aa96="">
                                                1992
                                            </td>
                                            <td data-v-6249aa96="">
                                                80
                                            </td>
                                            <td data-v-6249aa96="">
                                                1026
                                            </td>
                                        </tr>
                                        <tr data-v-6249aa96="">
                                            <th data-v-6249aa96="">AB</th>
                                            <td data-v-6249aa96="">
                                                2454
                                            </td>
                                            <td data-v-6249aa96="">
                                                189
                                            </td>
                                            <td data-v-6249aa96="">
                                                1202
                                            </td>
                                            <td data-v-6249aa96="">
                                                89
                                            </td>
                                            <td data-v-6249aa96="">
                                                594
                                            </td>
                                        </tr>
                                        <tr data-v-6249aa96="">
                                            <th data-v-6249aa96="">B </th>
                                            <td data-v-6249aa96="">
                                                1245
                                            </td>
                                            <td data-v-6249aa96="">
                                                145
                                            </td>
                                            <td data-v-6249aa96="">
                                                588
                                            </td>
                                            <td data-v-6249aa96="">
                                                47
                                            </td>
                                            <td data-v-6249aa96="">
                                                276
                                            </td>
                                        </tr>
                                        <tr data-v-6249aa96="">
                                            <th data-v-6249aa96="">BC</th>
                                            <td data-v-6249aa96="">
                                                461
                                            </td>
                                            <td data-v-6249aa96="">
                                                72
                                            </td>
                                            <td data-v-6249aa96="">
                                                238
                                            </td>
                                            <td data-v-6249aa96="">
                                                10
                                            </td>
                                            <td data-v-6249aa96="">
                                                90
                                            </td>
                                        </tr>
                                        <tr data-v-6249aa96="">
                                            <th data-v-6249aa96="">C </th>
                                            <td data-v-6249aa96="">
                                                274
                                            </td>
                                            <td data-v-6249aa96="">
                                                20
                                            </td>
                                            <td data-v-6249aa96="">
                                                206
                                            </td>
                                            <td data-v-6249aa96="">
                                                4
                                            </td>
                                            <td data-v-6249aa96="">
                                                49
                                            </td>
                                        </tr>
                                        <tr data-v-6249aa96="">
                                            <th data-v-6249aa96="">D </th>
                                            <td data-v-6249aa96="">
                                                59
                                            </td>
                                            <td data-v-6249aa96="">
                                                1
                                            </td>
                                            <td data-v-6249aa96="">
                                                33
                                            </td>
                                            <td data-v-6249aa96="">
                                                -
                                            </td>
                                            <td data-v-6249aa96="">
                                                15
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

        var tahun = $(".tahun").val();
        loadTabel(tahun);

        $(".tahun").change(function() {
            // Get the value of the changed input
            var tahun = $(this).val();
            loadTabel(tahun);
        });
    });
</script>

<script>
    function loadTabel(tahun) {
        $.ajax({
            url: "<?= site_url('dinamis/load_nilai_mkdu'); ?>",
            type: "POST",
            dataType: "json",
            data: {
                tahun: tahun
            },
            beforeSend: function() {},
            complete: function() {},
            success: function(response) {
                $(".nama_mk").html(response.th);
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