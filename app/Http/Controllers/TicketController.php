<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    // Tampilkan semua tiket
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    // Form tambah tiket
    public function create()
    {
        return view('tickets.create');
    }

    // Simpan tiket baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_tiket' => 'required|unique:tickets',
            'nama_film' => 'required',
            'nama_pemesan' => 'required',
            'kursi' => 'required',
            'harga' => 'required|numeric',
            'jadwal_tayang' => 'required|date',
        ]);

        Ticket::create($request->all());
        return redirect()->route('tickets.index')->with('success', 'Tiket berhasil dipesan!');
    }

    // Form edit tiket
    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    // Update tiket
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'nama_film' => 'required',
            'nama_pemesan' => 'required',
            'kursi' => 'required',
            'harga' => 'required|numeric',
            'jadwal_tayang' => 'required|date',
        ]);

        $ticket->update($request->all());
        return redirect()->route('tickets.index')->with('success', 'Data tiket berhasil diperbarui!');
    }

    // Hapus tiket
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->with('success', 'Tiket berhasil dihapus!');
    }
}
