@extends('admincp.app')
@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>Mading</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Mading</li>
  </ol>
</section>
<section class="content">
  <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Pending Kiriman Mading</h3>

                <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Date</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Judul</th>
                  </tr>
                  @foreach ($blogs as $blog)
                  <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->user->name }}</td>
                    <td>{{\Carbon\Carbon::instance($blog->created_at)->toFormattedDateString()}}</td>
                    <td>{{ $blog->category->title }}</td>
                    <td><span class="label label-warning">Pending</span></td>
                    <td>{{ $blog->title }}.</td>
                  </tr>
                  @endforeach

                </tbody></table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
</section>


@endsection
