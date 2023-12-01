<?php

namespace App\Http\Controllers;

use App\Models\Criteri;
use Illuminate\Http\Request;

/**
 * Class CriteriController
 * @package App\Http\Controllers
 */
class CriteriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criteris = Criteri::paginate();

        return view('criteri.index', compact('criteris'))
            ->with('i', (request()->input('page', 1) - 1) * $criteris->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $criteri = new Criteri();
        return view('criteri.create', compact('criteri'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Criteri::$rules);

        $criteri = Criteri::create($request->all());

        return redirect()->route('criteris.index')
            ->with('success', 'Criteri created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $criteri = Criteri::find($id);

        return view('criteri.show', compact('criteri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $criteri = Criteri::find($id);

        return view('criteri.edit', compact('criteri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Criteri $criteri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Criteri $criteri)
    {
        request()->validate(Criteri::$rules);

        $criteri->update($request->all());

        return redirect()->route('criteris.index')
            ->with('success', 'Criteri updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $criteri = Criteri::find($id)->delete();

        return redirect()->route('criteris.index')
            ->with('success', 'Criteri deleted successfully');
    }
}
