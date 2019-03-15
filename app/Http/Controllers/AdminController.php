<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use App\Http\Requests;
use App\User;
use App\Place;
use App\Place0;
use App\Place1;
use App\Place2;
use App\Place3;
use App\Place4;
use Yajra\Datatables\Datatables;
use App\Http\Resources\PlaceResource;
use App\Http\Resources\Place1Resource;
use App\Http\Resources\Place0Resource;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if($user['level']>=2){
            return redirect('/admin');
        }
        else{
            return redirect('/');
        }      
    }

    public function admin()
    {
        /*
        $chf = Place0::orderBy('id', 'asc');
        $dep = Place1::orderBy('chief', 'asc');
        $mgr = Place2::orderBy('chief', 'asc');
        $eng = Place3::orderBy('chief', 'asc');
        $prg = Place4::orderBy('chief', 'asc');
        $lm= $chf->union($dep)->union($mgr)->union($eng)->union($prg)->get()->groupBy('chief');
        $lm= $chf->get();
        $data = Place1Resource::collection($lm);
        return view('test', compact('data'));  
        */
        return view('admin');
    }


    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getdata()
    {
       $chf = Place0::join('places', 'place0s.place', '=', 'places.id')
            ->select('place0s.id', 'places.place as place_name','place0s.name','place0s.salary','place0s.created_at','place0s.name as chief_name','place0s.avatar');
        $dep = Place1::join('places', 'place1s.place', '=', 'places.id')
            ->join('place0s', 'place1s.chief', '=', 'place0s.id')
            ->select('place1s.id', 'places.place as place_name','place1s.name','place1s.salary','place1s.created_at','place0s.name as chief_name','place1s.avatar');
        $mgr = Place2::join('places', 'place2s.place', '=', 'places.id')
            ->join('place1s', 'place2s.chief', '=', 'place1s.id')
            ->select('place2s.id', 'places.place as place_name','place2s.name','place2s.salary','place2s.created_at','place1s.name as chief_name','place2s.avatar');
        $eng = Place3::join('places', 'place3s.place', '=', 'places.id')
            ->join('place2s', 'place3s.chief', '=', 'place2s.id')
            ->select('place3s.id', 'places.place as place_name','place3s.name','place3s.salary','place3s.created_at','place2s.name as chief_name','place3s.avatar');
        $prg = Place4::join('places', 'place4s.place', '=', 'places.id')
            ->join('place3s', 'place4s.chief', '=', 'place3s.id')
            ->select('place4s.id', 'places.place as place_name','place4s.name','place4s.salary','place4s.created_at','place3s.name as chief_name','place4s.avatar');
        $data = $chf->union($dep)->union($mgr)->union($eng)->union($prg)->get()->groupBy('chief');
        
        return Datatables::of($chf)->make(true);
    }

}
