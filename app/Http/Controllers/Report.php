<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Report extends Controller
{
  /**
   * Show the view with form for creating the report.
   * @param $type
   */
  public function create($type)
  {
    switch ($type) {
      case 1:
        echo 'Reporte de Avance de Inscripcion';
        break;
      case 2:
        echo 'Reporte de Pagos de Inscripcion';
        break;
      case 3:
        echo 'Reporte de Pagos de Colegiatura';
        break;
      case 4:
        echo 'Reporte de Ventas de Libros y Playeras';
        break;
      case 5:
        echo 'Reporte de Alumnos (deudores, becarios, de baja, etc.';
        break;

    }
  }
}
