<?php

namespace App\Http\Controllers\Admin;
use App\Model\Roles;
use App\Model\Permission;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
     /**
     * 授权页面
     *
     * @return \Illuminate\Http\Response
     */
     public function auth($id)
     {
        // 根据id获取角色
        $roles = Roles::find($id);
        // dd($roles);
        // 获取所有权限
        $perms = Permission::get();
        // dd($perms);
        // 获取此角色拥有的权限
        $own_perms = $roles->permission;
        // dd($own_perms);
        $own_per = [];
        foreach ($own_perms as $v)
        {
            $own_per[] = $v->id;
        }

        return view('admin.roles.auth',compact('roles','perms','own_per'));
     }
      /**
     * 授权处理
     *
     * @return \Illuminate\Http\Response
     */
      public function doAuth(Request $request)
      {
        // 1.接收数据
       $input = $request->except('_token');
       // 2.保存数据到关联表中
        // 删除原有授权
       \DB::table('abbr_j_q')->where('rid',$input['role_id'])->delete();
       // 重新添加授权
       if(!empty($input['perm_id'])){
            foreach ($input['perm_id'] as $v) {
             \DB::table('abbr_j_q')->insert(['rid'=>$input['role_id'],'nid'=>$v]);
        }
       }
        return redirect('admin/roles');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Roles::get();
        return view('admin/roles/list',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin/roles/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');

        $res = Roles::create($input);
        if($res){
            return redirect('admin/roles');
        }else{
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $roles = Roles::find($id);
         return view('admin/roles/edit',compact('roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // dd($id);
         //根据id,获取要修改的用户
        $roles = Roles::find($id);

        //将用户的相关属性修改为用户提交的值
        $input = $request->all();
        // dd($input);
        $res = $roles->update(['role_name'=>$input['role_name']]);

        if($res){
            return redirect('admin/roles');
        }else{
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 找到要删除的记录，并删除
       $res = Roles::find($id)->delete();
        if($res){
            $data = [
                'status'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'删除失败'
            ];
        }

        return $data;
    }
}
