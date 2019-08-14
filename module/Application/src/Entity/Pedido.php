<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido", uniqueConstraints={@ORM\UniqueConstraint(name="UN_PEDIDO", columns={"DOCTO_PED", "SERIE_PED", "COD_CLIEN"})}, indexes={@ORM\Index(name="IDX_NOME_CLIENTE_PEDIDO", columns={"NOME_CLIENTE_PED"}), @ORM\Index(name="IDX_PEDIDO", columns={"COD_CLIEN", "COD_FIL"}), @ORM\Index(name="IDX_PEDIDODATA", columns={"DATA_PED", "COD_FIL"}), @ORM\Index(name="IDX_PEDIDODATAEMISSAO", columns={"DATA_PED", "COD_FIL", "STATUS_PED"}), @ORM\Index(name="IDX_PEDIDOSERIE", columns={"COD_PED", "SERIE_PED", "COD_FIL"}), @ORM\Index(name="IDX_PEDIDOSTATUS", columns={"STATUS_PED", "COD_FIL"}), @ORM\Index(name="IDX_PEDIDOSTATUSSERIE", columns={"STATUS_PED", "COD_PED", "SERIE_PED", "COD_CLIEN", "COD_FIL"}), @ORM\Index(name="IDX_PEDIDOUSUARIO", columns={"COD_VEND", "COD_CLIEN", "COD_FIL"}), @ORM\Index(name="IDX_PEDIDOVENDEDOR", columns={"COD_VEND", "COD_CONDPAGTO", "COD_CFOP", "COD_CLIEN", "COD_FIL"}), @ORM\Index(name="FK_CFOPPEDIDO", columns={"COD_CFOP"}), @ORM\Index(name="FK_CPAGTOPEDIDO", columns={"COD_CONDPAGTO"}), @ORM\Index(name="FK_FILIALPEDIDO", columns={"COD_FIL"}), @ORM\Index(name="FK_PEDIDOANIMAL", columns={"ANIMAL_ID"}), @ORM\Index(name="FK_PEDIDO_ENDERECO", columns={"ENDERECO_ID"}), @ORM\Index(name="FK_PEDIDO_MOTIVO", columns={"MOTIVO_CANCELAMENTO_ID"}), @ORM\Index(name="FK_PEDIDO_MOTORISTA", columns={"MOTORISTA_ID"}), @ORM\Index(name="FK_PEDIDO_PEDIDO_ORIGEM", columns={"PEDIDO_ORIGEM_ID"}), @ORM\Index(name="FK_TRANSPPEDIDO", columns={"TRANSPORTADORA_ID"}), @ORM\Index(name="FK_VEICULOPEDIDO", columns={"VEICULO_ID"}), @ORM\Index(name="IDX_C4EC16CE1187B4E1", columns={"COD_CLIEN"}), @ORM\Index(name="IDX_C4EC16CED985F7C0", columns={"COD_VEND"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Application\Entity\PedidoRepository")
 */
class Pedido extends AbstractEntity{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="GE_IDPEDIDO", initialValue=1, allocationSize=100000) 
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="DOCTO", type="string", length=10, nullable=false)
     */
    private $docto;

    /**
     * @var string
     *
     * @ORM\Column(name="SERIE", type="string", length=3, nullable=false)
     */
    private $serie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_CADASTRO", type="date", nullable=true)
     */
    private $dataCadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="VALOR", type="decimal", precision=15, scale=6, nullable=true)
     */
    private $valor;

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
     * Set docto
     *
     * @param string $docto
     *
     * @return ido
     */
    public function setDocto($docto)
    {
        $this->docto = $docto;

        return $this;
    }

    /**
     * Get docto
     *
     * @return string
     */
    public function getDocto()
    {
        return $this->docto;
    }

    /**
     * Set serie
     *
     * @param string $serie
     *
     * @return ido
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
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

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return ido
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }
}
