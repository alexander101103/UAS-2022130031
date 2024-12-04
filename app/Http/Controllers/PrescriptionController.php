<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use App\Models\MedicalRecord;
use App\Models\Medicine;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index()
    {
        $prescriptions = Prescription::all();
        return view('prescriptions.index', compact('prescriptions'));
    }

    public function create()
    {
        $medicalRecords = MedicalRecord::all();
        $medicines = Medicine::all();
        return view('prescriptions.create', compact('medicalRecords', 'medicines'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'medical_record_id' => 'required|exists:medical_records,id',
            'medicine_id' => 'required|exists:medicines,id',
            'quantity' => 'required|integer',
        ]);

        Prescription::create($request->all());

        return redirect()->route('prescriptions.index')->with('success', 'Prescription created successfully.');
    }

    public function show(Prescription $prescription)
    {
        return view('prescriptions.show', compact('prescription'));
    }

    public function edit(Prescription $prescription)
    {
        $medicalRecords = MedicalRecord::all();
        $medicines = Medicine::all();
        return view('prescriptions.edit', compact('prescription', 'medicalRecords', 'medicines'));
    }

    public function update(Request $request, Prescription $prescription)
    {
        $request->validate([
            'medical_record_id' => 'required|exists:medical_records,id',
            'medicine_id' => 'required|exists:medicines,id',
            'quantity' => 'required|integer',
        ]);

        $prescription->update($request->all());

        return redirect()->route('prescriptions.index')->with('success', 'Prescription updated successfully.');
    }

    public function destroy(Prescription $prescription)
    {
        $prescription->delete();

        return redirect()->route('prescriptions.index')->with('success', 'Prescription deleted successfully.');
    }
}
