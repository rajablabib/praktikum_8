<div class="col-md-12">
    <h3>Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach($dosen as $dsn) {
            ?>
            <tr>
                <td><?php echo $nomor?></td>
                <td><?php echo $dsn->nama?></td>
                <td><?php echo $dsn->nidn?></td>
                <td><?php echo $dsn->pendidikan?></td>
                <td><a href="<?php  echo base_url("index.php/dosen/detail/$dsn->id") ?>">Detail</a></td>

            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>
