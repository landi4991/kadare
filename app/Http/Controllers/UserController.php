<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Closure;
use Auth;
use App\Models\Roles;

use Illuminate\Support\Facades\Crypt;


class UserController extends Controller
{
   public function __construct()
    {
        $this->middleware('web');
    }
    
  public function show()
    {
       
         $user=User::leftJoin('roles','user.id','=','roles.id')
                     ->select('user.*', 'user.name','user.email','roles.role','user.user_id')
                 ->get();
        return view('perdorues.perdorues',compact('user'));    
        }
    
    public function getUsers()
    {
        $roles=Roles::all();
        
        return view('perdorues.krijo_perdorues',compact('roles'));  
    } 

  
   public function krijo_perdoruesin(Request $request)
    {
       $this->validate($request,[
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'id' => 'required',
            ],
            [
        'name.required' => 'Fusha emri e detyrueshme !!',
        'email.required' => 'Fusha e-mail e detyrueshme !!',
        'password.required' => 'Fusha password e detyrueshme !!',
        'id.required' => 'Fusha roli e detyrueshme !!'
        
        
        ]);

        $user = new User;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->id = $request->id;
        $user->save();
            \Session::flash('success', 'Ndryshimet u ruajten me sukses' );
        return redirect('/perdorues');
    }
    

    public function edit($user_id) 

    {
          $user_id =  Crypt::decrypt($user_id);

        $users=User::leftJoin('roles','user.id','=','roles.id')
                    ->where('user.user_id',$user_id)
                     ->select('user.*', 'user.name','user.email','roles.role','user.user_id')
                    ->first();
        
        $roles=Roles::all();

                    return view('perdorues.edit',compact('users','roles'));    

            }


    public function perditeso(Request $request, $user_id)
      {
        $users = User::find($user_id);
       $this->validate($request, [
        'name' => 'required|max:60',

        ]);
        $keys = [ 'email', 'name', 'id','password'];
        $input = [
            'email' => $request['email'],
            'name' => $request['name'],
            'id' => $request['id'],

        ];
                 
        User::where('user_id', $user_id)
            ->update($input);
                    \Session::flash('success', 'Ndryshimet u ruajten me sukses' );
 
        return redirect('/perdorues');
       }


       public function ndrysho_password($user_id){
          $user_id =  Crypt::decrypt($user_id);

        $users=User::leftJoin('roles','user.id','=','roles.id')
                    ->where('user.user_id',$user_id)
                     ->select('user.*', 'user.name','user.email','roles.role','user.user_id')
                    ->first();
        
        $roles=Roles::all();

                 
         return view('perdorues.ndrysho_password',['users'=>$users]);
     }
      
     
         public function password_ndrysho(Request $request, $user_id)
    {
        $users = User::find($user_id);
       $this->validate($request, [
        'password' => 'required',

        ]);
        $keys = [ 'password'];
        $input = [        
            'password' => bcrypt($request->password)

        ];
                 
        User::where('user_id', $user_id)
            ->update($input);
                    \Session::flash('success', 'Ndryshimet u ruajten me sukses' );
 
        return redirect('/perdorues');
    }





         
      public function fshi_perdorues($user_id)
    {
        User::where('user_id', $user_id)->delete();
                \Session::flash('success', 'Ndryshimet u ruajten me sukses' );

         return redirect()->intended('/perdorues');
    }





}     
      




