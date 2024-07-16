<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient; // Assuming Patient is another model

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'amount',
        'service_offered',
        'payment_date',
    ];

    public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }
}
