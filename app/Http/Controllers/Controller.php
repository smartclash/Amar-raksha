<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function successJsonResponse($message, $data)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ]);
    }

    public function failureJsonResponse($message, $data)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => $data
        ], 422);
    }
}
