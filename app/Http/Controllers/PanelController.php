<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index()
    {
        return view('Panel.index'); // Painel principal
    }
    
    public function newReport()
    {
        return view('Panel.newReport'); // Novos achados
    }
    
    public function validarItem(Request $request, $id)
    {
        // Lógica para validar item e mover para painel principal
        
        return redirect()->route('admin.panel')->with('success', 'Item validado com sucesso!');
    }
    
    public function rejeitarItem(Request $request, $id)
    {
        // Lógica para rejeitar item
        
        return redirect()->route('admin.panel')->with('success', 'Item rejeitado com sucesso!');
    }
}
