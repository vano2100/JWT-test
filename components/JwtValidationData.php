<?php

namespace app\components;

class JwtValidationData extends \sizeg\jwt\JwtValidationData
{
 
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->validationData->setIssuer('http://phplesson.rr.local/');
        $this->validationData->setAudience('http://phplesson.rr.local/');
        $this->validationData->setId('4f1g23a12aa');

        parent::init();
    }
}  