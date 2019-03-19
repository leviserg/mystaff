<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Place;
use App\Place0;
use App\Place1;
use App\Place2;
use App\Place3;
use App\Place4;
use DB;
use App\Http\Resources\PlaceResource;
use App\Http\Resources\Place0Resource;
use App\Http\Resources\Place1Resource;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
/*
        $chief = Place0::all();
        $chiefs = $this->toArray($chief);

        $dep = Place1::orderBy('chief', 'asc')->get()->groupBy('chief');
        $deps = $this->toArray($dep);

        $mgr = Place2::orderBy('chief', 'asc')->get()->groupBy('chief');
        $mgrs = $this->toArray($mgr);

        $eng = Place3::orderBy('chief', 'asc')->get()->groupBy('chief');
        $engs = $this->toArray($eng); 

        $prg = Place4::orderBy('chief', 'asc')->get()->groupBy('chief');
        $prgs = $this->toArray($prg);
*/

        $mem = Place0::orderBy('updated_at', 'desc')->get();
        $chiefs = Place0Resource::collection($mem);

        $deps = [];
        for($i=0; $i<count($chiefs); $i++){
            //$ld = Place1::where('chief', '=', $i+1)->orderBy('updated_at', 'desc')->get();
            //$deps[$i] = Place1Resource::collection($ld);
            $deps[$i] = Place1::where('chief', '=', $i+1)->orderBy('updated_at', 'desc')->get();
        }
/*
        $mem = Place1::all()->count();
        $mgrs = [];
        for($i=0; $i<$mem;$i++){
            $lm = Place2::where('chief', '=', $i+1)->orderBy('id', 'desc')->get();
            $mgrs[$i] = Place1Resource::collection($lm);              
        }

        $mem = Place2::all()->count();
        $engs = [];
        for($i=0; $i<$mem;$i++){
            $lm = Place3::where('chief', '=', $i+1)->orderBy('updated_at', 'desc')->get();
            $engs[$i] = Place1Resource::collection($lm);              
        }

        $mem = Place3::all()->count();
        $prgs = [];
        for($i=0; $i<$mem;$i++){
            $lm = Place4::where('chief', '=', $i+1)->get();
            $prgs[$i] = Place1Resource::collection($lm);              
        }

        return view('main', compact('chiefs','deps','mgrs','engs','prgs'));
        */
        return view('main', compact('chiefs','deps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function toArray($collection){
        $data = array();
        foreach($collection as $row){
            $data[] =  $row;
        }
        return $data;
    }
}
