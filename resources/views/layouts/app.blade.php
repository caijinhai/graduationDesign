<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Graduation Design</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">首页 <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">工程热力学<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/energe">公式计算</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/energe#questions">题型模块</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">流体与传热<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">公式计算</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">题型模块</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">空调工程<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">公式计算</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">题型模块</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6">
                    <h4>能动数值计算网站</h4>
                    <p>本网站所有模块功能免费，此项目为开源项目。</p>
                </div>
                <div class="col-sm-6 col-lg-5 col-lg-offset-1">
                    <div class="row">
                        <div class="col-xs-6">
                            <h4>关于</h4>
                            <ul class="list-unstyled">
                                <li>关于我们</li>
                            </ul>
                        </div>
                        <div class="col-xs-6">
                            <h4>联系方式</h4>
                            <ul class="list-unstyled">
                                <li>QQ: 911159490</li>
                                <li>Gmail: cjh123honey@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row text-center">
                <p>© 2017, Inc. Created by cesar.cai </p>
            </div>
        </div>
    </footer>

    <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;">
        <i class="glyphicon glyphicon-chevron-up"></i>
    </a>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
