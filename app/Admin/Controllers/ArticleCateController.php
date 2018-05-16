<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use App\Models\ArticleCate;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ArticleCateController extends Controller
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
        return Admin::grid(ArticleCate::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->name('名称');

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
        return Admin::form(ArticleCate::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('name', '名称')->rules('required');
            $form->hidden('pid');
            $form->hidden('create_time');
            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
            $form->saving(function ($form) {
                $form->pid = 0;
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
        return Admin::form(ArticleCate::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->text('name', '名称')->rules('required');
            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }

    public function destroy($id)
    {
        //判断是否有在用
        $article = Article::where('cate_id', $id)->first();
        if ($article) {
            return response()->json([
                'status' => false,
                'message' => '有正在使用该类的文章，不能删除!',
            ]);
        }
        if ($this->form()->destroy($id)) {
            return response()->json([
                'status' => true,
                'message' => trans('admin::lang.delete_succeeded'),
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => trans('admin::lang.delete_failed'),
            ]);
        }
    }
}
