<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use app\libraries\ImpostoDeRenda;

class ImpostoDerendaTest extends TestCase {

    public function testNome() {
        $declararacao = new ImpostoDeRenda("Kauê de Souza", "478.125.502-90", 50000.0);

        $this->assertEquals("Kauê de Souza", $declararacao->getNome());
    }

    public function testCpf() {
        $declararacao = new ImpostoDeRenda("Kauê de Souza", "478.125.502-90", 50000.0);

        $this->assertEquals("478.125.502-90", $declararacao->getCpf());
    }

    public function testRendimento() {
        $declararacao = new ImpostoDeRenda("Kauê de Souza", "478.125.502-90", 50000.0);

        $this->assertEquals(50000.0, $declararacao->getRendimento());
    }
}
?>
