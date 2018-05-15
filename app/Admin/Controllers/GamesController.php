<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use App\Models\Games;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class GamesController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->editForm()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Games::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->name('游戏名称');
            $grid->picture_path('游戏封面')->display(function () {
                if ($this->name) {
                    return "<img src='/uploads/$this->picture_path' width='260' height='185'>";
                }
                return '';
            });
            $grid->desc('游戏描述')->display(function () {
                return str_limit(strip_tags($this->desc), 100);
            });
            $grid->status('状态')->display(function () {
                return $this->status == 0 ? '下线' : '在线';
            });
            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Games::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('name', '名称');
            $form->editor('desc', '描述');
            $form->image('picture_path', '图片')->move('/admin/image')->name(function ($file) {
                return md5(uniqid() . time()) . '.' . $file->guessExtension();
            });
            $form->hidden('create_time');
            $form->text('url', '游戏链接');
            $form->switch('status', '状态')->rules('required');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
            $form->saving(function ($form) {
                $form->create_time = time();
            });
        });
    }

    public function update($id)
    {
        return $this->editForm()->update($id);
    }

    //编辑
    protected function editForm()
    {
        return Admin::form(Games::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->text('name', '名称');
            $form->editor('desc', '描述');
            $form->image('picture_path', '图片')->move('/admin/image')->name(function ($file) {
                return md5(uniqid() . time()) . '.' . $file->guessExtension();
            });
            $form->hidden('create_time');
            $form->text('url', '游戏链接');
            $form->switch('status', '状态')->rules('required');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
