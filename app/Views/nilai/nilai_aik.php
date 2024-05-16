<?= $this->extend("/template/index.php"); ?>
<?= $this->section("konten"); ?>
<!--  Row 1 -->
<div class="row">
    <div class="col-md-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="row d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0 col-md-4">
                        <h5 class="card-title fw-semibold">Nilai Mata Kuliah Al Islam dan Kemuhammadiyahan</h5>
                    </div>
                    <!-- pilihan jenjang, tahun, prodi -->
                    <?= $this->include("template/opsi_select"); ?>
                </div>

                <div data-v-724592ca="" class="white-box">
                    <div data-v-724592ca="" class="table-responsive">
                        <table data-v-724592ca="" id="mhs-nilai-aik" class="table">
                            <thead class="text-white bg-dark text-center">
                                <tr data-v-724592ca="">
                                    <th data-v-724592ca="" rowspan="2">Nilai</th>
                                    <th data-v-724592ca="" colspan="7">Matakuliah</th>
                                </tr>
                                <tr data-v-724592ca="" class="nama_mk">
                                    <th data-v-724592ca="">...</th>
                                    <th data-v-724592ca="">...</th>
                                    <th data-v-724592ca="">...</th>
                                    <th data-v-724592ca="">...</th>
                                </tr>
                            </thead>
                            <tbody data-v-724592ca="" class="bodi_tabel">
                                <tr data-v-724592ca="">
                                    <th data-v-724592ca="">A </th>
                                    <td data-v-724592ca="">
                                        62
                                        <!----><!----><!---->
                                    </td>
                                    <td data-v-724592ca=""><!---->
                                        87
                                        <!----><!---->
                                    </td>
                                    <td data-v-724592ca=""><!----><!---->
                                        99
                                        <!---->
                                    </td>
                                    <td data-v-724592ca=""><!----><!----><!---->
                                        104
                                    </td>
                                </tr>
                                <tr data-v-724592ca="">
                                    <th data-v-724592ca="">AB</th>
                                    <td data-v-724592ca="">
                                        3
                                        <!----><!----><!---->
                                    </td>
                                    <td data-v-724592ca=""><!---->
                                        7
                                        <!----><!---->
                                    </td>
                                    <td data-v-724592ca=""><!----><!---->
                                        17
                                        <!---->
                                    </td>
                                    <td data-v-724592ca=""><!----><!----><!---->
                                        12
                                    </td>
                                </tr>
                                <tr data-v-724592ca="">
                                    <th data-v-724592ca="">B </th>
                                    <td data-v-724592ca="">
                                        65
                                        <!----><!----><!---->
                                    </td>
                                    <td data-v-724592ca=""><!---->
                                        33
                                        <!----><!---->
                                    </td>
                                    <td data-v-724592ca=""><!----><!---->
                                        7
                                        <!---->
                                    </td>
                                    <td data-v-724592ca=""><!----><!----><!---->
                                        5
                                    </td>
                                </tr>
                                <tr data-v-724592ca="">
                                    <th data-v-724592ca="">BC</th>
                                    <td data-v-724592ca="">
                                        -
                                    </td>
                                    <td data-v-724592ca="">
                                        -
                                    </td>
                                    <td data-v-724592ca=""><!----><!---->
                                        1
                                        <!---->
                                    </td>
                                    <td data-v-724592ca=""><!----><!----><!---->
                                        2
                                    </td>
                                </tr>
                                <tr data-v-724592ca="">
                                    <th data-v-724592ca="">C </th>
                                    <td data-v-724592ca="">
                                        -
                                    </td>
                                    <td data-v-724592ca="">
                                        -
                                    </td>
                                    <td data-v-724592ca=""><!----><!---->
                                        1
                                        <!---->
                                    </td>
                                    <td data-v-724592ca="">
                                        -
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
        var jenjang = $(".opt_jenjang").val();
        loadProdi(jenjang);
        $(".opt_jenjang").change(function() {
            var jenjang = $(this).val();
            loadProdi(jenjang);
        });

        var tahun = $(".tahun").val();
        var prodi = $(".opt_prodi").val();
        loadTabel(jenjang, prodi, tahun);

        $(".tahun").change(function() {
            // Get the value of the changed input
            var tahun = $(this).val();
            var prodi = $(".opt_prodi").val();
            var jenjang = $(".opt_jenjang").val();
            loadTabel(jenjang, prodi, tahun);
        });
    });
</script>

<script>
    function loadTabel(jenjang, prodi, tahun) {
        $.ajax({
            url: "<?= site_url('dinamis/load_nilai_aik'); ?>",
            type: "POST",
            dataType: "json",
            data: {
                jenjang: jenjang,
                prodi: prodi,
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