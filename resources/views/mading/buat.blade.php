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
                        <script src="http://statusfan.com/app/Addons/ckeditor/ckeditor.js"></script>

                                    <label >Konten</label>
                                    <textarea style="height: 500px  ;width: 100%;" class="blog-editor" name="content" placeholder="Tulis pengalaman dan cerita mu disini..  "></textarea>
                        <script>tinymce.init({

                        mode : "specific_textareas",
                        editor_deselector : "post-textarea",
                        height: 500,
                        theme: 'modern',
                        plugins: [
                        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                        'searchreplace wordcount visualblocks visualchars code fullscreen',
                        'insertdatetime media nonbreaking save table contextmenu directionality',
                        'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
                        ],
                        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                        toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
                        image_advtab: true,
                        templates: [
                        { title: 'Test template 1', content: 'Test 1' },
                        { title: 'Test template 2', content: 'Test 2' }
                        ],
                        content_css: [
                        '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                        '//www.tinymce.com/css/codepen.min.css'

                        ]
                        });</script>
                        <!--<script>
                                CKEDITOR.replaceAll('blog-editor' );
                        CKEDITOR.config.height='500px';
                            </script>-->
                        </div>





                        <div class="form-group">
                            <label >Kategori</label>
                            <select class="form-control" name="kategori_id">
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
                  <option value="0"></option>
                  <option value="1">2</option>
                  <option value="2">3</option>
              </select>
          </div>

          <div class="form-group">
              <label >{{trans('blog::global.allow-comments')}}</label><br/>
              <select name="val[comment]">
                  <option value="1">{{trans('global.yes')}}</option>
                  <option value="0">{{trans('global.no')}}</option>
              </select>
          </div>

          <div class="form-group">
              <label >{{trans('blog::global.allow-likes')}}</label> <br/>
              <select name="val[like]">
                  <option value="1">{{trans('global.yes')}}</option>
                  <option value="0">{{trans('global.no')}}</option>
              </select>
          </div>

          <div class="form-group" style="display:none">
              <label >{{trans('blog::global.status')}}</label> <br/>
              <select name="val[status]">
      <option value="0">{{trans('blog::global.unpublished')}}</option>
      <option value="1">{{trans('blog::global.published')}}</option>
              </select>
          </div>

      <div class="form-group">
              <label >Tulisan kamu akan ditinjau oleh Pengurus Mading, sebelum nanti di publish</label> <br/>

          </div>
          <hr/>

          <div class="form-group">
              <button class="btn btn-danger">{{trans('blog::global.submit')}}</button>
          </div>









      </form>
          </div>
        </div>


</div>

</div>
</div>
@endsection
