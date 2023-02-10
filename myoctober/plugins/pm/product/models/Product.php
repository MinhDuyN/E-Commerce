<?php namespace Pm\Product\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'pm_product_';

    /**
     * @var array Validation rules
     */


    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    public $belongsTo=[
        'ProductCategoryDetails'=>[
            'Pm\Product\Models\CategoryDetails',
            'table' => 'pm_product_category_details',
            'order' => 'name'
        ]
    ];


    public $belongsToMany=[
        'tagsbox'=>[
            'Pm\Product\Models\CategoryTag',
            'table'=>'pm_product_product_tag',
            'order' => 'name'
        ]
    ];
    public $rules = [
    ];
}
