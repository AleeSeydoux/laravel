<?php namespace Cinema\Http\Controllers;

class PruebaController extends Controller {


	/**
	* @return Response
	*/
	public function index()
	{
		return view('welcome');
	}

}