<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>1977画室网站后台</title>
    <link rel="icon" href="/1977hs/Public/Uploads/img/logo.png">
    <!-- Bootstrap core CSS -->
    <link href="/1977hs/Public/Css/admin/bootstrap.min.css" rel="stylesheet">
    <script src="/1977hs/Public/Js/admin/jquery.min.js"></script>
    <script src="/1977hs/Public/Js/admin/bootstrap.min.js"></script>
    <script src="/1977hs/Public/Js/admin/docs.min.js"></script>
    <script src="/1977hs/Public/Js/admin/ie10-viewport-bug-workaround.js"></script>

    <!-- Font-awesome core CSS -->
    <link href="/1977hs/Public/Css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/1977hs/Public/Css/admin/Homepage.css" rel="stylesheet">
    
</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                添加问答
            </h1>
        </div>
    </div>
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
              <li><a href="<?php echo U('Question/index');?>">招生问题</a></li>
              <li class="active">添加问答</li>
            </ol>
        </div>
    </div>
    <form class="form-signin" role="form" action="<?php echo U('Question/add_handle');?>" method='post' id="form">
    <!-- 主体 -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>问题:</td>
                  <td><input name="title" type="text" class="form-control" style="width:320px;" placeholder="请输入问题"></td>
                </tr>
                <tr>
                  <td>回答:</td>
                  <td><textarea name="answer" class="form-control" rows="3" placeholder="请输入回答"></textarea></td>
                </tr>
                <tr>
                  <td>是否置顶：</td>
                  <td><input type="radio" name="optionsRadios" id="optionsRadios1" value="1">是&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="0" checked>否</td>
                </tr>
              </tbody>
            </table>
            <div style="float:right;"><button type="submit" class="btn btn-primary">提 交</button></div>
        </div>
    </div>
    </form>
    <!-- 说明 -->
    <div class="row">
        <div class="col-md-12">
            <div class="bs-callout bs-callout-info" id="callout-alerts-dismiss-plugin">
                <h4>说明</h4>
                <p>招生问题模块，注意置顶默认为否。</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>