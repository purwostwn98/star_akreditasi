<?= $this->extend("/template/index.php"); ?>
<?= $this->section("konten"); ?>
<!--  Row 1 -->
<div class="row">
    <div class="col-md-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="row d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0 col-md-4">
                        <h5 class="card-title fw-semibold">Pendaftar Mahasiswa</h5>
                    </div>
                    <!-- filter chart -->
                    <div class="col-md-4">
                        <select class="form-control opsi_prop" id="">
                            <option value="all">Semua Provinsi</option>
                            <option value="12">Sumatra Utara</option>
                            <option value="14">Riau</option>
                            <option value="33">Jawa Tengah</option>
                        </select>
                    </div>
                </div>

                <figure class="highcharts-figure">
                    <div id="container"></div>
                    <p class="highcharts-description">.
                    </p>
                </figure>

                <div class="row d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <!-- pilihan jenjang, tahun, prodi -->
                    <div class="mb-3 mb-sm-0 col-md-4">
                        <h6 class="fw-semibold">Filter Tabel</h6>
                    </div>
                    <?= $this->include("template/opsi_select"); ?>
                </div>

                <div data-v-724592ca="" class="white-box">
                    <div data-v-724592ca="" class="table-responsive">
                        <table data-v-724592ca="" id="mhs-nilai-aik" class="table">
                            <thead class="text-white bg-dark text-center">
                                <tr data-v-724592ca="">
                                    <th data-v-724592ca="">Pendaftar</th>
                                    <th data-v-724592ca="">Diterima</th>
                                    <th data-v-724592ca="">Registrasi</th>
                                </tr>
                            </thead>
                            <tbody data-v-724592ca="" class="bd_total">
                                <tr data-v-724592ca="">

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div data-v-724592ca="" class="white-box">
                    <div data-v-724592ca="" class="table-responsive">
                        <table data-v-724592ca="" id="mhs-nilai-aik" class="table">
                            <thead class="text-white bg-primary text-center">
                                <tr data-v-724592ca="">
                                    <th data-v-724592ca="">Provinsi</th>
                                    <th data-v-724592ca="">Pendaftar</th>
                                    <th data-v-724592ca="">Diterima</th>
                                    <th data-v-724592ca="">Regristrasi</th>
                                </tr>
                            </thead>
                            <tbody data-v-724592ca="" class="bd_prov">
                                <tr data-v-724592ca="">

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        //load initial chart
        updateChart("all");

        var jenjang = $(".opt_jenjang").val();
        loadProdi(jenjang);
        $(".opt_jenjang").change(function() {
            var jenjang = $(this).val();
            loadProdi(jenjang);
        });

        var tahun = $(".tahun").val();
        var prodi = $(".opt_prodi").val();
        loadTabel(tahun, jenjang, prodi);

        $(".tahun").change(function() {
            // Get the value of the changed input
            var jenjang = $(".opt_jenjang").val();
            var tahun = $(this).val();
            var prodi = $(".opt_prodi").val();
            loadTabel(tahun, jenjang, prodi);
        });

        $(".opsi_prop").change(function() {
            // Get the value of the changed input
            var provinsi = $(this).val();
            updateChart(provinsi);
        });
    });
</script>

<script>
    function loadTabel(tahun, jenjang, prodi) {
        $.ajax({
            url: "<?= site_url('dinamis/load_pendaftar_mahasiswa'); ?>",
            type: "POST",
            dataType: "json",
            data: {
                tahun: tahun,
                jenjang: jenjang,
                prodi: prodi
            },
            beforeSend: function() {},
            complete: function() {},
            success: function(response) {
                $(".bd_total").html(response.tr_total);
                $(".bd_prov").html(response.tr_prov);
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


<script>
    const chartone = Highcharts.chart('container', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Egg Yolk Composition'
        },
        tooltip: {
            valueSuffix: '%'
        },
        subtitle: {
            text: 'Source:<a href="https://baa.ums.ac.id" target="_blank">BAA UMS</a>'
        },
        plotOptions: {
            series: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: [{
                    enabled: true,
                    distance: 20
                }, {
                    enabled: true,
                    distance: -40,
                    format: '{point.percentage:.1f}%',
                    style: {
                        fontSize: '1.2em',
                        textOutline: 'none',
                        opacity: 0.7
                    },
                    filter: {
                        operator: '>',
                        property: 'percentage',
                        value: 10
                    }
                }]
            }
        },
        series: [{
            name: 'Percentage',
            colorByPoint: true,
            data: [{
                    name: 'Water',
                    y: 55.02
                },
                {
                    name: 'Fat',
                    // sliced: true,
                    // selected: true,
                    y: 26.71
                },
                {
                    name: 'Carbohydrates',
                    y: 1.09
                },
                {
                    name: 'Protein',
                    y: 15.5
                },
                {
                    name: 'Ash',
                    y: 1.68
                }
            ]
        }]
    });
</script>

<script>
    function updateChart(provinsi) {
        $.ajax({
            url: "<?= site_url('dinamis/update_chart_pendaftar'); ?>",
            type: "POST",
            dataType: "json",
            data: {
                filter_chart: provinsi
            },
            beforeSend: function() {},
            complete: function() {},
            success: function(response) {
                var newData = response.data;

                // Update the series data with the new data
                chartone.update({
                    title: {
                        text: response.judul
                    }
                });
                chartone.series[0].setData(newData);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
        return false;
    }
</script>
<?= $this->endSection(); ?>