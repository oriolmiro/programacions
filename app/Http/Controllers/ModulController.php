<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Illuminate\Http\Request;

/**
 * Class ModulController
 * @package App\Http\Controllers
 */
class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moduls = Modul::paginate();

        return view('modul.index', compact('moduls'))
            ->with('i', (request()->input('page', 1) - 1) * $moduls->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modul = new Modul();
        return view('modul.create', compact('modul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Modul::$rules);

        $modul = Modul::create($request->all());

        return redirect()->route('moduls.index')
            ->with('success', __('Modul created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modul = Modul::find($id);

        return view('modul.show', compact('modul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modul = Modul::find($id);

        return view('modul.edit', compact('modul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Modul $modul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modul $modul)
    {
        request()->validate(Modul::$rules);

        $modul->update($request->all());

        return redirect()->route('moduls.index')
            ->with('success', 'Modul updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $modul = Modul::find($id)->delete();

        return redirect()->route('moduls.index')
            ->with('success', 'Modul deleted successfully');
    }
}
