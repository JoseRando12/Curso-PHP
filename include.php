<?php
/*
include"forx.php";  // CON INCLUDE EL ARCHIVO FORX.PHP NO EXISTE, DA WARNING Y SIGE EL PROGRAMA
include"for.php";

require "for.php";  // CON REQUIRE EL ARCHIVO FORX.PHP NO EXISTE, DA ERROR FATAL EL PROGRAMA SE DETIENE
require "for.php";
*/

require_once "for.php";  // LO REQUIERE UNA SOLA VES, LA SEGUNDA VES NO SE APLICA
require_once "for.php";

include_once "for.php";  // LO MISMOA OCURRE CON INCLUDE_ONCE, FUNCIONAN IGUALES
include_once "for.php";

