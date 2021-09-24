<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !auth()->user()->hasAnyRole("employee");
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $roles = Role::getAuthUserCanCreateRoles();
        $sRole = $this->request->get("role");
        $role = Role::where('name',$sRole)->first();

        if (!in_array($sRole,$roles) || !$role->exists()){
            $roles = ["c"];
        }

        if (auth()->user()->hasAnyRole(['admin','superAdmin']) && ($sRole == "employee" || $sRole=="company")){
            return [
                "firstName"=>"required",
                "lastName"=>"required",
                "email"=>"required|unique:users",
                "password"=>"required",
                "phone"=>"",
                "role"=>Rule::in($roles),
                "company"=>"required_if:role,==,company|required_if:role,==,employee|exists:App\Models\Company,id",
            ];
        }
        else{
            return [
                "firstName"=>"required",
                "lastName"=>"required",
                "email"=>"required|unique:users",
                "password"=>"required",
                "phone"=>"",
                "role"=>Rule::in($roles),
            ];
        }
    }
}
