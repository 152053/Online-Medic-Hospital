<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vital extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id', // Assuming patient_id is the foreign key to the users table
        'height',
        'weight',
        'temperature',
        'blood_pressure',
    ];

    /**
     * Get the patient that owns the vitals.
     */
    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }
}
