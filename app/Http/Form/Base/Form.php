<?php
namespace App\Http\Form\Base;

class Form 
{

    public function __construct()
    {
        $this->register();
    }

    /*
     * @return array
     */
    public function Text($items=[])
    {
        $template = 'admin.form.text';
        $array = [
            'template' => $template,
            'items' => $items,
        ];

        return $array;
    }

    public function Textarea($items=[])
    {
        $template = 'admin.form.textarea';
        $array = [
            'template' => $template,
            'items' => $items,
        ];

        return $array;
    }

    public function Password($items=[])
    {
        $template = 'admin.form.password';
        $array = [
            'template' => $template,
            'items' => $items,
        ];

        return $array;
    }

    public function Select($items=[])
    {
        $template = 'admin.form.select';
        $array = [
            'template' => $template,
            'items' => $items,
        ];

        return $array;
    }

    public function register()
    {
        // 
    }
}