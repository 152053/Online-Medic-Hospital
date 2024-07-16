<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'doctor_id', 'medication', 'dosage'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_username');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
