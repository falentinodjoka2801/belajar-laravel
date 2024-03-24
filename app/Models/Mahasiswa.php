<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Mahasiswa extends Model{
        use HasFactory;

        const CREATED_AT        =   'mhsTanggalTerdaftar';
        protected $primaryKey   =   'mhsNiu';
        protected $type         =   'string';
        protected $table        =   'mahasiswa';
    }
