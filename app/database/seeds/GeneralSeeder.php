<?php
class GeneralSeeder extends Seeder {

	public function run() {

		//DB::table('gastos')->delete();
		//DB::table('presupuestos')->delete();
		//DB::table('instituciones')->delete();
		Institucion::create(array('nombre' => 'Inst Tuxers'));
		Proyecto::create(array('institucion_id' => 1, 'nombre' => 'D and R', 'tipo'=>'EJ', 'lat'=>0, 'long'=>0 ));
		Gasto::create(array('nombre' => 'Brazil trip', 'total' => 200012, 'proyecto_id' => 1));
        User::create([
            'name'=>'pepe',
            'email'=>'pepe@gmail.com',
            'password'=>Hash::make('12345')
        ]);
	}
}
