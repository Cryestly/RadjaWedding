<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LayananModel;
use App\Models\BundleLayananModel;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index(){
        return view('Admin.Layanan.index');
    }
    public function create()
    {

    }

    public function store(Request $request){

    }

    public function show($id){

    }


    public function edit($id){

    }

    public function update(Request $request, $id){

    }


    public function destroy($id){

    }
}
