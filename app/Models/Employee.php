<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        "firstName",
        "lastName",
        "company_id",
        "email",
        "phone",
        "created_by"
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function creator(){
        return $this->belongsTo(User::class,"created_by");
    }

    protected static function boot()
    {
        parent::boot();
        Employee::saving(function ($model) {
            $model->created_by = Auth::id();
            if (\auth()->user()->hasAnyRole("company")){
                $model->company_id = \auth()->user()->employee->company->id;
            }
        });
    }
}
