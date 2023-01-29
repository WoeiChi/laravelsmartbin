<?php

namespace App\Http\Controllers\binController;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bin;
use DB;

class binController extends Controller
{
    //index is all data print
    public function index()
    {
        #$bin = bin::all();
        $bins = bin::orderBy('date','desc')->take(4)->get();
        return view ('Bin')->with('bins', $bins);
    }

    public static function calculate($H, $h){
       $x=(($H-$h)/$H)*100;
        return number_format((float) $x, 2, '.', '' );
    }

    public function LineChart()
    {
        $result = DB::select(DB::raw("SELECT compartment, remaining FROM bin WHERE compartment in ('Paper', 'Plastic', 'Metal','Others') ORDER BY compartment and date DESC LIMIT 4;"));
        // $data = "";
        $data_array = array();

        foreach($result as $val){
            array_push($data_array, "['".$val->compartment."',".$val->remaining."],");
        }
        // foreach($result as $val){
        //     $data.="['".$val->date."','".$val->remaining."'],";
        // }
        //dd($data);
        // return view ('line-chartline-chart', compact('data'));
        return view('line-chart')->with('data',$data_array);
        
    }

}