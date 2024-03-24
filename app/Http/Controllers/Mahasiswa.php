<?php
    namespace App\Http\Controllers;

    #Models
    use App\Models\ProgramStudy;

    use Illuminate\Support\Facades\DB;
    use Illuminate\View\View;

    class Mahasiswa extends Controller{
        public function index(): View{
            $stambuk        =   isset($_GET['stambuk'])? $_GET['stambuk'] : null;

            $listMahasiswa  =   DB::select('select mhsNiu, mhsNama, mhsAngkatan from mahasiswa where mhsAngkatan=:id limit 10', ['id' => $stambuk]);
            $view           =   view('mahasiswa.index', compact(['listMahasiswa']));

            return $view;
        }
        public function create(): View{
            $listProgramStudy   =   DB::select('select prodiKode, prodiNamaResmi from program_studi order by prodiNamaResmi asc');
            return view('mahasiswa.create', compact(['listProgramStudy']));
        }
    }
?>