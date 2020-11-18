<?php
function perolehan_medali($array){ 
    $return=[["negara"=>"Indonesia","emas"=>0,"perak"=>0,"perunggu"=>0],
             ["negara"=>"India","emas"=>0,"perak"=>0,"perunggu"=>0],
             ["negara"=>"Korea Selatan","emas"=>0,"perak"=>0,"perunggu"=>0]];

    for($i=0;$i<count($array);$i++){
        if($array[$i][0]=="Indonesia" && $array[$i][1]="emas" ){
            $return[0]["emas"]+=1;
        }else if($array[$i][0]=="Indonesia" && $array[$i][1]="perak" ){
            $return[0]["perak"]+=1;
        }else if($array[$i][0]=="Indonesia" && $array[$i][1]="perunggu" ){
            $return[0]["perunggu"]+=1;
        }else if($array[$i][0]=="India" && $array[$i][1]="emas" ){
            $return[1]["emas"]+=1;
        }else if($array[$i][0]=="India" && $array[$i][1]="perak" ){
            $return[1]["perak"]+=1;
        }else if($array[$i][0]=="India" && $array[$i][1]="perunggu" ){
            $return[1]["perunggu"]+=1;
        }else if($array[$i][0]=="Korea Selatan" && $array[$i][1]="emas" ){
            $return[2]["emas"]+=1;
        }else if($array[$i][0]=="Korea Selatan" && $array[$i][1]="perak" ){
            $return[2]["perak"]+=1;
        }else if($array[$i][0]=="Korea Selatan" && $array[$i][1]="perunggu"){
            $return[2]["perunggu"]+=1;
        }
    }
    return $return;
}

print_r(perolehan_medali(array(array("Indonesia","emas"),array("India","perak"),array("Korea Selatan","emas"),array("India","perak"),array("India","emas"),array("Indonesia","perak"),array("Indonesia","emas"))))
?>