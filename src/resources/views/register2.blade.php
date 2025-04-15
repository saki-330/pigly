<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>体重データの入力</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="login-form__content">
        <div class="login-form__heading">
            <h1 class="main-title">PigLy</h1>
            <h2 class="sub-title">新規会員登録</h2>
            <p class="menu-title">STEP2 体重データの入力</p>
        </div>
        <form class="form">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">現在の体重</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="number" name="current-weight" value="{{ old('current-weight') }}" placeholder="現在の体重を入力">
                    </div>
                    <div class="form__error">
                        @error('current-weight')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">目標体重</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="number" name="target-weight" value="{{ old('target-weight') }}" placeholder="目標の体重を入力">
                    </div>
                    <div class="form__error">
                        @error('target-weight')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">アカウント作成</button>
            </div>
        </form>
    </div>
</body>
</html>