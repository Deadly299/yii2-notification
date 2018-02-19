<?php

namespace deadly299\notification;

/**
 * document-upload module definition class
 */
class Module extends \yii\base\Module
{

    public function getShortClass($object)
    {
        if(is_object($object)) {
            $className = get_class($object);
        } else {
            $className = $object;
        }


        if (preg_match('@\\\\([\w]+)$@', $className, $matches)) {
            $className = $matches[1];
        }

        return $className;
    }
}
