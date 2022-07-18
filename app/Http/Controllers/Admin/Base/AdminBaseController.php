<?php

namespace App\Http\Controllers\Admin\Base;

use App\Http\Form\Base\Form;
use Illuminate\Http\Request;

class AdminBaseController extends AbstractAdminController
{
    protected $routes = [];
    protected $routeName;
    protected $models = [];
    protected $form;
    protected $actions = ['index', 'create', 'store', 'edit', 'update', 'delete'];

    public function __construct()
    {
        parent::__construct();
        $this->form = new Form();
    }

    public function initRoute()
    {
        foreach($this->actions as $action) {
            $this->routes[$action] = $this->routeName . '.' . $action;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemQuery = $this->models['item']::query();
        $itemQuery->orderBy('id', 'asc');
        $items = $itemQuery->paginate(10);

        return view('admin.base.list', [
            'items' => $items,
            'routes' => $this->routes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forms = $this->createForms();
        return view('admin.base.edit',[
            'forms' => $forms,
            'routes' => $this->routes,
            'formAction' => route($this->routes['store']),
            'formMethod' => 'POST',
            'formData' => [],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $item = $this->models['item']::where('id', '=', $id)->first();
        $forms = $this->createForms();

        if(!$item && !$id){
            abort(404);
        }
        $formData = $item->toArray();

        return view('admin.base.edit',[
            'forms' => $forms,
            'routes' => $this->routes,
            'formAction' => route($this->routes['update'], ['id' => $id]),
            'formMethod' => 'PUT',
            'formData' => $formData,
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createForms()
    {
        $forms = [
            $this->form->Text([
                'label' => '名前',
                'name' => 'name',
            ]),
    
        ];

        return $forms;
    }
}
