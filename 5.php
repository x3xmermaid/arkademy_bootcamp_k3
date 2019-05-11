<?php
$string = array('P','R','O','G','R','A','M','M','E','R');

function cetak_gambar($string){
    $p = sizeof($string);
     for($i=1;$i<=$p;$i++){
        for($j=0;$j<$p;$j++){
            if($j==$i-1){
                echo " ".$string[$j]." ";
            }else if($j==10-$i){
                echo " ".$string[$i-1]." ";
            }else{
                echo " = ";
            }
        }
         echo "\n";
         //echo nl2br("\r");
    }    
}
 cetak_gambar($string);
?>