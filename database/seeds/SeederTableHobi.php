<?php

use Illuminate\Database\Seeder;

class SeederTableHobi extends Seeder {

	public function run()
	{
		// kosongkan tabel hobi
		DB::table('hobi')->delete();
		// buat data berupa array untuk dimasukkan ke database
		$hobi = array(
				array('hobi'=>'Sepak Bola', 'anggota_id'=>'1'),
				array('hobi'=>'Makan Bakso', 'anggota_id'=>'2'),
				array('hobi'=>'Wotageian', 'anggota_id'=>'3')
			);
		// masukkan data ke database
		DB::table('hobi')->insert($hobi);
	}

}