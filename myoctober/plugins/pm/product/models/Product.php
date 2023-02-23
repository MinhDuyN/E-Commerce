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


     // public function filterFields($fields, $context = null)
     // {
     //    if($fields->price->value){
     //        $fields->price->value=money_format($fields->price->value, 2);
     //    }
        
     // }
    public function getMakePriceAttribute()
    {
        return number_format($this->price/23575,2,'.',',');
    }
    



    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    
    public $belongsTo=[
        'ProductCategoryDetails'=>[
            'Pm\Product\Models\CategoryDetails',
            'table' => 'pm_product_category_details',
            'order' => 'name'
        ],
        'ProductUserName'=>[
            'Rainlab\User\Models\User',
            'table' => 'users',
            'order' => 'name'
        ]
    ];

    // validate
    // public function beforeValidate()
    // {   
    //     if ($this->name == 'value') {
    //         $this->field = 'DEFAULT_VALUE';
    //         throw new \October\Rain\Exception\ValidationException(['field' => 'Invalid Value']);
    //     }   
    // }

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
