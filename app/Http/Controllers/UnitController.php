<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(Request $request)
    {
        return $this->success(Unit::all());
    }

    public function detail(Request $request, Unit $unit)
    {
        return $this->success($unit);
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            "title" => "required|string",
        ]);
        return $this->success(Unit::create($data));
    }

    public function update(Request $request, Unit $unit)
    {
        $data = $this->validate($request, [
            "first_name" => "required|string",
            "last_name" => "required|string",
            "national_id" => "required|string|size:10",
        ]);
        $unit->update($data);
        return $this->success($unit);
    }

    public function delete(Request $request, Unit $unit)
    {
        $unit->delete();
        return $this->success($unit);
    }
}
