<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
	public function uploadAvatar(Request $request){

		if($request->hasFile('image')){
			$filename = $request->image->getClientOriginalName();
			if(auth()->user()->avatar){
				Storage::delete('/ public/images/'.auth()->user()->avatar);
			}
			$request->image->storeAs('images', '$filename','public');
			auth()->user()->update(['avatar' => $filename]);
		}
		return redirect()->back();
	}

    public  function index()
    {
		dd('/public/images/'.auth()->user()->avatar);
		// $user = new User();
		// $user->name = 'andoh';
		// $user->email = 'andoh@gmail.com';
		// $user->password = 'Aiti2017';
		// $user->save();

    	/* raw queries */
    	// DB::insert('insert into users (name, email, password) values(?,?,?)', ['alhaji', 'alhaji@gmail.com', 'passWord']);
    	
    	// DB::update('update users set name = ? where id = 2', ['bitfumes']);

    	// DB::delete('delete from users where id=1');

    	// $users = DB::select('select * from users');


    	/* eloquentORM */
    // 1. create 
    	// $user = new User();
    	// $user->name  = 'nert';
    	// $user->email  = 'htbn@gmail.com';
    	// $user->password  = bcrypt('assWord');
    	// $user->save();


	// 2. delete 
    	// $user = User::where('id', 4)->delete();

	// 3. update
    	// $user = User::where('id', 3)->update(['name' => "fuses"]);


    	/* alternative create*/
    	// $data = [
    	// 	'name' => 'Benajmins Andoh',
    	// 	'email' => 'benoos.andoh@gmail.com',
    	// 	'password' => 'Aiti2017',
    	// ];
    	// User::create($data);
    
    //4. select all 
    	// $user = User::all();

    	// return $user;
    	
    }
}
