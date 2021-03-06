<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Session; 
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\User;
use App\UserRole;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        
        return view('home', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Get the User Roles List ready for dropdowns
        $roles = UserRole::lists('label', 'id');
        
        return view('users.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $rules = array(
            'username' => 'required',
            'email' => 'required|email',
        );
        
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('users/create')
                ->withErrors($validator);
        } else {
            $user = new User;
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $user->user_roles_id = Input::get('user_roles_id');
            $user->save();
            return Redirect::to('users');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the user
        $user = User::find($id);
        $user->load('address');

        // show the edit form and pass the user
        return view('users.edit', ['user' => $user]);
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
        // validate
        $rules = array(
            'username' => 'required',
            'email' => 'required|email',
        );
        
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('users/edit')
                ->withErrors($validator);
        } else {
            // store
            $user = User::find($id);
            $user->fill(Input::all())->save();
            
            // Check if the user already has an address object defined.
            if(!is_null($user->address)){
                $user->address->fill(Input::all()['address'])->save();    
            }else{
                $user->address()->create(Input::all()['address']);
            }
            
            // redirect
            Session::flash('message', 'Successfully updated user!');
            return Redirect::to('users');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        
        $user->delete();
        
        return 'User Deleted Successfully.';
        
    }
    
    
    /**
     * 
     * -----------------
     * API METHODS
     * These methods are separated as they do not require CSRF tokens to be passed.
     * -----------------
     * 
     ***/ 
    
     /**
     * Creates a user given a username and password
     *
     * @param  Request $request
     * @return User $user
     */
    public function createUser(Request $request){
        
        $rules = array(
            'username' => 'required',
            'email' => 'required|email',
        );
        
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return $validator->errors()->all();
        } else {
            $user = new User;
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $user->save();
            return $user;
        }
        
    } // END OF createUser
    
    /**
     * Updates a user given an id and data
     *
     * @param  Request $request
     * @return User $user
     * 
     */
     public function updateUser(Request $request){
         
         // validate
        $rules = array(
            'id' => 'required'
        );
        
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return $validator->errors()->all();
        } else {
            
            $user = User::find(Input::get('id'));
            $user->fill(Input::all())->save();
            return $user;
        }
         
     } // END OF updateUser
     
     /**
     * Gets all users in the system
     *
     * @param  Request $request
     * @return Array $users
     * 
     */
     public function getAllUsers(Request $request){
         
         $users = User::all();
         
         return $users;
    
     } // END OF getAllUsers
     
     /**
     * Gets a user given an id
     *
     * @param  Request $request
     * @return User $user
     * 
     */
     public function getUserById(Request $request){
         
         // validate
        $rules = array(
            'id' => 'required'
        );
        
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return $validator->errors()->all();
        } else {
            
            try {
                $user = User::findOrFail(Input::get('id'));    
            }
            catch(ModelNotFoundException $e){
                return response('No Users found with the specified id', 400);
            }
            
            return $user;
        }
    
     } // END OF getUserById
     
}
