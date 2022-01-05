<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{
    public function index(){
        // $user = \Auth::user();
        // assign role 
        // $role = Role::where('slug','editor')->first();
        // $user->roles()->attach($role);
        // dd($user->hasRole('author'));
        // 
        // check permission 
        // $permission = Permission::first();
        // $user->permissions()->attach($permission);
        // dd($user->permissions);
        // dd($user->can('add-post'));
        // 
        // 
        // 
        // 
        // dd($user->roles);
        return view('admin.dashboard.dashboard');
    }
}
