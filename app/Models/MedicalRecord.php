<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'polis_id',
        'visit_date',
        'diagnosis',
        'action_plan'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function polie()
    {
        return $this->belongsTo(Poli::class, 'polis_id');
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }
}
