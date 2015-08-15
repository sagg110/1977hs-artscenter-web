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
    
    <style type="text/css">
        img{
            width: 100%;
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function() 
        {  
            window.top.window.iFrameHeight();
            window.top.window.callApplicationCount();
        });
    </script>

</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                招生详情模块
            </h1>
        </div>
    </div>
    <!-- 报名方式 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-group"></i>
                    报名方式
                </div>
                <div class="panel-body">
                    <form class="form-signin" enctype="multipart/form-data" role="form" action="<?php echo U('Admission/alter_admission_handle');?>" method='post' id="form">
                    <div class="row">
                      <div class="col-md-12">              
                        <table class="table table-bordered" style="border-bottom:1px solid #DDD;">
                          <tbody>
                            <?php if(is_array($admission)): foreach($admission as $key=>$data): ?><tr>
                              <td style="width:90px;"><?php echo ($data["title"]); ?>：</td>
                              <td><input name="content[]" type="text" class="form-control" placeholder="请输入<?php echo ($data["title"]); ?>" value="<?php echo ($data["content"]); ?>"></td>
                            </tr><?php endforeach; endif; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                            <button type="submit" style="width:100%;" class="btn btn-success">点 击 修 改</button>
                        </div>
                    </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- 教学安排 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-book"></i>
                    教学安排
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo ($education["content"]); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a type="button" style="width:100%;margin-top:8px;" class="btn btn-success" href="<?php echo U('Admission/alter_education');?>">修 改 教 学 安 排</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 生活安排 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-book"></i>
                    生活安排
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo ($life["content"]); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a type="button" style="width:100%;margin-top:8px;" class="btn btn-success" href="<?php echo U('Admission/alter_life');?>">修 改 生 活 安 排</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>