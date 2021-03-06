<?php

namespace AgendaLumen\Http\Controllers;

use AgendaLumen\Entities\Telefone;

class TelefoneController extends Controller
{
    public function delete($id)
    {
        $telefone = Telefone::find($id);
        $pessoa = $telefone->pessoa;
        return view('telefone.delete', compact('pessoa','telefone'));
    }

    public function destroy($id)
    {
        Telefone::destroy($id);
        return redirect()->route('agenda.index');
    }
}
