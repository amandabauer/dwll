<?php

class Head {

    private $meta;
    private $title;

    function Head($meta, $title) {
        $this->meta = $meta;
        $this->title = $title;
    }

    function __toString() {
                
        return "<head>
                    {$this->meta}
                    {$this->title}
                </head>";
    }

}
