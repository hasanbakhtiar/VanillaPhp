<?php
if($_POST){
    echo "POST GONDERLIDI! <br>";
}else {
    echo '
    <p>Sade Form</p>
<form action="" method="post">
<table cellpadding="5" callspacing="5">
   <tr>
   <td>Ad-Soyad:</td>
   <td><input type="text" name="adsoyad" /></td>
</tr>

<tr>
   <td>Yas:</td>
   <td><input type="text" name="yas" /></td>
</tr>

<tr>
   <td>Sehir:</td>
   <td><select name="sehir">
   <option value="Baki">Baku</option>
   <option value="Agdash">Agdash</option>
   <option value="Istanbul">Istanbul</option>
   </select></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="gonder"></td>
</tr>
</table>
</form>';
}






?>