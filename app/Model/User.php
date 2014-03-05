<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'username' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
	
	public function beforeSave($options = Array()) {
        if (isset($this->data['User']['password'])) {
            $password = AuthComponent::password($this->data['User']['password']);
            $this->data['User']['password'] = $password;
        }
        return parent::beforeSave();
	}
	
	
	public $hasMany = array(
        'Image' => array(
            'className' => 'Attachment',
            'foreignKey' => 'foreign_key',
            'conditions' => array(
                'Image.model' => 'User',
            ),
        ),
    );
	
	public function createWithAttachments($data) {
		
        // Sanitize your images before adding them
        $images = array();
        if (!empty($data['Image'][0])) {
        	
        	
			
            foreach ($data['Image'] as $i => $image) {
            	
                if (is_array($data['Image'][$i])) {
                    // Force setting the `model` field to this model
                    $image['model'] = 'User';

                    // Unset the foreign_key if the user tries to specify it
                    if (isset($image['foreign_key'])) {
                        unset($image['foreign_key']);
                    }

                    $images[] = $image;
                }
            }
        }

        $data['Image'] = $images;
		
		var_dump($data['Image']);
		//exit;
        // Try to save the data using Model::saveAll()
        $this->create();
        if ($this->saveAll($data['Image'])) {
            return true;
        } else {
        	var_dump("nao consegui criar as imagens..");
        }

        // Throw an exception for the controller
        throw new Exception(__("This post could not be saved. Please try again"));
    }
}
