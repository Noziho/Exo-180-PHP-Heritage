<?php
class Maison extends Habitation {
    public bool $jardin;
    public int $etages;
    public bool $garage;

    public function __construct($pays, $ville, $codePotal, $chambres, $pieces, $etages, $garage, $jardin)
    {
         parent::__construct($pays, $ville, $codePotal, $chambres, $pieces );
        $this->setEtages($etages);
        $this->setGarage($garage);
        $this->setJardin($jardin);
    }

    /**
     * @return bool
     */
    public function isJardin(): bool
    {
        return $this->jardin;
    }

    /**
     * @param bool $jardin
     */
    public function setJardin(bool $jardin): void
    {
        $this->jardin = $jardin;
    }

    /**
     * @return int
     */
    public function getEtages(): int
    {
        return $this->etages;
    }

    /**
     * @param int $etages
     */
    public function setEtages(int $etages): void
    {
        $this->etages = $etages;
    }

    /**
     * @return bool
     */
    public function isGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }

}