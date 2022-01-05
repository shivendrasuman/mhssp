<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
    }
    public function index()
    {
        
        $list_notification=DB::table('mhssp.mhssp_notification')
                ->select('*')
                ->orderBy('id')
                ->get();    
              //  dd($list_notification);

      // get all the notifications
      return view('admin.notification.index', compact('list_notification'));
        
    // load the view and pass the notifications
        // return view('notification.index');  
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $type_noti=DB::table('mhssp.mhssp_notification_type')
                ->select('*')
                ->orderBy('type_id')
                ->get();    
        return View('admin.notification.create')
        ->with('type_noti',$type_noti);       
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $UserID= isAdminlogin();
        $validator = Validator::make($request->all(),[
            'notification_type'=>'required',
			'notification_title'=>'required',
            'notification_filetype'=>'required',
        ]);

         if ($validator->fails())
        {   
          
            $notification = array(
                'message' => 'Enter all required fields!!',
                'alert-type' => 'validation'
            );
            return Redirect()->back()->with($notification);
        }
        $link=$request->get('link_type');
        $file=$request->get('file');
       

       $notification_datetime = changeDateFormate($request->get('notification_datetime') ,"Y-m-d:h:i:s");

        
            $notification = new notification;        
            $notification->notification_type = $request->input('notification_type');
            $notification->notification_title = $request->input('notification_title');
            $notification->notification_filetype  =$request->input('notification_filetype');
            $notification->notification_file_url=  $link;
            if($request->hasFile('file')){
                              // Get filename with the extension
                $filenameWithExt = $request->file('file')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('file')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('file')->storeAs('storage/Notification', $fileNameToStore);
                $notification->notification_file_url= $path;
            }            
            $notification->notification_is_flash = $request->input('notification_is_flash');
            $notification->notification_is_new =$request->input('notification_is_new');
            $notification->notification_datetime =$notification_datetime ;
            $notification->notification_status = $request->input('notification_status');
            $notification->created_by =  $UserID ;
            $notification->edited_by = $UserID ;
            $notification->save(); 
            $notification = array(
            'message' => 'Created successfully!',
            'alert-type' => 'success'
            );
     Session::flash('message-success', "Created successfully!");
    // return Redirect::back();
    // return Redirect::back()->with('HELOO');
    return redirect()->route('admin.notification.index');
    //return Redirect::to('store')->with($notification);

      
        }


    public function show($id)
    {
       // dd("HI");return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $notification = notification::find($id);
        
       
        $type_noti=DB::table('mhssp.mhssp_notification_type')
                ->select('*')
                ->orderBy('type_id')
                ->get();    
        return  view('admin.notification.edit', ['notification' => $notification], ['type_noti'=>$type_noti]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $UserID= isAdminlogin();
        $validator = Validator::make($request->all(),[
            'notification_type'=>'required',
			'notification_title'=>'required',
            'notification_filetype'=>'required',
        ]);

         if ($validator->fails())
        {   
          
            $notification = array(
                'message' => 'Enter all required fields!!',
                'alert-type' => 'validation'
            );
            return Redirect()->back()->with($notification);
        }
        $link=$request->get('link_type');
        $file=$request->get('file');
        
        if($link!=NULL)
        {
            $notification_file_url=  $link;
        }
        else 
        {
        $notification_file_url=  $file;
        }

       $notification_datetime = changeDateFormate($request->get('notification_datetime') ,"Y-m-d");
       
                $notification = notification::find($id);        
                
                $notification->notification_type = $request->input('notification_type');
                $notification->notification_title = $request->input('notification_title');
                $notification->notification_filetype  =$request->input('notification_filetype');
                $notification->notification_file_url = $notification_file_url;
                $notification->notification_is_flash = $request->input('notification_is_flash');
                $notification->notification_is_new =$request->input('notification_is_new');
                $notification->notification_datetime =$notification_datetime ;
                $notification->notification_status = $request->input('notification_status');
                $notification->created_by =  $UserID ;
                $notification->edited_by = $UserID ;   

            $notification->save(); 

       $notification = array(
        'message' => 'Updated successfully!',
        'alert-type' => 'success'
    );
     Session::flash('message-success', "Updated  successfully!");
    // return Redirect::back();
    // return Redirect::back()->with('HELOO');
    return redirect()->route('admin.notification.create');
    //return Redirect::to('store')->with($notification);

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notification = notification::find($id);
        $notification->delete();
        Session::flash('message-success', "Deleted  successfully!");
        return redirect()->route('admin.notification.create');



    }
}
