<?php

class Html {

    private $head;
    private $body;

    function Html($head, $body) {        
        $this->head = $head;
        $this->body = $body;
    }

    function __toString() {
        return "<!DOCTYPE html>
                    {$this->head}
                    {$this->body}
                </html>";
    }

}
