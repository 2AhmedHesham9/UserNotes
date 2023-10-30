<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class NotesController extends Controller
{

    public function create() {
        $users=User::all();
        return view('Notes.create',['users'=>$users] );

    }

    public function notes() {
        $user=Auth::user();
        $notes=Note::where('user_id',$user->id)->get();
        return view('Notes.notes',['notes'=>$notes]);
   }

    public function store(Request $request) {
        $id = Auth::id();
        Note::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>$id,

        ]);
        return redirect('dashboard');

    }


    public function edit($id, Request $request) {

        $editsinglenote=Note::findOrfail($id);

        $editsinglenote->update([
            'title'=>$request->title,
            'description'=>$request->description,


        ]);
        return redirect('dashboard');
    }

    public function show(Note $id) {

         return view('Notes.singlenote',['singlenote'=>$id]);
    }
    public function showToEdit(Note $id) {

        return view('Notes.edit',['editsinglenote'=>$id] );   // use $id instead of $editsinglenote
        }

        public function destroy(Note $id)
{

    $id->Delete();


    return redirect()->route('notes');
}


}
