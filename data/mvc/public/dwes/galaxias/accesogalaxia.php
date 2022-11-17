<?php

namespace Dwes\Galaxias;

echo "<br> Namespace actual: " . __NAMESPACE__;

/* 
 - Direccionamiento namespace:
    1. Sin direccionamiento.
    2. Direccionamiento relativo.
    3. Direccionamiento absoluto.
*/

include "galaxia1.php";

echo "<h2>Sin direccionamiento</h2>";
echo "<br>Radio de la galaxia: " . RADIO;
observar("Vía Láctea");
$gl = new Galaxia();
Galaxia::muerte();

echo "<h2>Direccionamiento Relativo</h2>";
include "pegaso/pegaso.php";

echo "<br>Radio de la galaxia: " . Pegaso\RADIO;
Pegaso\observar("Pegaso");
$gl = new Pegaso\Galaxia();
Pegaso\Galaxia::muerte();

echo "<h2>Direccionamiento Absoluto</h2>";
//Navego desde el directorio raíz del servidor web
echo "<br>Radio de la galaxia: " . \Dwes\Galaxias\Pegaso\RADIO;
\Dwes\Galaxias\Pegaso\observar("Pegaso");
$gl = new \Dwes\Galaxias\Pegaso\Galaxia();
\Dwes\Galaxias\Pegaso\Galaxia::muerte();

use const \Dwes\Galaxias\RADIO;
use function \Dwes\Galaxias\observar;
use \Dwes\Galaxias\Galaxia;

echo "<br>El radio es: " . RADIO;
echo "<br>Observo en pegaso: " . observar("Otra galaxia");
echo "<br>Objeto de galaxia generico: " . new Galaxia();

//Apodar namespace -> alias
use \Dwes\Galaxias\Pegaso\Galaxia as Seiya;
use \Dwes\Galaxias\Galaxia as Galaxus;

echo "<br><br>";
$pg = new Seiya();
$glc = new Galaxus();

//Seiya\observar("Observando a Seiya");
//Galaxus\observar("Observando a Galaxus");