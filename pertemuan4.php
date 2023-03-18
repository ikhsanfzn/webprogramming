<?php
$rows = 9; // jumlah baris pada pola segitiga
for ($i = 1; $i <= $rows; $i++) { // loop untuk setiap baris
    if ($i % 3 == 1) { // jika baris habis dibagi 3 dengan sisa 1
        for ($j = 1; $j <= $i; $j++) { // loop untuk setiap kolom pada baris
            echo "+ "; // mencetak tanda plus (+)
        }
    } elseif ($i % 3 == 2) { // jika baris habis dibagi 3 dengan sisa 2
        for ($j = 1; $j <= $i; $j++) { // loop untuk setiap kolom pada baris
            echo "- "; // mencetak tanda minus (-)
        }
    } else { // jika baris habis dibagi 3 dengan sisa 0
        for ($j = 1; $j <= $i; $j++) { // loop untuk setiap kolom pada baris
            echo "* "; // mencetak tanda bintang (*)
        }
    }
    echo "<br>"; // pindah ke baris berikutnya
}


    // for ($i = 0; $i < 3; $i++){
    //     for ($j = 0; $j < 5; $j++){
    //      echo "nilai ke-$i, $j <br>";
    //     }
    // }

    // $poe = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'libur'];
    // foreach ($poe as $key => $value){
    //     echo "$value <br>";
    // }

    // $mams = ['permen', 'coklaaatttssssssss', 'batagor'];

    // echo $mams[1];
    // echo "<br>";
    // echo $mams[0];
    // echo "<br>";
    // echo $mams[2];
    // echo "<br>";

    // for ($i = 0; $i < 10; $i++){
    //     echo "Pengulangan ke-$i <br>";
    // }

    // $i = 11;  
    // do  {
    //     echo "Pengulangan ke-$i <br>";
    //     $i++;
    // } while ($i <= 10);

    // while ($i < 10){
    //     echo "Pengulangan ke-$i <br>";
    //     $i++;
    // }


?>