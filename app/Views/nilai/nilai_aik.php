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
                    <div class="col-md-2">
                        <select id="js-example-basic-single" class="form-select opt_jenjang">
                            <option value="all">Semua Jenjang</option>
                            <option value="s1">S1</option>
                            <option value="s2">S2</option>
                            <option value="s3">S3</option>
                            <option value="d4">Profesi</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select id="js-example-basic-single" class="form-select opt_prodi">
                            <option data-v-5b7f5439="all" selected="selected">Semua Pogram Studi</option>
                            <option data-v-5b7f5439="" value="A210">
                                Pend. Akuntansi
                            </option>
                            <option data-v-5b7f5439="" value="A220">
                                Pend. Pancasila dan Kewarganegaraan
                            </option>
                            <option data-v-5b7f5439="" value="A310">
                                Pendidikan Bahasa dan Sastra Indonesia
                            </option>
                            <option data-v-5b7f5439="" value="A320">
                                Pend. Bhs. Inggris
                            </option>
                            <option data-v-5b7f5439="" value="A410">
                                Pendidikan Matematika
                            </option>
                            <option data-v-5b7f5439="" value="A418">
                                Magister Pendidikan Matematika
                            </option>
                            <option data-v-5b7f5439="" value="A420">
                                Pend. Biologi
                            </option>
                            <option data-v-5b7f5439="" value="A510">
                                Pend. Guru SD
                            </option>
                            <option data-v-5b7f5439="" value="A520">
                                Pend. Guru Pend. Anak Usia Dini
                            </option>
                            <option data-v-5b7f5439="" value="A610">
                                Pendidikan Geografi
                            </option>
                            <option data-v-5b7f5439="" value="A710">
                                Pendidikan Teknik Informatika
                            </option>
                            <option data-v-5b7f5439="" value="A810">
                                Pendidikan Olahraga
                            </option>
                            <option data-v-5b7f5439="" value="A900">
                                Pendidikan Profesi Guru
                            </option>
                            <option data-v-5b7f5439="" value="B100">
                                Manajemen
                            </option>
                            <option data-v-5b7f5439="" value="B10A">
                                Management
                            </option>
                            <option data-v-5b7f5439="" value="B200">
                                Akuntansi
                            </option>
                            <option data-v-5b7f5439="" value="B300">
                                Ekonomi Pembangunan
                            </option>
                            <option data-v-5b7f5439="" value="B301">
                                Vokasi Perbankan Syariah
                            </option>
                            <option data-v-5b7f5439="" value="B320">
                                Vokasi Perhotelan Syariah
                            </option>
                            <option data-v-5b7f5439="" value="B400">
                                Ekonomi Syari'ah
                            </option>
                            <option data-v-5b7f5439="" value="C100">
                                Hukum
                            </option>
                            <option data-v-5b7f5439="" value="D100">
                                Teknik Sipil
                            </option>
                            <option data-v-5b7f5439="" value="D10A">
                                Civil Engineering
                            </option>
                            <option data-v-5b7f5439="" value="D200">
                                Teknik Mesin
                            </option>
                            <option data-v-5b7f5439="" value="D201">
                                Vokasi Alat Berat
                            </option>
                            <option data-v-5b7f5439="" value="D209">
                                Teknik Mesin (S3)
                            </option>
                            <option data-v-5b7f5439="" value="D20A">
                                Mechanical Engineering
                            </option>
                            <option data-v-5b7f5439="" value="D211">
                                Vokasi Manufaktur
                            </option>
                            <option data-v-5b7f5439="" value="D231">
                                Vokasi Operator CNC
                            </option>
                            <option data-v-5b7f5439="" value="D241">
                                Vokasi Operator Alat Berat
                            </option>
                            <option data-v-5b7f5439="" value="D300">
                                Arsitektur
                            </option>
                            <option data-v-5b7f5439="" value="D400">
                                Teknik Elektro
                            </option>
                            <option data-v-5b7f5439="" value="D410">
                                Vokasi Maintenance Pembangkit Listrik
                            </option>
                            <option data-v-5b7f5439="" value="D420">
                                Vokasi Operator Pembangkit Listrik
                            </option>
                            <option data-v-5b7f5439="" value="D500">
                                Teknik Kimia
                            </option>
                            <option data-v-5b7f5439="" value="D600">
                                Teknik Industri
                            </option>
                            <option data-v-5b7f5439="" value="D800">
                                Profesi Keinsinyuran
                            </option>
                            <option data-v-5b7f5439="" value="E100">
                                Geografi
                            </option>
                            <option data-v-5b7f5439="" value="F100">
                                Psikologi
                            </option>
                            <option data-v-5b7f5439="" value="F107">
                                Magister Profesi Psikologi
                            </option>
                            <option data-v-5b7f5439="" value="F109">
                                Psikologi (S3)
                            </option>
                            <option data-v-5b7f5439="" value="G000">
                                Pendidikan Agama Islam
                            </option>
                            <option data-v-5b7f5439="" value="G00A">
                                Tarbiyah Internasional
                            </option>
                            <option data-v-5b7f5439="" value="G100">
                                Ilmu Alquran dan Tafsir
                            </option>
                            <option data-v-5b7f5439="" value="H000">
                                Perbandingan Agama
                            </option>
                            <option data-v-5b7f5439="" value="H100">
                                Pondok Sobron
                            </option>
                            <option data-v-5b7f5439="" value="I000">
                                Hukum Ekonomi Syari'ah
                            </option>
                            <option data-v-5b7f5439="" value="J100">
                                Fisioterapi (D3)
                            </option>
                            <option data-v-5b7f5439="" value="J110">
                                Fisioterapi (D4)
                            </option>
                            <option data-v-5b7f5439="" value="J120">
                                Fisioterapi S1
                            </option>
                            <option data-v-5b7f5439="" value="J128">
                                Magister Fisioterapi
                            </option>
                            <option data-v-5b7f5439="" value="J130">
                                Pendidikan Profesi Fisioterapis
                            </option>
                            <option data-v-5b7f5439="" value="J200">
                                Keperawatan (D3)
                            </option>
                            <option data-v-5b7f5439="" value="J210">
                                Ilmu Keperawatan (S1)
                            </option>
                            <option data-v-5b7f5439="" value="J218">
                                Magister Keperawatan
                            </option>
                            <option data-v-5b7f5439="" value="J220">
                                Keperawatan (S1) Ekstensi
                            </option>
                            <option data-v-5b7f5439="" value="J230">
                                Keperawatan Profesi (NERS)
                            </option>
                            <option data-v-5b7f5439="" value="J300">
                                Gizi (D3)
                            </option>
                            <option data-v-5b7f5439="" value="J310">
                                Ilmu Gizi (S1)
                            </option>
                            <option data-v-5b7f5439="" value="J410">
                                Kesehatan Masyarakat (S1)
                            </option>
                            <option data-v-5b7f5439="" value="J500">
                                Pendidikan Dokter
                            </option>
                            <option data-v-5b7f5439="" value="J508">
                                Magister Administrasi Rumah Sakit
                            </option>
                            <option data-v-5b7f5439="" value="J510">
                                Profesi Dokter
                            </option>
                            <option data-v-5b7f5439="" value="J520">
                                Pendidikan Dokter Gigi
                            </option>
                            <option data-v-5b7f5439="" value="J530">
                                Profesi Dokter Gigi
                            </option>
                            <option data-v-5b7f5439="" value="K100">
                                Farmasi
                            </option>
                            <option data-v-5b7f5439="" value="K109">
                                Farmasi (S3)
                            </option>
                            <option data-v-5b7f5439="" value="K110">
                                Profesi Apoteker
                            </option>
                            <option data-v-5b7f5439="" value="KI00">
                                Profesi Apoteker (KI)
                            </option>
                            <option data-v-5b7f5439="" value="KR00">
                                Profesi Apoteker (KR)
                            </option>
                            <option data-v-5b7f5439="" value="L100">
                                Ilmu Komunikasi
                            </option>
                            <option data-v-5b7f5439="" value="L200">
                                Informatika (Informatics)
                            </option>
                            <option data-v-5b7f5439="" value="L201">
                                Vokasi Animasi 3D
                            </option>
                            <option data-v-5b7f5439="" value="L211">
                                Vokasi Wirausaha Online Shop Marketing Internet
                            </option>
                            <option data-v-5b7f5439="" value="L280">
                                Magister Informatika
                            </option>
                            <option data-v-5b7f5439="" value="O000">
                                Magister Studi Islam
                            </option>
                            <option data-v-5b7f5439="" value="O100">
                                Magister Pendidikan Agama Islam
                            </option>
                            <option data-v-5b7f5439="" value="O200">
                                Magister Hukum Ekonomi Syariah
                            </option>
                            <option data-v-5b7f5439="" value="O300">
                                Pendidikan Islam
                            </option>
                            <option data-v-5b7f5439="" value="P100">
                                Magister Manajemen
                            </option>
                            <option data-v-5b7f5439="" value="Q100">
                                Magister Administrasi Pendidikan
                            </option>
                            <option data-v-5b7f5439="" value="Q200">
                                Magister Pendidikan Dasar
                            </option>
                            <option data-v-5b7f5439="" value="Q300">
                                Pendidikan
                            </option>
                            <option data-v-5b7f5439="" value="R100">
                                Magister Ilmu Hukum
                            </option>
                            <option data-v-5b7f5439="" value="R200">
                                Ilmu Hukum
                            </option>
                            <option data-v-5b7f5439="" value="S100">
                                Magister Teknik Sipil
                            </option>
                            <option data-v-5b7f5439="" value="S200">
                                Magister Pendidikan Bahasa Indonesia
                            </option>
                            <option data-v-5b7f5439="" value="S300">
                                Magister Psikologi
                            </option>
                            <option data-v-5b7f5439="" value="S400">
                                Magister Pendidikan Bahasa Inggris
                            </option>
                            <option data-v-5b7f5439="" value="T100">
                                Magister Profesi Psikologi
                            </option>
                            <option data-v-5b7f5439="" value="U100">
                                Magister Teknik Mesin
                            </option>
                            <option data-v-5b7f5439="" value="U200">
                                Magister Teknik Kimia
                            </option>
                            <option data-v-5b7f5439="" value="V100">
                                Magister Farmasi
                            </option>
                            <option data-v-5b7f5439="" value="W100">
                                Magister Akuntansi
                            </option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select id="js-example-basic-single" class="form-select tahun" name="tahun">
                            <!-- <option value="">Pilih Tahun</option> -->
                            <?php for ($i = $tahun_now; $i > $tahun_6; $i--) {  ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php } ?>
                        </select>
                    </div>
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
            url: "<?= site_url('dinamis/load_nilai_aik'); ?>",
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