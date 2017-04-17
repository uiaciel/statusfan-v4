@extends('admincp.app')
@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>Users</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Users</li>
  </ol>
</section>
<section class="content">
  <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">List Users</h3>

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
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($Users as $User)
                  <tr>
                    <td>{{ $User->id }}</td>
                    <td>@ {{ $User->slug }}</td>
                    <td>{{ $User->name }}</td>
                    <td>{{ $User->email }}</td>
                    <td><span class="label label-success">Approved</span></td>
                    <td>Edit</td>
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
