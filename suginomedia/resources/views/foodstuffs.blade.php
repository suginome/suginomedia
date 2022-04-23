@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title">
            商品一覧
        </div>
        
        <!-- ↓バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- ↑バリデーションエラーの表示に使用-->

        <!-- 本登録フォーム -->
        <form action="{{ url('foodstuffs') }}" method="POST" class="form-horizontal">
            @csrf
            <!-- 本のタイトル -->
            <div class="form-group col-md-6 p-2">
                <label for="item_name" class="col-sm-3 control-label">タイトル</label>
                <input type="text" name="item_name" class="form-control" id="item_name" value="{{ old('item_name') }}">
            </div>
            <!-- 冊数 -->
            <div class="form-group col-md-6 p-2">
                <label for="item_number" class="col-sm-3 control-label">冊数</label>
                <input type="text" name="item_number" class="form-control" id="item_number" value="{{ old('item_number') }}">
            </div>
            <!-- 金額 -->
            <div class="form-group col-md-6 p-2">
                <label for="item_amount" class="col-sm-3 control-label">金額</label>
                <input type="text" name="item_amount" class="form-control" id="item_amount" value="{{ old('item_amount') }}">
            </div>
            <!-- 公開日 -->
            <div class="form-group col-md-6 p-2">
                <label for="published" class="col-sm-3 control-label">公開日</label>
                <input type="date" name="published" class="form-control" id="published" value="{{ old('published') }}">
            </div>
            <!-- 本 登録ボタン -->
            <div class="form-group p-2">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
	<!-- foodstuff: 既に登録されてる本のリスト -->
    @if (count($foodstuffs) > 0)
        <div class="card-body">
            <table class="table table-striped task-table">
                <!-- テーブルヘッダ -->
                <thead>
                    <th>本一覧</th>
                    <th>&nbsp;</th>
                </thead>
                <!-- テーブル本体 -->
                <tbody>
                    @foreach ($foodstuffs as $foodstuff)
                        <tr>
                            <!-- 本タイトル -->
                            <td class="table-text">
                                <div>{{ $foodstuff->item_name }}</div>
                            </td>
                            <!-- 本: 削除ボタン -->
                            <td>
                                <form action="{{ url('foodstuff/'.$foodstuff->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">
                                        削除
                                    </button>
                                </form>
                            </td>
                            <!-- 本: 更新ボタン -->
                            <td>
                                <a href="{{ url('foodstuffsedit/'.$foodstuff->id) }}">
                                    <button type="submit" class="btn btn-primary">更新</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection