<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except();
    }

    public function index()
    {
        $areas = Area::all();
        return view('area.index', compact('areas'));
    }

    public function create()
    {
        return view('area.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'group_id' => ['required', 'string', 'size:11'],
        ]);
        Area::create([
            'name' => $request->name,
            'group_id' => $request->group,
        ]);
        return redirect()->route('area.index')->with('success', 'منطقه ' . $request['name'] . ' افزوده شد.');
    }

    public function getArea()
    {
        $areas = Area::all();
        return response()->json($areas);
    }

    public function update(Request $request)
    {
        Area::find($request->areaId)->update([
            "name" => $request->name,
            "group_id" => $request->phone,
        ]);
        $area = Area::where('id', $request->areaId)->first();
        return response()->json($area);
    }

    public function destroy($id)
    {
        Area::destroy($id);
        return redirect()->route('area.index')->with('success', 'منطقه مورد نظر با موفقیت حذف شد.');
    }
}
