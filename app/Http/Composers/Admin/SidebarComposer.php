<?php
namespace App\Http\Composers\Admin;

use Illuminate\View\View;

class sidebarComposer
{
  public function compose(View $view)
  {
    /* 設定ファイルやDBの値を取得して、渡したいデータを生成する処理 */
    $view_header = '渡したいデータ';
    $view->with('view_header', $view_header);
  }
}