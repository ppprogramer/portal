@extends('layouts.app')

@section('content')
    <div class="container main">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">首页</a></li>
                    <li><a href="{{ url('/register') }}">注册</a></li>
                </ol>
                <div class="log_regs">
                    <form class="form-horizontal" role="form" method="post" action="{{ url('/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{--<div class="form-group">--}}
                            {{--<label for="" class="col-sm-2 control-label">账号</label>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<input type="text" class="form-control" name="email" placeholder="请输入您的账号">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="" class="col-sm-2 control-label">邮箱</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="请输入您的账号" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label class="col-sm-2 control-label">密码</label>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<input type="password" class="form-control" name="password" placeholder="请输入密码">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-sm-2 control-label">密码</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="请输入密码" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                                <button type="submit" class="btn btn-success">登录</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
