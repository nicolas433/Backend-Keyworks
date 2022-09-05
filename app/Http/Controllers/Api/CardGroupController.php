<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CardGroup;
use App\Services\ApiService;

class CardGroupController extends Controller
{
    private $apiService;

    public function __construct()
    {
        $this->apiService = new ApiService(CardGroup::class);
    }

    public function index()
    {
        return $this->apiService->index();
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
        ]);

        $data = request()->only([
            'name',
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
        ]);

        $data = request()->only([
            'name',
        ]);

        return $this->apiService->update($data);
    }
}
