<?php

namespace Soga\Generator\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Soga\Generator\Models\Generator;

class GeneratorController extends Controller
{
    public function index(){
        return view('generator::generator');
    }

    public function send(Request $request){
//        return $request->all();
        Generator::create([
            'generator_name' => time()
        ]);
        return redirect()->back();
    }
}
