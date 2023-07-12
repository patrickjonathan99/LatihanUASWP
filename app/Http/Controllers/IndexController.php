<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    //
    public function index() {
        $data = Mahasiswa::orderBy('id')->get();

        return view('index', [
            'datas' => $data
        ]);
    }

    public function input() {
        $matakuliah = MataKuliah::orderBy('id')->get();

        return view('input', [
            'matakuliahs' => $matakuliah
        ]);
    }

    public function delete($id) {
        Mahasiswa::where('id', $id)->delete();

        return redirect('/');
    }

    public function post(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required|max:10|unique:mahasiswas',
            'grade' => 'required|integer',
            'matakuliah' => 'required'
        ]);

        Mahasiswa::insert([
            'nama' => $validatedData['nama'],
            'nim' => $validatedData['nim'],
            'grade' => $validatedData['grade'],
            'matakuliah_id' => $validatedData['matakuliah'],
        ]);

        return redirect('/');
    }

    public function updateView($id) {
        $mhs = Mahasiswa::where('id', $id)->first();
        $matakuliah = MataKuliah::orderBy('id')->get();

        return view('update', [
            'mhs' => $mhs,
            'matakuliahs' => $matakuliah
        ]);
    }

    public function update(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nim' => 'required|max:10|unique:mahasiswas',
            'grade' => 'required|integer',
            'matakuliah' => 'required'
        ]);

        Mahasiswa::where('id', $request->mhs_id)->update([
            'nama' => $validatedData['nama'],
            'nim' => $validatedData['nim'],
            'grade' => $validatedData['grade'],
            'matakuliah_id' => $validatedData['matakuliah']
        ]);

        return redirect('/');
    }

    public function eng() {
        App::setlocale('en');
        $data = Mahasiswa::orderBy('id')->get();

        return view('index', [
            'datas' => $data
        ]);
    }

    public function indo() {
        App::setlocale('id');
        $data = Mahasiswa::orderBy('id')->get();

        return view('index', [
            'datas' => $data
        ]);
    }
}
