<?php
header('Content-Type: text/html; charset=UTF-8');
echo"<pre>";print_r($_REQUEST); echo "</pre>";
echo "<br/>O valor recibido do campo nome completo é: ".$REQUEST["nomeCompleto"];
echo "<br/>O valor recibido do campo nome do usuario é: ".$REQUEST["nomeUsr"];
echo "<br/>O valor recibido do campo contrasinal é: ".$REQUEST["contrasinal"];
echo "<br/>O valor recibido do campo idade é: ".$REQUEST["idade"];
echo "<br/>O valor recibido do campo data de nacemento é: ".$REQUEST["dNac"];
echo "<br/>O valor recibido do campo email é: ".$REQUEST["email"];
echo "<br/>O valor recibido do campo URL da páxina persoal é: ".$REQUEST["url"];
echo "<br/>O valor recibido do campo IP do equipo é: ".$REQUEST["ip"];
echo "<br/>O valor recibido do campo descrición dos hobbies é: ".$REQUEST["hobbies"];
echo "<br/>O valor recibido do campo recibir información é: ".$REQUEST["rcbInfo"];
echo "<br/>O valor recibido do campo sexo é: ".$REQUEST["sexo"];
echo "<br/>O valor recibido do menú linguas estranxeiras son <pre>: ".$REQUEST["linguasEs"];
echo "</pre>";
echo "<br/>O nome e o tamaño do arquivo recibido no campo currículo son: ".$_FILES["curriculo"]["name"]." e ".$_FILES["curriculo"]["size"]." bytes";
move_uploaded_file($_FILES["curriculo"]["tmp_name"], "subi-dos".$_FILES["curriculo"]["name"]);
?>