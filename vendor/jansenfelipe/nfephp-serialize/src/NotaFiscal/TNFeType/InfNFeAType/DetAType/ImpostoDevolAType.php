<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType;

/**
 * Class representing ImpostoDevolAType
 */
class ImpostoDevolAType
{

    /**
     * Percentual de mercadoria devolvida
     *
     * @property string $pDevol
     */
    private $pDevol = null;

    /**
     * Informação de IPI devolvido
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoDevolAType\IPIAType
     * $iPI
     */
    private $iPI = null;

    /**
     * Gets as pDevol
     *
     * Percentual de mercadoria devolvida
     *
     * @return string
     */
    public function getPDevol()
    {
        return $this->pDevol;
    }

    /**
     * Sets a new pDevol
     *
     * Percentual de mercadoria devolvida
     *
     * @param string $pDevol
     * @return self
     */
    public function setPDevol($pDevol)
    {
        $this->pDevol = $pDevol;
        return $this;
    }

    /**
     * Gets as iPI
     *
     * Informação de IPI devolvido
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoDevolAType\IPIAType
     */
    public function getIPI()
    {
        return $this->iPI;
    }

    /**
     * Sets a new iPI
     *
     * Informação de IPI devolvido
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoDevolAType\IPIAType
     * $iPI
     * @return self
     */
    public function setIPI(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoDevolAType\IPIAType $iPI)
    {
        $this->iPI = $iPI;
        return $this;
    }


}

