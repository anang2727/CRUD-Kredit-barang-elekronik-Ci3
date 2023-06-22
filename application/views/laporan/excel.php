<table border="1">
    <h2>Laporan Kreditur</h2>
    <tr>
        <th>No</th>
        <th>Nama Kreditur</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
        <th>No Hp</th>
    </tr>
    <?php
    $no=1;
    $total=0;
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='10'>$no</td>
            <td width='160'>$r->NK</td>
            <td>$r->NMK</td>
            <td>$r->AK</td>
            <td>$r->PEKER</td>
            <td>$r->NO_HP</td>
            </tr>";
        $no++;
    }
    ?>
</table>