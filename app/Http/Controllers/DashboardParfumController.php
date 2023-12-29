<?php

namespace App\Http\Controllers;

use App\Models\Parfum;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardParfumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('dashboard.parfums.index', [
            'parfums' => Parfum::where('user_id', auth()->user()->id)->get()
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.parfums.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:parfums',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('parfum-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Parfum::create($validateData);

        return redirect('/dashboard/parfums')->with('success', 'New Parfum has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parfum 
     * @return \Illuminate\Http\Response
     */
    public function show(Parfum $parfum)
    {
        return view('dashboard.parfums.show', [
            'parfum' => $parfum
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parfum  $parfum
     * @return \Illuminate\Http\Response
     */
    public function edit(Parfum $parfum)
    {
        return view('dashboard.parfums.edit', [
            'parfum' => $parfum,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parfum  $parfum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parfum $parfum)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        if ($request->slug != $parfum->slug) {
            $rules['slug'] = 'required|unique:parfums';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('parfum-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Parfum::where('id', $parfum->id)
            ->update($validatedData);

        return redirect('/dashboard/parfums')->with('success', 'New parfum has been update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parfum  $parfum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parfum $parfum)
    {

        if ($parfum->image) {
            Storage::delete($parfum->image);
        }
        Parfum::destroy($parfum->id);

        return redirect('/dashboard/parfums')->with('success', 'Parfum has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Parfum::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
