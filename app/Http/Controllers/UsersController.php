<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;


class UsersController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'department' => 'required'
        ]);

        //Create user
        $user = new User;
        $user->name = $request->input('username');
        $user->email = $request->input('email');
        $user->department = $request->input('department');
        $user->password = $request->input('password');
        $user->save();

        //redirect and success message
        return redirect('/users')->with('success', 'Yaay! You have successfully created a new user.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = user::find($id);
        return view('admin.users.edit')->with('user', $user);
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
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'department' => 'required'
        ]);

        //Create user
        $user = User::find($id);
        $user->name = $request->input('username');
        $user->email = $request->input('email');
        $user->department = $request->input('department');
        $user->password = $request->input('password');
        $user->save();

        //redirect and success message
        return redirect('/users')->with('success', 'User Updated!');
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
        //redirect and success message
        return redirect('/users')->with('success', 'User Evicted!');
    }


    /*
      Function to assign user to roles by using the role entered thorugh register Controllers
    */
    // public function assignRoles(Request $request)
    // {
    //   $user = User::where('email', $request['email'])->first();
    //   $user->roles()->detach();
    //   if($request['support']) {
    //     $user->roles()->attach(Role::where('name', 'Support')->first());
    //   }
    //   if($request['admin']) {
    //     $user->roles()->attach(Role::where('name', 'Admin')->first());
    //   }
    //   if($request['supreme']) {
    //     $user->roles()->attach(Role::where('name', 'Supreme')->first());
    //   }
    // }
}
