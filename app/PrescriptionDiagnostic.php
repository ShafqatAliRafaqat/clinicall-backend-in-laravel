<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrescriptionDiagnostic extends Model
{
    protected $guarded = ['id'];
    
    public function patientId(){
    	return $this->hasOne('App\Patient', 'pk', 'patient_id');
    }
    public function doctorId(){
        return $this->hasOne('App\Doctor', 'pk', 'doctor_id');
    }
    public function diagnosticId(){
        return $this->hasOne('App\Diagnostic', 'id', 'diagnostic_id')->select('id','name','preinstruction');
    }
    public function appointmentId(){
        return $this->hasOne('App\Appointment', 'id', 'appointment_id');
    }
    public function createdBy(){
        return $this->belongsTo('App\User','created_by','id')->select('id','name','phone');
    }
    public function updatedBy(){
        return $this->belongsTo('App\User','updated_by','id')->select('id','name','phone');
    }
}
