<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Session;
use App\Tasks;
use DB;



class TaskContoller extends Controller
{
    public function store(Request $request)
    {
		//dd('aaaaa');
        //dd($request);
		
		$validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
		'password' => 'required',
		'file' => 'required',
		'phone' => 'required|numeric',
		'date' => 'required',
		
		
		]);
		//dd(public_path);
		//dd($request->hasFile('file'));
		if ($request->hasFile('file')) {
			$image = $request->file('file');
			//dd('aaaaa');
			$input['file'] = time().'.'.$image->getClientOriginalExtension();
				
			$destinationPath = public_path('images\img');
             //dd($destinationPath) ; 
			$image->move($destinationPath, $input['file']);
			
			//$request->file->store('product', 'public');
		}
		//dd($request->get('name'));
		//$data['user'] = \Session::get('plans');
		$product = collect([$request->get('name'),$request->get('email'),$request->get('password'),$input['file'],$request->get('phone'),$request->get('date'),$request->get('role')]);
		Session::push('cart', $product);
			//Session::flush();
		// $deatil=$request->session()->put('name', $request->get('name'));
		// $deatil=$request->session()->put('email', $request->get('email'));
		// $deatil=$request->session()->put('password', $request->get('password'));
		// $deatil=$request->session()->put('file', $input['file']);
		// $deatil=$request->session()->put('phone', $request->get('phone'));
		// $deatil=$request->session()->put('date', $request->get('date'));
		// $deatil=$request->session()->put('role', $request->get('role'));
		//dd($deatil);
		//dd($request->session()->get('name'));
		 //Session::put('details', ['name' => $request->get('name'), 'email' =>$request->get('email'), 'password' => $request->get('password'),'img' => $input['file'],'phone' => $request->get('phone'),'date' => $request->get('date'),'role' => $request->get('role')]);
       //dd( session('cart'));
		return view('task.show',compact('cart'));
    }
	 public function edit(Request $request,$id)
    {
			//dd('aaaaa');
			//dd($request->session()->get('name'));
			
			return view('task.edit',compact('id'));
	}
	
	public function edits(Request $request,$id )
	{
		//dd($id);
		$validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
		'password' => 'required',
		'file' => 'required',
		'phone' => 'required|numeric',
		'date' => 'required',
		
		
		]);
		//dd(public_path);
		//dd($request->hasFile('file'));
		if ($request->hasFile('file')) {
			$image = $request->file('file');
			//dd('aaaaa');
			$input['file'] = time().'.'.$image->getClientOriginalExtension();
				
			$destinationPath = public_path('images\img');
             //dd($destinationPath) ; 
			$image->move($destinationPath, $input['file']);
			
			//$request->file->store('product', 'public');
		}
		//dd($request->get('name'));
		//$data['user'] = \Session::get('plans');
		$deatil=$request->session()->put('name', $request->get('name'));
		$deatil=$request->session()->put('email', $request->get('email'));
		$deatil=$request->session()->put('password', $request->get('password'));
		$deatil=$request->session()->put('file', $input['file']);
		$deatil=$request->session()->put('phone', $request->get('phone'));
		$deatil=$request->session()->put('date', $request->get('date'));
		$deatil=$request->session()->put('role', $request->get('role'));
		return view('task.show');
	}
	
	public function delete(Request $request,$id)
	{
		//dd($id);
		//dd(session('cart')[$id-1]);
		
		unset(session('cart')['$id-1']);
		// $request->session()->forget('name');
		// $request->session()->forget('email');
		// $request->session()->forget('password');
		// $request->session()->forget('file');
		// $request->session()->forget('phone');
		// $request->session()->forget('date');
		// $request->session()->forget('role');
		return view('task.show');
		
		
	}
	
	
	public function finaldata(Request $request)
	{
		//dd( session('cart'));
		//Tasks::insert(session('cart')); // Eloquent approach
		foreach (session('cart') as $key  => $carts)
		{
		$user = Tasks::create(array(
						'name' => $carts[0],
						'email' => $carts[1],
						'password' => $carts[2],
						'image' => $carts[3],
						'phone' => $carts[4],
						'role' => $carts[5],
						'date' => $carts[6]
						
					));
			}		
		//DB::table('tasks')->insert(session('cart')); // Query Builder approach
	}
}
