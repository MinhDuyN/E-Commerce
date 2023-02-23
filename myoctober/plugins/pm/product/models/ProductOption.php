<?php namespace Pm\Product\Models;

use Model;

/**
 * Model
 */
class ProductOption extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pm_product_option';


    /* Relation */
    public $belongsToMany=[
        'ColorName'=>[
            'Pm\Product\Models\Color',
            'table' => 'pm_product_option_color',
            'order' => 'name'
        ],
        'SizeName'=>[
            'Pm\Product\Models\Size',
            'table'=>'pm_product_option_size',
            'order' => 'name'
        ]
    ];

    public $belongsTo=[
        'ProductName'=>[
            'Pm\Product\Models\Product',
            'table' => 'pm_product_',
            'order' => 'name'
        ]
    ];


    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
