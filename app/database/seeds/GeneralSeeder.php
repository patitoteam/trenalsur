<?php
class GeneralSeeder extends Seeder {

	public function run() {
		$institucion = Institucion::create(array('nombre' => 'Tuxers'));
		//$presupuesto = Presupuesto::create(array('institucion_id' => 1, 'programa' => 'D and R', 'proyecto_actividad' => 'Servicios de direccion'));
		//$gasto = Gasto::create(array('nombre' => 'Brazil trip', 'total' => 200012, 'presupuesto_id' => 1));
	}
}