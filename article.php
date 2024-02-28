<?php
$r=$l=$f=$point=$prix=$qt=" ";
if (isset ($_GET["reference"]) and isset($_GET["libelle"])
 and  isset($_GET["four"])and  isset($_GET["point"]) 
 and isset($_GET["prix"])  and isset($_GET["qte"]) ){
   
 $list f =" ";   
echo " article $r-$l-$q-$p";
echo "liste des fournisseur <ul>";
foreach($f as $x){
    //echo "<li> $x </li>";}*
    $list f=$list f "<li> $x </li>";

}


//     $r=$_GET["reference"];
//    echo "reference $r";

//    $l=$_GET["libelle"];
//    echo "libelle $l";

//    $f=$_GET["four"];
//    echo "four $f";

//    $point=$_GET["point"];
//    echo "point $point";

//    $prix=$_GET["prix"];
//    echo "prix $prix";

//    $qt=$_GET["qte"];
//    echo "qte $qt";
}


?>