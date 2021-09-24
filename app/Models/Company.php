<?php

namespace App\Models;

use App\Events\CompanyCreatedEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "email",
        "logo",
        "website"
    ];

    public function user(){
      return  $this->belongsTo(User::class,"created_by");
    }

    public function employees(){
        return  $this->hasMany(Employee::class);
    }

    protected static function boot()
    {
        parent::boot();
        Company::saving(function ($model) {
            $model->created_by = Auth::id();
        });
        Company::created(function ($model){
            event(new CompanyCreatedEvent($model->email));
        });
    }
}
