<?php

namespace App\Http\Controllers;

use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	protected $category;
		
	public function __construct(CategoryRepositoryInterface $category){

		$this->category = $category;

	}

	public function index(){

		$data =  $this->category->all();
		

		//dd($data);
		return view ('category.index')->with('data', $data);

	}
}
