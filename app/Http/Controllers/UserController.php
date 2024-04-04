<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate as MiddlewareAuthenticate;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
            "password" => ['required', 'string', 'min:8'],
            "address" => "required"
        ]);

        // return $request->all();

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
        }

        if($request->has('is_admin')){
            $is_admin = $request->is_admin;
        }else{
            $is_admin = 0;
        }

        User::create([
            "name"=> $request->name,
            "email" => $request->email,
            "password"=> $request->password,
            "avatar"=>$avatarName,
            "address"=>$request->address,
            "is_admin"=>$is_admin,
        ]);

        if($request->has('is_admin')){
            return redirect()->route('users.index')->with('status', 'User created successfully');

        }else{
            return redirect()->route('user.login');

        }

    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('dashboard.users.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            "address" => "required"
        ]);

        // return $request->all();

        if ($request->file('avatar')) {

            $avatarPath = public_path('/images/');

            $oldPicturePath = $avatarPath . $request->old_picture;
            
            if (file_exists($oldPicturePath)) {
                unlink($oldPicturePath);
            }

            $avatar = $request->file('avatar');

            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();

           

            $avatar->move($avatarPath, $avatarName);

        }else{
            $avatarName = $request->old_picture;
        }


        User::where("id",$id)->update([
            "name"=> $request->name,
            "email" => $request->email,
            "avatar"=>$avatarName,
            "address"=>$request->address,
            "is_admin"=>$request->is_admin,
        ]);

        return redirect()->route('users.index')->with('status', 'User updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);


        $user->delete();
        
        $avatarPath = public_path('/images/');

        $oldPicturePath = $avatarPath . $user->avatar;
        
        if (file_exists($oldPicturePath)) {
            unlink($oldPicturePath);
        }

        // return redirect()->route('users.index')->with('status', 'User deleted successfully');
        return response()->json(["status" => true,"message" => "User deleted successfully"]);
    }

    public function loginView(){
        return view("dashboard.login");
    }
    public function loginUser(){
        return view("home.login");
    }

    public function loginAction(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route("root");
            } else {
                return redirect()->route("home");
            }
        }
    
        return back()->with('invalidLogin', 'Invalid email or password.');
    }


    public function logoutAction(){
        Auth::logout();
        return redirect()->route('home');
    }

}
