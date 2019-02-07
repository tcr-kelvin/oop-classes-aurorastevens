<?php

class berekening {
    private $lengte;
    private $breedte;

    /**
     * berekening constructor.
     * @param $lengte
     * @param $breedte
     */
    public function __construct($lengte, $breedte)
    {
        $this->lengte = $lengte;
        $this->breedte = $breedte;
    }

    public function berekenoop(){
        return $this->breedte * $this->breedte;
    }


}

$ruimte = new berekening(10, 10);

echo $ruimte->berekenoop();
