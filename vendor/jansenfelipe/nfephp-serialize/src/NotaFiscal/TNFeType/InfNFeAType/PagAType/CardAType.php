<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\PagAType;

/**
 * Class representing CardAType
 */
class CardAType
{

    /**
     * CNPJ da credenciadora de cartão de crédito/débito
     *
     * @property string $cNPJ
     */
    private $cNPJ = null;

    /**
     * Bandeira da operadora de cartão de crédito/débito:01–Visa; 02–Mastercard;
     * 03–American Express; 04–Sorocred; 99–Outros
     *
     * @property string $tBand
     */
    private $tBand = null;

    /**
     * Número de autorização da operação cartão de crédito/débito
     *
     * @property string $cAut
     */
    private $cAut = null;

    /**
     * Gets as cNPJ
     *
     * CNPJ da credenciadora de cartão de crédito/débito
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
     * CNPJ da credenciadora de cartão de crédito/débito
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
     * Gets as tBand
     *
     * Bandeira da operadora de cartão de crédito/débito:01–Visa; 02–Mastercard;
     * 03–American Express; 04–Sorocred; 99–Outros
     *
     * @return string
     */
    public function getTBand()
    {
        return $this->tBand;
    }

    /**
     * Sets a new tBand
     *
     * Bandeira da operadora de cartão de crédito/débito:01–Visa; 02–Mastercard;
     * 03–American Express; 04–Sorocred; 99–Outros
     *
     * @param string $tBand
     * @return self
     */
    public function setTBand($tBand)
    {
        $this->tBand = $tBand;
        return $this;
    }

    /**
     * Gets as cAut
     *
     * Número de autorização da operação cartão de crédito/débito
     *
     * @return string
     */
    public function getCAut()
    {
        return $this->cAut;
    }

    /**
     * Sets a new cAut
     *
     * Número de autorização da operação cartão de crédito/débito
     *
     * @param string $cAut
     * @return self
     */
    public function setCAut($cAut)
    {
        $this->cAut = $cAut;
        return $this;
    }


}

