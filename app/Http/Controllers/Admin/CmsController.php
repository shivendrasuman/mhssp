<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\cms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       // $this->middleware('guest')->except('logout');
      ///$this->middleware('auth', ['except' => ['index', 'show']]);    

    }
    public function index()
    {
        // $list_cms=DB::table('mhssp.mhssp_cms')
        // ->select('*')
        // ->orderBy('id')
        // ->get();    
      //  dd($list_cms);
      
    //Pagination
$list_cms = cms::paginate(3);
// get all the cmss
return view('admin.cms.index', compact('list_cms'));      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'cms_title'=>'required',
			'cms_body'=>'required',
            'cms_image'=>'required',           
        ]);
        
        if ($validator->fails())
        {
            return Redirect('cms/create')
            ->withErrors($validator); 
        }
        //For SLUG
        if($request->input('cms_slug') == null)
        {
            //$slug = $request->input('cms_title');
            $slug = create_slug($request->input('cms_title'));
        }
        else 
        $slug = $request->input('cms_slug');

        // Handle File Upload
        if($request->hasFile('cms_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cms_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //StrReplace
            $filename_rep = strreplace($filename);
            // Get just ext
            $extension = $request->file('cms_image')->getClientOriginalExtension();           
            // Filename to store
            $fileNameToStore= $filename_rep.'_'.time().'.'.$extension;        
            // Upload Image
            $path = $request->file('cms_image')->storeAs('public/CMS/', $fileNameToStore);
		
	    // make thumbnails
	    $thumbStore = 'thumb.'.$filename.'_'.time().'.'.$extension;
            //$thumb = Image::make($request->file('cms_image')->getRealPath());
           // $thumb->resize(80, 80);
           // $thumb->save('storage/cover_images/'.$thumbStore);
		
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Post
        $cms = new cms();
        $cms->cms_title = $request->input('cms_title');
        $cms->cms_body = $request->input('cms_body');
        $cms->cms_image = $fileNameToStore;        
        $cms->cms_slug =  $slug;        
        $cms->breadcrumb = $request->input('breadcrumb');
        $cms->cms_status = $request->input('cms_status');
        $cms->cms_meta_title = $request->input('cms_meta_title');
        $cms->cms_meta_data = $request->input('cms_meta_data');
        $cms->cms_meta_key = $request->input('cms_meta_key');
        //printdata($cms);
        $cms->save();
        
        Session::flash('message-success', "Created successfully!");
        return redirect()->route('admin.cms.create');
        //return redirect('/cms')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cms = cms::find($id);
        //printdata($cms);           
        return  view('admin.cms.edit', ['cms' => $cms]);
   
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
        $validator = Validator::make($request->all(),[
            'cms_title'=>'required',
			'cms_body'=>'required',
            'cms_status'=>'required',           
        ]);
        
        if ($validator->fails())
        {
            return Redirect("cms/$id/edit")
            ->withErrors($validator); 
        }
        //For SLUG
        if($request->input('cms_slug') == null)
        {
            //$slug = $request->input('cms_title');
            $slug = create_slug($request->input('cms_title'));
        }
        else 
        $slug = $request->input('cms_slug');
       // Create Post object
        $cms = cms::find($id);  
        // Handle File Upload
        if($request->hasFile('cms_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cms_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //StrReplace
            $filename_rep = strreplace($filename);
            // Get just ext
            $extension = $request->file('cms_image')->getClientOriginalExtension();           
            // Filename to store
            $fileNameToStore= $filename_rep.'_'.time().'.'.$extension;        
            // Upload Image
            $path = $request->file('cms_image')->storeAs('public/CMS/', $fileNameToStore);
		
	    // make thumbnails
	    $thumbStore = 'thumb.'.$filename.'_'.time().'.'.$extension;
        $cms->cms_image = $fileNameToStore;  
        } 
        // Create Post
      
        $cms->cms_title = $request->input('cms_title');
        $cms->cms_body = $request->input('cms_body');            
        $cms->cms_slug =  $slug;        
        $cms->breadcrumb = $request->input('breadcrumb');
        $cms->cms_status = $request->input('cms_status');
        $cms->cms_meta_title = $request->input('cms_meta_title');
        $cms->cms_meta_data = $request->input('cms_meta_data');
        $cms->cms_meta_key = $request->input('cms_meta_key');
        //printdata($cms);
        $cms->save();
        
        Session::flash('message-success', "Updated successfully!");
        //return redirect()->route("cms/$id/edit");
        return Redirect("cms/$id/edit");
        //return redirect('/cms')->with('success', 'Post Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cms = cms::find($id);
        $cms->delete();
        Session::flash('message-success', "Deleted  successfully!");
        return redirect()->route('cms.index');


    }
}