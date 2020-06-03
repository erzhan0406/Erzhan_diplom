<?php

namespace App\Http\Controllers;

use App\EarthquakePoint;
use Illuminate\Http\Request;

class EarthquakesController extends Controller
{
    public function index()
    {
        $earthquakes = EarthquakePoint::paginate(10);
        return view('earthquakes.index', compact('earthquakes'));
    }

    public function store(Request $request)
    {
        EarthquakePoint::create($request->all());
        return redirect()->back();
    }

    public function create()
    {
        $earthquake = new EarthquakePoint();
        return view('earthquakes.create', compact('earthquake'));
    }

    public function update($id)
    {
        $earthquake = EarthquakePoint::find($id);
        return view('earthquakes.edit', compact('earthquake'));
    }

    public function edit($id, Request $request)
    {
        EarthquakePoint::find($id)->update($request->all());
        return redirect()->back();
    }
}
