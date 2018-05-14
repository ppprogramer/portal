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
                <div class="col-sm-4 info-blocks">
                    <div class="img"><img src="{{ asset('images/1.jpg') }}"></div>
                    <div class="info-blocks-in">
                        <h3><a href="javascript:opengames(1,&#39;逃离圣派翠克节&#39;);">逃离圣派翠克节</a></h3>
                        <p class="text-left">游戏介绍：游戏中你被困在了圣派翠克节的活动现场，请你开动脑筋寻找线索，尽快逃离圣派翠克节吧！</p>
                        <p class="text-left">如何开始：游戏加载完毕后点击play，然后点击next即可开始游戏。</p>
                        <p class="text-left">游戏目标：合理操作，逃离圣派翠克节。</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks">
                    <div class="img"><img src="{{ asset('images/2.jpg') }}"></div>
                    <div class="info-blocks-in">
                        <h3><a href="javascript:opengames(2,&#39;曼妥思与朋友的图片拼图&#39;);">曼妥思与朋友的图片拼图</a></h3>
                        <p class="text-left">游戏介绍：在游戏中，你需要在限定的时间内将里面的拼图拼完整，你能够完成吗？快来试试吧。<br><br></p>
                        <p class="text-left">如何开始：进入游戏后，在点击play即可开始游戏。</p>
                        <p class="text-left">游戏目标：在游戏中，你要以最快的速度，将图片拼凑完整吧！</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks">
                    <div class="img"><img src="{{ asset('images/3.jpg') }}"></div>
                    <div class="info-blocks-in">
                        <h3><a href="javascript:opengames(3,&#39;填满黄色&#39;);">填满黄色</a></h3>
                        <p class="text-left">游戏介绍：在游戏中，我们所要做的就是将黄色填满整个屏幕，每个关卡的内容都会有点不同，一起来挑战一下吧！</p>
                        <p class="text-left">如何开始：进入游戏后，在点击播放按钮 - 然后点击skip - 最后点击播放按钮即可开始游戏。</p>
                        <p class="text-left">游戏目标：在游戏中，你要合理操作，顺利过关！</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 info-blocks">
                    <div class="img"><img src="{{ asset('images/4.jpg') }}"></div>
                    <div class="info-blocks-in">
                        <h3><a href="javascript:opengames(4,&#39;奥拉星动物对对碰&#39;);">奥拉星动物对对碰</a></h3>
                        <p class="text-left">快来和亚比宠物一起成长，一起战斗的星球！小动物疯狂碰碰碰！碰出火花和快乐！小可爱好像很厉害的样子，各种小动物霸屏，很好玩哟。</p>
                        <p class="text-left">操作说明：在游戏中，你要合理操作，消灭所有的方块。</p>
                        <p class="text-left">如何开始：进入游戏后，在点击[开始游戏]即可开始游戏。</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks">
                    <div class="img"><img src="{{ asset('images/5.jpg') }}"></div>
                    <div class="info-blocks-in">
                        <h3><a href="javascript:opengames(5,&#39;天晴彩虹消除&#39;);">天晴彩虹消除</a></h3>
                        <p class="text-left">当大雨过后，天气放晴的时侯，我们就有机会看到漂亮的天晴彩虹噢！现在让我们一起来玩玩这款消除小游戏？一起来挑战一下吧</p>
                        <p class="text-left">如何开始：进入游戏后，在点击播放按钮即可开始游戏。</p>
                        <p class="text-left">游戏目标：在游戏中，你要合理操作，消灭所有的方块。[开始游戏]即可开始游戏。</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks">
                    <div class="img"><img src="{{ asset('images/6.jpg') }}"></div>
                    <div class="info-blocks-in">
                        <h3><a href="javascript:opengames(6,&#39;奥拉星冰之迷阵&#39;);">奥拉星冰之迷阵</a></h3>
                        <p class="text-left">快来和亚比宠物一起成长，一起战斗的星球！冰块消消消！闯关迷阵救亚比！这么多方块把人都看呆了，小伙伴们快来帮忙下呗。</p>
                        <p class="text-left">如何开始：进入游戏后，在点击[开始游戏]即可开始游戏。</p>
                        <p class="text-left">游戏目标：在游戏中，你要合理操作，消除所有的方块。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="call-to-action-2" style="margin-top: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3>关于我们</h3>
                    <p>
                        广州铭晟网络科技有限公司于2017年注册成立，是专业的网络棋牌游戏开发和运营公司。铭晟科技开发商业务涉及棋牌游戏、棋牌游戏平台、棋牌游戏开发、管理软件开发、棋牌游戏软件开发等，公司位于广东省广州市。铭晟科技始终坚持自主研发，已开发完成德晟棋牌等棋牌类游戏。
                        我们全力为您倾心打造精品棋牌游戏平台！</p>
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
                            <li><a href="javascript:article(1,&#39;运营页游平台你不得不知道的五件事&#39;);">运营页游平台你不得不知道的五件事</a></li>
                            <li><a href="javascript:article(2,&#39;如何运营游戏？&#39;);">如何运营游戏？</a></li>
                            <li><a href="javascript:article(3,&#39;游戏运营数据基本知识&#39;);">游戏运营数据基本知识</a></li>
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
                            <li><span class="fa fa-angle-right"></span>名称：广州铭晟网络科技有限公司</li>
                            <li><span class="fa fa-angle-right"></span>地址：广州市天河区东圃大马路87号之一第二层（220房之3）</li>
                            <li><span class="fa fa-angle-right"></span>固话：020-38399077</li>
                            <li><span class="fa fa-angle-right"></span>电话：13975167651</li>
                            <li><span class="fa fa-angle-right"></span>邮箱：3308135040@qq.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function opengames(id,name){
            layer.open({
                type: 2,
                title: name,
                shadeClose: true,
                shade: 0.8,
                area: ['730px', '466px'],
                content: '/index.php/Home/Index/game/id/'+id //iframe的url
            });
        }
        function article(id, title) {
            layer.open({
                type: 2,
                title: title,
                shadeClose: true,
                shade: 0.8,
                area: ['500px', '90%'],
                content: '/index.php/Home/Index/article/id/' + id //iframe的url
            });
        }
    </script>
@endsection
