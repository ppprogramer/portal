@extends('layouts.app')

@section('content')
    <div class="container main">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">首页</a></li>
                    <li><a href="{{ url('login') }}">登录</a></li>
                </ol>
                <div class="log_regs">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
                            <label for="nickname" class="col-sm-2 control-label">用户名</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="nickname"
                                       value="{{ old('nickname') }}" placeholder="请输入您的用户名" autofocus>

                                @if ($errors->has('nickname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-sm-2 control-label">密码</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password"
                                       placeholder="请输入密码">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-sm-2 control-label">确认密码</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" placeholder="请再次输入密码">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('realname') ? ' has-error' : '' }}">
                            <label for="realname" class="col-sm-2 control-label">真实姓名</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="realname"
                                       value="{{ old('realname') }}" placeholder="请输入真实姓名" autofocus>
                                <span class="tips"><font color="red">* </font><small>请输入真实姓名</small></span>
                                @if ($errors->has('realname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('realname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('idcard') ? ' has-error' : '' }}">
                            <label for="idcard" class="col-sm-2 control-label">身份证号</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="idcard"
                                       value="{{ old('idcard') }}" placeholder="请输入身份证号" autofocus>
                                <span class="tips"><font color="red">* </font><small>请输入身份证号</small></span>
                                @if ($errors->has('idcard'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idcard') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-sm-2 control-label">手机号</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="mobile"
                                       value="{{ old('mobile') }}" placeholder="请输入手机号" autofocus>
                                <span class="tips"><font color="red">* </font><small>请输入手机号</small></span>
                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-2 control-label">邮箱</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" placeholder="请输入邮箱" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('verifycode') ? ' has-error' : '' }}">
                            <label for="verifycode" class="col-sm-2 control-label">验证码</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="verifycode"
                                       value="{{ old('verifycode') }}" placeholder="请输入验证码">

                                @if ($errors->has('verifycode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('verifycode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('verifycode_img') ? ' has-error' : '' }}">
                            <label for="verifycode_img" class="col-sm-2 control-label"></label>

                            <div class="col-md-6">
                                <img src="getCode" onclick="this.src=this.src+&#39;getCode&#39;" height="40">

                                @if ($errors->has('verifycode_img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('verifycode_img') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="verifycode" class="col-sm-2 control-label"></label>
                            <div class="col-md-6">
                                <label>
                                    <input type="checkbox" value="" name="servItems">
                                    我已仔细阅读并接受 <a href="javascript:openarticle(&#39;xieyi&#39;,&#39;用户服务协议&#39;);"
                                                 data-toggle="modal" data-target="#mymodal-data">注册许可协议</a>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<script type="text/javascript">
    function chkreg() {
        var nickname = $('input[name=nickname]').val();
        var paswrd = $('input[name=paswrd]').val();
        var conf = $('input[name=conf]').val();
        var realname = $('input[name=realname]').val();
        var phone = $('input[name=phone]').val();
        var idcard = $('input[name=idcard]').val();
        var email = $('input[name=email]').val();
        var code = $('input[name=code]').val();
        var servItems = $('input[name=servItems]').is(':checked');

        if (nickname == '') {
            alert('用户名不能为空');
            $('input[name=nickname]').addClass('error').focus();
            return false;
        } else {
            $('input[name=nickname]').removeClass('error').focus();
        }

        if (paswrd == '') {
            alert('密码不能为空');
            $('input[name=paswrd]').addClass('error').focus();
            return false;
        } else {
            $('input[name=paswrd]').removeClass('error').focus();
        }

        if (conf == '') {
            alert('确认密码不能为空');
            $('input[name=conf]').addClass('error').focus();
            return false;
        } else {
            $('input[name=conf]').removeClass('error').focus();
        }

        if (phone == '') {
            alert('手机号不能为空');
            $('input[name=phone]').addClass('error').focus();
            return false;
        } else {
            $('input[name=phone]').removeClass('error').focus();
        }

        if (conf !== paswrd) {
            alert('两次密码不一致');
            $('input[name=conf]').addClass('error').focus();
            return false;
        } else {
            $('input[name=conf]').removeClass('error').focus();
        }

        if (idcard == '') {
            alert('身份证号不能为空');
            $('input[name=idcard]').addClass('error').focus();
            return false;
        } else {
            $('input[name=idcard]').removeClass('error').focus();
        }

        var idcard_reg = /^\d{6}(18|19|20)?\d{2}(0[1-9]|1[12])(0[1-9]|[12]\d|3[01])\d{3}(\d|X)$/i;
        if (!idcard_reg.test(idcard)) {
            alert('身份证号格式错误');
            $('input[name=idcard]').addClass('error').focus();
            return false;
        } else {
            $('input[name=idcard]').removeClass('error').focus();
        }

        if (email == '') {
            alert('邮箱不能为空');
            $('input[name=email]').addClass('error').focus();
            return false;
        } else {
            $('input[name=email]').removeClass('error').focus();
        }

        if (code == '') {
            alert('验证码不能为空');
            $('input[name=code]').addClass('error').focus();
            return false;
        } else {
            $('input[name=code]').removeClass('error').focus();
        }

        if (!servItems) {
            alert('未勾选同意条款');
            return false;
        }
        return true;
    }

    // 打开协议
    function openarticle(type, title) {
        layer.open({
            type: 2,
            title: title,
            shadeClose: true,
            shade: 0.8,
            area: ['500px', '90%'],
            content: '/index.php/Home/Index/' + type //iframe的url
        });
    }


</script>
