<?php

namespace App\Http\Controllers;

use App\Models\Ra;
use Illuminate\Http\Request;

/**
 * Class RaController
 * @package App\Http\Controllers
 */
class RaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ras = Ra::paginate();

        return view('ra.index', compact('ras'))
            ->with('i', (request()->input('page', 1) - 1) * $ras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ra = new Ra();
        return view('ra.create', compact('ra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ra::$rules);

        $ra = Ra::create($request->all());

        return redirect()->route('ras.index')
            ->with('success', 'Ra created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ra = Ra::find($id);

        return view('ra.show', compact('ra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ra = Ra::find($id);

        return view('ra.edit', compact('ra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ra $ra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ra $ra)
    {
        request()->validate(Ra::$rules);

        $ra->update($request->all());

        return redirect()->route('ras.index')
            ->with('success', 'Ra updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ra = Ra::find($id)->delete();

        return redirect()->route('ras.index')
            ->with('success', 'Ra deleted successfully');
    }
}
