<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Commission;
use App\Http\Resources\Commission as CommissionResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CommissionController extends BaseController
{
    public function index()
    {
        if (Auth::user()->userType == 0) {
            $commissions = Commission::orderBy('user_id')
                ->where('user_id', Auth::user()->id)
                ->get();
        } else {
            $commissions = Commission::orderBy('user_id')
                ->get();
        }
        return $this->sendResponse(CommissionResource::collection($commissions), 'Commissions fetched.');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'string',
            'com_name' => 'string',
            'com_age' => 'string',
            'com_gender' => 'string',
            'com_details' => 'string',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Error validation', $validator->errors());
        }

        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['com_status'] = 0;
        $input['created_at'] = date('YYYY-MM-DD hh:mm:ss');
        $input['updated_at'] = date('YYYY-MM-DD hh:mm:ss');
        $commission = Commission::create($input);
        $success['com_name'] = $commission->com_name;
        $success['com_age'] = $commission->com_age;
        $success['com_gender'] = $commission->com_gender;
        $success['com_details'] = $commission->com_details;

        return $this->sendResponse($success, 'Commission created successfully.');
    }
}
