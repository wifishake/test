<?php

namespace App\Http\Controllers\Admin;
use App\Model\Users;
use App\Model\Roles;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * 管理员授权
     *
     * @return \Illuminate\Http\Response
     */
    public function auth($id)
    {
       // 根据id获取角色
        $users = Users::find($id);
        // dd($roles);
        // 获取所有权限
        $roles = Roles::get();
        // dd($perms);
        // 获取此角色拥有的权限
        $own_roles = $users->roles;
        // dd($own_perms);
        $own_rol = [];
        foreach ($own_roles as $v)
        {
            $own_rol[] = $v->id;
        }

        return view('admin.user.auth',compact('roles','users','own_rol')); 
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
       \DB::table('abbr_h_j')->where('uid',$input['user_id'])->delete();
       // 重新添加授权
       if(!empty($input['rol_id'])){
            foreach ($input['rol_id'] as $v) {
             \DB::table('abbr_h_j')->insert(['uid'=>$input['user_id'],'rid'=>$v]);
        }
       }
        return redirect('admin/user');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::get();
        $roles = Roles::get();
        // dd($users);
        return view('admin.user.list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.user.edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
