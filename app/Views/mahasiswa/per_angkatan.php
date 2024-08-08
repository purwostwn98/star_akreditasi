<?= $this->extend("/template/index.php"); ?>
<?= $this->section("konten"); ?>
<!--  Row 1 -->
<div class="row">
    <div class="col-md-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="row d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0 col-md-4">
                        <h5 class="card-title fw-semibold">Mahasiswa per Angkatan</h5>
                    </div>
                    <?= $this->include("template/opsi_select"); ?>
                </div>
                <div class="table-responsive">
                    <table id="mhs-perangkatan" class="table">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th rowspan="2">Tahun Masuk</th>
                                <th colspan="7" class="text-center">Jumlah Mahasiswa per Angkatan</th>
                                <th rowspan="2">Jumlah Lulusan</th>
                            </tr>
                            <tr>
                                <?php for ($i = $tahun_6; $i <= $tahun_now; $i++) { ?>
                                    <th><?= $i; ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody class="tbd">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 tabelKeberhasilan">

    </div>
</div>
<div class="row">
    <div class="col-12 tabelLulusan">

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
        load_mahasiswa_angkatan(jenjang, prodi, tahun);

        $(".tahun").change(function() {
            // Get the value of the changed input
            var jenjang = $(".opt_jenjang").val();
            var tahun = $(this).val();
            var prodi = $(".opt_prodi").val();
            load_mahasiswa_angkatan(jenjang, prodi, tahun);
        });

        loadTabelKeberhasilan();
        loadTabelLulusan();

    });
</script>

<script>
    function load_mahasiswa_angkatan(jenjang, prodi, tahun) {
        $.ajax({
            url: "<?= site_url('dinamis/load_mhs_angkatan'); ?>",
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
                $(".tbd").html(response.tr);
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

    function loadTabelKeberhasilan() {
        $.ajax({
            url: "<?= site_url('dinamis/load_tabel_keberhasilan'); ?>",
            type: "POST",
            dataType: "json",
            data: {
                jenjang: "jenjang"
            },
            beforeSend: function() {},
            complete: function() {},
            success: function(response) {
                $(".tabelKeberhasilan").html(response.tabel);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
        return false;
    }

    function loadTabelLulusan() {
        $.ajax({
            url: "<?= site_url('dinamis/load_tabel_lulusan'); ?>",
            type: "POST",
            dataType: "json",
            data: {
                jenjang: "jenjang"
            },
            beforeSend: function() {},
            complete: function() {},
            success: function(response) {
                $(".tabelLulusan").html(response.tabel);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
        return false;
    }
</script>


<?= $this->endSection(); ?>