<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CardGroup;
use Exception;
use Illuminate\Http\Request;

class CardGroupController extends Controller
{
    public function index()
    {
        try {
            $cardGroups = CardGroup::orderBy('created_at', 'ASC')
            ->get();

            return response()->json([
                'Status' => 'Success',
                'cardGroups' => $cardGroups
            ], 200);
        } catch (\Throwable $th) {
            logger()->error($th);

            return response()->json([
                'Status' => 'Error'
            ], 400);
        }
    }

    public function store()
    {
        try {
            request()->validate([
                'name' => 'required',
            ]);

            $data = request()->only([
                'name',
            ]);

            $cardGroup = CardGroup::create($data);

            return response()->json([
                'Status' => 'Success',
                'CardGroup' => $cardGroup
            ], 200);
        } catch (\Throwable $th) {
            logger()->error($th);

            return response()->json([
                'Status' => 'Error'
            ], 400);
        }
    }

    public function destroy($id)
    {
        try {
            $cardGroup = CardGroup::where('id', $id)->first();

            if (!$cardGroup) {
                throw new Exception('Card group does not exists.');
            };

            $cardGroup->delete();

            return response()->json([
                'Status' => 'Success',
            ], 200);
        } catch (\Throwable $th) {
            logger()->error($th);

            return response()->json([
                'Status' => 'Error'
            ], 400);
        }
    }

    public function find($id)
    {
        try {
            $cardGroup = CardGroup::where('id', $id)->first();

            if (!$cardGroup) {
                throw new Exception('Card group does not exists.');
            };

            $cardGroup->delete();

            return response()->json([
                'Status' => 'Success',
            ], 200);
        } catch (\Throwable $th) {
            logger()->error($th);

            return response()->json([
                'Status' => 'Error'
            ], 400);
        }
    }
}
