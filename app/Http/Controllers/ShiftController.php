<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShiftModel;
use Illuminate\Support\Facades\DB;

class ShiftController extends Controller
{
    public function __construct()
    {
        $this->ShiftModel = new ShiftModel();
    }
    public function index()
    {
        $data = [
            'shift' => $this->ShiftModel->getall()
        ];
        return view('employes.shift', $data);
    }
    public function tambah()
    {
        return view('employes.addShift');
    }
    public function insert()
    {
        Request()->validate([
            'nama_shift' => 'required|unique:tb_shift',
            'jam_mulai' => 'required',
            'jam_akhir' => 'required'
        ]);
        $data = [
            'nama_shift' => request()->nama_shift,
            'jam_mulai' => request()->jam_mulai,
            'jam_akhir' => request()->jam_akhir,
        ];
        $this->ShiftModel->insert($data);

        return redirect()->route('shift')->with('pesan', 'Data Berhasil Di tambahkan');
    }
    public function delete($id)
    {
        DB::table('tb_shift')->where('id', $id)->delete();

        return redirect()->route('shift')->with('pesan', 'Data Berhasil  di Delete');
    }
}
