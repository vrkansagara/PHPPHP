<?php

namespace PHPPHP\Engine\OpLines;

class CastDouble extends \PHPPHP\Engine\OpLine {

    public function execute(\PHPPHP\Engine\ExecuteData $data) {
        $this->result->setValue($this->op1->toDouble());

        $data->nextOp();
    }

}