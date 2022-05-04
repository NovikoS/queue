<?php

namespace App\Http\Controllers;
use Highjin\JobMonitor\Models\JobMonitor;

class JobMonitorController
{
    public function jobs(): \Illuminate\Http\JsonResponse
    {
        $jobs = JobMonitor::all();

        return response()->json(['data'=>$jobs]);
    }
}