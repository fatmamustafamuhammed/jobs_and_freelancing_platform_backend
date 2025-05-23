<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
    'name',
    ];
   public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function freelancerProfiles()
    {
        return $this->belongsToMany(FreelancerProfile::class, 'freelancer_skills', 'skill_id', 'freelancer_id');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_skills');
    }

    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'job_skills');
    }
}
