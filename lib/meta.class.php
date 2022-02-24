<?php

class Meta {

    private $charset;
    private $httpequiv;
    private $content;
    private $name;
    private $content1;

    function Meta ($charset, $httpequiv, $content, $name, $content1) {
        $this->charset = $charset;
        $this->httpequiv = $httpequiv;
        $this->content = $content;
        $this->name = $name;
        $this->content1 = $content1;
    }

    function __toString() {
        return "<meta charset=\"{$this->charset}\">
                <meta http-equiv=\"{$this->httpequiv}\" content=\"{$this->content}\">
                <meta name=\"{$this->name}\" content=\"{$this->content1}\">";
    }

}