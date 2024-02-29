<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Performance;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PerformancesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $performances = Performance::all();
        return view('admin.performances.index',compact('performances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $genres = Genre::all();
        return \view('admin.performances.create',compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Storage::disk('public')->put('/pictures',$request->file('picture'));

        $performance = Performance::query()->create([
            'name' => $request->name,
            'picture' => $request->file('picture')->hashName(),
            'cost' => $request->cost,
            'age_limit' => $request->age_limit,
            'date' => $request->date,
        ]);
        $performance->genres()->sync($request->checkbox);

        return redirect('/admin');
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
