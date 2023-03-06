<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Card::orderBy('name', 'ASC')->get();
        return view('cards.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // FAKE VARIABLE CARDS
        $cards = new Card();
        return view('cards.create', compact('card'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:tools',
            'mana' => 'string',
            'thumb' => 'string',
            'type' => 'string',
            'edition' => 'string',
            'first-effect' => 'nullable|string',
            'second-effect' => 'nullable|string',
            'third-effect' => 'nullable|string',
            'fourth-effect' => 'nullable|string',
            'description' => 'string',
            'strength' => 'numeric',
            'constitution' => 'numeric',

        ], [
            // PERSONALIZZAZIONE DEI MESSAGGI ERRORE
            'name.required' => 'The Name field is required!',
        ]);

        $data = $request->all();
        $card = new Card();

        $card->fill($data);
        $card->save();

        return to_route('cards.show', $card->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $card = Card::findOrFail($id);
        return view('cards.show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
