<?php
if (!function_exists('file_upload')) {
    function photo_upload($file, $kisan_id, $path = 'kisan/images', $existing_file = '')
    {
        // Creating new file name - It'll renamed & stored
        $imageName = $kisan_id . '-' . time() . '.' . $file->extension();

        // Storing file to specified path with above name
        $file->move(public_path($path), $imageName);

        // Removing existing file from the directory
        if (file_exists($existing_file)) {
            unlink($existing_file);
        }

        return $path . '/' . $imageName;
    }
}
