@extends('admin.layouts.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          
          <h1 class="m-0">CMS</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">CMS</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <div class="container-fluid">
      <!-- /.row -->
      @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
  @endif 
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 ">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">            
            <div class="card-body">              
             
               <!-- form start --> 
  {!! Form::open(['id'=>'cmsadd', 'action' => 'Admin\CmsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  <!-- CSRF TOKEN -->
    {{ csrf_field() }}
  <div class="row">
     <div class="col-md-8">
      <div class="form-group col-">
          {{Form::label('title', 'Title*')}}
          {{Form::text('cms_title', '', ['class' => 'form-control', 'placeholder' => 'Title' ])}}
          @if ($errors->has('cms_title'))
                  <span class="text-danger">{{ $errors->first('cms_title') }}</span>
              @endif
      </div>
      <div class="form-group">
          {{Form::label('body', 'Body*')}}
          {{Form::textarea('cms_body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
          @if ($errors->has('cms_body'))
          <span class="text-danger">{{ $errors->first('cms_body') }}</span>
      @endif
      </div>     
      <div class="form-group">
        {{Form::label('breadcrumb', 'Breadcrumb')}}
        {{Form::text('breadcrumb', '', ['class' => 'form-control', 'placeholder' => 'Breadcrumb'])}}
        <span class="help"> 
          <small id="breadcrumb" class="form-text text-muted">
            
          </small>
          
        </span>
        @if ($errors->has('breadcrumb'))
          <span class="text-danger">{{ $errors->first('breadcrumb') }}</span>
          @endif
        </div>   
      <div class="form-group">
        {{Form::label('meta_data', 'Meta Data*')}}
        {{Form::text('cms_meta_data', '', ['class' => 'form-control', 'placeholder' => 'Meta Data'])}}
        @if ($errors->has('cms_meta_data'))
          <span class="text-danger">{{ $errors->first('cms_meta_data') }}</span>
          @endif
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
            {{Form::label('image', 'Image*')}}
            {{Form::file('cms_image', ['class' => 'form-control'])}}
            @if ($errors->has('cms_image'))
            <span class="text-danger">{{ $errors->first('cms_image') }}</span>
        @endif
        </div>
        <div class="form-group">
          {{Form::label('slug', 'Slug')}}
          {{Form::text('cms_slug', '', ['class' => 'form-control', 'placeholder' => 'Slug' ])}}
        </div>
         <div class="form-group">
              {{Form::label('meta_title', 'Meta Title')}}
              {{Form::text('cms_meta_title', '', ['class' => 'form-control', 'placeholder' => 'Meta Title' ])}}
          </div>
          <div class="form-group">
              {{Form::label('meta_key', 'Meta Key')}}
              {{Form::text('cms_meta_key', '', ['class' => 'form-control', 'placeholder' => 'Meta Key is separated by comma'])}}
          </div>
          <div class="form-group">
            {{Form::label('status', 'Status')}}<br>
            &nbsp;&nbsp; {{Form::radio('cms_status', '1')}} &nbsp; Active <br>
            &nbsp;&nbsp; {{Form::radio('cms_status', '0')}} &nbsp; InActive     
         </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
      </div>
    </div>
          </div>
          </div>
        </section>
      </div>
  </div>
</div>
<!-- Scripts -->

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="{{asset('js/cms.js')}}"></script>
<script>
   CKEDITOR.replace( 'article-ckeditor' );
</script>

<!--  to show the messages  -->

<?php if(Session::has('message-success')){ 
$message_success = Session::get('message-success');
$message_error = Session::get('message-error');

?>
<script type='text/javascript'>
var SucessMessage = "<?php echo $message_success; ?>";
  var ErrorMessage = "<?php echo $message_error; ?>";
$(document).ready(function() {
if(SucessMessage !=''){
    toastr.success(SucessMessage);
}
if(ErrorMessage !=''){
    toastr.error(ErrorMessage);

}


});
</script>
<?php } ?>
@endsection