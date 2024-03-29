<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Leilao;

class Avaliador
{

    private $maiorValor = -INF;
    private $menorValor = INF;
    public function avalia(Leilao $leilao): void
    {
        foreach ($leilao->getLances() as $lance)
        {
            if ($lance->getValor() > $this->getMaiorValor)
            {
                $this->maiorValor = $lance->getValor();
            } else if ($lance->getValor() < $this->menorValor)
            {
                $this->menorValor = $lance->getValor();
            }
        }
//        $lances = $leilao->getLances();
//        $ultimoLance = $lances[count($lances) -1 ];
//        $this->maiorValor = $ultimoLance->getValor();
    }

    public function getMaiorValor(): float
    {
        return $this->maiorValor;
    }
    public function getMenorValor(): float
    {
        return $this->menorValor;
    }
}
