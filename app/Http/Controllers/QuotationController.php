<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotation;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('quotation.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|numeric',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'tcontrato' => 'required|not_in:0',
            'con_act' => 'required|numeric',
            'periodo' => 'required|in:1,2',
            'con_ant' => 'required|numeric',
        ]);

        $capacity = $this->calculateConsumption($validatedData['con_act'], $validatedData['con_ant'], $validatedData['periodo']);
        $panels = ceil($capacity / 0.320);
        $price = $panels * 144;

        $quotation = Quotation::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'option' => $validatedData['tcontrato'],
            'consume' => [
                'current' => $validatedData['con_act'],
                'previous' => $validatedData['con_ant'],
                'period' => $validatedData['periodo'],
                'capacity' => $capacity,
                'panels' => $panels,
                'price' => $price
            ]
        ]);

        return redirect()->route('quotations.result', $quotation->id);

    }

    function result(int $id) {
        $quotation = Quotation::find($id);
        return view('quotation.result', compact('quotation'));
    }

    private function calculateConsumption($current, $previous, $period)
    {
        $kwhd = 0;
        $pico = 4.5;

        if($period == 1)
        $kwhd = ($current - $previous) / 31;
        else
        $kwhd = ($current - $previous) / 61;

        $capacidad = $kwhd / $pico;

        if($capacidad < 0)
        $capacidad *= -1;

        return $capacidad;
    }
}
