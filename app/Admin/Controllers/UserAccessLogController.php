<?php

namespace App\Admin\Controllers;

use App\Models\UserAccessLog;
use App\User;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class UserAccessLogController extends Controller
{
    use ModelForm;

    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('访问日志');
            $content->description('访问日志');

            $content->body($this->grid());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(UserAccessLog::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->user_id('用户名')->display(function () {
                return $this->user_id == 0 ? '游客' : User::find($this->user_id)->email;
            });
            $grid->ip('IP');
            $grid->add_time();
            $grid->url('URL');
        });
    }
}
