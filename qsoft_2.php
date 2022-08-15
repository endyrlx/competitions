echo '=== Авторы ===<br>';

foreach($data['authors'] as $id => $info){
    echo sprintf('%s – %s – %s',$info['name'], $info['email'], $info['birthYear']) . '<br>';
}
unset($info['name']);

echo '=== Книги ===<br>';

foreach($data['books'] as &$bookinfo){
	echo sprintf('%s – %s – %s',
	$bookinfo['title'],
	$bookinfo['publishedAt'],
	$bookinfo['author'] = foreach($data['authors'] as $id => $info){$info['name']}
	) . '<br>';
}
