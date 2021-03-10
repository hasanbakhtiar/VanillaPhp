<?php

if($_POST){

    $mehsul = $_POST["mehsul"];
    $eded = $_POST["eded"];
    $alici = $_POST["alici"];
    $nomre = $_POST["nomre"];

    if(empty($eded) || empty($alici) || empty($nomre)){
        echo "xanalar bos ola bilmez";
    }else{
            //alt setir = \n
            //tabla ara buraxmaq = \t

        $deyer = $mehsul."\t".$eded."\t".$alici."\t".$nomre."\n";
        $ac = fopen("sifaris.txt","a");
        if(!$ac){
            echo "Dosya acilamadi..";
        }
        fwrite($ac,$deyer);
        fclose($ac);

        echo "Sifaris goderildi...";
    }

}else{
    echo '<h1>Sifaris Ver</h1>
    <form action="" method="post">
    <table cellpadding="5" cellspacing="5">
            <tr>
                <td>Mehsul:</td>
                <td>
                    <select name="mehsul">
                    <option value="bilgisayar">Bilgisayar</option>
                    <option value="notebook">Notebook</option>
                    </select
                </td>
            </tr>
            <tr>
            <td>Eded:</td>
            <td><input type="text" name="eded"></td>
            </tr>
            <td>Alici:</td>
            <td><input type="text" name="alici"></td>
            </tr>
            <td>Nomre:</td>
            <td><input type="text" name="nomre"></td>
            </tr>
            <td><input type="submit" value="goner"></td>
            </tr>
    </table>
    </form>
    ';
}


?>