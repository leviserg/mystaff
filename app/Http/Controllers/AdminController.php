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
    //    $chf = Place0::orderBy('id', 'asc');
    //     $dep = Place1::select('id','name','salary','avatar')->get();
    //    $mgr = Place2::select('id','name','salary','avatar')->orderBy('chief', 'asc');
    //    $eng = Place3::orderBy('chief', 'asc');
    //    $prg = Place4::orderBy('chief', 'asc');
    //    $lm= $dep->union($mgr)->get()->groupBy('chief');
    //    die(var_dump($lm));
        //$lm= $chf->union($dep)->union($mgr)->union($eng)->union($prg)->get()->groupBy('chief');
        //$lm= $chf->get();
    //    $data = $dep;
        return Datatables::of(User::all())->make(true);
    }

    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('admin');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(User::query())->make(true);
    }

}
