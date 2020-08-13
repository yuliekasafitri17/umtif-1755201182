<?php
namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Prodi;
use DataTables;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables as DataTablesDataTables;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   {
        return view('mahasiswa.index');
   }
}
