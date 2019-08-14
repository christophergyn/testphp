<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedidoit
 *
 * @ORM\Table(name="pedidoit", uniqueConstraints={@ORM\UniqueConstraint(name="UN_PRODPED", columns={"COD_PED", "COD_PROD"})}, indexes={@ORM\Index(name="IDX_PEDIDOITPEDIDO", columns={"COD_PED", "COD_PEDIT"}), @ORM\Index(name="FK_CFOPPEDIDOIT", columns={"CFOP_PEDIT"}), @ORM\Index(name="FK_LOCALPEDIDOIT", columns={"COD_LOC"}), @ORM\Index(name="FK_PRODPEDIDOIT", columns={"COD_PROD"}), @ORM\Index(name="FK_TECNICOPEDIDOIT", columns={"COD_VEND"}), @ORM\Index(name="IDX_323FC49B89FF927", columns={"COD_PED"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Application\Entity\PedidoitRepository")
 */
class Pedidoit extends AbstractEntity{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="GE_IDPEDIDOIT", initialValue=1, allocationSize=100000) 
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_CADASTRO", type="date", nullable=true)
     */
    private $dataCadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="VLUNIT_PEDIT", type="decimal", precision=15, scale=6, nullable=true)
     */
    private $vlunitPedit;

    /**
     * @var \Application\Entity\Pedido
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Pedido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PEDIDO_ID", referencedColumnName="ID")
     * })
     */
    private $pedido;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set vlunitPedit
     *
     * @param string $vlunitPedit
     *
     * @return Pedidoit
     */
    public function setVlunitPedit($vlunitPedit)
    {
        $this->vlunitPedit = $vlunitPedit;

        return $this;
    }

    /**
     * Get vlunitPedit
     *
     * @return string
     */
    public function getVlunitPedit()
    {
        return $this->vlunitPedit;
    }

    /**
     * Set pedido
     *
     * @param \Application\Entity\Pedido $pedido
     *
     * @return Pedidoit
     */
    public function setPedido(\Application\Entity\Pedido $pedido = null)
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Get pedido
     *
     * @return \Application\Entity\Pedido
     */
    public function getPedido()
    {
        return $this->pedido;
    }
    /**
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     *
     * @return ido
     */
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = \DateTime::createFromFormat("Y-m-d", $dataCadastro);
        return $this;
    }

    /**
     * Get dataCadastro
     *
     * @return \DateTime
     */
    public function getDataCadastro()
    {
        if($this->dataCadastro){
            return $this->dataCadastro->format('Y-m-d');
        }
        return $this->dataCadastro;
    }
}
