<?php

$zakka = $_GET['zakka'];

$seisen = $_GET['seisen'];

$sonota = $_GET['sonota'];

//‡@

$param = 1;

if ($param == 1) {echo 'G‰İ';

} elseif ($param == 2) {echo '¶‘NH•i';

} elseif ($param == 3) {echo '‚»‚Ì‘¼';

} else {echo '';

};

echo "<br>";

//‡A

//’l’i‚Ì•Ï”

$_zakka = 'a';

$_seisen = 'b';

$_sonota = 'c';

//‘Šz

echo "$zakka * $_zakka + $seisen * $_seisen + $sonota * $_sonota"."<br>";

//1ŒÂ“–‚½‚è‚Ì’l’i

echo "$_zakka / $zakka"."<br>";

echo "$_seisen / $seisen"."<br>";

echo "$_sonota / $sonota";