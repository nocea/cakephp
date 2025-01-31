<?php
class MeserosController extends AppController{
    //Facilita el uso de Html Formularios,ajax,javascript...
    public $helpers= array('Html','Form');
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
}
?>