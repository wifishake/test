<?php

namespace App\Http\Controllers\Admin;

use App\Model\goods;
use App\Model\review;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function index()
    {
        $datas = review::orderBy('goodsid','status','star','content','created_ed')->get();
//        dd($datas);
        return view('admin.review.index',['datas'=>$datas]);
    }


    public function destroy($id)
    {
//        echo '111';
        //找到要删除的记录，并删除
        $re =  review::find($id)->delete();
//        dd($re);
        if($re){
            $data = ['state'=>0,'msg'=>'删除成功'];
        }else{
            $data = ['state'=>1,'msg'=>'删除失败'];
        }
        return $data;
    }

    public function show()
    {

        $re = review::find(1);

        $data = $re->showinfo;
        $user = $re->showuser;
        $valence = $re->showval;
//        dump($valence->speed);
//        dump($user->nickname);

//        //分页
//        $nowPage= isset($_GET['page']) ? $_GET['page'] : 1;
//
//        $num =review::getReplyNum($this->model,$posts['id']);
//        $page= new Page($nowPage,$num);
//        $page->run();




        return view('admin.review.show',['re'=>$re,'data'=>$data,'user'=>$user,'valence'=>$valence]);

    }
}
