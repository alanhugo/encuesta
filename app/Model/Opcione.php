<?php
App::uses('AppModel','Model');
class Opcione extends AppModel {

    function beforeFilter() {
        parent::beforeFilter();
    }
    
    public $belongsTo = array(
    		'Pregunta' => array(
    				'className' => 'Pregunta',
    				'foreignKey' => 'pregunta_id',
    				'conditions' => '',
    				'fields' => '',
    				'order' => ''
    		)
    );
}
?>
