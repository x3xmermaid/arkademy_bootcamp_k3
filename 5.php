<?php
$string = array('P','R','O','G','R','A','M','M','E','R');

function cetak_gambar($string){
    $p = sizeof($string);
     for($i=1;$i<=$p;$i++){
        for($j=0;$j<$p;$j++){
            if($j==$i-1){
                echo "&nbsp".$string[$j]."&nbsp";
            }else if($j==10-$i){
                echo "&nbsp".$string[$i-1]."&nbsp";
            }else{
                echo "&nbsp=&nbsp";
            }
        }
         //echo "\n";
         echo nl2br("\r");
    }    
}
 cetak_gambar($string);
?>