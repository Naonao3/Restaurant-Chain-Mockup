<?php

namespace Interfaces;

interface FileConvertertible{
    public function toString():string;
    public function toHTML():string;
    public function toMarkdown():string;
    public function toArray():array;
}

?>