<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatoStoreRequest;
use App\Http\Requests\CandidatoUpdateRequest;
use App\Http\Resources\CandidatoResource;
use App\Models\Candidato;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class CandidatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Inertia::render('Candidato/Index', [
        //     'filters' => Request::all('search', 'trashed'),
        //     'candidatos' => new CandidatoColletion(
        //         Auth::user()->
        //     )
        // ])
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Candidatos/CreateOrEdit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidatoStoreRequest $request)
    {

        // Retrieve the currently authenticated user...
        $user = Auth::user();

        // Retrieve the currently authenticated user's ID...
        $id = Auth::id();

        Candidato::create($request->validated());

        return Redirect::route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function show(Candidato $candidato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidato $candidato)
    {
        return Inertia::render('Candidatos/CreateOrEdit', [
            'candidato' => new CandidatoResource($candidato)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function update(CandidatoUpdateRequest $request, Candidato $candidato)
    {
        $candidato->update($request->validated());

        Redirect::back()->with('success', 'O cadastro foi atualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidato $candidato)
    {
        //
    }
}
