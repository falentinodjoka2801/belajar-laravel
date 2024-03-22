<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Factories\HasFactory;

    class Konsentrasi extends Model{
        use HasFactory;

        protected $table    =   'program_studi_konsentrasi';
        
    }