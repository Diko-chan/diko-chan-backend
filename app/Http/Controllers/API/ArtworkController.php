<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Models\Artwork;
use App\Http\Resources\Artwork as ArtworkResource;

class ArtworkController extends BaseController
{
    public function index()
    {
        $artworks = Artwork::all();
        return $this->sendResponse(ArtworkResource::collection($artworks), 'Artworks fetched.');
    }
}