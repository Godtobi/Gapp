<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\Company;
use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware("canCreateUsers")->only(['create','store']);
        $this->middleware("canViewUsers")->only(['index','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::role(['admin'])->paginate(10);
        return view("users.index",compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::getAuthUserCanCreateRoles();
        $companies = Company::all();
        return view("users.create",compact('roles','companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        try {
            $data = $request->validated();
            $data['name'] = $data['firstName'].$data['lastName'];
            $data['company_id'] = isset($data['company']) ? $data['company'] : null;
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);
            $user->assignRole($data['role']);
            if ($data['role']=="company" || $data['role']=="employee"){
                $employee = Employee::create($data);
                $user->employee_id = $employee->id;
                $user->save();
            }
            return redirect()->back()->with("success","User created successfully");
        }
        catch (\Exception $exception){
            return redirect()->back()->withErrors("Something went wrong. Please try again");
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
