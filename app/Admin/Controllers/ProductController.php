<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('price', __('Price'));
        $grid->column('size', __('Size'));
        $grid->column('description', __('Description'));
        $grid->column('image', __('Image'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('category_id', __('Category id'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('price', __('Price'));
        $show->field('size', __('Size'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('category_id', __('Category id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->text('title', __('Title'));
        $form->currency('price', __('Price'))->symbol('￥');
        $form->text('size', __('Size'));
        $form->textarea('description', __('Description'));
        $form->multipleImage('image', __('Image'))->removable();
        $form
            ->select('status', __('Status'))
            ->options([1 => 'sell', 2 => 'sell out'])
        ;
        $form
            ->select('category_id', __('Category'))
            ->options('/admin/api/categories')
        ;

        return $form;
    }
}
