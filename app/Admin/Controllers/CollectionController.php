<?php

namespace App\Admin\Controllers;

use App\Collection;

use App\Cymbals;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;


use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\Chart\Bar;
use Encore\Admin\Widgets\Chart\Doughnut;
use Encore\Admin\Widgets\Chart\Line;
use Encore\Admin\Widgets\Chart\Pie;
use Encore\Admin\Widgets\Chart\PolarArea;
use Encore\Admin\Widgets\Chart\Radar;
use Encore\Admin\Widgets\Collapse;
use Encore\Admin\Widgets\InfoBox;
use Encore\Admin\Widgets\Tab;
use Encore\Admin\Widgets\Table;

class CollectionController extends Controller
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

            $content->header('Коллекции');

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
        /*return Admin::content(function (Content $content) {
            $content->header('Наборы');
            $content->body(Cymbals::tree());
        });*/
        /*return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });*/
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Dashboard');
            $content->description('Description...');

            $content->row(function (Row $row) use ($id){

                $row->column(12, function (Column $column) use ($id){

                    $column->append($this->form()->edit($id));
                });

            });

            $content->row(function (Row $row) {

                $row->column(12, function (Column $column) {

                    $column->append(Cymbals::tree());
                });

            });
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
        return Admin::grid(Collection::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->name('Название коллекции');
            $grid->position('Позиция');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Collection::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('name', 'Название коллекции');
            $form->number('position', 'Позиция');
        });
    }
}
