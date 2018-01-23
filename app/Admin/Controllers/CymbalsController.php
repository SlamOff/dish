<?php

namespace App\Admin\Controllers;

use App\Cymbals;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use http\Env\Request;

class CymbalsController extends Controller
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

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create(\Illuminate\Http\Request $request)
    {
        return Admin::content(function (Content $content) use ($request) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form_create($request));
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Cymbals::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Cymbals::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title');
        });
    }

    protected function form_create($request)
    {
        return Admin::form(Cymbals::class, function (Form $form) use ($request) {

            $form->display('id', 'ID');
            $form->number('collection_id')->default($request->collection_id);
            $form->text('title');
        });
    }


}
