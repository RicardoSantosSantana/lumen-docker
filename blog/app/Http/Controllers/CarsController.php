<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    private $model;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Cars $cars)
    {
        $this->model = $cars;
    }

    public function getAll()
    {
        $cars = $this->model->all();
        return response()->json($cars);
    }

    public function get($id)
    {
        $cars = $this->model->find($id);
        return response()->json($cars);
    }

    public function store(Request $request)
    {
        $cars = $this->model->create($request->all());
        return response()->json($cars);
    }
    public function update($id, Request $request)
    {
        $cars = $this->model
            ->find($id)
            ->update($request->all());

        return response()->json($cars);
    }
    public function destroy($id)
    {
        $cars = $this->model
            ->find($id)
            ->delete();
    }
}
