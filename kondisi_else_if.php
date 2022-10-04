<?php 
$biaya = 15000000;

if($biaya < 2500000){
    echo "Biaya pengobatan ditanggung asuransi";
}elseif ($biaya > 10000000) {
    echo "Dicover setengah";
}else{
    echo"Tidak Dicover";
}
?>