<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Models\Image;

class ApiController extends Controller
{
    //
    public function menyimpan(Request $request)
    {
        $data = $request->json()->all();

        // $fileName = $this->storeBase64File($data);

        // $filePath = 'uploads/' . $fileName;
        // $this->saveFilePathToDatabase($filePath);

        return response()->json(['data' => $data]);
    }

    // funsi convert base64 ke file path
    private function storeBase64File($data)
    {
        // Extract the file content from the request
        $fileContent = $data[0]['content'];

        // Remove the data URL prefix (e.g., "data:image/jpeg;base64,")
        $fileContent = substr($fileContent, strpos($fileContent, ',') + 1);

        // Decode the base64 content to binary
        $fileData = base64_decode($fileContent);

        // Generate a unique file name or use the provided name
        $fileName = $data[0]['name'] ?? uniqid() . '.jpg';

        // Specify the directory where you want to save the file
        $directory = public_path('uploads'); // You can change this to your preferred directory

        if (!File::isDirectory($directory)) {
            File::makeDirectory($directory, 0755, true, true);
        }

        // Save the file to the specified directory
        file_put_contents($directory . '/' . $fileName, $fileData);

        return $fileName;
    }

    // fungsi save image
    private function saveFilePathToDatabase($filePath)
    {
        Image::create(['path' => $filePath]);
    }
}
