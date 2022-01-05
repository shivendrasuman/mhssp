@extends('admin.layouts.layout')
@section('content')
 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="../../index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">CMS</a>
    </li>
  </ul>

</nav>
<!-- /.navbar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
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
                                <button type="button" id="addnewcms" name="addnewcms" 
                                class="btn btn-info btn-sm addnewcms" onclick="location.href='{{ url('cms/create') }}'" >
                                Add New
                                </button>
                            </div>                                
                            <br>
                              <table id="cms_table" class="table table-bordered table-striped">
                                    <thead>
                                            <tr>
                                                <th>Title </th>   
                                                <th>Body </th> 
                                                <th>Meta Data </th>
                                                <th>Image </th>    
                                                <th>Slug </th>                                             
                                                <th>Status </th> 
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                     
                                        @foreach($list_cms as $key)                                         
                                          <tr class="data-row">
                                              <td >{{$key->cms_title}}</td>
                                              <td >{{$key->cms_body}}</td>
                                              <td >{{$key->cms_meta_data}}</td>             
                                              <td ><img src="/storage/CMS/{{$key->cms_image}}" alt="Check" width="50" height="50"/></td>                                       
                                              <td >{{$key->cms_slug}}</td>             
                                              <td >{{activeinactivetext($key->cms_status)}}</td>
                                              <td width="120px;">     
                                                                                        
                                                <button type="submit" class="btn btn-info btn-sm"  id="editcms
                                                "name="editcms" data-o-id="{{$key->id}}" onclick='window.location = "{{URL::route("cms.edit",$key->id) }}"'> Modify
                                                </button>                                             
                                                  <form action="{{ route('cms.destroy',$key->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure to delete cms?')">
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

     
    
  </div><!-- /.Container fluid -->

    </section>

  </div> <!-- /.content-wrapper -->
  
 
<!-- datatable -->
<!--<script src="{{asset('vendors/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('vendors/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>-->


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

