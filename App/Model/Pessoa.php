<?php

namespace App\Model;


class Pessoa {

    private $codpes;
    private $nome;
    private $codpub;
    private $urlalu;
    private $urlort;

    

    /**
     * Get the value of codpes
     */ 
    public function getCodpes()
    {
        return $this->codpes;
    }

    /**
     * Set the value of codpes
     *
     * @return  self
     */ 
    public function setCodpes($codpes)
    {
        $this->codpes = $codpes;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of codpub
     */ 
    public function getCodpub()
    {
        return $this->codpub;
    }

    /**
     * Set the value of codpub
     *
     * @return  self
     */ 
    public function setCodpub($codpub)
    {
        $this->codpub = $codpub;

        return $this;
    }

    /**
     * Get the value of urlalu
     */ 
    public function getUrlalu()
    {
        return $this->urlalu;
    }

    /**
     * Set the value of urlalu
     *
     * @return  self
     */ 
    public function setUrlalu($urlalu)
    {
        $this->urlalu = $urlalu;

        return $this;
    }

    /**
     * Get the value of urlort
     */ 
    public function getUrlort()
    {
        return $this->urlort;
    }

    /**
     * Set the value of urlort
     *
     * @return  self
     */ 
    public function setUrlort($urlort)
    {
        $this->urlort = $urlort;

        return $this;
    }
}



