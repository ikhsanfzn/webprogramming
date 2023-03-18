<?php 

    $nama = "Ikhsan Fauzan";
    $nim = "D112121054";
    $nilai = 99;

    if ($nilai >= 85 && $nilai <=100){
        $grade = "A";
        $status = "Istimewa";
    } elseif ($nilai >=80 && $nilai <=85 ){
        $grade = "AB";
        $status = "Lebik Baik Dari";
    } elseif ($nilai >=75 && $nilai <=79 ){
        $grade = "B";
        $status = "Baik";
    } elseif ($nilai >=70 && $nilai <=74 ){
        $grade = "BC";
        $status = "Lebih Dari Cukup";
    } elseif ($nilai >=60 && $nilai <=69 ){
        $grade = "C";
        $status = "Cukup";
    } elseif ($nilai >=50 && $nilai <=59 ){
        $grade = "CD";
        $status = "Kurang Dari Cukup";
    } elseif ($nilai >=40 && $nilai <=49){
        $grade = "D";
        $status = "Kurang";
    } elseif ($nilai >=0 && $nilai <=39 ){
        $grade = "E";
        $status = "Gagal";
    } else {
        $grade = "Tidak Terdefinisi";
        $status = "Tidak Terdefinisi";
    }

?>

<table border="1" style="border-collapse : collapse;">
<tr>
        <td>Nama</td>
        <td>:</td>
        <td><?= $nama?></td>
    </tr>
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td><?= $nim?></td>
    </tr>
    <tr>
        <td>Nilai Angka</td>
        <td>:</td>
        <td><?= $nilai?></td>
    </tr>
    <tr>
        <td>Nilai Huruf</td>
        <td>:</td>
        <td><?= $grade?></td>
    </tr>
    <tr>
        <td>Status</td>
        <td>:</td>
        <td><?= $status?></td>
    </tr>
</table>
