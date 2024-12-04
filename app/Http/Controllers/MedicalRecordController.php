<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Poli;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function index()
    {
        $medicalRecords = MedicalRecord::all();
        return view('medical_records.index', compact('medicalRecords'));
    }

    public function create()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        $polis = Poli::all();
        return view('medical_records.create', compact('patients', 'doctors', 'polis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'polis_id' => 'nullable|exists:polis,id',
            'visit_date' => 'required|date',
            'diagnosis' => 'required|string',
            'action_plan' => 'required|string',
        ]);

        MedicalRecord::create($request->all());

        return redirect()->route('medical_records.index')->with('success', 'Medical Record created successfully.');
    }

    public function show(MedicalRecord $medicalRecord)
    {
        $medicalRecord->load('patient', 'doctor', 'polie');
        return view('medical_records.show', compact('medicalRecord'));
    }


    public function edit(MedicalRecord $medicalRecord)
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        $polis = Poli::all();
        return view('medical_records.edit', compact('medicalRecord', 'patients', 'doctors', 'polis'));
    }

    public function update(Request $request, MedicalRecord $medicalRecord)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'polis_id' => 'required|exists:polis,id',
            'visit_date' => 'required|date',
            'diagnosis' => 'required|string',
            'action_plan' => 'required|string',
        ]);

        $medicalRecord->update($request->all());

        return redirect()->route('medical_records.index')->with('success', 'Medical Record updated successfully.');
    }

    public function destroy(MedicalRecord $medicalRecord)
    {
        $medicalRecord->delete();

        return redirect()->route('medical_records.index')->with('success', 'Medical Record deleted successfully.');
    }
}
