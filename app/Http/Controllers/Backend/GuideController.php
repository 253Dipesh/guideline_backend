<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guides = Guide::orderBy('created_at', 'desc')->get();
        return view('backend.guide.index', compact('guides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.guide.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'mobile' => 'required',

        ]);

        $guide = new Guide();
        $guide->name = $request->name;
        $guide->gender = $request->gender;
        $guide->age = $request->age;
        $guide->mobile = $request->mobile;
        $guide->email = $request->email;
        uploadImage($request, $guide, 'photo');
        $guide->save();
        return redirect()->route('guide.index');
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
        $guide = Guide::find($id);
        return view('backend.guide.edit', compact('guide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'mobile' => 'required',
            'status' => 'required'
        ]);

        $guide =  Guide::find($id);
        $guide->name = $request->name;
        $guide->gender = $request->gender;
        $guide->age = $request->age;
        $guide->mobile = $request->mobile;
        $guide->email = $request->email;
        $guide->status = $request->status;
        uploadImage($request, $guide, 'photo');
        $guide->update();
        return redirect()->route('guide.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
