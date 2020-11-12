<?php
function tentukan_nilai($number)
{
    if($number>=85){
        print("Sangat Baik");
    } else if($number>=70){
        print("Baik");
    }else if($number>=60){
        print("Cukup");
    }else if($number<60){
        print("kurang");
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo "<br>";
echo tentukan_nilai(76); //Baik
echo "<br>";
echo tentukan_nilai(67); //Cukup
echo "<br>";
echo tentukan_nilai(43); //Kurang
?>