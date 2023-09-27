<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Previsao;

class PrevisaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $previsao = Previsao::all();
        return response()->json($previsao);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Previsao::create([
            'descricao' => $request->input('descricao'),
            'data_previsao' => $request->input('data_previsao'),
            'cidade' => $request->input('cidade')
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Previsao::find($id);

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
        $previsao = Previsao::find($id);
        $previsao->descricao = $request->input('descricao');
        $previsao->data_previsao = $request->input('data_previsao');
        $previsao->cidade = $request->input('cidade');
        $previsao->update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $previsao = Previsao::find($id);
        $previsao->delete();
    }
}