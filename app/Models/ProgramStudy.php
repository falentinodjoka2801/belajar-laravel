<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class ProgramStudy extends Model{
        use HasFactory;

        const CREATED_AT        =   null;
        protected $primaryKey   =   'prodiKode';
        protected $type         =   'int';
        protected $table        =   'program_studi';
    }
