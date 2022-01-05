@extends('admin.layouts.layout')
@section('content') 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Notification</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Notification</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->

    <!-- Main content -->
     <div class="container-fluid">
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">            
              <div class="card-body">
                 <!-- form start --> 
                 <form name="add-notification-form" id="add-notification-form" method="post"
                 enctype="multipart/form-data" action="{{ route('notification.store') }}">
                     
                    <div>
                          @if (!$errors->addErrors->isEmpty())
                      <div class="form_error_add">
                          <div class="alert alert-danger">
                              <strong>Whoops!</strong> There were some problems with your input.<br><br>
                              <ul>
                                  @foreach ($errors->addErrors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      </div>
                      @endif
                      <!-- CSRF TOKEN -->
                      {{ csrf_field() }}
                      <span id="form_output"></span>
                  </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="body">Type*</label>
                            <select name="notification_type" id="notification_type" class="form-control @error('notification_type') is-invalid @enderror"
                             required autocomplete="notification_type" autofocus>
                             <option value='0'>-- Select Type --</option>
                             @foreach($type_noti as $type)
                              <option value="{{$type->type_name}}">
                                {{$type->type_name}}</option>
                                @endForeach
                            </select>
                             @if ($errors->has('notification_type'))
                             <span class="text-danger">{{ $errors->first('notification_type') }}</span>
                             @endif
                        </div>
                        <div class="form-group">
                            <label for="title">Title*</label>
                            <input type="text" name="notification_title" id="notification_title" class="form-control  @error('notification_title') is-invalid @enderror" 
                            required autocomplete="notification_title" autofocus>                    
                             @if ($errors->has('notification_title'))
                             <span class="text-danger">{{ $errors->first('notification_title') }}</span>
                             @endif
                        </div>
                        
                    <div class="form-group">
                        <div class="form-group">
                            <label for="title">Date and Time</label>
                            <div class="input-group date " id="notification_datetime" data-target-input="nearest" >   
                                <input type="text"  id="notification_datetime" 
                                name="notification_datetime" class="form-control datetimepicker-input" 
                                data-target="#notification_datetime"/>
                                <div class="input-group-append" data-target="#notification_datetime" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>                                  
                             @if ($errors->has('notification_datetime'))
                             <span class="text-danger">{{ $errors->first('notification_datetime') }}</span>
                             @endif
                       
                    </div>
                </div>
                    </div>
                    
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="title">File Type &nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="notification_filetype" id="notification_filetype" value="1" onclick="check(this.value)"
                                class=" @error('notification_filetype') is-invalid @enderror" required autocomplete="notification_filetype" autofocus >
                                <label for="link">Url &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio"  name="notification_filetype" id="notification_filetype" value="2" onclick="check(this.value)" class="@error('notification_filetype') is-invalid @enderror" 
                                required autocomplete="notification_filetype" >
                                <label for="file">File</label>                
                                 @if ($errors->has('notification_title'))
                                 <span class="text-danger">{{ $errors->first('notification_title') }}</span>
                                 @endif
                           
                        </div>
                    </div>
                        <div class="form-group">
                            <div id="link"  style="display: none;" >
                                <input type="input" id="link_type" name="link_type" class="form-control"  >
                            </div>
                            <div id="file"style="display: none;" >
                               <input type="file" id="file" name="file" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file type">Is Flash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="radio"  name="notification_is_flash" id="notification_is_flash" value="0" 
                            class=" @error('notification_is_flash') is-invalid @enderror" required autocomplete="notification_is_flash" autofocus >
                            <label for="link">Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="radio"  name="notification_is_flash" id="notification_is_flash" value="1" class="@error('notification_is_flash') is-invalid @enderror" 
                            required autocomplete="notification_is_flash" >
                            <label for="file">No</label>                                       
                             @if ($errors->has('notification_is_flash'))
                             <span class="text-danger">{{ $errors->first('notification_is_flash') }}</span>
                             @endif
                        </div>
                        <div class="form-group">
                            <label for="file type">New/Old &nbsp;&nbsp;&nbsp;</label>
                            <input type="radio"  name="notification_is_new" id="notification_is_new" value="0" 
                            class=" @error('notification_is_new') is-invalid @enderror" required autocomplete="notification_is_new" autofocus >
                            <label for="New">New &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="radio"  name="notification_is_new" id="notification_is_new" value="1" class="@error('notification_is_new') is-invalid @enderror" 
                            required autocomplete="notification_is_new" >
                            <label for="old">Old &nbsp;&nbsp;&nbsp;</label>                                       
                             @if ($errors->has('notification_is_new'))
                             <span class="text-danger">{{ $errors->first('notification_is_new') }}</span>
                             @endif
                        </div> 
                        <div class="form-group">
                            <label for="file type"> Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="radio"  name="notification_status" id="notification_status" value="1" 
                            class=" @error('notification_status') is-invalid @enderror" required autocomplete="notification_status" autofocus >
                            <label for="New">Active &nbsp;&nbsp;</label>
                            <input type="radio"  name="notification_status" id="notification_status" value="0" class="@error('notification_status') is-invalid @enderror" 
                            required autocomplete="notification_status" >
                            <label for="old">Inactive &nbsp;&nbsp;&nbsp;</label>                                       
                             @if ($errors->has('notification_status'))
                             <span class="text-danger">{{ $errors->first('notification_status') }}</span>
                             @endif
                        </div>
                        <div >
                            <button  type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                  </form>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
        </div><!-- row -->        

       </div><!-- /.container-fluid -->


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
<script type='text/javascript'>
    function check(link_file) 
    {     
        
        if(link_file == '1')
        {
         
                $("#link").show();
                $("#file").hide();
        }
        else if(link_file == '2')
        {
             $("#file").show();
             $("#link").hide();
        }
      
    } 
  </script>

   
 @endsection 