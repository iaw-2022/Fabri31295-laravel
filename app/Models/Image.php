<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ["name", "date", "price", "public_url", "created_at", "updated_at"];

    function downloadFile($file_name){
        $file = Storage::disk('dropbox')->get($file_name);

        return (new Response($file, 200))
            ->header('Content-Type', 'image/jpeg');
    }

    public function getSizeInKbAttribute()
    {
        return number_format($this->size / 1024, 1);
    }

}
