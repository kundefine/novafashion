<?php

namespace App\Http\Controllers\Backend\Media;

use function collect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Media as MediaFacades;

class MediaController extends Controller
{
    public function index() {
        return view('backend.media');
    }


    public function uploadMedia(Request $req) {

        $files_collection = collect($req->file('media'));

        $filesname = $files_collection->map(function($file) {
            return Storage::disk('media')->putFileAs('/', $file, MediaFacades::rename($file));
        });

        dd($filesname);

    }
}
