<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChamadoRequest;
use App\Models\Chamado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $chamados = Chamado::all();
        return Inertia::render('Home', ['chamados' => $chamados]);
    }

    public function store(StoreChamadoRequest $request)
    {
        $validated = $request->validated();

        $chamados = new Chamado();
        $chamados->fill($validated);
        $chamados->save();

        return redirect()->route('index.home');
    }

    public function destroy(Chamado $chamado) {
        $chamado->delete();

        return redirect()->route('index.home')->with('message', 'Chamado exluido');
    }
}
