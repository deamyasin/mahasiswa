<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Organization;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
    public function detail()
    {
        return view('detail');
    }
    public function list()
    {
        $mahasiswa = Mahasiswa::paginate(5);
        // dd($mahasiswa);
        return view('list', compact('mahasiswa'));
    }

    public function Dosen()
    {
        $Dosen = Dosen::all();
        // dd('$Dosen');
        return view('Dosen', compact('Dosen'));
    }

    public function Create()
    {
        $org = Organization::all();
        return view('createmhs', compact('org'));
    }

    public function store(Request $request)
    {
        $post = new Mahasiswa;
        $post->organization_id = $request->organization_id;
        $post->npm = $request->npm;
        $post->name = $request->name;
        $post->class = $request->class;
        $post->alamat = $request->alamat;
        $post->save();
        return redirect('/list');
    }

    public function organization()
    {
        $organization = Organization::all();
        dd($organization);
    }

    public function detail1(Mahasiswa $mahasiswa)
    {
        $org = Organization::all();
        return view('editmhs', compact('mahasiswa', 'org'));
    }

    public function update(Mahasiswa $mahasiswa)
    {
        $mhs = request()->all();
        $mahasiswa->update($mhs);
        return redirect('/list');
    }

    public function delete(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('/list');
    }
}
