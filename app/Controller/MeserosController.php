<?php
class MeserosController extends AppController{
    //Facilita el uso de Html Formularios,ajax,javascript...
    public $helpers= array('Html','Form','Time');
    public $component=array('Flash');
    public function index(){
        //Trae todos los registros de la tabla meseros a una lista.
        $this->set('meseros',$this->Mesero->find('all'));
    }
    /**
     * Ver todos los datos de un mesero
     */
    public function ver($id=null){
        //Si no se encuentra un id
        if(!$id){
            throw new NotFoundException("No se ha mandado un ID,Datos invalidos");
        }
        //busca el id del mesero y guarda el array con sus datos
        $mesero=$this ->Mesero->findById($id);
        //Si no existe el mesero o si no se ha encontrado
        if(!$mesero){
            throw new NotFoundException("El mesero no existe");
        }
        //A la lista mesero le paso el mesero encontrado.
        $this->set('mesero',$mesero);
    }
    /**
     * Crear un nuevo mesero
     */
    public function nuevo(){
        //si es un post
        if($this->request->is('post')){
            $this->Mesero->create();//crea el mesero
            //si se guarda correctamente
            if($this->Mesero->save($this->request->data)){
                //componente para los mensajes
                $this->Flash->success('Se ha creado el mesero');
                //redireccion al index
                return $this->redirect(array('action' => 'index'));
            }
            //si no se guarda correctamente
            $this->Flash->error('No se ha creado el mesero');
        }
    }
    /**
     * Editar Meseros
     */
    public function editar($id=null){
        //Si no se encuentra el id
        if(!$id){
            throw new NotFoundException("No se ha mandado un ID,Datos invalidos");
        }
        $mesero=$this ->Mesero->findById($id);//busca y guarda el mesero por su id
        //si no se encuentra el mesero por su id
        if(!$mesero){
            throw new NotFoundException("El mesero no existe");
        }
        //cuando entra aqui y hay un post/put
        if($this->request->is(array('post','put'))){
            $this->Mesero->id=$id;//pasa el mesero a la vista
            if($this->Mesero->save($this->request->data)){
                $this->Flash->success('Se ha modificado el mesero');//mensaje de exito
                return $this->redirect(array('action' => 'index'));//vuelve al index
            }
            $this->Flash->error('No se pudo modificar el mesero');
        }
        //Con esto facilitamos que en el formulario de edición aparezcan los datos del mesero.
        if(!$this->request->data){
            $this->request->data=$mesero;
        }
    }
    public function eliminar($id=null){
        //Esto es para que no se pueda eliminar por la url->meseros/eliminar/id
        if($this->request->is('get')){
            throw new MethodNotAllowedException('Incorrecto');
        }
        if($this->Mesero->delete($id)){
            $this->Flash->success('Se ha eliminado el mesero');//mensaje de exito
            return $this->redirect(array('action' => 'index'));//vuelve al index
        }
    }
}
?>