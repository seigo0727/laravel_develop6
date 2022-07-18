<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Admin\Base\AdminBaseController;
use App\Http\Form\Base\Form;
use App\Models\Admin;
use App\Models\AdminGroup;
use Illuminate\Http\Request;

class AdminController extends AdminBaseController
{
    protected $routeName = 'admin.users';
    protected $models = [
        'item' => Admin::class,
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
                'label' => 'メールアドレス',
                'name' => 'email',
                'required' => false,
            ]),

            $this->form->Password([
                'label' => 'パスワード',
                'name' => 'password',
                'required' => false,
            ]),
    
            $this->form->Password([
                'label' => 'パスワード（確認用）',
                'name' => 'password_confirmation',
                'required' => false,
            ]),
    
            $this->form->Select([
                'label' => 'グループ',
                'name' => 'admin_group_id',
                'placeholder' => '選択してください',
                'choices' => $groups->pluck('display_name', 'id'),
                'required' => false,
            ]),
        ];

        return $forms;
    }

}
