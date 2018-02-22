<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\LogActivity;

class HomeController extends Controller
{
    public function __construct(){

		}

		public function myTestAddTolog(){

			LogActivity::addToLog('My Test de Agregar Log.');

			dd('Log Insertado Sastifactoriamente');
		
		}

		public function logActivity(){

			$logs = LogActivity::logActivityLists();
			return view('logActivity', compact('logs'));

		}

}
