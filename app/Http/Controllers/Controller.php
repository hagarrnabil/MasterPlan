<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function show(Request $request){
        //$request->session()->put("user",$request->name); // ama de bt7ot fe el session fa law 7ata ms7t elline da b3den htfdal el value mwgoda fe elsession
        //$request->session()->flash('user',$request->name); // de for one use only
        //echo $request->session()->get('user');
        //dd($request->input());
        $validation = $request->validate([
           'name'=>'required | max:5',
            'password'=> 'required | numeric'
        ]);

        dd($request->input());

        return view("welcome" , ['name'=>$request->name])->with('dataForTry',"Trying");
    }
}
