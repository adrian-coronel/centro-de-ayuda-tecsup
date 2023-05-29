<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use App\Models\Service;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($selectIdService)
    {
        return view('incident.create',[
            'incident' => new Incident,
            'services' => Service::select('id_service','name')->get(),
            'selectIdService' => $selectIdService,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id_user = 4;

        // esta es una asignación en masa
        $incident = new Incident([
            'id_user' => $id_user,
            'id_service' => $request->id_service,
            'subject' => $request->subject,
            'urgency' => $request->urgency,
            'impact' => $request->impact,
            'description' => $request->description
        ]);
        $incident->save();

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
