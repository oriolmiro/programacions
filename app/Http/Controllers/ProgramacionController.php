<?php

namespace App\Http\Controllers;

use App\Models\Programacion;
use Illuminate\Http\Request;

/**
 * Class ProgramacionController
 * @package App\Http\Controllers
 */
class ProgramacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programacions = Programacion::paginate();

        return view('programacion.index', compact('programacions'))
            ->with('i', (request()->input('page', 1) - 1) * $programacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programacion = new Programacion();
        return view('programacion.create', compact('programacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Programacion::$rules);

        $programacion = Programacion::create($request->all());

        return redirect()->route('programacions.index')
            ->with('success', 'Programacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programacion = Programacion::find($id);

        return view('programacion.show', compact('programacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programacion = Programacion::find($id);

        return view('programacion.edit', compact('programacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Programacion $programacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programacion $programacion)
    {
        request()->validate(Programacion::$rules);

        $programacion->update($request->all());

        return redirect()->route('programacions.index')
            ->with('success', 'Programacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $programacion = Programacion::find($id)->delete();

        return redirect()->route('programacions.index')
            ->with('success', 'Programacion deleted successfully');
    }
}
