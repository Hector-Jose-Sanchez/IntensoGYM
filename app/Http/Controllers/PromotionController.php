<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

class PromotionController extends Controller
{
    // Carga las promociones para mostrar en home
    public function index()
    {
        $promotions = Promotion::latest()->take(5)->get();
        return view('home', compact('promotions'));
    }

    // Formulario de subida (solo admin)
    public function create()
    {
        return view('promotion');
    }

    // Almacena la promoción
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'text' => 'required|string|max:255',
        ]);

        $path = $request->file('image')->store('promotions', 'public');

        Promotion::create([
            'image' => $path,
            'text' => $request->text, // Corrección aquí: 'text' en lugar de 'description'
        ]);

        return redirect()->route('home')->with('success', 'Promoción creada con éxito.');
    }
}
