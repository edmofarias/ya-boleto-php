<?php

/*
 * The MIT License
 *
 * Copyright 2013 Umbrella Tech.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Umbrella\Ya\Boleto\Bancos\BancoBrasil;

use Umbrella\Ya\Boleto\Banco;

/**
 * Clase abstrata que representa o Boleto. Os dados da classe foram retirados da FEBRABAN
 * @author italo <italolelis@lellysinformatica.com>
 * @since 1.0.0
 */
class BancoBrasil extends Banco
{

    /**
     * 
     * @param string $agencia
     * @param string $conta
     */
    public function __construct($agencia, $conta)
    {
        $numero = "001";
        $nome = "Banco do Brasil";
        parent::__construct($numero, $nome, $agencia, $conta);
    }

}
