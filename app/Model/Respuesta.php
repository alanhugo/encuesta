<?php
App::uses('AppModel','Model');
class Respuesta extends AppModel {

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
            ),
            'Opcione' => array(
                    'className' => 'Opcione',
                    'foreignKey' => 'opcion_id',
                    'conditions' => '',
                    'fields' => '',
                    'order' => ''
            )
    );
}
?>
