<?php
App::uses('AppModel', 'Model');
/**
 * Photo Model
 *
 * @property Product $Product
 */
class Photo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'product_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dir' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mimetype' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'filesize' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public $actsAs = array(
		'Uploader.Attachment' => array(
			'photo' => array(
				'overwrite' => true,
				'transforms' => array(
					'imageSmall' => array(
						'class' => 'crop',
						'append' => '-small',
						'overwrite' => true,
						'self' => false,
						'width' => 100,
						'height' => 100
					),
					'categoriaCapa' => array(
						'class' => 'crop',
						'append' => '-categoria',
						'overwrite' => true,
						'self' => false,
						'width' => 370,
						'height' => 455
					),
					'imageMedium' => array(
						'class' => 'resize',
						'append' => '-medium',
						'width' => 800,
						'height' => 600,
						'aspect' => false
					)
				),
				'metaColumns' => array(
					'ext' => 'extension',
					'type' => 'mimeType',
					'size' => 'fileSize',
				),
				'finalPath' => '/img/uploads/',
				'dbColumn' => 'name',
				
			)
		)
	);
}
