@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">

          <div class="panel-body">
            @if(Session::has('flash_message'))
            <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
            @endif
            <h2>Kirim Cerita <small> atau pengalaman mu</small></h2>
                <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('mading.store') }}">
                {{ csrf_field() }}
                  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                  <div class="form-group">
                    <label >Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul Tulisan">
                  </div>


                  <div class="form-group">
                    <label >Upload Gambar</label>
                    <!-- image-preview-filename input [CUT FROM HERE]-->
                                  <div class="input-group image-preview">
                                      <input type="file" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                      <span class="input-group-btn">
                                          <!-- image-preview-clear button -->
                                          <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                              <span class="glyphicon glyphicon-remove"></span> Clear
                                          </button>
                                          <!-- image-preview-input -->
                                          <div class="btn btn-default image-preview-input">
                                              <span class="glyphicon glyphicon-folder-open"></span>
                                              <span class="image-preview-input-title">Browse</span>
                                              <input type="file" accept="image/png, image/jpeg, image/gif" name="images" id="images"/> <!-- rename it -->
                                          </div>
                                      </span>
                                  </div><!-- /input-group image-preview [TO HERE]-->
                    </div>
                    <div class="form-group">
                      <label >Sumber gambar</label>
                      <input type="text" class="form-control" name="source_img" placeholder="Judul Tulisan">
                    </div>

                        <div class="form-group">
                        <script src="{{ URL::asset('ckeditor/ckeditor.js') }}"></script>

                                    <label >Konten</label>
                                    <textarea style="height: 500px  ;width: 100%;" class="blog-editor" name="content" placeholder="Tulis pengalaman dan cerita mu disini..  "></textarea>

                        <script>
                                CKEDITOR.replaceAll('blog-editor' );
                        CKEDITOR.config.height='500px';
                            </script>
                        </div>





                        <div class="form-group">
                            <label >Kategori</label>
                            <select class="form-control" name="category_id">
                              @foreach ($list as $catlist)
                              <option value="{{ $catlist->id }}">{{ $catlist->title }}</option>
                              @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label >Tags</label>
                            <input type="text" class="form-control" name="tags" placeholder="tags">
                            <p class="help-block">Isi dengan Tags</p>
                        </div>


          <div class="form-group">
              <label >privacy</label>
              <select class="form-control" name="privacy">
                  <option value="0">0</option>
                  <option value="1">1</option>
              </select>
          </div>

      <div class="form-group">
              <label >Tulisan kamu akan ditinjau oleh Pengurus Mading, sebelum nanti di publish</label> <br/>

          </div>
          <hr/>

          <div class="form-group">
              <button class="btn btn-danger" value="Submit" type="submit">Kirim</button>
          </div>









      </form>
          </div>
        </div>


</div>

</div>
</div>
@endsection
