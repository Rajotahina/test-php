<?php
/*$legumes = ["anana","ovy", 8, 9,"karaoty" , 4];
foreach($legumes as $key =>$value){
    if (is_string($value)) {
        echo "$key =>$value <br>";
    } 
}*/
$devises =[
        "arair" =>[15,32,25,22,5],
        "dollar"=>[36 ,42,28, 35,8],
];
$value = 0;
foreach($devises as $key =>list($a,$b,$c ,$d,$e)){
    echo "$key => $a,$b,$c ,$d,$e <br>";
    if ($key =="ariar") {
        return $key
    }
}
/*$prenoms=[
   "A" => ["rakoto" ,"rasoa"],
   "B"=> ["rabe" ,"koto"],
];
foreach($prenoms as $key =>list($A ,$B)){
    echo "$key =>($A$B ) <br>";
}*/

?>