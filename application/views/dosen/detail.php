<div class="col-md-12">
    <h3>Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $guru->id?></td>
                <td><?php echo $guru->nama?></td>
                <td><?php echo $guru->gender?></td>
                <td><?php echo $guru->tmp_lahir?></td>
                <td><?php echo $guru->tgl_lahir?></td>
                <td><?php echo $guru->nidn?></td>
                <td><?php echo $guru->pendidikan?></td>
                </tbody>
    </table>
</div>
