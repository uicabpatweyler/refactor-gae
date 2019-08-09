<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintOut extends Controller
{
  /**
   * Show the view with form for creating the printout.
   * @param $document
   */
  public function create($document)
  {
    switch ($document) {
      case 1:
        echo 'Hoja de Inscripcion';
        break;
      case 2:
        echo 'Recibo de Inscripcion';
        break;
      case 3:
        echo 'Recibo de colegiatura';
        break;
      case 4:
        echo 'Recibo de venta';
        break;
      case 5:
        echo 'Listas de asistencia';
        break;

    }
  }
}
