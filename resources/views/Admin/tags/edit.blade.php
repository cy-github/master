 <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>H+ 后台主题UI框架 - 基础表格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{asset('public/Admin/css/bootstrap.min.css?v=3.3.5')}}" rel="stylesheet">

</head>

<body class="gray-bg">
    <h3>添加标签</h3>
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <form role="form" action="{{url('/tags/'.$tag->id)}}" method="post" target="iframe7">
                            
                            {{ csrf_field() }}
                            <!--这里添加一个隐藏域为了能post上去-->
                            <input type="hidden" name="_method" value="PUT">

                            <div class="form-group">
                                <label for="exampleInputEmail1">标签</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="tag" value="{{$tag->tag}}"/>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
    
                </div>
            </div>
        </div>
   
    </div>
    <script src="{{asset('public/Admin/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{asset('public/Admin/js/bootstrap.min.js?v=3.3.5')}}"></script>
    <script src="{{asset('public/Admin/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('public/Admin/js/content.min.js?v=1.0.0')}}"></script>
    <script src="{{asset('public/Admin/js/plugins/iCheck/icheck.min.js')}}"></script>
    <script src="{{asset('public/Admin/js/demo/peity-demo.min.js')}}"></script>
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>