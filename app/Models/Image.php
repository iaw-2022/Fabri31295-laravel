<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ["name", "file_path", "date", "price", "created_at", "updated_at"];

    function downloadFile($file_name){
        $file = Storage::disk('dropbox')->get($file_name);

        return (new Response($file, 200))
            ->header('Content-Type', 'image/jpeg');
    }

}
