<?php

//�@

$param = $_GET['param'];

if ($param == 1) {echo '�G��';

} elseif ($param == 2) {echo '���N�H�i';

} elseif ($param == 3) {echo '���̑�';

};

echo "<br>";

//�A

$sougaku = 'x';

//��

$zakka = 'a';

$seisen = 'b';

$sonota = 'c';

//���z

echo $sougaku ."<br>";

//1������̒l�i

echo "$sougaku / ($zakka + $seisen + $sonota)" ."<br>";

//�B

//3000�~�ȏ�

echo "$sougaku * 0.04" ."<br>";

//5000�~�ȏ�

echo "$sougaku * 0.05";