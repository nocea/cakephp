<?php 
class MesasController extends AppController{
    public $helpers= array('Html','Form','Time');
    public $component=array('Flash');
    public function index(){
        //Trae todos los registros de la tabla meseros a una lista.
        $this->set('mesas',$this->Mesa->find('all'));
    }
    public function nuevo()
	{
		if($this->request->is('post'))
		{
			$this->Mesa->create();
			if($this->Mesa->save($this->request->data))
			{
				$this->Flash->success('Se ha creado la mesa');
				return $this->redirect(array('action' => 'index'));
			}

			$this->Flash->error('No se pudo crear la mesa');
		}

		$meseros = $this->Mesa->Mesero->find('list', array('fields' => array('id', 'nombre_completo')));//aqui se usa el campo virtual
		$this->set('meseros', $meseros);
	}
    public function editar($id = null)
	{
		if(!$id)
		{
			throw new NotFoundException("Datos Invalidos");
		}

		$mesa = $this->Mesa->findById($id);

		if(!$mesa)
		{
			throw new NotFoundException("La mesa no ha sido encontrada");
		}

		if($this->request->is(array('post', 'put')))
		{
			$this->Mesa->id = $id;
			if($this->Mesa->save($this->request->data))
			{
				$this->Flash->success('Se ha editado la mesa');
				return $this->redirect(array('action' => 'index'));
			}

			$this->Flash->success('No se pudo modificar la mesa');
		}

		if(!$this->request->data)
		{
			$this->request->data = $mesa;
		}

		$meseros = $this->Mesa->Mesero->find('list', array('fields' => array('id', 'nombre_completo')));
		$this->set('meseros', $meseros);
	}
    public function eliminar($id)
	{
		if($this->request->is('get'))
		{
			throw new MethodNotAllowedException('Incorrecto');
		}
		if($this->Mesa->delete($id))
		{
			$this->Flash->success('La mesa ha sido eliminada');
			return $this->redirect(array('action' => 'index'));
		}
	}
}
?>