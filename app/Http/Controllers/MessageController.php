<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the list of messages 
        $messages = Message::all();          // Add
        // Display it in the messages list view. 
        return view(
            'messages.index',
            [
                'messages' => $messages->all(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    // "Display new registration screen" when messages/create is accessed with get 
    public function create()
    {
        $message = new Message;

        // Display the message creation view. 
        return view('messages.create', [
            'message' => $message,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create a message. 
        $message = new Message;
        $message->content = $request->content;
        $message->save();

        // Redirect to the top page 
        return redirect('/messages');
    }

    /**
     * Display the specified resource.
     */
    // "Get and display process" when messages/id is accessed with get 
    public function show($id)
    {
        // Find and get a message by its id value. 
        $message = Message::findOrFail($id);

        // Show it in the message detail view. 
        return view('messages.show', [
            'message' => $message,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    // "Display update screen" when messages/id/edit is accessed with get 
    public function edit($id)
    {
        // Find and get a message by its id value. 
        $message = Message::findOrFail($id);

        // Display it in the message edit view. 
        return view('messages.edit', [
            'message' => $message,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find and get a message by its id value. 
        $message = Message::findOrFail($id);
        // Update a message. 
        $message->content = $request->content;
        $message->save();

        // Redirect to the top page 
        return view('messages.show', [
            'message' => $message,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    // "Delete process" when messages/id is accessed with delete 
    public function destroy($id)
    {
        // Find and retrieve a message by its id value. 
        $message = Message::findOrFail($id);
        // Delete a message. 
        $message->delete();

        // Redirect to the top page 
        return redirect('/messages');
    }
}
