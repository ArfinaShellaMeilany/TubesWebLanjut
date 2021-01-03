<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}
	public function dashboard()
	{
		return view('dashboard');
	}
	public function login()
	{
		return view('login');
	}
	public function register()
	{
		return view('register');
	}
	public function about()
	{
		return view('about');
	}
	public function keranjang()
	{
		return view('keranjang');
	}
	public function kontak()
	{
		return view('kontak');
	}
	public function detail()
	{
		return view('detail');
	}
	public function checkout()
	{
		return view('checkout');
	}
	public function pembayaran()
	{
		return view('pembayaran');
	}

	//--------------------------------------------------------------------

}
