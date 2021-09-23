<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        コントローラーコントローラー        // フォルダデータをデータベースから取得
        $folders = Folder::all();

        return view('tasks/index', [
            'folders' => $folders,
        ]);
    }
}
