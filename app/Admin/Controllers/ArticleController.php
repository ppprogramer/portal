<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ArticleController extends Controller
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
        return Admin::grid(Article::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('文章标题');
            $grid->content()->display(function () {
                return str_limit(strip_tags($this->content), 100);
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
        return Admin::form(Article::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title', '标题');
            $form->editor('content', '内容');
            $form->hidden('author');
            $form->hidden('cate_id');
            $form->hidden('create_time');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
            $form->saving(function ($form) {
                $form->author = 'cw';
                $form->cate_id = 0;
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
        return Admin::form(Article::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->text('title', '标题');
            $form->editor('content', '内容');
            $form->hidden('author');
            $form->hidden('cate_id');
            $form->hidden('create_time');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
