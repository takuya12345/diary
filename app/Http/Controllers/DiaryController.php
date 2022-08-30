<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    /**
     * ブログの一覧表示
     * 
     * @return view
     */
    public function index()
    {
        $diaries = Diary::get();

        dd($diaries);

        return view('diary.index', ['diaries' => $diaries]);
    }
}
