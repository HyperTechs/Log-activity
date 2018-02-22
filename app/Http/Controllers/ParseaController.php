<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ParseaController extends Controller
{
		public function parsear()
		{
				$cliente 		= new Client();
				$vista 			= $cliente->request("GET", "https://extranet.anmat.gov.ar/ALG_Mobile/asp/wfAlimentos.aspx");
				$formulario = $vista->selectButton('Buscar')->form();
				$vista 			= $cliente->submit($formulario, array(
					"txtRNPA"			=> "arroz",
					"txtMarca"		=> "primor",
					"txtNombFant" => "arroz",
					"cboEstado"		=> "Vigente",
					"cboTipoProd" => "Aceites"
				));
				$vista->filter("h2")->each(function($nodo){
					print $nodo->text()."<br>";
				});

		}
}
