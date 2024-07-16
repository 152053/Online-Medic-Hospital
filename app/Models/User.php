<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role', 'username', 'status',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isPatient()
    {
        return $this->role === 'patient';
    }

    public function isDoctor()
    {
        return $this->role === 'doctor';
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    // Define mutators for doctor profile fields
    public function setSpecialityAttribute($value)
    {
        if ($this->isDoctor()) {
            $this->attributes['speciality'] = $value;
        }
    }

    public function setAgeAttribute($value)
    {
        if ($this->isDoctor()) {
            $this->attributes['age'] = $value;
        }
    }

    public function setGenderAttribute($value)
    {
        if ($this->isDoctor()) {
            $this->attributes['gender'] = $value;
        }
    }

    public function setExperienceYearsAttribute($value)
    {
        if ($this->isDoctor()) {
            $this->attributes['experience_years'] = $value;
        }
    }
}
