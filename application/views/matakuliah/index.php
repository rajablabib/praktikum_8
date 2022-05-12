<div class="col-md-12">
<h3>Matakuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($list_mtkl as $mtk){
            ?>
            <tr>
                <td><?php echo $nomor?></td>
                <td><?php echo $mtk->nama?></td>
                <td><?php echo $mtk->sks?></td>
                <td><?php echo $mtk->kode?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>