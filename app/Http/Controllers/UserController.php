<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

    
class UserController extends Controller
{
    //  function __construct()
    //  {
    //       $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','store']]);
    //       $this->middleware('permission:user-create', ['only' => ['create','store']]);
    //       $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
    //       $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    //  }
    public function index(Request $request)
    {
       
        $data = User::with('perfil')->orderBy('id','DESC')->paginate(10);
        $roles = Role::pluck('name','name')->all();

        return view('paginas.users.index',compact('data','roles'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return back()->with('success','Usuário criado com sucesso!');
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return back()->with('edit','Usuário Atualizado com sucesso!');
    }

}