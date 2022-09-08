<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Services\ApiService;

class TeamController extends Controller
{
    private $apiService;

    public function __construct()
    {
        $this->apiService = new ApiService(Team::class);
    }

    public function index()
    {
        $data = $this->apiService->index();
        $data->load('users');

        return response()->json([
            'status' => 'success',
            'list' => $data,
        ], 200);
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'type' => 'required',
        ]);

        $data = request()->only([
            'name',
            'type',
        ]);

        return $this->apiService->store($data);
    }

    public function destroy($id)
    {
        return $this->apiService->destroy($id);
    }

    public function show($id)
    {
        return $this->apiService->show($id);
    }

    public function update()
    {
        request()->validate([
            'id' => 'required',
            'name' => 'required',
            'type' => 'required',
        ]);

        $data = request()->only([
            'id',
            'name',
            'type',
        ]);

        return $this->apiService->update($data);
    }
}
