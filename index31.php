<?php
/*
mkdir() - dizin(qovluq) yaratmaq ucundur
rmdir() - dizin(qovluq) silmek ucundur
umask() - umask ayari ucundur
*/

if ($_POST) {
$esk = umask(0);

    $olusdur = mkdir($_POST["kalsor"],0777);
    umask($esk);
    if ($olusdur) {
       echo $_POST["kalsor"]."adli klosor quruldu!.";
    }else{
        echo "Klosor qurulurken xeta bas verdi";
    }
}else{
    echo '  <form action="" method="post">
    <input type="text" name="kalsor"> <input type="submit" value="yeni">
</form>
 ';
}

?>