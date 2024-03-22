<?php

    namespace App\Http\Controllers;

    #Model
    use App\Models\Konsentrasi as KonsentrasiModel;

    use Illuminate\Support\Facades\DB;

    class AJAX extends Controller{
        public function getKonsentrasiProgramStudy(){
            $listKonsentrasiProgramStudy    =   DB::select('select * from program_studi_konsentrasi order by prodikonsentrasiNama asc');
            $data   =   [
                'listKonsentrasi'   =>  $listKonsentrasiProgramStudy
            ];
            echo json_encode($data);
        }
    }
?>