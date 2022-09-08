<?php

namespace App\Services;

use Exception;

class ApiService
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model::query()->orderBy('created_at', 'ASC')->get();
    }

    public function store($data)
    {
        $data = $this->model::create($data);

        return response()->json([
            'status' => 'success',
            'data' => $data
        ], 201);
    }

    public function destroy($id)
    {
        $data = $this->model::where('id', $id)->first();

        if (!$data) {
            throw new Exception('This data does not exists.');
        };

        $data->delete();

        return response()->json([
            'status' => 'success',
        ], 200);
    }

    public function show($id)
    {
        $data = $this->model::where('id', $id)->first();

        if (!$data) {
            throw new Exception('This data does not exists.');
        };

        $data->delete();

        return response()->json([
            'status' => 'success',
        ], 200);
    }

    public function update($data)
    {
        $data = $this->model::where('id', $data['id'])->update($data);

        return response()->json([
            'data' => $data,
            'status' => 'success',
        ], 200);
    }
}
