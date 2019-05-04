<?php 
	function nomorsatu() {
		$data = [
			'name' => 'Ade Lukman',
			'address' => 'Sumedang',
			'hobbies' => 'travelling, tracking',
			'is_married' => 'belum',
			'school' => 'smk informatika sumedang',
			'skills' => 'desain web'
		];
		return json_encode($data);
	}

	$tampil = nomorsatu();
	var_dump($tampil);
 ?>