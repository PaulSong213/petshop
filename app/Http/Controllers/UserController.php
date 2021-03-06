<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserController extends Controller
{
    use RegistersUsers;

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
        $users = User::paginate(5);

        return view('users.index', ['users' => $users]);
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
        redirect()->back()->with('fromAdd', true);
        $password = $request->password;
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc|unique:App\Models\User,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|in:'.$password,
            'is_admin' => 'required',
        ]);

        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($password);
        $users->is_admin = $request->is_admin;
        if($users->save()){
            return redirect()->back()->with('success','User Created Successfully');
        }
        return redirect()->back()->with('User Creation Failed');
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
        redirect()->back()->with('fromEdit', $id);
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'is_admin' => 'required',
        ]);
        $users = User::find($id);
        if(!$users){
            return back()->with('Error', 'User not found');
        }
        $users->update($request->all());
        return back()->with('success', 'User Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        if(!$users){
            return back()->with('Error', 'User not found');
        }
        $users->delete();
        return back()->with('success', 'User Deleted Successfully!');
    }
}
