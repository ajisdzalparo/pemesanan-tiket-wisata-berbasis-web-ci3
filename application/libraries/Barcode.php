<?php

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class Barcode {

    public function generate($data) {
        $qrCode = new QrCode($data);
        $qrCode->setSize(300);
        $qrCode->setMargin(10);

        $writer = new PngWriter();
        $result = $writer->write($qrCode);

        return $result->getDataUri();
    }
}