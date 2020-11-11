<?php
function tukar_besar_kecil($string){
    $return=[];
    echo $string," = ";
    $panjang=strlen($string);
    for($i=0;$i<$panjang;$i++){
        $return[]=substr($string,$i, 1);
    }
    $return2=[];
    for($j=0;$j<count($return);$j++){
        if(ord($return[$j])>=97 && ord($return[$j])<=122){
            $return2[]=chr(ord($return[$j])-32);    
        }else if(ord($return[$j])>=65 && ord($return[$j])<=90){
            $return2[]=chr(ord($return[$j])+32);
        }else{
            $return2[]=$return[$j];
        }
    }
    $hasil=implode($return2);
    print($hasil);
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br><br>";
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br><br>";
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br><br>";
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<br><br>";
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>