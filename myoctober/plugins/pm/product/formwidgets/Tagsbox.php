<?php namespace Pm\Product\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Pm\Product\Models\Categorytag;

use Config;

class Tagsbox extends FormWidgetBase
{
	public function widgetDetails(){
		return [
			'name'=>'form tag',
			'description' => 'Fields add tag'
		];
	}

	public function render(){
		$this->prepareVars();
		dump($this->vars['id']);
		return $this->makePartial('widget');
	}


	public function prepareVars(){
		$this->vars['id']=$this->model->product_category_details_id;
	}

	public function loadAssets(){
		$this->addCss('css/select2.css');
		$this->addJs('js/select2.js');
	}
}