<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/admins/css/font.css">
    <link rel="stylesheet" href="/admins/css/xadmin.css">

    <link rel="stylesheet" href="/admins/lib/layui/css/layui.css"  media="all">

    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="/admins/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/admins/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #time{
            width:250px;

        }
        .layui-input-inline textarea{
            width:560px;
            height:80px;
        }
    </style>
</head>

<body>
<div class="x-body">
    <form class="layui-form">
        <div class="layui-form-item">
            <label for="L_email" class="layui-form-label">
                <span class="x-red">*</span>商品名称
            </label>
            <div class="layui-input-inline">
                <input type="text" id="L_email" value="{{$data['title']}}" name="email" required="" lay-verify="email"
                       autocomplete="off" class="layui-input">
                <input type="hidden" name="uid" value="">
            </div>

        </div>



        <div class="layui-form-item">
            <?php
                if($re['status'] == 0){
            ?>
                <div class="layui-inline">
                    <label class="layui-form-label">评论时间</label>
                    <div class="layui-input-inline">
                        <input type="text" class="layui-input" id="test5" placeholder="{{ $re['created_at'] }}">
                    </div>
                </div>
            <?php
                }else{
            ?>
            <div class="layui-inline">
                <label for="L_username" class="layui-form-label">
                    <span class="x-red">*</span>评论人
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_username" value="{{ $user['nickname'] }}" name="content" required="" lay-verify="nikename"
                           autocomplete="off" class="layui-input">
                </div>
            </div>

            <div class="layui-inline">
                <label class="layui-form-label">评论时间</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" id="test5" placeholder="{{ $re['created_at'] }}">
                </div>
            </div>

            <?php
                }
            ?>

        </div>

        <div class="layui-form-item">
            <div class="layui-inline">
                <label for="L_username" class="layui-form-label">
                    <span class="x-red">*</span>商品符合度
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_username" value="<?php if($valence['conformity'] == 5){ echo '5分';
                    }else if($valence['conformity'] == 4){ echo '4分';  }else if($valence['conformity'] == 3){
                    echo '3分';  }else if($valence['conformity'] == 2){ echo '2分';  }else if($valence['conformity'] == 2){
                    echo '2分';  }else{ echo '1分差评'; } ?>" name="conformity" required="" lay-verify="nikename"
                           autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-inline">
                <label for="L_username" class="layui-form-label">
                    <span class="x-red">*</span>送货速度
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_username" value="<?php if($valence['speed'] == 3){ echo '快';
                    }else if($valence['speed'] == 2){ echo '勉强可以';  }else{ echo '慢'; } ?> " name="speed" required="" lay-verify="nikename"
                           autocomplete="off" class="layui-input">

                </div>
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-inline">
                <label for="L_username" class="layui-form-label">
                    <span class="x-red">*</span>满意度
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_username" value="<?php if($valence['attitude'] == 3){ echo '很满意';
                    }else if($valence['attitude'] == 2){ echo '勉强可以';  }else{ echo '太差了'; } ?>" name="attitude" required="" lay-verify="nikename"
                           autocomplete="off" class="layui-input">
                </div>
            </div>
        </div>

        <div class="layui-form-item">
            <label for="L_username" class="layui-form-label">
                <span class="x-red">*</span>评论内容
            </label>
            <div class="layui-input-inline">
                <textarea  width="200px" type="text" id="L_username" value="{{ $re['content'] }}" name="content" required=""
                           class="layui-input">{{ $re['content'] }}</textarea>
            </div>
        </div>




        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label"></label>
           <!-- <button  class="layui-btn" lay-filter="edit" lay-submit="">修改</button> -->
            <a href="{{ url('admin') }}" class="layui-btn" name="" type="submit"  class="text-but">确定</a>
            <input class="layui-btn" name="" type="reset" value="重置" class="text-but">
        </div>
    </form>
</div>
<script src="/admins/lib/layui/layui.js" charset="utf-8"></script>
<script>
    layui.use(['form','laydate'], function(){
        var laydate = layui.laydate;
        var form = layui.form;
        var layer = layui.layer;
        //执行一个laydate实例
        laydate.render({
            elem: '#start' //指定元素
        });
        //执行一个laydate实例
        laydate.render({
            elem: '#end' //指定元素
        });
        //时间选择器
        laydate.render({
            elem: '#test5'
            , type: 'datetime'
        });
        //监听提交
        form.on('submit(sreach)', function(data){
            // console.log(11111);
            // return false;
        });
    });

</script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>
</html>