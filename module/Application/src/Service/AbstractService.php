<?php
namespace Application\Service;

use Doctrine\ORM\EntityManager;

abstract class AbstractService {
    public $em;
    public $entity;
    public $namePrimaryKey;
    protected $dados = array();

    public function __construct(EntityManager $em){
        $this->em = $em;
        $this->namePrimaryKey = 'ID';
    }

    /**
     * 
     * @param array $data
     * @return \Application\Entity\AbstractEntity
     */
    public function save(Array $data = array()){
        $this->dados = $data;
        if (isset($data[$this->namePrimaryKey]) && ($data[$this->namePrimaryKey] > 0)) {
            $this->alterar($data);
            /**
             * @var $entity \Application\Entity\AbstractEntity
             */
            $entity = $this->em->getReference($this->entity, $data[$this->namePrimaryKey]);
            $entity->arrayToObject($data);
        } else {
            $entity = new $this->entity($data);
        }
        $this->em->persist($entity);
        $this->em->flush();
        return $entity;
    }

    /**
     * 
     * @param array $data
     * @return object|NULL
     */
    public function remove(Array $data = array()){
        $entity = $this->findOneBy($data);
        if ($entity){
            $this->em->remove($entity);
            $this->em->flush();
        }
        return $entity;
    }

    /**
     * 
     * @param array $data
     * @return object|NULL
     */
    public function removeObject($entity){
        $this->em->remove($entity);
        $this->em->flush();
        return $entity;
    }
    /**
     * 
     * @param array $data
     * 
     * return \Application\Entity\AbstractEntity
     */
    public function findOneBy(Array $data = array()){
        return $this->em->getRepository($this->entity)->findOneBy($data);
    }

    /**
     * 
     * @param array $data
     * 
     * return \Application\Entity\AbstractEntity
     */
    public function findAll(){
        return $this->em->getRepository($this->entity)->findAll();
    }

    /**
     * 
     * @param array $data
     * 
     * return \Application\Entity\AbstractEntity
     */
    public function findDescricaoLike(string $nomeCampo, string $texto){
        $repository = $this->em->getRepository($this->entity);
        $qb = $repository->createQueryBuilder('entity');
        return $qb->where('(entity.'.$nomeCampo.' like :descricao)')->setParameter('descricao', $texto.'%')->getQuery()->getResult();
    }
    
    /**
     * @var $criteria \Doctrine\Common\Collections\Criteria 
     * @param \Doctrine\Common\Collections\Criteria 
     * @return \Doctrine\Common\Collections\Collection
     */
    public function execCriteria($criteria){
            $result = $this->em->getRepository($this->entity)->matching($criteria);

            return $result;		
    }
    
    /**
     * 
     * @param array $data
     * @return \Application\Service\entity
     */
    public function salvar(Array $data = array()){
        $entity = new $this->entity($data);
        $this->em->persist($entity);
        $this->em->flush();
        return $entity;
    }

    /**
     * 
     * @param array $data
     * @return \Application\Service\entity
     */
    public function salvarEntity($entity){
        $this->em->persist($entity);
        $this->em->flush();
        return $entity;
    }

    /**
     * Alterar 
     * 
     * @param array $data
     * @return type
     */
    public function alterar(Array $data = array()){
        $entity = $this->em->getReference($this->entity, $data[$this->namePrimaryKey]);
        $entity->arrayToObject($data);
        $this->em->persist($entity);
        $this->em->flush();
        return $entity;
    }

    /**
     * 
     * @return Doctrine\ORM\EntityManager
     */
    public function getEm(){
        return $this->em;
    }

    /**
     * 
     * @return array
     */
    public function toArray(){
        $hydrator = new \Zend\Hydrator\ClassMethods();
        $data = $hydrator->extract($this);
        foreach ($data as $key => $value){
            if ($value instanceof \DateTime){
                    $data[$key] = $value->format('d/m/Y');
            } else {
                    $data[$key] = $value;
            }
        }
        return $data;
    }

    public function arrayToObject($data = array()){
        foreach ($data as $key => $value){
            try {
                if ((is_string($value)) && (\Application\Utils\UtilData::isValidFormat($value))){
                    $data[$key] = \Application\Utils\UtilData::getDate($value)->format('d-m-Y');
                }
            } catch (\Exception $e) {			}
        }
        $hydrator = new \Zend\Hydrator\ClassMethods();
        $hydrator->hydrate($data, $this);
    }
    
}