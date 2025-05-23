<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployerProfile extends Model
{
    protected $fillable = [
        'user_id',
        'company_name',
        'company_description',
        'about',
        'category_id',
        'employees_count',
        'founded_date',
        'location'
    ];
     public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }
}
