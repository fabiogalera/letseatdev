<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType;

/**
 * Class representing ICMSAType
 */
class ICMSAType
{

    /**
     * Tributação pelo ICMS
     * 00 - Tributada integralmente
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS00AType
     * $iCMS00
     */
    private $iCMS00 = null;

    /**
     * Tributação pelo ICMS
     * 10 - Tributada e com cobrança do ICMS por substituição tributária
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS10AType
     * $iCMS10
     */
    private $iCMS10 = null;

    /**
     * Tributção pelo ICMS
     * 20 - Com redução de base de cálculo
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS20AType
     * $iCMS20
     */
    private $iCMS20 = null;

    /**
     * Tributação pelo ICMS
     * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição
     * tributária
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS30AType
     * $iCMS30
     */
    private $iCMS30 = null;

    /**
     * Tributação pelo ICMS
     * 40 - Isenta 
     * 41 - Não tributada 
     * 50 - Suspensão
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS40AType
     * $iCMS40
     */
    private $iCMS40 = null;

    /**
     * Tributção pelo ICMS
     * 51 - Diferimento
     * A exigência do preenchimento das informações do ICMS diferido fica à
     * critério de cada UF.
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS51AType
     * $iCMS51
     */
    private $iCMS51 = null;

    /**
     * Tributação pelo ICMS
     * 60 - ICMS cobrado anteriormente por substituição tributária
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS60AType
     * $iCMS60
     */
    private $iCMS60 = null;

    /**
     * Tributação pelo ICMS 
     * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição
     * tributária
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS70AType
     * $iCMS70
     */
    private $iCMS70 = null;

    /**
     * Tributação pelo ICMS
     * 90 - Outras
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS90AType
     * $iCMS90
     */
    private $iCMS90 = null;

    /**
     * Partilha do ICMS entre a UF de origem e UF de destino ou a UF definida na
     * legislação
     * Operação interestadual para consumidor final com partilha do ICMS devido na
     * operação entre a UF de origem e a UF do destinatário ou ou a UF definida na
     * legislação. (Ex. UF da concessionária de entrega do veículos)
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSPartAType
     * $iCMSPart
     */
    private $iCMSPart = null;

    /**
     * Grupo de informação do ICMSST devido para a UF de destino, nas operações
     * interestaduais de produtos que tiveram retenção antecipada de ICMS por ST na
     * UF do remetente. Repasse via Substituto Tributário.
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSTAType
     * $iCMSST
     */
    private $iCMSST = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN101AType
     * $iCMSSN101
     */
    private $iCMSSN101 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN102AType
     * $iCMSSN102
     */
    private $iCMSSN102 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN201AType
     * $iCMSSN201
     */
    private $iCMSSN201 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=202 ou 203 (v.2.0)
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN202AType
     * $iCMSSN202
     */
    private $iCMSSN202 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL,CRT=1 – Simples Nacional e
     * CSOSN=500 (v.2.0)
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN500AType
     * $iCMSSN500
     */
    private $iCMSSN500 = null;

    /**
     * Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e
     * CSOSN=900 (v2.0)
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN900AType
     * $iCMSSN900
     */
    private $iCMSSN900 = null;

    /**
     * Gets as iCMS00
     *
     * Tributação pelo ICMS
     * 00 - Tributada integralmente
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS00AType
     */
    public function getICMS00()
    {
        return $this->iCMS00;
    }

    /**
     * Sets a new iCMS00
     *
     * Tributação pelo ICMS
     * 00 - Tributada integralmente
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS00AType
     * $iCMS00
     * @return self
     */
    public function setICMS00(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS00AType $iCMS00)
    {
        $this->iCMS00 = $iCMS00;
        return $this;
    }

    /**
     * Gets as iCMS10
     *
     * Tributação pelo ICMS
     * 10 - Tributada e com cobrança do ICMS por substituição tributária
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS10AType
     */
    public function getICMS10()
    {
        return $this->iCMS10;
    }

    /**
     * Sets a new iCMS10
     *
     * Tributação pelo ICMS
     * 10 - Tributada e com cobrança do ICMS por substituição tributária
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS10AType
     * $iCMS10
     * @return self
     */
    public function setICMS10(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS10AType $iCMS10)
    {
        $this->iCMS10 = $iCMS10;
        return $this;
    }

    /**
     * Gets as iCMS20
     *
     * Tributção pelo ICMS
     * 20 - Com redução de base de cálculo
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS20AType
     */
    public function getICMS20()
    {
        return $this->iCMS20;
    }

    /**
     * Sets a new iCMS20
     *
     * Tributção pelo ICMS
     * 20 - Com redução de base de cálculo
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS20AType
     * $iCMS20
     * @return self
     */
    public function setICMS20(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS20AType $iCMS20)
    {
        $this->iCMS20 = $iCMS20;
        return $this;
    }

    /**
     * Gets as iCMS30
     *
     * Tributação pelo ICMS
     * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição
     * tributária
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS30AType
     */
    public function getICMS30()
    {
        return $this->iCMS30;
    }

    /**
     * Sets a new iCMS30
     *
     * Tributação pelo ICMS
     * 30 - Isenta ou não tributada e com cobrança do ICMS por substituição
     * tributária
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS30AType
     * $iCMS30
     * @return self
     */
    public function setICMS30(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS30AType $iCMS30)
    {
        $this->iCMS30 = $iCMS30;
        return $this;
    }

    /**
     * Gets as iCMS40
     *
     * Tributação pelo ICMS
     * 40 - Isenta 
     * 41 - Não tributada 
     * 50 - Suspensão
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS40AType
     */
    public function getICMS40()
    {
        return $this->iCMS40;
    }

    /**
     * Sets a new iCMS40
     *
     * Tributação pelo ICMS
     * 40 - Isenta 
     * 41 - Não tributada 
     * 50 - Suspensão
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS40AType
     * $iCMS40
     * @return self
     */
    public function setICMS40(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS40AType $iCMS40)
    {
        $this->iCMS40 = $iCMS40;
        return $this;
    }

    /**
     * Gets as iCMS51
     *
     * Tributção pelo ICMS
     * 51 - Diferimento
     * A exigência do preenchimento das informações do ICMS diferido fica à
     * critério de cada UF.
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS51AType
     */
    public function getICMS51()
    {
        return $this->iCMS51;
    }

    /**
     * Sets a new iCMS51
     *
     * Tributção pelo ICMS
     * 51 - Diferimento
     * A exigência do preenchimento das informações do ICMS diferido fica à
     * critério de cada UF.
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS51AType
     * $iCMS51
     * @return self
     */
    public function setICMS51(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS51AType $iCMS51)
    {
        $this->iCMS51 = $iCMS51;
        return $this;
    }

    /**
     * Gets as iCMS60
     *
     * Tributação pelo ICMS
     * 60 - ICMS cobrado anteriormente por substituição tributária
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS60AType
     */
    public function getICMS60()
    {
        return $this->iCMS60;
    }

    /**
     * Sets a new iCMS60
     *
     * Tributação pelo ICMS
     * 60 - ICMS cobrado anteriormente por substituição tributária
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS60AType
     * $iCMS60
     * @return self
     */
    public function setICMS60(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS60AType $iCMS60)
    {
        $this->iCMS60 = $iCMS60;
        return $this;
    }

    /**
     * Gets as iCMS70
     *
     * Tributação pelo ICMS 
     * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição
     * tributária
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS70AType
     */
    public function getICMS70()
    {
        return $this->iCMS70;
    }

    /**
     * Sets a new iCMS70
     *
     * Tributação pelo ICMS 
     * 70 - Com redução de base de cálculo e cobrança do ICMS por substituição
     * tributária
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS70AType
     * $iCMS70
     * @return self
     */
    public function setICMS70(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS70AType $iCMS70)
    {
        $this->iCMS70 = $iCMS70;
        return $this;
    }

    /**
     * Gets as iCMS90
     *
     * Tributação pelo ICMS
     * 90 - Outras
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS90AType
     */
    public function getICMS90()
    {
        return $this->iCMS90;
    }

    /**
     * Sets a new iCMS90
     *
     * Tributação pelo ICMS
     * 90 - Outras
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS90AType
     * $iCMS90
     * @return self
     */
    public function setICMS90(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMS90AType $iCMS90)
    {
        $this->iCMS90 = $iCMS90;
        return $this;
    }

    /**
     * Gets as iCMSPart
     *
     * Partilha do ICMS entre a UF de origem e UF de destino ou a UF definida na
     * legislação
     * Operação interestadual para consumidor final com partilha do ICMS devido na
     * operação entre a UF de origem e a UF do destinatário ou ou a UF definida na
     * legislação. (Ex. UF da concessionária de entrega do veículos)
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSPartAType
     */
    public function getICMSPart()
    {
        return $this->iCMSPart;
    }

    /**
     * Sets a new iCMSPart
     *
     * Partilha do ICMS entre a UF de origem e UF de destino ou a UF definida na
     * legislação
     * Operação interestadual para consumidor final com partilha do ICMS devido na
     * operação entre a UF de origem e a UF do destinatário ou ou a UF definida na
     * legislação. (Ex. UF da concessionária de entrega do veículos)
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSPartAType
     * $iCMSPart
     * @return self
     */
    public function setICMSPart(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSPartAType $iCMSPart)
    {
        $this->iCMSPart = $iCMSPart;
        return $this;
    }

    /**
     * Gets as iCMSST
     *
     * Grupo de informação do ICMSST devido para a UF de destino, nas operações
     * interestaduais de produtos que tiveram retenção antecipada de ICMS por ST na
     * UF do remetente. Repasse via Substituto Tributário.
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSTAType
     */
    public function getICMSST()
    {
        return $this->iCMSST;
    }

    /**
     * Sets a new iCMSST
     *
     * Grupo de informação do ICMSST devido para a UF de destino, nas operações
     * interestaduais de produtos que tiveram retenção antecipada de ICMS por ST na
     * UF do remetente. Repasse via Substituto Tributário.
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSTAType
     * $iCMSST
     * @return self
     */
    public function setICMSST(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSTAType $iCMSST)
    {
        $this->iCMSST = $iCMSST;
        return $this;
    }

    /**
     * Gets as iCMSSN101
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN101AType
     */
    public function getICMSSN101()
    {
        return $this->iCMSSN101;
    }

    /**
     * Sets a new iCMSSN101
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=101 (v.2.0)
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN101AType
     * $iCMSSN101
     * @return self
     */
    public function setICMSSN101(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN101AType $iCMSSN101)
    {
        $this->iCMSSN101 = $iCMSSN101;
        return $this;
    }

    /**
     * Gets as iCMSSN102
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN102AType
     */
    public function getICMSSN102()
    {
        return $this->iCMSSN102;
    }

    /**
     * Sets a new iCMSSN102
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=102, 103, 300 ou 400 (v.2.0))
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN102AType
     * $iCMSSN102
     * @return self
     */
    public function setICMSSN102(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN102AType $iCMSSN102)
    {
        $this->iCMSSN102 = $iCMSSN102;
        return $this;
    }

    /**
     * Gets as iCMSSN201
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN201AType
     */
    public function getICMSSN201()
    {
        return $this->iCMSSN201;
    }

    /**
     * Sets a new iCMSSN201
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=201 (v.2.0)
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN201AType
     * $iCMSSN201
     * @return self
     */
    public function setICMSSN201(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN201AType $iCMSSN201)
    {
        $this->iCMSSN201 = $iCMSSN201;
        return $this;
    }

    /**
     * Gets as iCMSSN202
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=202 ou 203 (v.2.0)
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN202AType
     */
    public function getICMSSN202()
    {
        return $this->iCMSSN202;
    }

    /**
     * Sets a new iCMSSN202
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL e CSOSN=202 ou 203 (v.2.0)
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN202AType
     * $iCMSSN202
     * @return self
     */
    public function setICMSSN202(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN202AType $iCMSSN202)
    {
        $this->iCMSSN202 = $iCMSSN202;
        return $this;
    }

    /**
     * Gets as iCMSSN500
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL,CRT=1 – Simples Nacional e
     * CSOSN=500 (v.2.0)
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN500AType
     */
    public function getICMSSN500()
    {
        return $this->iCMSSN500;
    }

    /**
     * Sets a new iCMSSN500
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL,CRT=1 – Simples Nacional e
     * CSOSN=500 (v.2.0)
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN500AType
     * $iCMSSN500
     * @return self
     */
    public function setICMSSN500(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN500AType $iCMSSN500)
    {
        $this->iCMSSN500 = $iCMSSN500;
        return $this;
    }

    /**
     * Gets as iCMSSN900
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e
     * CSOSN=900 (v2.0)
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN900AType
     */
    public function getICMSSN900()
    {
        return $this->iCMSSN900;
    }

    /**
     * Sets a new iCMSSN900
     *
     * Tributação do ICMS pelo SIMPLES NACIONAL, CRT=1 – Simples Nacional e
     * CSOSN=900 (v2.0)
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN900AType
     * $iCMSSN900
     * @return self
     */
    public function setICMSSN900(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType\ICMSSN900AType $iCMSSN900)
    {
        $this->iCMSSN900 = $iCMSSN900;
        return $this;
    }


}

