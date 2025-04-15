<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/weight_logs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" >
</head>

<body>
    @include('layouts.header')

    <div class="all-contents">
        <div class="top-table">
            <table class="top-table__inner">
                <tr class="top-table__row">
                    <th class="top-table__header">
                        <span class="top-table__header-span">目標体重</span>
                        <span class="top-table__header-span">目標まで</span>
                        <span class="top-table__header-span">最新体重</span>
                    </th>
                </tr>
                <tr class="top-table__row-item">
                    <td class="top-table__item">
                        <span class="top-table__item-span">{{ $weight_target  ['target_weight'] }}</span>
                        <span class="top-table__item-span"></span>
                        <span class="top-table__item-span">{{ $weight_logs ['weight'] }}</span>
                    </td>
                </tr>
            </table>
        </div>
        <div class="bottom-contents">
            <div class="button-panel">
                <div class="search-panel">
                    <form class="search-form">
                        <div class="search-form__item">
                            <input class="search-form__item-input" type="date" name="start-date" placeholder="年/月/日">
                        </div>
                        <div class="search-form__item-separator">～</div>
                        <div class="search-form__item">
                            <input class="search-form__item-input" type="date" name="end-date" placeholder="年/月/日">
                        </div>
                        <div class="search-form__button">
                            <button class="search-form__button-submit" type="submit">検索</button>
                        </div>
                    </form>    
                </div>
                <div class="create-panel">
                    <a class="create_link" href="/weight_logs/create">データ追加</a>
                </div>
            </div>
            <div class="weight-table">
                <table class="weight-table__inner">
                    <tr class="weight-table__row">
                        <th class="weight-table__header">
                            <span class="weight-table__header-span">日付</span>
                            <span class="weight-table__header-span">体重</span>
                            <span class="weight-table__header-span">食事摂取カロリー</span>
                            <span class="weight-table__header-span">運動時間</span>
                        </th>
                    </tr>
                    @foreach ($weight_logs as $weight_log)
                    <tr class="weight-table__row">
                        <td class="weight-table__item">
                            <span class="weight-table__item-span">{{ $weight_log['date'] }}</span>
                            <span class="weight-table__item-span">{{ $weight_log['weight'] }}</span>
                            <span class="weight-table__item-span">{{ $weight_log['calories'] }}</span>
                            <span class="weight-table__item-span">{{ $weight_log['exercise_time'] }}</span>
                            <a class="weight-table__update-link" href="/weight.logs/{:weightLogId}">
                                <img src="" alt="更新画面へ">
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</body>
</html>