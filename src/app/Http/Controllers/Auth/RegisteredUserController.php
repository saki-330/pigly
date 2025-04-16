<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class RegisteredUserController extends Controller
{
    protected $creator;

    public function __construct(CreateNewUser $creator)
    {
        $this->creator = $creator;
    }

    public function store(Request $request)
    {
        // バリデーションとユーザー作成
        $user = $this->creator->create($request->all());

        // 自動ログイン
        Auth::login($user);

        // 登録後にリダイレクト
        return redirect('/register/step2'); // ← 好きな場所に変更可能
    }
}
