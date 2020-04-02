<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
    
class UserController extends Controller
{
   
    public function index(Request $request){

        $data = User::orderBy('id','DESC')->paginate(5);
        return view('/panel/usuarios.index',compact('data'));
    }
    
    public function create(){
        
        $roles = Role::pluck('name','name')->all();

        return view('/panel/usuarios.create',compact('roles'));
    } 

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password'  => 'required',
            'confirm-password' => 'required|same:password',      
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('usuarios.index')
                        ->with('success','User created successfully');
    }
    
    public function show($id){

        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    
    
    public function edit($id){

        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('/panel/usuarios.edit',compact('user','roles','userRole'));
    }
    
    public function update(Request $request, $id){
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password'  => 'required',
            'confirm-password' => 'required|same:password',
            'roles' => 'required'   
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('usuarios.index')
                        ->with('success','User updated successfully');
    }
    
    
    public function destroy(Request $request, $id){

        if ($request->ajax()) {
            $user = User::find($id);

            if (!is_null($user)) {
                
                $user->delete();
                
                return response()->json([
                    'response' => true,
                    'id'       => $user->id,
                    'message'  => 'Usuario eliminado correctamente',
                ]);
            }

            return response()->json([
                'response' => false,
                'message'  => 'Ha ocurrido un error, intente nuevamente',
            ]);
        }

        // User::find($id)->delete();
        // return redirect()->route('usuarios.index')
        //                 ->with('success','User deleted successfully');
    }
}
    
