@extends('layouts.default')
@section('title','注册')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card">
    <div class="card-header">
      <h5>注册</h5>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('users.store') }}">
        <div class="form-group">
          <label for="name">名称：</label>
          <input class="form-control" type="text" name="name" value="{{ old('name') }}"></input>
        </div>
        <div class="form-group">
          <label for="email">邮箱：</label>
          <input class="form-control" type="text" name="email" value="{{ old('email') }}"></input>
        </div>
        <div class="form-group">
          <label for="password">密码：</label>
          <input class="form-control" type="password" name="password" value="{{ old('password') }}"></input>
        </div>
        <div class="form-group">
          <label for="password_confirmation">确认密码：</label>
          <input class="form-control" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"></input>
        </div>

        <button type="submit" class="btn btn-primary">注册</button>
      </form>
    </div>
  </div>
</div>
@stop
