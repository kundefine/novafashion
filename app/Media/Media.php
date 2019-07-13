<?php
namespace App\Media;


use Illuminate\Support\Facades\Storage;







class Media {

    public static $count = 1;



    public function add_media() {

    }

    public function show_media() {

    }

    public function select_media() {

    }

    // get the media root url
    public function url() {
        return Storage::disk('media')->url('/');
    }

    // get all the media files
    public function files() {
        return Storage::disk('media')->allfiles();
    }

    // rename media file
    public function rename($file) {
        // get original file name from file
        $filename = $file->getClientOriginalName();

        // make filename to lower case
        $filename = strtolower($filename);

        // replace any what space with dashed
        $filename = str_replace(' ', '-', $filename);

        // if exists rename the file
        $filename = $this->newname($filename);

        // return the new file
        return $filename;
    }

    // generate new media name if already exits
    public function newname($filename, $originalName = null) {
        // get original file name for the first time
        if($originalName === null) {
            $originalName = $filename;
        }

        //  check for file exits
        if(Storage::disk('media')->exists($filename)) {
            $newname = pathinfo($originalName, PATHINFO_FILENAME); // get the existing filename without extension
            $extension = pathinfo($originalName, PATHINFO_EXTENSION); // get the existing filename extension

            // create new filename
            $newFullName = $newname . '-' . static::$count++ . '.' .$extension;

            // check for newly created filename for existence
            return $this->newname($newFullName, $originalName);

        } else {
            // reset the counter for new file
            static::$count = 1;
            // return file if not exists
            return $filename;
        }

    }



}