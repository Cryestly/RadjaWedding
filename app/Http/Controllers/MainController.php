<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\BundlePenyewaanModel;
use App\Models\LayananModel;
use App\Models\UserModel;

class MainController extends Controller
{
    private UserModel $UserModel;
    private BarangModel $BarangModel;
    private LayananModel $LayananModel;
    private BundlePenyewaanModel $BundlePenyewaanModel;


    public function __construct(){
//        $this->middleware('auth');
        $this->UserModel = new UserModel();
        $this->LayananModel = new LayananModel();
        $this->BarangModel = new BarangModel();
        $this->BundlePenyewaanModel = new BundlePenyewaanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'HOME | RADJA WEDDING',
        ];
        $ddd = ['dfdfdfd'];
        return view('Customers.Content.landing-page',$data, compact('ddd', 'data'));
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard | RADJA WEDDING',
        ];
        $dataBarang = ['fdfdfdfd'];
        return view('Content.Dashboard',$data, compact('dataBarang', 'data'));

    }


}
