<?php

// Long lines are hard to read, hard to edit and hard to diff...
$user = ['name' => 'Tom Hudson', 'likes' => ['code', 'cars', 'cheese'], 'age' => 0x1E, 'contact' => ['email' => 'mail@tomnomnom.com', 'twitter' => '@TomNomNom']];

// Much code editing is line-based
$user = [
	'name' => 'Tom Hudson',
	'likes' => [
		'code',
		'cars',
		'cheese'
	], 
	'age' => 0x1E,
	'contact' => [
		'email' => 'mail@tomnomnom.com',
		'twitter' => '@TomNomNom'
	]
];
