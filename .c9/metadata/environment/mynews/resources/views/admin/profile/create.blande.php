{"filter":false,"title":"create.blande.php","tooltip":"/mynews/resources/views/admin/profile/create.blande.php","undoManager":{"mark":9,"position":9,"stack":[[{"start":{"row":0,"column":0},"end":{"row":37,"column":11},"action":"insert","lines":["<!DOCTYPE html>","<html>"," <head>","     <meta charset=\"utf-8\">","     <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","     <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">","    ","     <title>MyNews</title>"," </head>"," <body>","    <h1>Myニュース作成画面</h1>","　</body>","</html>","","//課題1","//└ファイルを表示させたい時に使用","//└ユーザーからのリクエストに対して応える","","//課題2","//└どのような種類のデータをどのように返すかといった操作が可能","","//課題3","//└resouces > views > admin > profile > create.blande.php","//                                    > edit.blande.php","","{{--layouts/admin.blade.phpを読みこむ--}}","@expands('layout.admin')","","{{--admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む--}}","@section('content')","<div class=\"container\">"," <div class=\"row\">","  <div class=\"col-md-8 mx-auto\">","   <h2>ニュース新規作成</h2>","  </div>"," </div>","</div>","@endsection"],"id":1}],[{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"insert","lines":["/"]},{"start":{"row":14,"column":1},"end":{"row":14,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":14,"column":2},"end":{"row":14,"column":16},"action":"insert","lines":["PHP/Laravel 10"],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":13,"column":0},"action":"remove","lines":["<!DOCTYPE html>","<html>"," <head>","     <meta charset=\"utf-8\">","     <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","     <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">","    ","     <title>MyNews</title>"," </head>"," <body>","    <h1>Myニュース作成画面</h1>","　</body>","</html>",""],"id":4}],[{"start":{"row":1,"column":0},"end":{"row":25,"column":11},"action":"remove","lines":["//PHP/Laravel 10","//課題1","//└ファイルを表示させたい時に使用","//└ユーザーからのリクエストに対して応える","","//課題2","//└どのような種類のデータをどのように返すかといった操作が可能","","//課題3","//└resouces > views > admin > profile > create.blande.php","//                                    > edit.blande.php","","{{--layouts/admin.blade.phpを読みこむ--}}","@expands('layout.admin')","","{{--admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む--}}","@section('content')","<div class=\"container\">"," <div class=\"row\">","  <div class=\"col-md-8 mx-auto\">","   <h2>ニュース新規作成</h2>","  </div>"," </div>","</div>","@endsection"],"id":5}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":25},"action":"insert","lines":["{{-- layouts/admin.blade.phpを読み込む --}}","@extends('layouts.admin')"],"id":6}],[{"start":{"row":0,"column":13},"end":{"row":0,"column":28},"action":"remove","lines":["admin.blade.php"],"id":7},{"start":{"row":0,"column":13},"end":{"row":0,"column":30},"action":"insert","lines":["profile.blade.php"]}],[{"start":{"row":1,"column":22},"end":{"row":1,"column":23},"action":"remove","lines":["n"],"id":8},{"start":{"row":1,"column":21},"end":{"row":1,"column":22},"action":"remove","lines":["i"]},{"start":{"row":1,"column":20},"end":{"row":1,"column":21},"action":"remove","lines":["m"]},{"start":{"row":1,"column":19},"end":{"row":1,"column":20},"action":"remove","lines":["d"]},{"start":{"row":1,"column":18},"end":{"row":1,"column":19},"action":"remove","lines":["a"]}],[{"start":{"row":1,"column":18},"end":{"row":1,"column":19},"action":"insert","lines":["p"],"id":9},{"start":{"row":1,"column":19},"end":{"row":1,"column":20},"action":"insert","lines":["r"]},{"start":{"row":1,"column":20},"end":{"row":1,"column":21},"action":"insert","lines":["o"]}],[{"start":{"row":1,"column":21},"end":{"row":1,"column":22},"action":"insert","lines":["f"],"id":10},{"start":{"row":1,"column":22},"end":{"row":1,"column":23},"action":"insert","lines":["i"]},{"start":{"row":1,"column":23},"end":{"row":1,"column":24},"action":"insert","lines":["l"]},{"start":{"row":1,"column":24},"end":{"row":1,"column":25},"action":"insert","lines":["e"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":2,"column":0},"end":{"row":2,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"mode":"ace/mode/php"}},"timestamp":1585526869264,"hash":"b134789a8ae5d19466f93ba31b8308111eaef8b5"}