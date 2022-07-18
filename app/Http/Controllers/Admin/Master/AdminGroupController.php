<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Admin\Base\AdminBaseController;
use App\Models\AdminGroup;
use Illuminate\Http\Request;

class AdminGroupController extends AdminBaseController
{
    protected $routeName = 'admin.groups';
    protected $models = [
        'item' => AdminGroup::class,
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return parent::index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return parent::create();
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
        return parent::edit($id);
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
        $forms = [];
        $groups = AdminGroup::all();

        $forms = [
            $this->form->Text([
                'label' => '名前',
                'name' => 'name',
                'required' => true,
            ]),
    
            $this->form->Text([
                'label' => '表示名',
                'name' => 'display_name',
                'required' => true,
            ]),
    
            $this->form->Text([
                'label' => 'レベル',
                'name' => 'level',
                'required' => false,
            ]),

            $this->form->Textarea([
                'label' => '説明',
                'name' => 'description',
                'required' => false,
            ]),
    
        ];

        return $forms;
    }

}
