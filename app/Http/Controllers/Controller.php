<?php

namespace App\Http\Controllers;

use App\Services\MediaService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected MediaService $mediaService;
    //protected string $path;

    public function __construct(MediaService $mediaService)
    {
        $this->mediaService = $mediaService;
        //$this->path = class_basename(App::getNamespace() . str_replace('Controller', '', class_basename(get_class($this))));
    }
}
