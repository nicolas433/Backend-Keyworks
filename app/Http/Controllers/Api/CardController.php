<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Services\ApiService;

class CardController extends Controller
{
    private $apiService;

    public function __construct()
    {
        $this->apiService = new ApiService(Card::class);
    }

    public function index()
    {
        $data = $this->apiService->index();
        $data->load(['team', 'project', 'cardGroup']);

        return response()->json([
            'status' => 'success',
            'list' => $data
        ], 200);
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'dead_line' => 'required',
            'description' => 'required',
            'balance' => 'required',
            'status' => 'required',
            'prevision' => 'required',
            'card_group_id' => 'required',
            'project_id' => 'required',
            'team_id' => 'required',
        ]);

        $data = request()->only([
            'title',
            'dead_line',
            'description',
            'balance',
            'status',
            'prevision',
            'card_group_id',
            'project_id',
            'team_id',
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
            'title' => 'required',
            'dead_line' => 'required',
            'description' => 'required',
            'balance' => 'required',
            'status' => 'required',
            'prevision' => 'required',
            'card_group_id' => 'required',
            'project_id' => 'required',
            'team_id' => 'required',
        ]);

        $data = request()->only([
            'id',
            'title',
            'dead_line',
            'description',
            'balance',
            'status',
            'prevision',
            'card_group_id',
            'project_id',
            'team_id',
        ]);

        return $this->apiService->update($data);
    }

    public function updateCardGroup()
    {
        request()->validate([
            'id' => 'required',
            'card_group_id' => 'required',
        ]);

        $data = request()->only([
            'id',
            'card_group_id',
        ]);

        return $this->apiService->update($data);
    }
}
