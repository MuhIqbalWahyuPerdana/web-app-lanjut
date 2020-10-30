<?php

namespace App\Http\Controllers;

class NewIweController extends Controller
{
	public function iwe()
	{
		return view("iwe1");
	}

	public function aku()
	{
		return view("iwe2");
	}

	public function iqbal()
	{
		return view("terakhir");
	}
}