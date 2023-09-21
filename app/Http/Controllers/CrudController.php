<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class CrudController extends Controller
{
    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        // $validatedData = $request->validate([
        //     'slug' => 'required|string|max:255|regex:/^[a-zA-Z0-9_-]+$/',
        //     'title' => 'required|string|max:255',
        //     'lang' => 'required|string|max:255',
        //     'content' => 'required|string',
        // ], [
        //     'slug.regex' => 'The slug can only contain letters, numbers, hyphens, and underscores.',
        // ]);

        //     // Create a new page record in the database
        //     Page::create($validatedData);

        //     // Redirect to a success page or show a success message
        //     return redirect()->route('pages.index')->with('success', 'Page created successfully');


        $validatedData = $request->validate([
            'slug' => 'required|string|max:255|regex:/^[a-zA-Z0-9_-]+$/',
            'title' => 'required|string|max:255',
            'lang' => 'required|string|max:255',
            'content' => 'required|string',
        ], [
            'slug.required' => 'The slug field is required.',
            'slug.string' => 'The slug field must be a string.',
            'slug.max' => 'The slug field must not exceed 255 characters.',
            'slug.regex' => 'The slug can only contain letters, numbers, hyphens, and underscores.',
        
            'title.required' => 'The title field is required.',
            'title.string' => 'The title field must be a string.',
            'title.max' => 'The title field must not exceed 255 characters.',
        
            'lang.required' => 'The language field is required.',
            'lang.string' => 'The language field must be a string.',
            'lang.max' => 'The language field must not exceed 255 characters.',
        
            'content.required' => 'The content field is required.',
            'content.string' => 'The content field must be a string.',
   

        ]);

        //Create a new page record in the database
        Page::create($validatedData);

        // Redirect to a success page or show a success message
        return redirect()->route('pages.index')->with('success', 'Page created successfully');


    }


    public function index()
    {
        $pages = Page::all(); // Retrieve all records from the pages table

        return view('pages.index', compact('pages'));
    }


    public function show(Page $page){

        return view('pages.show', compact('page'));

    }

    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }


    public function update(Request $request, Page $page)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'slug' => 'required|string|max:255|regex:/^[a-zA-Z0-9_-]+$/',
            'title' => 'required|string|max:255',
            'lang' => 'required|string|max:255',
            'content' => 'required|string',
        ], [
            'slug.regex' => 'The slug can only contain letters, numbers, hyphens, and underscores.',
        ]);

        // Update the page data in the database
        $page->update($validatedData);

        // Redirect to a success page or show a success message
        return redirect()->route('pages.index')->with('success', 'Page updated successfully');
    }


    public function destroy(Page $page)
    {
        $page->delete(); // Delete the page
        
        // Optionally, you can redirect to a page listing or perform other actions.
        // For example, you can return to the list of pages.
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully');
    }


}
