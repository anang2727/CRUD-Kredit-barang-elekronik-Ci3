<table border="1">
    <h2>Kartu Bayar Angsuran</h2>
    <tr>
    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nomor Bayar</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Angsuran Ke</th>
                      <th scope="col">Kode Kreditur</th>
                      <th scope="col">Kode Pegawai</th>
                      <th scope="col">Nomor Ambil</th>
                      <th scope="col" class="text-center">Action</th>
                    </tr>
    </tr>
    <?php
    $no=1;
    $total=0;
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='10'>$no</td>
            <td width='160'>$r->NB</td>
            <td>$r->TBTP</td>
            <td>$r->JML</td>
            <td>$r->AA</td>
            <td>$r->NK</td>
            <td>$r->KDP</td>
            <td>$r->NAM</td>
            </tr>";
        $no++;
    }
    ?>
</table>