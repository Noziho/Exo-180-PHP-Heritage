<?php
class Habitation {
    public string $pays;
    public string $ville;
    public int $codePotal;
    public int $chambres;
    public int $pieces;

    public function __construct($pays, $ville, $codePotal, $chambres, $pieces)
    {
        $this->setPays($pays);
        $this->setVille($ville);
        $this->setCodePotal(59000);
        $this->setChambres(4);
        $this->setPieces(12);
    }

    /**
     * @return string
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return int
     */
    public function getCodePotal(): int
    {
        return $this->codePotal;
    }

    /**
     * @param int $codePotal
     */
    public function setCodePotal(int $codePotal): void
    {
        $this->codePotal = $codePotal;
    }

    /**
     * @return int
     */
    public function getChambres(): int
    {
        return $this->chambres;
    }

    /**
     * @param int $chambres
     */
    public function setChambres(int $chambres): void
    {
        $this->chambres = $chambres;
    }

    /**
     * @return int
     */
    public function getPieces(): int
    {
        return $this->pieces;
    }

    /**
     * @param int $pieces
     */
    public function setPieces(int $pieces): void
    {
        $this->pieces = $pieces;
    }
}