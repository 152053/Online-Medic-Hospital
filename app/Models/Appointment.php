<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Consultation;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_username',
        'doctor_id',
        'phone_number',
        'email_address',
        'preferredappointment_date',
        'preferredappoinmtent_time',
        'alternative_datetime',
        'services_interested',
        'status', 
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}