<?php

$zakka = $_GET['zakka'];

$seisen = $_GET['seisen'];

$sonota = $_GET['sonota'];

//�@

$param = 1;

if ($param == 1) {echo '�G��';

} elseif ($param == 2) {echo '���N�H�i';

} elseif ($param == 3) {echo '���̑�';

} else {echo '';

};

echo "<br>";

//�A

//�l�i�̕ϐ�

$_zakka = 'a';

$_seisen = 'b';

$_sonota = 'c';

//���z

echo "$zakka * $_zakka + $seisen * $_seisen + $sonota * $_sonota"."<br>";

//1������̒l�i

echo "$_zakka / $zakka"."<br>";

echo "$_seisen / $seisen"."<br>";

echo "$_sonota / $sonota";