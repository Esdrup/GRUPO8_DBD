<?php

require_once "conexion.php";
/**
* 
*/
class ModeloDashboard{
	/*=============================================
					MOSTRAR DASHBOARD
	=============================================*/
	static public function mdlConsultasDashboard()
	{

		$stmt = Conexion::conectar()->prepare("
				SELECT COALESCE((
				SELECT COUNT(*) FROM ventas
				WHERE  fecemision > TO_DATE('01/07/2021', 'DD/MM/YYYY')
				AND fecemision < TO_DATE('31/07/2021', 'DD/MM/YYYY')
				AND estado ='102'
				GROUP BY  estado)
				,0) aceptadas_ventas,
				COALESCE((
				SELECT COUNT(*) FROM ventas
				WHERE fecemision > TO_DATE('01/07/2021', 'DD/MM/YYYY')
				AND fecemision < TO_DATE('31/07/2021', 'DD/MM/YYYY')
				AND estado ='101'
				GROUP BY  estado
				),0) enproceso_ventas,
				COALESCE((
				SELECT COUNT(*) FROM ventas
				WHERE fecemision > TO_DATE('01/07/2021', 'DD/MM/YYYY')
				AND fecemision < TO_DATE('31/07/2021', 'DD/MM/YYYY')
				AND estado ='104'
				GROUP BY  estado
				),0) rechazadas_ventas");


		$stmt -> execute();

		return $stmt ->fetchAll(PDO::FETCH_ASSOC);

	}
}