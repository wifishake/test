<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 资讯管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="article-list.html" data-title="资讯管理" href="javascript:void(0)">资讯管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{ url('admin/pictures')}}" data-title="图片管理" href="javascript:void(0)">图片管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 商品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{ url('admin/goodscates')}}" data-title="分类管理" href="javascript:void(0)">分类管理</a></li>
					<li><a data-href="{{ url('admin/goodstag')}}" data-title="品牌管理" href="javascript:void(0)">品牌管理</a></li>
					<li><a data-href="{{ url('admin/goods')}}" data-title="商品管理" href="javascript:void(0)">商品管理</a></li>
				</ul>
			</dd>
		</dl>
		
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>

					<li><a data-href="{{ url('admin/homeuser')}}" data-title="会员列表" href="javascript:;">会员列表</a></li>
					<!-- <li><a data-href="member-del.html" data-title="删除的会员" href="javascript:;">删除的会员</a></li> -->
					<!-- <li><a data-href="member-level.html" data-title="等级管理" href="javascript:;">等级管理</a></li> -->

					<li><a data-href="member-scoreoperation.html" data-title="积分管理" href="javascript:;">积分管理</a></li>
					<li><a data-href="member-record-browse.html" data-title="收藏记录" href="javascript:void(0)">收藏记录</a></li>
					<!-- <li><a data-href="member-record-download.html" data-title="下载记录" href="javascript:void(0)">下载记录</a></li> -->
					<li><a data-href="member-record-share.html" data-title="分享记录" href="javascript:void(0)">分享记录</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{ url('admin/user') }}" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
					<li><a data-href="{{ url('admin/user/create') }}" data-title="添加管理员" href="javascript:void(0)">添加管理员</a></li>
					<li><a data-href="{{ url('admin/roles') }}" data-title="角色列表" href="javascript:void(0)">角色列表</a></li>
					<li><a data-href="{{ url('admin/roles/create') }}" data-title="添加角色" href="javascript:void(0)">添加角色</a></li>
					<!-- <li><a data-href="admin-permission.html" data-title="权限管理" href="javascript:void(0)">权限管理</a></li> -->
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 权限管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{ url('admin/permission') }}" data-title="权限列表" href="javascript:void(0)">权限列表</a></li>
					<li><a data-href="{{ url('admin/permission/create') }}" data-title="添加权限" href="javascript:void(0)">添加权限</a></li>
					<!-- <li><a data-href="admin-permission.html" data-title="权限管理" href="javascript:void(0)">权限管理</a></li> -->
				</ul>
			</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{ url('admin/review')}}" data-title="评论列表" href="javascript:;">评论列表</a></li>
					<li><a data-href="" data-title="意见反馈" href="javascript:void(0)">意见反馈</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="{{ url('admin/config') }}" data-title="系统设置" href="javascript:void(0)">网站配置</a></li>
					
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>