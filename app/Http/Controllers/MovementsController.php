<?php

namespace App\Http\Controllers;

use App\Movement;
use App\Asset;
use App\Location;
use App\Status;
use Illuminate\Http\Request;

use App\Http\Requests;

class MovementsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function show(Asset $asset)
  {
    $movements = Movement::orderBy('created_at', 'desc')->get();
    $locations = Location::all();
    $statuses = Status::all();
    return view('movements.history', compact('asset', 'movements', 'locations', 'statuses'));
  }

  public function create(Asset $asset)
  {
    $assets = Asset::all();
    $locations = Location::all();
    $statuses = Status::all();
    return view('movements.move', compact('asset', 'assets', 'locations', 'statuses'));
  }

  public function store(Request $request, Asset $asset)
  {
    $this->validate($request, [
      'location_id' => 'required',
      'status_id' => 'required'
    ]);

    $movement = new Movement();
    $movement->asset_id = $asset->id;
    $movement->location_id = $request->location_id;
    $movement->status_id = $request->status_id;

    $movement->save();

    $asset->movement_id = $movement->id;
    $asset->update();

    return redirect('assets');
  }

  public function edit(Movement $movement)
  {
    $assets = Asset::all();
    $locations = Location::all();
    $statuses = Status::all();
    return view('movements.edit', compact('movement', 'assets', 'locations', 'statuses'));
  }

  public function update(Request $request, Movement $movement)
  {
    $this->validate($request, [
      'asset_id' => 'required',
      'location_id' => 'required',
      'status_id' => 'required'
    ]);

    $movement->update($request->all());

    return redirect('assets');
  }
}