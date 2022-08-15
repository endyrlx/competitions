$data2 = [

	'Мастера' => [
		'Чебурашка' => ['Челябинск', false],
		'Nick' => ['Москва', true],
		'Black' => ['Казань', false],
	],

	'Товары' => [
		'Бетон' => [100, 'Nick'],
		'Герб' => [150, 'Nick'],
		'Квадрат' => [799, 'Black'],
		]
];


$data = [
		'Чебурашка' => ['Челябинск', 'нет', []],
		'Nick' => ['Москва', 'да', ['Бетон' => 100, 'Герб' => 150, ]],
		'Black' => ['Казань', 'нет', ['Квадрат' => 799, ]],
];


foreach($data as $name => $info){
	echo "<br>Мастер $name из города $info[0] ";
	if ($info[2]){
		echo "продает следующие товары: ";
		foreach($info[2] as $item => $price){
			echo "$item ($price руб.)";
		}
	}
	echo "<br>";
}



var_dump($data2['Мастера']);
echo "<br>";
var_dump($data2['Товары']);
echo "<br><br>";
foreach($data2 as $key => $value){
	if($key == 'Мастера'){
		foreach($value as $mkey => $mvalue){
			echo "<br>Мастер $mkey из города $mvalue[0]. ";
			if ($mvalue[1]){
					echo "Доставка есть. ";}
				else {
					echo "Доставки нет. ";
				}
			echo "Продает: ";
			foreach($data2['Товары'] as $tkey => $tvalue){
				if($tvalue[1] == $mkey){
					echo " $tkey";
				}
			}
		}
	}
}

