<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShaynaAdmin - HTML5 Admin Template</title>
    <meta name="description" content="ShaynaAdmin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @stack('before-style')
    <!-- Style -->
    @include('includes.style')
    @stack('after-style')
</head>

<body>
    <!-- Left Panel -->
    @include("includes.sidebar")
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        @include("includes.navbar")
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            @yield("content")
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>
    <!-- /#right-panel -->
    @stack('before-style')
    {{-- Script --}}
    @include("includes.script")
    @stack('after-style')
</body>
</html>
