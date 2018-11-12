<?php

namespace App\Http\Controllers\Admin;

use App\Model\Article;
use App\Repository\AdminRepostiry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $admin;

    /**
     * AdminController constructor.
     * @param AdminRepostiry $admin
     */
    public function __construct(AdminRepostiry $admin)
    {
        $this->admin = $admin;
    }

    /**
     * 显示后台首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $collects = $this->admin->rdashboard();
        return view('admin.dashboard.index', compact('collects'));
    }

    /**
     * 显示后台管理员个人信息
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admininfo()
    {
        return view('admin.admin.index');
    }

    /**
     * 显示用户信息页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function usermembershow()
    {
        return view('admin.usermember.index');
    }

    /**
     * 显示文章列表页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function articleshow()
    {
        $ch_article = Article::where('type',0)->get();

        return view('admin.article.index',['ch_article'=>$ch_article]);
    }

    /**
     * 编辑文章
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request)
    {

        $article = $request->input('article');

        return view('admin.article.edit');
    }
    /**
     * 新增文章
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(Request $request)
    {

        $article = $request->input('article');


        return view('admin.article.add');
    }
    /**
     * 删除文章
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delete(Request $request)
    {

        $article = $request->input('article');


        return view('admin.article.delete');
    }
}

