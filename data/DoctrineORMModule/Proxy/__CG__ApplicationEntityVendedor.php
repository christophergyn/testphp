<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Vendedor extends \Application\Entity\Vendedor implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'codVend', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'dataVend', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'descVend', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'emailEnvio', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'metaVend', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'comissaoVend', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'tipoVend', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'dataMigracao', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'servidorSmtp', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'portaSmtp', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'usuarioEmail', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'senhaEmail', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'emailSsl', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'comissao', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'usuario2'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'codVend', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'dataVend', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'descVend', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'emailEnvio', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'metaVend', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'comissaoVend', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'tipoVend', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'dataMigracao', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'servidorSmtp', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'portaSmtp', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'usuarioEmail', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'senhaEmail', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'emailSsl', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'comissao', '' . "\0" . 'Application\\Entity\\Vendedor' . "\0" . 'usuario2'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Vendedor $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getCodVend()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodVend();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodVend', []);

        return parent::getCodVend();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataVend($dataVend)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataVend', [$dataVend]);

        return parent::setDataVend($dataVend);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataVend()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataVend', []);

        return parent::getDataVend();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescVend($descVend)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescVend', [$descVend]);

        return parent::setDescVend($descVend);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescVend()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescVend', []);

        return parent::getDescVend();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaVend($metaVend)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaVend', [$metaVend]);

        return parent::setMetaVend($metaVend);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaVend()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaVend', []);

        return parent::getMetaVend();
    }

    /**
     * {@inheritDoc}
     */
    public function setComissaoVend($comissaoVend)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComissaoVend', [$comissaoVend]);

        return parent::setComissaoVend($comissaoVend);
    }

    /**
     * {@inheritDoc}
     */
    public function getComissaoVend()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComissaoVend', []);

        return parent::getComissaoVend();
    }

    /**
     * {@inheritDoc}
     */
    public function setDdelete($ddelete)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDdelete', [$ddelete]);

        return parent::setDdelete($ddelete);
    }

    /**
     * {@inheritDoc}
     */
    public function getDdelete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDdelete', []);

        return parent::getDdelete();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario($usuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', [$usuario]);

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', []);

        return parent::getUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrograma($programa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrograma', [$programa]);

        return parent::setPrograma($programa);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrograma()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrograma', []);

        return parent::getPrograma();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstacao($estacao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstacao', [$estacao]);

        return parent::setEstacao($estacao);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstacao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstacao', []);

        return parent::getEstacao();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoVend($tipoVend)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoVend', [$tipoVend]);

        return parent::setTipoVend($tipoVend);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoVend()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoVend', []);

        return parent::getTipoVend();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataMigracao($dataMigracao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataMigracao', [$dataMigracao]);

        return parent::setDataMigracao($dataMigracao);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataMigracao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataMigracao', []);

        return parent::getDataMigracao();
    }

    /**
     * {@inheritDoc}
     */
    public function setDinsert($dinsert)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDinsert', [$dinsert]);

        return parent::setDinsert($dinsert);
    }

    /**
     * {@inheritDoc}
     */
    public function getDinsert()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDinsert', []);

        return parent::getDinsert();
    }

    /**
     * {@inheritDoc}
     */
    public function setDupdate($dupdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDupdate', [$dupdate]);

        return parent::setDupdate($dupdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDupdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDupdate', []);

        return parent::getDupdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setServidorSmtp($servidorSmtp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setServidorSmtp', [$servidorSmtp]);

        return parent::setServidorSmtp($servidorSmtp);
    }

    /**
     * {@inheritDoc}
     */
    public function getServidorSmtp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getServidorSmtp', []);

        return parent::getServidorSmtp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPortaSmtp($portaSmtp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPortaSmtp', [$portaSmtp]);

        return parent::setPortaSmtp($portaSmtp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPortaSmtp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPortaSmtp', []);

        return parent::getPortaSmtp();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuarioEmail($usuarioEmail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuarioEmail', [$usuarioEmail]);

        return parent::setUsuarioEmail($usuarioEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioEmail', []);

        return parent::getUsuarioEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setSenhaEmail($senhaEmail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSenhaEmail', [$senhaEmail]);

        return parent::setSenhaEmail($senhaEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function getSenhaEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSenhaEmail', []);

        return parent::getSenhaEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailSsl($emailSsl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailSsl', [$emailSsl]);

        return parent::setEmailSsl($emailSsl);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailSsl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailSsl', []);

        return parent::getEmailSsl();
    }

    /**
     * {@inheritDoc}
     */
    public function setComissao(\Application\Entity\Comissao $comissao = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComissao', [$comissao]);

        return parent::setComissao($comissao);
    }

    /**
     * {@inheritDoc}
     */
    public function getComissao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComissao', []);

        return parent::getComissao();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario2(\Application\Entity\Usuario $usuario2 = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario2', [$usuario2]);

        return parent::setUsuario2($usuario2);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario2', []);

        return parent::getUsuario2();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailEnvio($emailEnvio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailEnvio', [$emailEnvio]);

        return parent::setEmailEnvio($emailEnvio);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailEnvio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailEnvio', []);

        return parent::getEmailEnvio();
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', []);

        return parent::toArray();
    }

    /**
     * {@inheritDoc}
     */
    public function arrayToObject($data = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'arrayToObject', [$data]);

        return parent::arrayToObject($data);
    }

}