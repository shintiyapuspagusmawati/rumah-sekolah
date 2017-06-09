<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coba;
class cobacontroller extends Controller
{
    //
    public function test()
    {
    	$a = coba::all();
    	return $a; 
    }

    public function test2($id)
    {
    	$a = coba::find($id);
    	return $a; 
    }

    public function index()
    {
    	$tampilan = coba::all();
    	return view('index5', compact('tampilan')); 
    }

    public function ulang()
    {
    	$data = ['adi', 'tatang', 'juju', 'icih'];
    	return view('index', compact('data'));
    }

    public function array($data)
    {
    	$koplak = ['binatang' => ['semut', 'gajah', 'panda', 'koala', 'jerapah'], 'kendaraan' => ['sepedah', 'motor', 'mobil', 'becak', 'perahu'], 'laptop' => ['asus', 'acer', 'hp', 'lenovo', 'axio']];
        $ahaha = $koplak[$data];
    	return view('array', compact('ahaha'));
    }

}
