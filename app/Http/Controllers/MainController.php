<?php
namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Place;
use App\Place0;
use App\Place1;
use App\Place2;
use App\Place3;
use App\Place4;
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
        $mem = Place0::orderBy('updated_at', 'desc')->get();
        $chiefs = Place0Resource::collection($mem);
        $deps = [];
        for($i=0; $i<count($chiefs); $i++){
            $deps[$i] = Place1::where('chief', '=', $i+1)->get();
        }
        $mem = Place1::all()->count();
        $mgrs = [];
        for($i=0; $i<$mem;$i++){
            $mgrs[$i] = Place2::where('chief', '=', $i+1)->get();            
        }
        return view('main', compact('chiefs','deps','mgrs','engs'));
    }

    public function fetch(Request $request)
    {
        $model_name = 'App\Place3';
        $select = $request->select;
        $data = $model_name::where('chief', '=', $select)->get();
        $output = '';
        $linkClass = 'child-dynamic';
        $output .= '<ul>';
        foreach($data as $row)
        {
            $output .= '<li>';
            $output .= '<h6 class="'.$linkClass.'" id="'.$row->id.'">'.$row->placeName->place.': <b>'.$row->name.'</b>, Salary: <b>'.$row->salary.'</b>';
            $output .=  'Employment: <b>'.$row->created_at.'</b>, Boss: '.$row->chiefName->name.'</h6>';
            $output .= '<ul>';
            $child_model = 'App\Place4';
            $child_data = $child_model::where('chief', '=', $row->id)->get();
            foreach($child_data as $child){
                $output .= '<li>';
                $output .= '<i>'.$child->placeName->place.': <b>'.$child->name.'</b>, Salary: <b>'.$child->salary.'</b>';
                $output .=  'Employment: <b>'.$child->created_at.'</b>, Boss: '.$child->chiefName->name.'</i>';
                $output .= '</li>';
            }
            $output .= '</ul></li>';
        }        
        $output .= '</ul>';
        echo $output;
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
    public function toArray($collection){
        $data = array();
        foreach($collection as $row){
            $data[] =  $row;
        }
        return $data;
    }
}