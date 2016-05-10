<?php
class PreguntasController extends AppController{
    
    public $name = 'Preguntas';

    public function beforeFilter(){
    	//$this->Auth->allow(array('portal','index'));
		$this->layout = "default";
		parent::beforeFilter();
	}

	/**
	 * Encuesta
	 * @author Alan Hugo
	 * @version 03 Mayo 2015
	 */
	public function index() {
		$aa = $this->Pregunta->find('all',array(
					'fields'=>array('Pregunta.id', 'Pregunta.nombre')));
//debug($aa);
		$this->loadModel('Opcione');
		$arr_obj_opciones = $this->Opcione->find('all');

		$this->set(compact('arr_obj_opciones'));
	}

	/**
	 * Encuesta
	 * @author Alan Hugo
	 * @version 03 Mayo 2015
	 */
	public function popup() {
		$this->layout = "popup";
		$aa = $this->Pregunta->find('all',array(
					'fields'=>array('Pregunta.id', 'Pregunta.nombre')));

		$this->loadModel('Opcione');
		$arr_obj_opciones = $this->Opcione->find('all');

		$this->set(compact('arr_obj_opciones'));
	}

	/**
	 * Portal
	 * @author Alan Hugo
	 * @version 03 Mayo 2015
	 */
	public function portal() {
		
	}

	/**
	 * Portal
	 * @author Alan Hugo
	 * @version 03 Mayo 2015
	 */
	public function resultados() {
		$this->loadModel('Respuesta');
		//$arr_obj_respuestas = $this->Respuesta->find('all');
		
		$arr_obj_respuestas = $this->Respuesta->find('all',array(
					'fields'=>array('Opcione.nombre', 'count(*) as total'),
					'joins' => array(
							array(
									'table' => 'opciones',
									'alias' => 'Opcione',
									'type' => 'INNER',
									'conditions' => array(
											'Opcione.id = Respuesta.opcion_id'
									)
							)
					),
					'group' => 'Respuesta.opcion_id'
					));
		
		$this->set(compact('arr_obj_respuestas'));
	}

	/**
	 * Portal
	 * @author Alan Hugo
	 * @version 03 Mayo 2015
	 */
	public function resultados_popup() {
		$this->layout = "popup";
		$this->loadModel('Respuesta');
		//$arr_obj_respuestas = $this->Respuesta->find('all');
		
		$arr_obj_respuestas = $this->Respuesta->find('all',array(
					'fields'=>array('Opcione.nombre', 'count(*) as total'),
					'joins' => array(
							array(
									'table' => 'opciones',
									'alias' => 'Opcione',
									'type' => 'INNER',
									'conditions' => array(
											'Opcione.id = Respuesta.opcion_id'
									)
							)
					),
					'group' => 'Respuesta.opcion_id'
					));
		
		$this->set(compact('arr_obj_respuestas'));
	}

	/**
	 * guardar
	 * @author Alan Hugo
	 * @version 03 Mayo 2015
	 */
	public function save() {
		if($this->request->is('post')  || $this->request->is('put')){

			$this->loadModel('Respuesta');
			$this->Respuesta->create();
			$data = array('pregunta_id' => 1, 'opcion_id' => $this->request->data['respuesta'][0]);

			if ($this->Respuesta->save($data)) {
				return $this->redirect(array('controller' => 'preguntas', 'action' => 'resultados'));
			}else{
				return $this->redirect(array('controller' => 'preguntas', 'action' => 'index'));
			}
		}
	}

	/**
	 * guardar
	 * @author Alan Hugo
	 * @version 03 Mayo 2015
	 */
	public function save_popup() {
		if($this->request->is('post')  || $this->request->is('put')){

			$this->loadModel('Respuesta');
			$this->Respuesta->create();
			$data = array('pregunta_id' => 1, 'opcion_id' => $this->request->data['respuesta'][0]);

			if ($this->Respuesta->save($data)) {
				return $this->redirect(array('controller' => 'preguntas', 'action' => 'resultados_popup'));
			}else{
				return $this->redirect(array('controller' => 'preguntas', 'action' => 'index'));
			}
		}
	}


}
?>