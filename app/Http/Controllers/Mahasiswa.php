<?php
    namespace App\Http\Controllers;

    #Models
    use App\Models\ProgramStudy;
    use App\Models\Mahasiswa as MahasiswaModel;

    use Illuminate\Database\QueryException;
    use Illuminate\Support\Facades\DB;
    use Illuminate\View\View;

    class Mahasiswa extends Controller{
        public function index(): View{
            $title          =   'List Daftar Mahasiswa';
            $stambuk        =   isset($_GET['stambuk'])? $_GET['stambuk'] : null;

            $builder        =   DB::table('mahasiswa');
            $builder->orderBy('mhsNama', 'asc');
            $listMahasiswa  =   $builder->limit(10)->get();
            $view           =   view('mahasiswa.index', compact(['listMahasiswa', 'title']));

            return $view;
        }
        public function create(): View{
            $listProgramStudy   =   DB::select('select prodiKode, prodiNamaResmi from program_studi order by prodiNamaResmi asc');
            return view('mahasiswa.create', compact(['listProgramStudy']));
        }
    }
?>