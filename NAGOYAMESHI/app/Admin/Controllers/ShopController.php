<?php

namespace App\Admin\Controllers;

use App\Models\Shop;
use App\Models\Category;
use App\Models\MajorCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ShopController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Shop';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Shop());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'));
        $grid->column('price_under', __('Price under'))->sortable();
        $grid->column('price_over', __('Price over'));
        $grid->column('major_category.name', __('Majorcategory Name'));
        $grid->column('image', __('Image'))->image();
        $grid->column('recommend_flag', __('Recommend Flag'));
        $grid->column('open_our', __('Open our'));
        $grid->column('close_our', __('Close our'));
        $grid->column('postal_code', __('Postal code'));
        $grid->column('address', __('Address'));
        $grid->column('phone', __('Phone'));
        $grid->column('holiday', __('Holiday'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();

        $grid->filter(function($filter) {
            $filter->like('name', '店舗名');
            $filter->like('description', '店舗説明');
            $filter->between('price under', '金額');
            $filter->in('major_category_id', '親カテゴリー')->multipleSelect(MajorCategory::all()->pluck('name', 'id'));
            $filter->equal('recommend_flag', 'おすすめフラグ')->select(['0' => 'false', '1' => 'true']);
        });
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Shop::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('price_under', __('Price under'));
        $show->field('price_over', __('Price over'));
        $show->field('major_category.name', __('Majorcategory Name'));
        $show->field('image', __('Image'))->image();
        $show->field('recommend_flag', __('Recommend Flag'));
        $show->field('open_our', __('Open our'));
        $show->field('close_our', __('Close our'));
        $show->field('postal_code', __('Postal code'));
        $show->field('address', __('Address'));
        $show->field('phone', __('Phone'));
        $show->field('holiday', __('Holiday'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Shop());

        $form->text('name', __('Name'));
        $form->textarea('description', __('Description'));
        $form->number('price_under', __('Price under'));
        $form->number('price_over', __('Price over'));
        $form->select('major_category_name', __('Majorcategory Name'))->options(Category::all()->pluck('name', 'id'));
        $form->number('open_our', __('Open our'));
        $form->number('close_our', __('Close our'));
        $form->text('postal_code', __('Postal code'))->default(' ');
        $form->textarea('address', __('Address'));
        $form->mobile('phone', __('Phone'))->default(' ');
        $form->text('holiday', __('Holiday'));
        $form->image('image', __('Image'));
        $form->switch('recommend_flag', __('Recommend Flag'));

        return $form;
    }
}
