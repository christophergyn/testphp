<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Paginator\Adapter\ArrayAdapter;
use Zend\Paginator\Paginator;
use Zend\View\Model\ViewModel;
use Zend\Mvc\Plugin\FlashMessenger\FlashMessenger;
use Application\Form\Pesquisa\PesquisaForm;

abstract class AbstractController extends AbstractActionController{
    private 	$em;
    protected 	$entity;
    protected 	$controller;
    protected 	$route;
    protected 	$service;
    protected 	$form;
    protected 	$template;
    protected 	$action;
    protected 	$namePrimaryKey;
    protected       $default = array();

    abstract function __construct();

    public function setRelationObjectToObject($nameInput, $nameForeignKey, $nameServiceClassRelationObject){
        $request = $this->getRequest();
        if ($request->isPost()){
            $this->form->setData($request->getPost());
            if ($this->form->isValid()){
                $data = $request->getPost()->toArray();
                if ($data[$nameInput]){
                    $service = $this->getEvent()->getApplication()->getServiceManager()->get($nameServiceClassRelationObject);
                    $relationObject =  $service->findOneBy(array($nameForeignKey => $data[$nameInput]));
                    $this->getRequest()->getPost()->set($nameForeignKey, $relationObject);
                }
            }
        }
    }
    
    /**
     * 
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction(){
        if (is_string($this->form)){
            $this->form = new $this->form;
        }
        $list = array();
        $paginator = array();
        $page = 1;
        if ($this->entity <> null){
            //$list = $this->getEm()->getRepository($this->entity)->$metodo();
            $list = $this->getEm()->getRepository($this->entity)->findAll();
            $page = $this->params()->fromRoute('page', 1);
            $paginator = new Paginator(new ArrayAdapter($list));
            $paginator->setCurrentPageNumber($page)->setDefaultItemCountPerPage(10);
            if ($this->flashMessenger()->hasSuccessMessages()){
                return new ViewModel(array(
                    'sucess'=> $this->flashMessenger()->getSuccessMessages(),
                    'data' => $paginator, 'page' => $page, 'form' => $this->form));
            } else if ($this->flashMessenger()->hasErrorMessages()){
                return new ViewModel(array(
                    'error'=> $this->flashMessenger()->getErrorMessages(),
                    'data' => $paginator, 'page' => $page, 'form' => $this->form));
            } else if ($this->flashMessenger()->hasInfoMessages()){
                return new ViewModel(array(
                    'warning'=> $this->flashMessenger()->getInfoMessages(),
                    'data' => $paginator, 'page' => $page, 'form' => $this->form));
            }
        }
        if ($this->default != null){
            $this->form->bind(new \ArrayObject($this->getDefault()));
            $this->setDefault(array());
        }
        if (($this->action !== null) && (strlen($this->action) > 0)){
            $this->form->setAction($this->action);
        }
        return new ViewModel(array('data' => $paginator, 'page' => $page, 'action' => $this->action, 'form'=> $this->form));
    }
    /**
     * 
     * @return \Zend\View\Model\ViewModel
     */
    public function iniciarAction(){
        if (is_string($this->form)){
            $this->form = new $this->form;
        }
        if ($this->default != null){
            $this->form->bind(new \ArrayObject($this->getDefault()));
            $this->setDefault(array());
        }
        if (($this->action !== null) && (strlen($this->action) > 0)){
            $this->form->setAction($this->action);
        }
        return new ViewModel(array('action' => $this->action, 'form'=> $this->form));
    }

    /**
     * Método Inserir dados
     * 
     * @return \Zend\Http\Response|\Zend\View\Model\ViewModel
     */
    public function inserirAction(){
        /**
         * @var $form \Zend\Form\Form
         */
        if (is_string($this->form)){
            $form = new $this->form;
            $this->form = $form;
        } else {
            $form = $this->form;
        }
        
        $request = $this->getRequest();
        $entity = null;
        if ($request->isPost()){
            $form->setData($request->getPost());
            if ($form->isValid()){
                $service = $this->getEvent()->getApplication()->getServiceManager()->get($this->service);
                $service->namePrimaryKey = $this->namePrimaryKey;
                try {
                    $entity = $service->save($request->getPost()->toArray());
                    if (!is_null($entity)){
                        $this->flashMessenger()->addSuccessMessage('Cadastrado com sucesso!');
                    } else {
                        $this->flashMessenger()->addErrorMessage('Não foi possível cadastrar! Tente mais tarde!');
                    }
                } catch (\Exception $ex) {
                    $this->flashMessenger()->addErrorMessage($ex->getMessage());
                }
            } else {
                $this->flashMessenger()->addErrorMessage('Erro de validação do formulário!');
                foreach ($form->getMessages() as $message){
                    $this->flashMessenger()->addErrorMessage($message);
                }
            }
        }
        if ($this->flashMessenger()->hasSuccessMessages()){
            return new ViewModel(array(
                    'form' => $form, 
                    'dataReturn' => $entity,
                    'controller' => $this->controller, 
                    'action' => $this->action,
                    'success'=> $this->flashMessenger()->getSuccessMessages()
            ));
        } else if ($this->flashMessenger()->hasErrorMessages()){
            return new ViewModel(array('form' => $form, 
                    'controller' => $this->controller, 
                    'action' => $this->action,
                    'error'=> $this->flashMessenger()->getErrorMessages()
            ));
        }
        if ((!$this->flashMessenger()->hasSuccessMessages()) || (!$this->flashMessenger()->hasSuccessMessages())) {  
            $this->flashMessenger()->clearMessages();
        }
        return $this->redirect()->toRoute($this->route, array('controller' => $this->controller, 'action' => $this->action, 'form' => $this->form));
    }

    public function editarAction(){
        if (is_string($this->form)){
                $form = new $this->form;
                $this->form = $form;
            } else {
                $form = $this->form;
            }
            //var_dump($this->route);die;
            $request = $this->getRequest();

            $param = $this->params()->fromRoute('id',0);

            $entidade = $this->getEm()->getRepository($this->entity)->find($param);
            $array = array();
            if ($entidade){
                foreach ($entidade->toArray() as $key => $value){
                    if ($value instanceof \DateTime){
                        //$array[$key] = $value->format('d/m/y');
                        $array[$key] = $value->format('Y-m-d');
                    } else {
                        $array[$key] = $value;
                    }
                }
                array_push($array, 'entity', $entidade);

                $form->setData($array);
                if ($this->getRequest()->isPost()){
                    $form->setData($request->getPost());
                    if ($form->isValid()){
                        $service = $this->getEvent()->getApplication()->getServiceManager()->get($this->service);
                        $data = $request->getPost()->toArray();
                        $data['id'] = (int) $param;
                        //-- Alterar
                        if ($service->save($data) != null){
                            $this->flashMessenger()->addSuccessMessage('Atualizado com sucesso!');
                        } else {
                            $this->flashMessenger()->addErrorMessage('Não foi possível apagar o registro! Tente mais tarde!');
                        }

                        return $this->redirect()->toRoute($this->route,array('controller' => $this->controller, 'action' => $this->action, 'id'=>$param, 'data' => $array));
                    }

//                    } else {
//                        $this->flashMessenger()->addErrorMessage('Erro de validação do formulário!');
//                        foreach ($form->getMessages() as $message){
//                            $this->flashMessenger()->addErrorMessage($message);
//                        }
                }    
            } else {
                $this->flashMessenger()->addInfoMessage('Registro não foi econtrado!');
                return $this->redirect()->toRoute($this->route, array('controller' => $this->controller));
            }
            if ($this->flashMessenger()->hasSuccessMessages()){
                    return new ViewModel(array(
                            'form'=>$form, 
                            'sucess'=> $this->flashMessenger()->getSuccessMessages(),
                            'id' => $param));
            } else if ($this->flashMessenger()->hasErrorMessages()){
                    return new ViewModel(array(
                                    'form'=>$form,
                                    'error'=> $this->flashMessenger()->getErrorMessages(),
                                    'id' => $param));
            } else if ($this->flashMessenger()->hasInfoMessages()){
                    return new ViewModel(array(
                                    'form'=>$form,
                                    'warning'=> $this->flashMessenger()->getInfoMessages(),
                                    'id' => $param));
            }

            $this->flashMessenger()->clearMessages();
            //return $this->redirect()->toRoute($this->route, array('controller' => $this->controller, 'action' => $this->action, 'form' => $this->form));
            return new ViewModel(array('form' => $form, 'id'=> $param, 'data' => $array, 'action' => $this->action));
    }

    public function excluirAction(){
        if (is_string($this->form)){
            $form = new $this->form;
            $this->form = $form;
        } else {
            $form = $this->form;
        }
        $service = $this->getEvent()->getApplication()->getServiceManager()->get($this->service);

        $id = $this->params()->fromRoute('id', 0);
        
        $class = $this->getEm()->getClassMetadata($this->entity);

        if ($service->remove(array($class->getFieldName($this->namePrimaryKey) => $id)) != null){
                $this->flashMessenger()->addSuccessMessage('Registro apagado com sucesso!');
        } else {
                $this->flashMessenger()->addErrorMessage('Não foi possível apagar o registro! Tente mais tarde!');
        }

        if ($this->flashMessenger()->hasSuccessMessages()){
                return new ViewModel(array(
                                'form'=>$form,
                                'sucess'=> $this->flashMessenger()->getSuccessMessages(),
                                'id' => $id));
        } else if ($this->flashMessenger()->hasErrorMessages()){
                return new ViewModel(array(
                                'form'=>$form,
                                'error'=> $this->flashMessenger()->getErrorMessages(),
                                'id' => $id));
        } else if ($this->flashMessenger()->hasInfoMessages()){
                return new ViewModel(array(
                                'form'=>$form,
                                'warning'=> $this->flashMessenger()->getInfoMessages(),
                                'id' => $id));
        }
        $this->flashMessenger()->clearMessages();
        return $this->redirect()->toRoute($this->route, array('controller' => $this->controller, 'action' => 'listar', 'form' => $this->form));
    }

    /**
     * 
     * @return \Zend\View\Model\ViewModel
     */
    public function pesquisarAction(){
        // inicio abstract
        if (is_string($this->form)){
            $this->form = new PesquisaForm();
        }
        
        $list = array();
        $paginator = array();
        $page = 1;
        
        $request = $this->getRequest();
        if ($request->isPost()){
            $form = $this->form;
            $form->setData($request->getPost());
            if ($form->isValid()){
                $data = $request->getPost()->toArray();
                if (($this->entity != null) && ($data['descricaoTexto'])) {
                    $service = $this->getEvent()->getApplication()->getServiceManager()->get($this->service);
                    $list = $service->findDescricaoLike($data['nomeCampo'], $data['descricaoTexto']);
                    $page = $this->params()->fromRoute('page', 1);
                    $paginator = new Paginator(new ArrayAdapter($list));
                    $paginator->setCurrentPageNumber($page)->setDefaultItemCountPerPage(10);
                    if ($this->flashMessenger()->hasSuccessMessages()){
                        return new ViewModel(array(
                            'sucess'=> $this->flashMessenger()->getSuccessMessages(),
                            'data' => $paginator, 'page' => $page, 'form' => $this->form));
                    } else if ($this->flashMessenger()->hasErrorMessages()){
                        return new ViewModel(array(
                            'error'=> $this->flashMessenger()->getErrorMessages(),
                            'data' => $paginator, 'page' => $page, 'form' => $this->form));
                    } else if ($this->flashMessenger()->hasInfoMessages()){
                        return new ViewModel(array(
                            'warning'=> $this->flashMessenger()->getInfoMessages(),
                            'data' => $paginator, 'page' => $page, 'form' => $this->form));
                    }
                }
            }
        }
        if ($this->default != null){
            $this->form->bind(new \ArrayObject($this->getDefault()));
            $this->setDefault(array());
        }
        //-- fim abstract
        return new ViewModel(array('data' => $paginator, 'page' => $page, 'form'=> $this->form));
    }
    
    /**
     * 
     * @return Doctrine\ORM\EntityManager
     */
    public function getEm(){
        if ($this->em == null){
            $this->em = $this->getEvent()->getApplication()->getServiceManager()->get(\Doctrine\ORM\EntityManager::class);
        }
        return $this->em;
    }

    /**
     * 
     * @return array
     */
    public function getDefault(){
        return $this->default;
    }

    /**
     * 
     * @param array $default
     * @return type
     */
    public function setDefault(array $default ){
        $this->default = $default;

        return $this->default;
    }
    
    public function editarComParametroAction(...$newParam){
        if (is_string($this->form)){
            $form = new $this->form;
            $this->form = $form;
        } else {
            $form = $this->form;
        }
        $request = $this->getRequest();
        $param = 0;
        if(count($newParam) > 0){
            $param=$newParam[0];
        }else{
            $param = $this->params()->fromRoute('id',0);
        }
        $entidade = $this->getEm()->getRepository($this->entity)->find($param);
        $array = array();
        if ($entidade){
            foreach ($entidade->toArray() as $key => $value){
                if ($value instanceof \DateTime){
                    $array[$key] = $value->format('Y-m-d');
                } else {
                    $array[$key] = $value;
                }
            }
            array_push($array, 'entity', $entidade);
            $form->setData($array);
            if ($this->getRequest()->isPost()){
                $form->setData($request->getPost());
                if ($form->isValid()){
                    $service = $this->getEvent()->getApplication()->getServiceManager()->get($this->service);
                    $data = $request->getPost()->toArray();
                    $data['id'] = (int) $param;
                    //-- Alterar
                    if ($service->save($data) != null){
                        $this->flashMessenger()->addSuccessMessage('Atualizado com sucesso!');
                    } else {
                        $this->flashMessenger()->addErrorMessage('Não foi possível apagar o registro! Tente mais tarde!');
                    }

                    return $this->redirect()->toRoute($this->route,array('controller' => $this->controller, 'action' => $this->action, 'id'=>$param, 'data' => $array));
                }

    //                    } else {
    //                        $this->flashMessenger()->addErrorMessage('Erro de validação do formulário!');
    //                        foreach ($form->getMessages() as $message){
    //                            $this->flashMessenger()->addErrorMessage($message);
    //                        }
            }    
        } else {
            $this->flashMessenger()->addInfoMessage('Registro não foi econtrado!');
            return $this->redirect()->toRoute($this->route, array('controller' => $this->controller));
        }
        if ($this->flashMessenger()->hasSuccessMessages()){
                return new ViewModel(array(
                        'form'=>$form, 
                        'sucess'=> $this->flashMessenger()->getSuccessMessages(),
                        'id' => $param));
        } else if ($this->flashMessenger()->hasErrorMessages()){
                return new ViewModel(array(
                                'form'=>$form,
                                'error'=> $this->flashMessenger()->getErrorMessages(),
                                'id' => $param));
        } else if ($this->flashMessenger()->hasInfoMessages()){
                return new ViewModel(array(
                                'form'=>$form,
                                'warning'=> $this->flashMessenger()->getInfoMessages(),
                                'id' => $param));
        }

        $this->flashMessenger()->clearMessages();

        return new ViewModel(array('form' => $form, 'id'=> $param, 'data' => $array));
    }
    
    public function localizarComMetodoAction($metodo, $parametros){
        if (is_string($this->form)){
            $form = new $this->form;
            $this->form = $form;
        } else {
            $form = $this->form;
        }
        $request = $this->getRequest();
        $param = 0;
        if($parametros){
            $param= $parametros;
        }else{
            $param = $this->params()->fromRoute('id',0);
        }
        $entidade = $this->getEm()->getRepository($this->entity)->$metodo($param);
        $data = array();
        if ($entidade){
            if ($this->getRequest()->isPost()){
                $form->setData($request->getPost());
                if ($form->isValid()){
                    $service = $this->getEvent()->getApplication()->getServiceManager()->get($this->service);
                    $data = $request->getPost()->toArray();
                    $data['id'] = (int) $param;
                    array_push($data, 'entity', $entidade);
                    //return $this->redirect()->toRoute($this->route,array('controller' => $this->controller, 'action' => $this->action, 'id'=>$param, 'data' => $array));
                }
            }
        } else {
            $this->flashMessenger()->addInfoMessage('Registro não foi econtrado!');
            return $this->redirect()->toRoute($this->route, array('controller' => $this->controller, 'warning'=> $this->flashMessenger()->getInfoMessages()));
        }
        if ($this->flashMessenger()->hasSuccessMessages()){
                return new ViewModel(array(
                        'form'=>$form, 
                        'sucess'=> $this->flashMessenger()->getSuccessMessages(),
                        'id' => $param, 
                        'action' => $this->action));
        } else if ($this->flashMessenger()->hasErrorMessages()){
                return new ViewModel(array(
                        'form'=>$form,
                        'error'=> $this->flashMessenger()->getErrorMessages(),
                        'id' => $param, 
                        'action' => $this->action));
        } else if ($this->flashMessenger()->hasInfoMessages()){
                return new ViewModel(array(
                        'form'=>$form,
                        'warning'=> $this->flashMessenger()->getInfoMessages(),
                        'id' => $param,
                        'action' => $this->action));
        }

        $this->flashMessenger()->clearMessages();
        
        return new ViewModel(array('form' => $form, 'id'=> $param, 'data' => $data, 'action' => $this->action));
    }

    /**
     * Método Inserir dados
     * 
     * @return \Zend\Http\Response|\Zend\View\Model\ViewModel
     */
    public function salvarAction(){
        /**
         * @var $form \Zend\Form\Form
         */
        if (is_string($this->form)){
            $form = new $this->form;
            $this->form = $form;
        } else {
            $form = $this->form;
        }
        
        $request = $this->getRequest();
        $entity = null;
        if ($request->isPost()){
            $form->setData($request->getPost());
            if ($form->isValid()){
                $service = $this->getEvent()->getApplication()->getServiceManager()->get($this->service);
                $service->namePrimaryKey = $this->namePrimaryKey;
                try {
                    $entity = $service->save($request->getPost()->toArray());
                    if (!is_null($entity)){
                        $this->flashMessenger()->addSuccessMessage('Cadastrado com sucesso!');
                    } else {
                        $this->flashMessenger()->addErrorMessage('Não foi possível cadastrar! Tente mais tarde!');
                    }
                } catch (\Exception $ex) {
                    $this->flashMessenger()->addErrorMessage($ex->getMessage());
                }
            } else {
                $this->flashMessenger()->addErrorMessage('Erro de validação do formulário!');
                foreach ($form->getMessages() as $message){
                    $this->flashMessenger()->addErrorMessage($message);
                }
            }
        }
        if ($this->flashMessenger()->hasSuccessMessages()){
            return new ViewModel(array(
                    'form' => $form, 
                    'dataReturn' => $entity,
                    'controller' => $this->controller, 
                    'action' => $this->action,
                    'success'=> $this->flashMessenger()->getSuccessMessages()
            ));
        } else if ($this->flashMessenger()->hasErrorMessages()){
            return new ViewModel(array('form' => $form, 
                    'controller' => $this->controller, 
                    'action' => $this->action,
                    'error'=> $this->flashMessenger()->getErrorMessages()
            ));
        }
        if ((!$this->flashMessenger()->hasSuccessMessages()) || (!$this->flashMessenger()->hasSuccessMessages())) {  
            $this->flashMessenger()->clearMessages();
        }
        return new ViewModel(array('form' => $form, 
                'controller' => $this->controller, 
                'action' => $this->action,
                'dataReturn'=> $entity
        ));
    }

    /**
     * Método Inserir dados
     * 
     * @return \Zend\Http\Response|\Zend\View\Model\ViewModel
     */
    public function executarAction(){
        return $this->inserirAction();
    }
    
    /**
     * Método Inserir dados
     * 
     * @return \Zend\Http\Response|\Zend\View\Model\ViewModel
     */
    public function localizarAction(){
        /**
         * @var $form \Zend\Form\Form
         */
        if (is_string($this->form)){
            $form = new $this->form;
            $this->form = $form;
        } else {
            $form = $this->form;
        }
        
        $request = $this->getRequest();
        $data = null;
        if ($request->isPost()){
            $form->setData($request->getPost());
            if ($form->isValid()){
                try {
                    $data = $request->getPost();
                } catch (\Exception $ex) {
                    $this->flashMessenger()->addErrorMessage($ex->getMessage());
                }
            } else {
                $this->flashMessenger()->addErrorMessage('Erro de validação do formulário!');
                foreach ($form->getMessages() as $message){
                    $this->flashMessenger()->addErrorMessage($message);
                }
            }
        }
        if ($this->flashMessenger()->hasSuccessMessages()){
            return new ViewModel(array(
                    'form' => $form, 
                    'data' => $data,
                    'controller' => $this->controller, 
                    'action' => $this->action,
                    'success'=> $this->flashMessenger()->getSuccessMessages()
            ));
        } else if ($this->flashMessenger()->hasErrorMessages()){
            return new ViewModel(array('form' => $form, 
                    'controller' => $this->controller, 
                    'action' => $this->action,
                    'error'=> $this->flashMessenger()->getErrorMessages()
            ));
        }
        if ((!$this->flashMessenger()->hasSuccessMessages()) || (!$this->flashMessenger()->hasSuccessMessages())) {  
            $this->flashMessenger()->clearMessages();
        }
        return new ViewModel(array(
            'form' => $form, 
            'data' => $data,
            'controller' => $this->controller, 
            'action' => $this->action
        ));
    }
}