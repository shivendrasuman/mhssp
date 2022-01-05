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
                 <form name="edit-notification-form" id="edit-notification-form" method="post" 
                enctype="multipart/form-data" action="{{ route('notification.update', $notification->id) }}">
               
                 <input name="_method" type="hidden" value="PUT">   
                    <div>
                          @if (!$errors->addErrors->isEmpty())
                      <div class="form_error_edit">
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
                <div class="form-group row">
                <label class="control-label"> Type</label>
                            <div class="col-lg-4">
                                <?php $options=$notification->notification_type ?>
                                <select name="notification_type" id="notification_type"
                                class="form-control form-control @error('notification_type') is-invalid @enderror"
                                value="{{ $notification->notification_type }}" required autocomplete="notification_type" autofocus>
                                    <option value='0'>-- Select Type --</option>           
                                    @foreach ($type_noti as $value)
                                <option value="{{ $value->type_name }}" {{ ( $value->type_name == $options) ? 'selected' : '' }}>
                                   {{ $value->type_name }}
                                 </option>
                        @endforeach            
                                </select>                                
                                
                                @error('notification_type')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
            </div>
                <div class="form-group row">
                            <label class="control-label"> Title</label>
                            <div class="col-lg-4">
                                <input type="text" name="notification_title" id="notification_title"
                                 class="form-control form-control @error('notification_title') is-invalid @enderror" 
                                 value="{{ $notification->notification_title }}"  required autocomplete="notification_title" autofocus>
                                @error('notification_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                                       
                        </div>
                        <div class="form-group row">
                            <label class="control-label">File type</label>
                            <div class="col-lg-4">
                                <input type="radio"  name="notification_filetype" id="notification_filetype" 
                                value="1" {{ ($notification->notification_filetype =="1")? "checked" : "" }} onclick="check(this.value)"
                                class=" @error('notification_filetype') is-invalid @enderror" 
                                 required autocomplete="notification_filetype" autofocus >
                                <label for="link">Link</label>
                                <input type="radio"  name="notification_filetype" id="notification_filetype" value="2" 
                                {{ ($notification->notification_filetype=="2")? "checked" : "" }} onclick="check(this.value)" 
                                class="@error('notification_filetype') is-invalid @enderror" 
                                 required autocomplete="notification_filetype" autofocus>
                            <label for="file">File</label>
                            @error('notification_filetype')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>  
                                                           
                        </div>
                        <div class="form-group row">
                            <div class="control-label"></div>
                            <div id="link" class="col-lg-4" style="display: none;" >
                                 <input type="input" id="link_type" name="link_type" class="form-control" value="{{ $notification->notification_file_url }}"  >
                             </div>
                             <div id="file" class="col-lg-4" style="display: none;" >
                                <label for="file">Select a file:</label>
                                <input type="file" id="file" name="file" class="form-control" >
                             </div>
                           </div>


                           <div class="form-group row">
                            <label class=" control-label">Is Flash</label>
                               <div class="col-lg-2">
                                <input type="radio" id="notification_is_flash" name="notification_is_flash" value="0"
                                {{ ($notification->notification_is_flash=="0")? "checked" : "" }}>
                                <label for="link">Yes</label>
                                <input type="radio" id="notification_is_flash" name="notification_is_flash" value="1"
                                {{ ($notification->notification_is_flash=="1")? "checked" : "" }}>
                                        <label for="file">No</label>
                               </div>
                           </div>
                           <div class="form-group row">
                            <label class="control-label"> New/Old</label>
                             <div class="col-lg-2">
                                <input type="radio" id="notification_is_new" name="notification_is_new" value="0"
                                {{ ($notification->notification_is_new=="0")? "checked" : "" }}>
                                <label for="New">New</label>
                                <input type="radio" id="notification_is_new" name="   notification_is_new" value="1"
                                {{ ($notification->notification_is_new=="1")? "checked" : "" }}>
                                        <label for="Old">Old</label>
                               </div>
                           </div>
                           
                                        
                        </div>
                           <div class="form-group row">
                            <label class=" control-label"> Date and Time</label> 
                            <div class="input-group date" id="notification_datetime" data-target-input="nearest" >   
                            <input type="text"  id="notification_datetime" 
                            name="notification_datetime" class="form-control datetimepicker-input" 
                            data-target="#notification_datetime" value={{$notification->notification_datetime}}/>
                            <div class="input-group-append" data-target="#notification_datetime" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>                              
                       </div>
                       <div class="form-group row">
                        <label class=" control-label">Status</label>
                         <div class="col-lg-2">
                            <input type="radio" id="notification_status" name="notification_status" value="0"
                            {{ ($notification->notification_status=="0")? "checked" : "" }}>
                            <label for="Active">Active</label>
                            <input type="radio" id="notification_status" name="notification_status" value="1"
                            {{ ($notification->notification_status=="1")? "checked" : "" }}>
                                    <label for="Inactive">Inactive</label>
                           </div>
                       </div>
                       <div >
                        <button type="submit" class="btn btn-primary">Submit</button> 
                    </div>
                  </form>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>

        </div> <!-- row-->
      
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