<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ClientController extends Controller
{
    private $imgBig;
    private $imgSmall;

    public function __construct()
    {
        $dirBig = 'images/carousel/big/';
        $dirSmall = 'images/carousel/small/';
        $this->imgBig = $this->dirToArray($dirBig);
        $this->imgSmall = $this->dirToArray($dirSmall);
    }

    private function dirToArray($dir) {
        $result = array();
        $cdir = scandir($dir);
        foreach ($cdir as $key => $value) {
            if (!in_array($value,array(".","..")) && !is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                $result[] = $value;
            }
        }
        return $result;
    }
    public function index()
    {
//        dd($this->imgBig, $this->imgSmall);
        return view('page.main', ['imgSmall' => $this->imgSmall, 'imgBig' => $this->imgBig]);
    }

    public function contacts()
    {
        return view('page.contacts');
    }

    public function models()
    {
        return view('page.models');
    }

    public function characteristics()
    {
        return view('page.characteristics');
    }

    public function certificates()
    {
        return view('page.certificates');
    }

    public function patents()
    {
        return view('page.patents');
    }

}
