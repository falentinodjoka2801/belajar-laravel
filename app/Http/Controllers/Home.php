<?php
    namespace App\Http\Controllers;

    use App\Models\User;

    class Home extends Controller{
        public function dashboard(){
            $title  =   'Dashboard';
            return view('dashboard', compact('title'));
        }
        public function index(){
            $user   =   User::get();

            return view('index', compact(['user']));
        }
    }
?>