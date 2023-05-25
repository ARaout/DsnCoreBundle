<?php
namespace Ageo\DsnCoreBundle\Contrat;

class ContratAgeoDsn
{
    private $contintern;

    /**
     * @return string
     */
    public function getContintern() : string
    {
        return $this->contintern;
    }

    /**
     * @param string $contintern
     */
    public function setContintern(string $contintern)
    {
        $this->contintern = $contintern;
    }


}