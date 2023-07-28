<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::orderBy('created_at', 'desc')->get();
        return view('backend.activity.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'selling_price' => 'required',
        ]);

        $activity = new Activity();
        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->price = $request->price;
        $activity->discount = $request->discount;
        $activity->selling_price = $request->selling_price;
        uploadImage($request, $activity, 'image');
        $activity->save();
        return redirect()->route('activity.index');
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
        $activity = Activity::find($id);
        return view('backend.activity.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $activity =  Activity::find($id);
        $activity->title = $request->title;
        $activity->description = $request->description;
        $activity->price = $request->price;
        $activity->discount = $request->discount;
        $activity->selling_price = $request->selling_price;
        uploadImage($request, $activity, 'image');
        $activity->update();
        return redirect()->route('activity.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
