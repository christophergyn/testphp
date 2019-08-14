<?php
namespace Application;

use Zend\EventManager\EventInterface;
use Zend\I18n\Translator\TranslatorServiceFactory;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\Validator\AbstractValidator;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Authentication\AuthenticationService;

class Module implements BootstrapListenerInterface, ConfigProviderInterface, ServiceProviderInterface{
    const VERSION = '3.0.3-dev';
    public function getServiceConfig() {
        return [
            'factories' => array(
                TranslatorServiceFactory::class => InvokableFactory::class,
                \APY\DataGridBundle\Grid\Grid::class => function (\Interop\Container\ContainerInterface $container, $serviceName){
                        return new \APY\DataGridBundle\Grid\Grid($container);
                },
//                TrocarPedidoProdutoComplementoService::class => function (\Interop\Container\ContainerInterface $container, $serviceName){
//                    return new TrocarPedidoProdutoComplementoService($container->get(\Doctrine\ORM\EntityManager::class));
//                },
            )
        ];
    }
    
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    
    public function onBootstrap(EventInterface $e) {
        return;
        /**
         * @var $eventManage \Zend\EventManager\EventManager
         * @var $eventShared \Zend\EventManager\SharedEvents;
         * @var $translator \Zend\Mvc\I18n\Translator
         */
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        
        $translator = $e->getApplication()->getServiceManager()->get('MvcTranslator');
         //$translator = $e->getApplication()->getServiceManager()->get(TranslatorServiceFactory::class);
         $translator->addTranslationFile(
            'phpArray',
            './vendor/zendframework/zend-i18n-resources/languages/pt_BR/Zend_Validate.php');
         $translator->addTranslationFile(
            'phpArray',
            './module/Application/language/translate.pt_BR.php');
	//		'./module/Application/language/translate.en_US.php');
         AbstractValidator::setDefaultTranslator($translator, 'default');
        $eventShared = $eventManager->getSharedManager();       
        $eventShared->attach(AbstractActionController::class, 'dispatch', function($ev){
            /**
             * @var $mvcEvent \Zend\Mvc\MvcEvent
             * @var $auth \Zend\Authentication\AuthenticationService
             * @var $ev \Zend\Mvc\MvcEvent
             * @var $controller  \Zend\Mvc\Controller\AbstractActionController
             */
            return;
            $auth = $ev->getApplication()->getServiceManager()->get(AuthenticationService::class);
            //var_dump($auth);die;
            if ($auth->hasIdentity()){
                return;
            }
            /**
             * @todo retirar o return, pois foi colocado para não validar o usuario
             */
            $controller = $ev->getTarget();
            if ($ev->getRouteMatch()->getParam('controller') == LoginController::class){
                $controller->layout('layout/layoutLogin.phtml');
                return;
            }
            //-- Caso seja a home o layout muda
            if ($ev->getRouteMatch()->getParam('controller') == IndexController::class){
                $controller->layout('layout/layout2.phtml');
                return;
            }
            $controller->flashMessenger()->addSuccessMessage('Acesso negado! Entre com autenticação por favor.');
            return $controller->redirect()->toRoute('login', array(
                'controller' => LoginController::class,
                'action' => 'index'
            ));
        });
    }   
}
