<?php
$adsoyad = $_POST["adsoyad"];
$komanda = $_POST["komanda"];

echo $adsoyad." Xoşgəldiniz Seçdiyiniz komanda:<br>";
/*
if($komanda == "a"){
echo 'Yaxşı komanda...';
}elseif($komanda == "b"){
    echo 'Normal komanda...';
}elseif($komanda == "c"){
    echo 'Orta komanda...';
}elseif($komanda == "d"){
    echo 'Əla komanda...';
}
*/

switch ($komanda) {
    case 'a':
        echo 'Yaxşı komanda...';
        break;

        case 'b':
            echo 'Normal komanda...';
            break;

            case 'c':
                echo 'Orta komanda...';
                break;

                case 'd':
                    echo 'Əla komanda...';
                    break;
    
    default:
        echo "elave secim"; 
        break;
}





?>