// гаражи
$garages = [
    1 => ['id' => 1, 'name' => 'Гараж на улице 1', 'size' => 1],
    7 => ['id' => 7, 'name' => 'Подземная парковка', 'size' => 100],
    23 => ['id' => 23, 'name' => 'У домика в деревне', 'size' => 2],
];

// машины
$cars = [
    ['name' => 'Белый Ford', 'garageId' => 7],
    ['name' => 'Черный Уаз', 'garageId' => 1],
    ['name' => 'Синий Таз',  'garageId' => 7],
];


for ($i=0; $i < count($cars) ; $i++) {
	echo sprintf('Машина %s стоит в %s',
	$cars[$i]['name'],
	$garages[$cars[$i]['garageId']]['name']
	).'<br>';
}
