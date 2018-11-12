@extends('admin.admin')
@section('content-header')
    <h1>
        内容管理
        <small>文章</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li class="active">内容管理 - 文章</li>
    </ol>
@stop

@section('content')
    <a href="{{url('admin/article/add')}}" class="btn btn-primary margin-bottom">新增文章</a>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">文章列表</h3>
            <div class="box-tools">
                <form action="" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm pull-right" name="s_title"
                               style="width: 150px;" placeholder="搜索文章标题">
                        <div class="input-group-btn">
                            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-hover table-bordered">
                <tbody>
                <!--tr-th start-->
                <tr>
                    <th>操作</th>
                    <th>标题</th>
                    {{--<th>作者</th>--}}
                    <th>浏览次数</th>
                    <th>发布时间</th>
                    <th>更新时间</th>
                </tr>
                <!--tr-th end-->
                @foreach($ch_article as $value)
                <tr>
                    <td>
                        <a style="font-size: 16px" href="{{url('admin/article/edit')}}"><i class="fa fa-fw fa-pencil" title="修改"></i></a>
                        <a style="font-size: 16px" href="{{url('admin/article/delete')}}"><i class="fa fa-fw fa-trash-o" title="删除"></i></a>
                    </td>
                    <td class="text-muted">{{$value->title}}</td>
                    {{--<td class="text-green">LaravelChen</td>--}}
                    <td class="text-red">{{$value->times}}</td>
                    <td class="text-navy">{{date('Y-m-d H:i:s', $value->at_time)}}</td>
                    <td class="text-navy">{{date('Y-m-d H:i:s', $value->update_time)}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

