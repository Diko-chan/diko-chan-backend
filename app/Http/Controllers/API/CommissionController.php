<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Models\Commission;
use App\Http\Resources\Commission as CommissionResource;

class CommissionController extends BaseController
{
    public function index()
    {
        $commisssions = Commission::all();
        return $this->sendResponse(CommissionResource::collection($commisssions), 'Commissions fetched.');
    }
}