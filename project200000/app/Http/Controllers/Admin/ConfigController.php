<?php

namespace App\Http\Controllers\Admin;

use App\Model\web_conf;
use App\Services\OSS;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    public function config()
    {

        $datas = DB::table('web_conf')->first();

        return view('admin/config/config',['datas'=>$datas]);
    }

    public function doConfig(Request $request)
    {
        $input = $request->all();
        //$datas = DB::table('web_conf')->first();
        //dd($datas);
        $web_conf = web_conf::find('1');



        $res = $web_conf->update(['site_name'=>$input['site_name'],'site_describe'=>$input['site_describe'],'telephone'=>$input['telephone'],
            'record_number'=>$input['record_number'],'company_address'=>$input['company_address'],'copyright'=>$input['copyright'],
            'created_at'=>$input['created_at'],'updated_at'=>$input['updated_at']]);
         if($res){
            echo '修改成功';
            return redirect('/admin/config')->with('success','删除成功');
         }else{
             echo '修改失败';
             return back()->with('error','修改错误');
         }
//

    //dd($request->all());
//        echo '1111';
    }


    public function upload(Request $request){
        //获取上传文件
        $file = $request->file('logo');

        //判断上传文件的有效性
        if($file->isValid()){
            //获取文件后缀名
            $ext = $file->getClientOriginalExtension();
            //生成新的后缀名
            $newfilename = md5(date('YmdHis').rand(1000,9999).uniqid()).'.'.$ext;
//            return $newfilename;


            //上传到本地服务器
//            $res = $file->move(public_path().'/upload',$newfilename);
//            return '/upload/'.$newfilename;

            //上传到阿里云OSS服务器
            OSS::upload($newfilename,$file->getRealPath());

            //将上传文件的位置返回给客户端
            return $newfilename;

        }
    }


}
