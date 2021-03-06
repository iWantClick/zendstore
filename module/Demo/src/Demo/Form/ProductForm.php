<?php

namespace Catalog\Form;

use Zend\Form\Form;

class ProductForm extends Form
{
	public function __construct()
	{
		parent::__construct();
		
		$this->setName('product_form');
		$this->setAttribute('method', 'post');
		
		// product_id
		$this->add(array(
			'name'		 => 'product_id',
			'attributes' => array(
				'type'	=> 'hidden',	
			),		
		));
			
		// product_name
		$this->add(array(
			'name'		 => 'product_name',
			'attributes' => array(
				'type'	=> 'input',
				'label'	=> 'Product',	
			),		
		));		
			
		// price
		$this->add(array(
			'name'		 => 'price',
			'attributes' => array(
				'type'	=> 'input',
				'label'	=> 'Price',	
			),		
		));

		// market_price
		$this->add(array(
			'name'		 => 'market_price',
			'attributes' => array(
				'type'	=> 'input',
				'label'	=> 'Market_price',	
			),		
		));

		// brand
		$this->add(array(
			'name'		 => 'brand',
			'attributes' => array(
				'type'	=> 'input',
				'label'	=> 'Brand',	
			),		
		));

		// quantity
		$this->add(array(
			'name'		 => 'quantity',
			'attributes' => array(
				'type'	=> 'input',
				'label'	=> 'Quantity',
			),		
		));

		// tags
		$this->add(array(
			'name'		 => 'tags',
			'attributes' => array(
				'type'	=> 'input',
				'label'	=> 'Tags',	
			),		
		));

		// on_shelf
		$this->add(array(
			'name'		 => 'on_shelf',
			'attributes' => array(
				'type'	=> 'radio',
				'label'	=> 'On/Off shelf',
				'options' => array(
					'On' => '1', 'Off' => 0,
				),	
			),		
		));

		// category_id
		$this->add(array(
			'name'		 => 'category_id',
			'attributes' => array(
				'type'	=> 'input',
				'label' => 'Category_id ???',	
			),		
		));
		
		// link_id
		$this->add(array(
			'name'		 => 'link_id',
			'attributes' => array(
				'type'	=> 'input',
				'label'	=> 'Link_id ???',
			),	
		));
		
		// submit
		$this->add(array(
			'name'		 => 'submit',
			'attributes' => array(
				'type'	=> 'submit',
				'value'	=> 'Submit',
			),	
		));
			
		// reset
		$this->add(array(
			'name'		 => 'reset',
			'attributes' => array(
				'type'	=> 'reset',
				'value'	=> 'Reset',
			),	
		));
	}
}