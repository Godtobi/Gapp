<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

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
        //dd($this->request->all());
        $roles = Role::getRoleNames();
        $sRole = $this->request->get("role");
        if (!in_array($sRole,$roles)){
            throw new \Exception("Invalid role selection");
        }
        if ($sRole=="employee" || $sRole=="company"){
            return [
                "firstName"=>"required",
                "lastName"=>"required",
                "email"=>"required",
                "password"=>"required",
                "phone"=>"",
                "role"=>"required",
                "company"=>"required_if:role,==,company|required_if:role,==,employee|exists:App\Models\Company,id",
            ];
        }
        else{
            return [
                "firstName"=>"required",
                "lastName"=>"required",
                "email"=>"required",
                "password"=>"required",
                "phone"=>"",
                "role"=>"required",
            ];
        }
    }
}
