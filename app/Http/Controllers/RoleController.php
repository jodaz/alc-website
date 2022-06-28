<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Requests\Users\UsersFormRequest;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private $options = [
        'route' => 'roles',
        'route-views' => 'dashboard.modules.roles.'
    ];
    /**
     *
     * Index
     *
     */
    public function index()
    {
        return view($this->options['route-views']."index")
            ->with('roles', Role::get())
            ->with('options', $this->options);
    }
    /**
     *
     * Create
     *
     */
    public function create()
    {
        return view($this->options['route-views']."register")
            ->with('options', $this->options)
            ->with('permissions', Permission::get())
            ->with('typeForm', 'create');
    }
    /**
     *
     * Store
     *
     */
    public function store(Request $request)
    {
        $role = New Role();
        $role->name = $request->input('name');
        if ($role->save()) {
            $role->permissions()->sync($request->get('permission'));
            return redirect($this->options['route'])->withSuccess('Registro agregado!!');
        }
    }
    /**
     *
     * Edit
     *
     */
    public function edit(Role $role)
    {
        return view($this->options['route-views']."register")
            ->with('options', $this->options)
            ->with('typeForm', 'update')
            ->with('permissions', Permission::get())
            ->with('row', $role);
    }

    public function update(Request $request, Role $role)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                Rule::unique('roles')->ignore($role->id),
            ]
        ], [
            'name.required'   =>  'Ingrese un nombre',
            'name.unique'      =>  'El nombre ya se encuentra registrado'
        ]);

        if ($validator->fails()) {
            return redirect('/'.$this->options['route'].'/'.$role->id.'/edit')
                ->withErrors($validator->errors());
        }

        $role->update($request->all());

        return redirect('/'.$this->options['route'].'/'.$role->id.'/edit')
            ->withSuccess('¡El rol "'.$role->name.'" ha sido actualizado!');
    }
}
