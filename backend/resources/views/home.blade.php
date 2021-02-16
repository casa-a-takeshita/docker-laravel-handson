@extends('layout')

@section('content')
<div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">
            まずはフォルダを作成しましょう
          </div>
          <div class="panel-body">
            <div class="text-center">
              <a href="{{ route('folders.create') }}" class="btn btn-primary">
                フォルダ作成ページへ
              </a>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{ __('You are logged in!') }}
    </div>

</div>
@endsection
