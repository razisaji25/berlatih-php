<?php
function ubah_huruf($string){
    $return=[];
    echo $string," = ";
    $panjang=strlen($string);
    for($i=0;$i<$panjang;$i++){
        $return[]=substr($string,$i, 1);
    }
    $return2=[];
    for($j=0;$j<count($return);$j++){
        if(ord($return[$j])==122){
            $return2[]=chr(ord($return[$j])-25);    
        }else{
            $return2[]=chr(ord($return[$j])+1);
        }
    }
    $hasil=implode($return2);
    print($hasil);
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu

?>