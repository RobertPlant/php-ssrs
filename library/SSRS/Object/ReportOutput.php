<?php

/**
 * Description of ExecutionParameters
 *
 * @author andrew
 */
class SSRS_Object_ReportOutput extends SSRS_Object_Abstract {

    public function download($filename){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: " . $this->mimeType);
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: " . strlen($this->Result));

        die($this->Result);
    }

    public function __toString(){
        return (string) $this->Result;
    }

}