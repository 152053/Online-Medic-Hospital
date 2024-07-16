<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Payment;
use App\Models\Review;
use App\Models\Appointment;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'doctor_id', 'consultation_date', 'notes'
    ];

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id','id');
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id','id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
