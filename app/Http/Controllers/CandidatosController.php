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
     * Mostra o formulário de criação ou edição dos dados do candidato associado ao usuário autenticado.
     *
     * @return \Illuminate\Http\Response
     */
    public function createOrEditMyProfile()
    {
        if (Auth::user()->candidato) {
            return Inertia::render('Candidatos/CreateOrEdit', [
                'candidato' => new CandidatoResource(Auth::user()->candidato)
            ]);
        }
        return Inertia::render('Candidatos/CreateOrEdit');
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

        // // Retrieve the currently authenticated user's ID...
        $userId = Auth::id();  

        Candidato::create($request->validated() + ['user_id' => $userId]);

        // return Redirect::route('dashboard');
        return Redirect::back()->with('success', 'O cadastro foi criado com sucesso.');
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

        return Redirect::back()->with('success', 'O cadastro foi atualizado com sucesso.');
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
