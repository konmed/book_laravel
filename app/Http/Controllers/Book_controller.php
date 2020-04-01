<?php

namespace App\Http\Controllers;
use App\Book_model;
use Illuminate\Http\Request;

class Book_controller extends Controller{
    public function home(){

        return view('welcome');
    }
    public static  function open(){
        fopen('C:\OSPanel\domains\localhost\book_laravel\shelf\book.txt','r');
        return view('open');
    }
    public function close(){
        $book = fopen('C:\OSPanel\domains\localhost\book_laravel\shelf\book.txt','r');
        fclose($book);
        return view('close');
    }
    public function read(){
       $book = fopen('C:\OSPanel\domains\localhost\book_laravel\shelf\book.txt','r');
       echo fread($book,filesize('C:\OSPanel\domains\localhost\book_laravel\shelf\book.txt'));
        return view('read');
    }
    public function write(){
        $book = fopen('C:\OSPanel\domains\localhost\book_laravel\shelf\book.txt','a');
        fwrite($book,'мир!');
        return view('write');
    }
}
