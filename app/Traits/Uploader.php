<?php


namespace App\Traits;


use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

Trait Uploader
{

    public function uploadSingleUrl($file){
        $fileName = $file->getClientOriginalName();
        $uniqueName = Str::random(7) . $fileName;
        $destination = "storage/uploads/".$uniqueName;
        $file->move(storage_path("app/public/uploads"), $uniqueName);
        return URL::to($destination);
    }
}
