<?php
namespace App\Http\Controllers;

use App\Services\WorkService;
use Illuminate\Http\JsonResponse;

class WorkController extends Controller{
    public function __construct(
        private readonly WorkService $workService
    ) {}

    public function getWork(): JsonResponse{
        $works = $this->workService->getAll();
        if(!$works) {
            return response()->json([
                'message' => "Something was wrong",
                'success' => false,
            ]);
        }
        return response()->json([
            'message' => "Find work successfully...",
            'success' => true,
            'data' => $works,
        ]);
    }
}
