<?php

use Illuminate\Database\Seeder;

class SeederTableAnggota extends Seeder {

	public function run()
	{
		// kosongkan tabel anggota
		DB::table('anggota')->delete();
		// buat data untuk dimasukkan ke database
		$anggota = array(
				array('id'=>1, 'nama'=>'Imam Sutono', 'alamat'=>'Sengonagung'),
				array('id'=>2, 'nama'=>'Feni Fitriyanti', 'alamat'=>'Cianjur'),
				array('id'=>3, 'nama'=>'Fidly Immanda Azzahra', 'alamat'=>'Entahlah')
			);
		//masukkan data ke database
		DB::table('anggota')->insert($anggota);
	}

}