<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }
}
