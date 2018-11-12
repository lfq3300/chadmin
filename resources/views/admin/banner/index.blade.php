@extends('admin.admin')
@section('content-header')
    <h1>
        Banner管理
        {{--<small>Banner</small>--}}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li class="active">Banner管理</li>
    </ol>
@stop

@section('content')
    <a href="{{url('admin/article/add')}}" class="btn btn-primary margin-bottom">上传图片</a>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Banner列表</h3>
            <div class="box-tools">
                <form action="" method="get">
                    {{--<div class="input-group">--}}
                        {{--<input type="text" class="form-control input-sm pull-right" name="s_title"--}}
                               {{--style="width: 150px;" placeholder="搜索文章标题">--}}
                        {{--<div class="input-group-btn">--}}
                            {{--<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </form>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-hover table-bordered">
                <tbody>
                <!--tr-th start-->
                <tr>

                    <th>图片id</th>
                    {{--<th>作者</th>--}}
                    <th>图片地址</th>
                    <th>排序</th>
                    <th>操作</th>

                </tr>
                <!--tr-th end-->
                {{--@foreach($ch_article as $value)--}}
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <a style="font-size: 16px" href="{{url('admin/article/edit')}}"><i class="fa fa-fw fa-pencil" title="修改"></i></a>
                        <a style="font-size: 16px" href="{{url('admin/article/delete')}}"><i class="fa fa-fw fa-trash-o" title="删除"></i></a>
                    </td>
                    {{--<td class="text-muted">{{$value->title}}</td>--}}
                    {{--<td class="text-green">LaravelChen</td>--}}
                    {{--<td class="text-red">{{$value->times}}</td>--}}
                    {{--<td class="text-navy">{{date('Y-m-d H:i:s', $value->at_time)}}</td>--}}
                    {{--<td class="text-navy">{{date('Y-m-d H:i:s', $value->update_time)}}</td>--}}
                </tr>
                {{--@endforeach--}}
                </tbody>
            </table>
        </div>
    </div>
@stop

