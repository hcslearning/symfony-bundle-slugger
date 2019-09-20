<?php

namespace HCS\SluggerBundle\Service;

class HCSSluggerService {
    
    public function slugify($texto): string {        
        $texto2 = str_replace(' ', '-', $texto);
        $url = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_\-] remove; Lower()', $texto2);
        return $url;
    }
    
}