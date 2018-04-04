<?php

namespace Spartan\Sniffs\Commenting;

class ClassCommentSniff extends \PHP_CodeSniffer\Standards\PEAR\Sniffs\Commenting\ClassCommentSniff
{
    protected $tags = [
        '@category'   => [
            'required'       => false,
            'allow_multiple' => false,
        ],
        '@package'    => [
            'required'       => true,
            'allow_multiple' => false,
        ],
        '@subpackage' => [
            'required'       => false,
            'allow_multiple' => false,
        ],
        '@author'     => [
            'required'       => true,
            'allow_multiple' => true,
        ],
        '@copyright'  => [
            'required'       => false,
            'allow_multiple' => true,
        ],
        '@license'    => [
            'required'       => true,
            'allow_multiple' => false,
        ],
        '@version'    => [
            'required'       => false,
            'allow_multiple' => false,
        ],
        '@link'       => [
            'required'       => false,
            'allow_multiple' => true,
        ],
        '@see'        => [
            'required'       => false,
            'allow_multiple' => true,
        ],
        '@since'      => [
            'required'       => false,
            'allow_multiple' => false,
        ],
        '@deprecated' => [
            'required'       => false,
            'allow_multiple' => false,
        ],
    ];
}
