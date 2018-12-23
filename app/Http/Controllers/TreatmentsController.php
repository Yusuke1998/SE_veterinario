<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Race;
use App\Vaccine;
use App\Symptom;
use App\Mascot;
use App\Person;
use App\Treatment;
use App\Doctor;
use App\User;
use App\Rule;


class TreatmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tratamientos = Treatment::orderBy('created_at','DESC')->paginate(5);
        return view('Tratamientos.lista')
        ->with('tratamientos',$tratamientos);
    }

    public function destroy($id)
    {
        //
    }
}
