<header style="">
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}" height="40" alt="logo"></a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="http://www.yx155.com/">首页</a></li>
                    <li><a href="http://www.yx155.com/#news">公司动态</a></li>
                    <li><a href="http://www.yx155.com/#call-to-action-2">关于我们</a></li>
                    <li><a href="http://www.yx155.com/#games">公司游戏</a></li>
                    <li><a href="http://www.yx155.com/#contactus">联系我们</a></li>
                    <li><a href="javascript:openarticle(&#39;xieyi&#39;,&#39;用户服务协议&#39;);">用户服务协议</a></li>
                    <li><a href="javascript:openarticle(&#39;jiufen&#39;,&#39;纠纷处理服务&#39;);">纠纷处理服务</a></li>
                    @if (!\Illuminate\Support\Facades\Auth::check())
                        <li><a href="{{ url('/register') }}">注册</a></li>
                        <li><a href="{{ url('/login') }}">登录</a></li>
                    @else
                        <li><a href="{{ url('/logout') }}">登出</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</header>