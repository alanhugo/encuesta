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
debug($aa);
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
	 * Ajax Lista grupos
	 * @author Alan Hugo
	 * @version 07 Julio 2015
	 */
	public function ajax_listar() {
		$this->layout = 'ajax';
		$arr_groupcmds = $this->Groupcmd->findObjects('all',array(
				'conditions'=>array('Groupcmd.Status !=' => 0),
				'order'=> array('Groupcmd.created desc')));
	
		$this->set(compact('arr_groupcmds'));
	}

	/**
	 * Agrega y edita grupos
	 * @author Alan Hugo
	 * @version 05 Julio 2015
	 */
	public function add_edit_groupcmd($groupcmd_id=null){
		$this->layout = 'ajax';
	
		if($this->request->is('post')  || $this->request->is('put')){
			if(isset($groupcmd_id) && intval($groupcmd_id) > 0){

				//update
				$this->request->data['Groupcmd']['IDGroup'] = $groupcmd_id;
				if ($this->Groupcmd->save($this->request->data)) {
					echo json_encode(array('success'=>true,'msg'=>__('Guardado con &eacute;xito.'),'groupcmd_id'=>$groupcmd_id));
					exit();
				}else{
					echo json_encode(array('success'=>false,'msg'=>__('Su informaci&oacute;n es incorrecta'),'validation'=>$this->Groupcmd->validationErrors));
					exit();
				}
			}else{
	
				//insert
				$this->request->data['Groupcmd']['IDUser'] = $this->obj_logged_user->getID();		
				if ($this->Groupcmd->save($this->request->data)) {
					$groupcmd_id = $this->Groupcmd->IDGroup;
					echo json_encode(array('success'=>true,'msg'=>__('El grupo fue agregado con &eacute;xito.'),'groupcmd_id'=>$groupcmd_id));
					exit();
				}else{
					echo json_encode(array('success'=>false,'msg'=>__('Su informaci&oacute;n es incorrecta'),'validation'=>$this->Groupcmd->validationErrors));
					exit();
				}
			}
		}else{
			if(isset($groupcmd_id)){
				$obj_groupcmd = $this->Groupcmd->findBy('IDGroup', $groupcmd_id);
				$this->request->data = $obj_groupcmd->data;
				$this->set(compact('groupcmd_id','obj_groupcmd'));
			}
		}
	}

	/**
	 * Cambia de estado para un eliminado logico
	 * @author Alan Hugo
	 * @version 07 Julio 2015
	 */
	public function delete_groupcmd(){
		$this->layout = 'ajax';
	
		if($this->request->is('post')){
			$groupcmd_id = $this->request->data['groupcmd_id'];
	
			$obj_groupcmd = $this->Groupcmd->findBy('IDGroup', $groupcmd_id);
			if($obj_groupcmd->saveField('Status', 0)){
				echo json_encode(array('success'=>true,'msg'=>__('Eliminado con &eacute;xito.')));
				exit();
			}else{
				echo json_encode(array('success'=>false,'msg'=>__('Error inesperado.')));
				exit();
			}
		}
	
	}
}
?>