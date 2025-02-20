<?php

class Transferencia {
    public $destinatario;
    public $concepto;
    public $importe;

    public function __construct($destinatario, $concepto, $importe) {
        $this->destinatario = $destinatario;
        $this->concepto = $concepto;
        $this->importe = $importe;
    }

    public function getDestinatario() {
        return $this->destinatario;
    }

    public function getConcepto() {
        return $this->concepto;
    }

    public function getImporte() {
        return $this->importe;
    }

}

?>