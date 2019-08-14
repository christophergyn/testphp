<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Titulos extends \Application\Entity\Titulos implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'dCTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'nrdoctoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'dtemissaoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'dtentradaTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'dtmovtoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'nrboletoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'vlcontabTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'vlpagoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'vljurosTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'vldescontoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'obsTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codCtacontab', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'planoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'statusTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'pagtoidTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'inpagtoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'previsaoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'vlicmsstTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'vlcomissaoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'valorTabelaTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'vldescontoComissaoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codCentcusto', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codCfop', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codClien', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codCondpagto', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codDoc', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codFil', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codMoeda', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codPed', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'motivo'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'dCTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'nrdoctoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'dtemissaoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'dtentradaTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'dtmovtoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'nrboletoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'vlcontabTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'vlpagoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'vljurosTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'vldescontoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'obsTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codCtacontab', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'planoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'statusTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'pagtoidTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'inpagtoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'previsaoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'ddelete', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'dinsert', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'dupdate', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'usuario', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'programa', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'estacao', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'vlicmsstTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'vlcomissaoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'valorTabelaTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'vldescontoComissaoTit', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codCentcusto', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codCfop', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codClien', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codCondpagto', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codDoc', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codFil', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codMoeda', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'codPed', '' . "\0" . 'Application\\Entity\\Titulos' . "\0" . 'motivo'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Titulos $proxy) {
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
    public function getCodTit()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodTit();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodTit', []);

        return parent::getCodTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setDCTit($dCTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDCTit', [$dCTit]);

        return parent::setDCTit($dCTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getDCTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDCTit', []);

        return parent::getDCTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setNrdoctoTit($nrdoctoTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNrdoctoTit', [$nrdoctoTit]);

        return parent::setNrdoctoTit($nrdoctoTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getNrdoctoTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNrdoctoTit', []);

        return parent::getNrdoctoTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtemissaoTit($dtemissaoTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtemissaoTit', [$dtemissaoTit]);

        return parent::setDtemissaoTit($dtemissaoTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtemissaoTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtemissaoTit', []);

        return parent::getDtemissaoTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtentradaTit($dtentradaTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtentradaTit', [$dtentradaTit]);

        return parent::setDtentradaTit($dtentradaTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtentradaTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtentradaTit', []);

        return parent::getDtentradaTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setDtmovtoTit($dtmovtoTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDtmovtoTit', [$dtmovtoTit]);

        return parent::setDtmovtoTit($dtmovtoTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getDtmovtoTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDtmovtoTit', []);

        return parent::getDtmovtoTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setNrboletoTit($nrboletoTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNrboletoTit', [$nrboletoTit]);

        return parent::setNrboletoTit($nrboletoTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getNrboletoTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNrboletoTit', []);

        return parent::getNrboletoTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlcontabTit($vlcontabTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlcontabTit', [$vlcontabTit]);

        return parent::setVlcontabTit($vlcontabTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlcontabTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlcontabTit', []);

        return parent::getVlcontabTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlpagoTit($vlpagoTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlpagoTit', [$vlpagoTit]);

        return parent::setVlpagoTit($vlpagoTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlpagoTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlpagoTit', []);

        return parent::getVlpagoTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setVljurosTit($vljurosTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVljurosTit', [$vljurosTit]);

        return parent::setVljurosTit($vljurosTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getVljurosTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVljurosTit', []);

        return parent::getVljurosTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setVldescontoTit($vldescontoTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVldescontoTit', [$vldescontoTit]);

        return parent::setVldescontoTit($vldescontoTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getVldescontoTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVldescontoTit', []);

        return parent::getVldescontoTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setObsTit($obsTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObsTit', [$obsTit]);

        return parent::setObsTit($obsTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getObsTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObsTit', []);

        return parent::getObsTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodCtacontab($codCtacontab)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodCtacontab', [$codCtacontab]);

        return parent::setCodCtacontab($codCtacontab);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodCtacontab()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodCtacontab', []);

        return parent::getCodCtacontab();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlanoTit($planoTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlanoTit', [$planoTit]);

        return parent::setPlanoTit($planoTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlanoTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlanoTit', []);

        return parent::getPlanoTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatusTit($statusTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatusTit', [$statusTit]);

        return parent::setStatusTit($statusTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatusTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatusTit', []);

        return parent::getStatusTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setPagtoidTit($pagtoidTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPagtoidTit', [$pagtoidTit]);

        return parent::setPagtoidTit($pagtoidTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getPagtoidTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPagtoidTit', []);

        return parent::getPagtoidTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setInpagtoTit($inpagtoTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInpagtoTit', [$inpagtoTit]);

        return parent::setInpagtoTit($inpagtoTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getInpagtoTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInpagtoTit', []);

        return parent::getInpagtoTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrevisaoTit($previsaoTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrevisaoTit', [$previsaoTit]);

        return parent::setPrevisaoTit($previsaoTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrevisaoTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrevisaoTit', []);

        return parent::getPrevisaoTit();
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
    public function setVlicmsstTit($vlicmsstTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlicmsstTit', [$vlicmsstTit]);

        return parent::setVlicmsstTit($vlicmsstTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlicmsstTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlicmsstTit', []);

        return parent::getVlicmsstTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setVlcomissaoTit($vlcomissaoTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlcomissaoTit', [$vlcomissaoTit]);

        return parent::setVlcomissaoTit($vlcomissaoTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getVlcomissaoTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlcomissaoTit', []);

        return parent::getVlcomissaoTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setValorTabelaTit($valorTabelaTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValorTabelaTit', [$valorTabelaTit]);

        return parent::setValorTabelaTit($valorTabelaTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getValorTabelaTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValorTabelaTit', []);

        return parent::getValorTabelaTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setVldescontoComissaoTit($vldescontoComissaoTit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVldescontoComissaoTit', [$vldescontoComissaoTit]);

        return parent::setVldescontoComissaoTit($vldescontoComissaoTit);
    }

    /**
     * {@inheritDoc}
     */
    public function getVldescontoComissaoTit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVldescontoComissaoTit', []);

        return parent::getVldescontoComissaoTit();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodCentcusto(\Application\Entity\Centcusto $codCentcusto = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodCentcusto', [$codCentcusto]);

        return parent::setCodCentcusto($codCentcusto);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodCentcusto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodCentcusto', []);

        return parent::getCodCentcusto();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodCfop(\Application\Entity\Cfop $codCfop = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodCfop', [$codCfop]);

        return parent::setCodCfop($codCfop);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodCfop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodCfop', []);

        return parent::getCodCfop();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodClien(\Application\Entity\Cliente $codClien = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodClien', [$codClien]);

        return parent::setCodClien($codClien);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodClien()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodClien', []);

        return parent::getCodClien();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodCondpagto(\Application\Entity\Condpagto $codCondpagto = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodCondpagto', [$codCondpagto]);

        return parent::setCodCondpagto($codCondpagto);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodCondpagto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodCondpagto', []);

        return parent::getCodCondpagto();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodDoc(\Application\Entity\Docto $codDoc = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodDoc', [$codDoc]);

        return parent::setCodDoc($codDoc);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodDoc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodDoc', []);

        return parent::getCodDoc();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodFil(\Application\Entity\Filial $codFil = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodFil', [$codFil]);

        return parent::setCodFil($codFil);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodFil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodFil', []);

        return parent::getCodFil();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodMoeda(\Application\Entity\Moeda $codMoeda = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodMoeda', [$codMoeda]);

        return parent::setCodMoeda($codMoeda);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodMoeda()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodMoeda', []);

        return parent::getCodMoeda();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodPed(\Application\Entity\Pedido $codPed = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodPed', [$codPed]);

        return parent::setCodPed($codPed);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodPed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodPed', []);

        return parent::getCodPed();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotivo(\Application\Entity\MotivoNota $motivo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotivo', [$motivo]);

        return parent::setMotivo($motivo);
    }

    /**
     * {@inheritDoc}
     */
    public function getMotivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotivo', []);

        return parent::getMotivo();
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
