<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIdeaRequest;
use App\Models\Idea;
use App\Notifications\IdeaPublished;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('ideas.index', [
            'ideas' => Auth::user()->ideas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ideas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIdeaRequest $request)
    {

        /* $request->validate([
            'description' => ['required', 'min:10'],
        ]); */



      $idea = Auth::user()->ideas()->create([
            'description' => $request->input('description'),
            'state' => 'pending',
        ]);

        //notify the user when the idea is created
        Auth::user()->notify(new IdeaPublished($idea));

        return redirect('/ideas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea)
    {
        return view(
            'ideas.show',
            ['idea' => $idea]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        return view(
            'ideas.edit',
            ['idea' => $idea]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idea $idea)
    {
        $idea->update([
        'description' => request('description'),
        ]);

        return redirect('/ideas/' . $idea->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea)
    {
        $idea->delete();

        return redirect('/ideas');
    }
}
