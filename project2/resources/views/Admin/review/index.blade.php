<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>添加用户</title>
    <link href="/admins/css/css.css" type="text/css" rel="stylesheet" />
    <link href="/admins/css/main.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="/admins/images/main/favicon.ico" />
    <link rel="stylesheet" href="/admins/css/font.css">
    <link rel="stylesheet" href="/admins/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/admins/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/admins/js/xadmin.js" charset="utf-8"></script>
    <style>
        body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
        #searchmain{ font-size:12px;}
        #search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF; float:left}
        #search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
        #search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
        #search form input.text-but{height:24px; line-height:24px; width:55px; background:url(/admins/images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
        #search a.add{ background:url(/admins/images/main/add.jpg) no-repeat -3px 7px #548fc9; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF; float:right}
        #search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
        #main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
        #main-tab th{ font-size:12px; background:url(/admins/images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
        #main-tab td{ font-size:12px; line-height:40px;}
        #main-tab td a{ font-size:12px; color:#548fc9;}
        #main-tab td a:hover{color:#565656; text-decoration:underline;}
        .bordertop{ border-top:1px solid #ebebeb}
        .borderright{ border-right:1px solid #ebebeb}
        .borderbottom{ border-bottom:1px solid #ebebeb}
        .borderleft{ border-left:1px solid #ebebeb}
        .gray{ color:#dbdbdb;}
        td.fenye{ padding:10px 0 0 0; text-align:right;}
        .bggray{ background:#f9f9f9}
    </style>
</head>

<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
    <tr>
        <td width="99%" align="left" valign="top">您的位置：用户管理</td>
    </tr>
    <tr>
        <td align="left" valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
                <tr>
                    <td width="90%" align="left" valign="middle">
                        <form method="post" action="">
                            <span>管理员：</span>
                            <input type="text" name="search" value="" class="text-word" placeholder="">
                            <input name="" type="submit" value="查询" class="text-but">
                        </form>
                    </td>
                    <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">新增管理员</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="left" valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
                <tr>
                    <th align="center" valign="middle" class="borderright">id</th>
                    <th align="center" valign="middle" class="borderright">商品id</th>
                    <th align="center" valign="middle" class="borderright">评价状态</th>
                    <th align="center" valign="middle" class="borderright">评价等级</th>
                    <th align="center" valign="middle" class="borderright">评价内容</th>
                    <th align="center" valign="middle" class="borderright">评价时间</th>
                    {{--<th align="center" valign="middle">状态修改</th>--}}
                    <th align="center" valign="middle">操作</th>
                </tr>

                @foreach($datas as $data)
                <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
                    <td align="center" valign="middle" class="borderright borderbottom">{{ $data->id }}</td>
                    <td align="center" valign="middle" class="borderright borderbottom">{{ $data->goodsid }}</td>
                    <td align="center" valign="middle" class="borderright borderbottom">
                        <?php
                            if($data['status'] == 0){echo '匿名';}
                            else{
                                echo '用户';
                            }
                        ?>
                    </td>
                    <td align="center" valign="middle" class="borderright borderbottom">
                    <?php
                        if($data['star'] == 1){
                            echo '好评';
                        }else if($data['star'] == 2){
                            echo '中评';
                        }else{
                            echo '差评';
                        }
                    ?>
                    </td>

                    <td align="center" valign="middle" class="borderright borderbottom">
                        <textarea name="" id=""cols="30"rows="5">{{ $data->content }}</textarea></td>
                    <td align="center" valign="middle" class="borderright borderbottom">{{ $data['created_at'] }}</td>

                    <td align="center" valign="middle" class="borderbottom">
                        <a href="{{ url('admin/review/'.$data->id) }}" target="mainFrame">查看评论</a>
                        {{--<a title="编辑"  onclick="x_admin_show('编辑','{{url('admin/user/'.$data->goodsid.'/edit')}}',600,400)" href="javascript:;">--}}
                            {{--<i class="layui-icon">&#xe642;</i>--}}
{{--                        <a href="{{ url('admin/review/destroy'.$data->goodsid ) }}"  class="add">删除帖子</a><span class="gray">&nbsp;|&nbsp;</span>--}}
                        <a title="删除" onclick="member_del(this,'{{ $data->id }}')" href="javascript:;">删除评论</a>
                        {{--<i class="layui-icon">&#xe640;</i>--}}


                    </td>
                </tr>
                @endforeach
            </table></td>
    </tr>

</table>
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
        //监听提交
        form.on('submit(sreach)', function(data){
            // console.log(11111);
            // return false;
        });
    });

    //评论删除
    function member_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            //发异步删除数据
            // $.post('URL地址'.'携带的参数',成功后的闭包函数)
            $.post('{{ url('admin/review/') }}/'+id,{"_token":"{{csrf_token()}}","_method":"delete","id":id},function(data){
//                console.log(data);
                if(data.status == 0){
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                    location.reload(true);
                }else{
                    layer.msg('删除成功!',{icon:1,time:1000});
                    location.reload(true);
                }
            });

        });
    }
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