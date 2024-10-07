<?php
namespace App\Controllers;
class Dashboard extends BaseController
{
    public function index()
    {
        $header['title']='Dashboard';
        echo view('xxx',$header);
    }
}