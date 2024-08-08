<table class="table-bordered table-responsive w-100">

    <thead style="background-color: #2f3184;">
        <tr class="text-white">
            <th class="py-2 px-3" colspan="3">Tabel <?= $t == 'keberhasilan' ? 'Keberhasilan' : 'Lulusan Tepat Waktu'; ?> Studi untuk Program</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kategori as $key => $j) { ?>
            <?php foreach ($j as $k => $v) { ?>
                <tr class="pt-3 pb-3">
                    <?php if ($k == 0) {  ?>
                        <td class="px-2" rowspan="<?= count($kategori[$key]); ?>"><b><?= $jenjang[$key]; ?></b></td>
                    <?php   } ?>
                    <td class="<?= $k >= 4 ? 'text-end fw-bold bg-warning text-white' : ''; ?> pt-1 pb-1 px-2 ">
                        <?php if ($k == 0) { ?>
                            <b><?= $v; ?></b>
                        <?php } else { ?>
                            <?= $v; ?>
                        <?php } ?>
                    </td>
                    <td class="text-center <?= $k >= 4 ? 'text-end fw-bold bg-warning text-white' : ''; ?> pt-1 pb-1 px-2" style="min-width:40px;"><?= $angka[$key . '-' . $k]; ?></td>
                </tr>
            <?php } ?>

        <?php } ?>
    </tbody>
</table>