<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType;

/**
 * Class representing AutXMLAType
 */
class AutXMLAType
{

    /**
     * CNPJ Autorizado
     *
     * @property string $cNPJ
     */
    private $cNPJ = null;

    /**
     * CPF Autorizado
     *
     * @property string $cPF
     */
    private $cPF = null;

    /**
     * Gets as cNPJ
     *
     * CNPJ Autorizado
     *
     * @return string
     */
    public function getCNPJ()
    {
        return $this->cNPJ;
    }

    /**
     * Sets a new cNPJ
     *
     * CNPJ Autorizado
     *
     * @param string $cNPJ
     * @return self
     */
    public function setCNPJ($cNPJ)
    {
        $this->cNPJ = $cNPJ;
        return $this;
    }

    /**
     * Gets as cPF
     *
     * CPF Autorizado
     *
     * @return string
     */
    public function getCPF()
    {
        return $this->cPF;
    }

    /**
     * Sets a new cPF
     *
     * CPF Autorizado
     *
     * @param string $cPF
     * @return self
     */
    public function setCPF($cPF)
    {
        $this->cPF = $cPF;
        return $this;
    }


}

