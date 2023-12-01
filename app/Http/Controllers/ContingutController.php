<?php

namespace App\Http\Controllers;

use App\Models\Contingut;
use Illuminate\Http\Request;

/**
 * Class ContingutController
 * @package App\Http\Controllers
 */
class ContingutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $continguts = Contingut::paginate();

        return view('contingut.index', compact('continguts'))
            ->with('i', (request()->input('page', 1) - 1) * $continguts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contingut = new Contingut();
        return view('contingut.create', compact('contingut'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Contingut::$rules);

        $contingut = Contingut::create($request->all());

        return redirect()->route('continguts.index')
            ->with('success', 'Contingut created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contingut = Contingut::find($id);

        return view('contingut.show', compact('contingut'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contingut = Contingut::find($id);

        return view('contingut.edit', compact('contingut'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Contingut $contingut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contingut $contingut)
    {
        request()->validate(Contingut::$rules);

        $contingut->update($request->all());

        return redirect()->route('continguts.index')
            ->with('success', 'Contingut updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contingut = Contingut::find($id)->delete();

        return redirect()->route('continguts.index')
            ->with('success', 'Contingut deleted successfully');
    }
}
