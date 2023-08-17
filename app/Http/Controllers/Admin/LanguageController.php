<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class LanguageController extends Controller
{
    public function index(Request $request): View
    {
        $selectedLanguage = $request->query('change_language', 'np');

        App::setLocale($selectedLanguage);

        $languageFilePath = resource_path("lang/$selectedLanguage/global.php");

        if (!File::exists($languageFilePath)) {
            return response()->json(['error' => 'Language file not found.'], 404);
        }

        $languageFileContents = include($languageFilePath);

        return view('admin.languages.index', ['languageContent' => $languageFileContents]);
    }

    public function update(Request $request)
    {
        $language = 'np'; // Change this to the desired language
        $languageFilePath = resource_path("lang/$language/global.php");

        if (!File::exists($languageFilePath)) {
            return response()->json(['error' => 'Language file not found.'], 404);
        }

        $languageFileContents = include($languageFilePath);

        dd($languageFileContents);

        // Process the $request and update the $languageFileContents array
        // ...

        // Save the updated array back to the language file
        $updatedContents = var_export($languageFileContents, true);
        file_put_contents($languageFilePath, "<?php\n\nreturn $updatedContents;");

        return response()->json(['success' => 'Translations updated successfully.']);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
