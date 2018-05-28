@extends('portal.app')

@section('content')
    <section id="content">


        <div class="container" id="games">
            <div class="row">
                <div class="col-md-12">
                    <div class="aligncenter"><h2 class="aligncenter">游戏推荐</h2></div>
                    <br>
                </div>
            </div>

            <div class="row">
                @if(!empty($games))
                    @foreach($games as $key =>$game)
                        <div class="col-sm-4 info-blocks">
                            <div class="img"><img src="/uploads{{ $game->picture_path }}"></div>
                            <div class="info-blocks-in">
                                <h3>
                                    <a href='javascript:opengames("{{ $game->url }}",&#39;{{ $game->name }}&#39;);'>{{ $game->name }}</a>
                                </h3>
                                {!! $game->desc !!}
                            </div>
                        </div>
                    @endforeach
                @endif

                {{--<div class="col-sm-4 info-blocks">--}}
                    {{--<div class="img"><img src="{{ asset('images/1.jpg') }}"></div>--}}
                    {{--<div class="info-blocks-in">--}}
                        {{--<h3><a href="javascript:opengames(1,&#39;逃离圣派翠克节&#39;);">逃离圣派翠克节</a></h3>--}}
                        {{--<p class="text-left">游戏介绍：游戏中你被困在了圣派翠克节的活动现场，请你开动脑筋寻找线索，尽快逃离圣派翠克节吧！</p>--}}
                        {{--<p class="text-left">如何开始：游戏加载完毕后点击play，然后点击next即可开始游戏。</p>--}}
                        {{--<p class="text-left">游戏目标：合理操作，逃离圣派翠克节。</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4 info-blocks">--}}
                    {{--<div class="img"><img src="{{ asset('images/2.jpg') }}"></div>--}}
                    {{--<div class="info-blocks-in">--}}
                        {{--<h3><a href="javascript:opengames(2,&#39;曼妥思与朋友的图片拼图&#39;);">曼妥思与朋友的图片拼图</a></h3>--}}
                        {{--<p class="text-left">游戏介绍：在游戏中，你需要在限定的时间内将里面的拼图拼完整，你能够完成吗？快来试试吧。<br><br></p>--}}
                        {{--<p class="text-left">如何开始：进入游戏后，在点击play即可开始游戏。</p>--}}
                        {{--<p class="text-left">游戏目标：在游戏中，你要以最快的速度，将图片拼凑完整吧！</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4 info-blocks">--}}
                    {{--<div class="img"><img src="{{ asset('images/3.jpg') }}"></div>--}}
                    {{--<div class="info-blocks-in">--}}
                        {{--<h3><a href="javascript:opengames(3,&#39;填满黄色&#39;);">填满黄色</a></h3>--}}
                        {{--<p class="text-left">游戏介绍：在游戏中，我们所要做的就是将黄色填满整个屏幕，每个关卡的内容都会有点不同，一起来挑战一下吧！</p>--}}
                        {{--<p class="text-left">如何开始：进入游戏后，在点击播放按钮 - 然后点击skip - 最后点击播放按钮即可开始游戏。</p>--}}
                        {{--<p class="text-left">游戏目标：在游戏中，你要合理操作，顺利过关！</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-4 info-blocks">--}}
                    {{--<div class="img"><img src="{{ asset('images/4.jpg') }}"></div>--}}
                    {{--<div class="info-blocks-in">--}}
                        {{--<h3><a href="javascript:opengames(4,&#39;奥拉星动物对对碰&#39;);">奥拉星动物对对碰</a></h3>--}}
                        {{--<p class="text-left">快来和亚比宠物一起成长，一起战斗的星球！小动物疯狂碰碰碰！碰出火花和快乐！小可爱好像很厉害的样子，各种小动物霸屏，很好玩哟。</p>--}}
                        {{--<p class="text-left">操作说明：在游戏中，你要合理操作，消灭所有的方块。</p>--}}
                        {{--<p class="text-left">如何开始：进入游戏后，在点击[开始游戏]即可开始游戏。</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4 info-blocks">--}}
                    {{--<div class="img"><img src="{{ asset('images/5.jpg') }}"></div>--}}
                    {{--<div class="info-blocks-in">--}}
                        {{--<h3><a href="javascript:opengames(5,&#39;天晴彩虹消除&#39;);">天晴彩虹消除</a></h3>--}}
                        {{--<p class="text-left">当大雨过后，天气放晴的时侯，我们就有机会看到漂亮的天晴彩虹噢！现在让我们一起来玩玩这款消除小游戏？一起来挑战一下吧</p>--}}
                        {{--<p class="text-left">如何开始：进入游戏后，在点击播放按钮即可开始游戏。</p>--}}
                        {{--<p class="text-left">游戏目标：在游戏中，你要合理操作，消灭所有的方块。[开始游戏]即可开始游戏。</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4 info-blocks">--}}
                    {{--<div class="img"><img src="{{ asset('images/6.jpg') }}"></div>--}}
                    {{--<div class="info-blocks-in">--}}
                        {{--<h3><a href="javascript:opengames(6,&#39;奥拉星冰之迷阵&#39;);">奥拉星冰之迷阵</a></h3>--}}
                        {{--<p class="text-left">快来和亚比宠物一起成长，一起战斗的星球！冰块消消消！闯关迷阵救亚比！这么多方块把人都看呆了，小伙伴们快来帮忙下呗。</p>--}}
                        {{--<p class="text-left">如何开始：进入游戏后，在点击[开始游戏]即可开始游戏。</p>--}}
                        {{--<p class="text-left">游戏目标：在游戏中，你要合理操作，消除所有的方块。</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>

    <section id="call-to-action-2" style="margin-top: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3>关于我们</h3>
                    <p>
                        广州快鱼文化传媒有限公司成立于2015年，自2015年成立以来，公司一直专注于新媒体运营，目前已发展成为具有1400多万微信公众号粉丝。业务面涉及：娱乐、文化、时尚、汽车、科技、母婴、美食、原创动漫、游戏、电商等多个领域的内容创作。

                        公司通过规模化、多渠道整合新潮内容和优质的传媒产业链。依托自媒体业务，致力于“资源整合、品牌运营、市场内驱、合作共赢”，致力于将公司打造成为国内最具有影响力的新媒体产业平台。

                        目前公司致力于发展游戏和电商业务，目前电商业务发展呈现逐步上升的趋势，且已经取得了不错的业绩！</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding gray-bg" id="news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>公司新闻</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3"><br></div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-text">
                        <ul class="withArrow">
                            @if(!empty($news))
                                @foreach($news as $key=>$new)
                                    <li>
                                        <a href='javascript:article("{{ $new->id }}", &#39;{{ $new->title }}&#39;);'>{{ $new->title }}</a>
                                    </li>
                                @endforeach
                            @endif

                            {{--<li><a href="javascript:article(2,&#39;如何运营游戏？&#39;);">如何运营游戏？</a></li>--}}
                            {{--<li><a href="javascript:article(3,&#39;游戏运营数据基本知识&#39;);">游戏运营数据基本知识</a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding gray-bg" id="contactus">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>联系我们</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3"><br></div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-text">
                        <ul class="withArrow">
                            <li><span class="fa fa-angle-right"></span>名称：广州快鱼文化传媒有限公司</li>
                            <li><span class="fa fa-angle-right"></span>地址：广州市天河区中西大道1132号汇鑫大厦五楼518</li>
                            <li><span class="fa fa-angle-right"></span>固话：020-38939825</li>
                            <li><span class="fa fa-angle-right"></span>电话：18279409761</li>
                            <li><span class="fa fa-angle-right"></span>邮箱：ceo@qt135.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function opengames(url, name) {
            layer.open({
                type: 2,
                title: name,
                shadeClose: true,
                shade: 0.8,
                area: ['730px', '466px'],
                content: url //iframe的url
            });
        }

        function article(id, title) {
            layer.open({
                type: 2,
                title: title,
                shadeClose: true,
                shade: 0.8,
                area: ['500px', '90%'],
                content: '/portal/frame/article/detail?id=' + id //iframe的url
            });
        }
    </script>
@endsection
