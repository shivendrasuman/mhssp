@extends('admin.layouts.layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
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
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
     <div class="container-fluid">
     {{-- {{@if (!$errors->addErrors->isEmpty())}} 
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
  {{@endif}} --}}
  <?php //$ynArray = array("0"=>"No", "1" => "Yes");?>
     <div class="row">
           <div class="col-12">
            <div class="card">
                            <div class="card-body">
                              <div class="card-body float-right" >
                                <button type="button" id="addnewnotification" name="addnewnotification" 
                                class="btn btn-info btn-sm addnewnotification" onclick="location.href='{{ url('notification/create') }}'" >
                                Add New
                                </button>
                            </div>                                
                            <br>
                              <table id="Notification_table" class="table table-bordered table-striped">
                                    <thead>
                                            <tr>
                                                <th>Type </th>
                                                <th>Title</th>
                                                <th>File Type</th>
                                                <th>Is Flash</th>
                                                <th>New Old</th>
                                                <th>Date <br> Time</th>
                                                <th>Status </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                          @foreach($list_notification as $key)                                         
                                          <tr class="data-row">
                                              <td >{{$key->notification_type}}</td>
                                              <td ><a href={{$key->notification_file_url}} target="_blank">{{$key->notification_title}}</a></td>
                                              <td >{{fileorurl($key->notification_filetype)}}</td>                                              
                                              <td >{{yesnotext($key->notification_is_flash)}}</td>
                                              <td >{{yesnotext($key->notification_is_new)}}</td>
                                              <td >{{$key->notification_datetime}}</td>
                                              <td >{{activeinactivetext($key->notification_status)}}</td>
                                              <td width="120px;">     
                                                                                        
                                                <button type="submit" class="btn btn-info btn-sm"  id="editNotification" name="editNotification"  
                                                data-o-id="{{$key->id}}" 
                                                onclick='window.location = "{{URL::route("notification.edit",$key->id) }}"'>

                                                Modify
                                                </button>
                                             
                                                  <form action="{{ route('notification.destroy',$key->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure to delete Notification?')">
                                                      Delete</button>
                                                    </form>
                                              </td>
                                                  
                                          </tr>
                                          @endforeach 
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
           
          </div>
         
        </div>

     
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    </section>
<!-- datatable -->
<!--<script src="{{asset('vendors/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('vendors/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>-->

<script type="text/javascript">
  $(function () {
    $('#Notification_table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  
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
