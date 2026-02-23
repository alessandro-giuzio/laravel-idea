<?php


use Illuminate\Support\Facades\Route;
use App\Models\Idea;


// index
Route::get('/ideas', function(){
    $ideas = Idea::all();

    return view('ideas.index', ['ideas' => $ideas]);
});

// show single idea
Route::get('/ideas/{idea}', function(Idea $idea){
    return view('ideas.show',
    ['idea' => $idea]);

});

// edit idea
Route::get('/ideas/{idea}/edit', function(Idea $idea){
    return view('ideas.edit',
    ['idea' => $idea]);

});

// update idea
Route::patch('/ideas/{idea}', function(Idea $idea){
    $idea->update([
        'description' => request('description'),
    ]);

    return redirect('/ideas/' . $idea->id);
});



// store
Route::post('/ideas', function(){
    $idea = request('idea');

    Idea::create ([
        'description' => request('description'),
        'state' => 'pending'
    ]);

    return redirect('/ideas');
});


// destroy
Route::delete('/ideas/{idea}', function(Idea $idea){
    $idea->delete();

    return redirect('/ideas');
});


Route::view('/about', 'about');

Route::view('/contact', 'contact');
