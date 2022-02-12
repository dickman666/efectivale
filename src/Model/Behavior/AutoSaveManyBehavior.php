<?php
namespace App\Model\Behavior;

use Cake\Event\Event;
use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

class AutoSaveManyBehavior extends Behavior
{

    public function getAssoc($association) {
        if ( $this->_table->associations()->has($association) ) {
            return $this->_table->associations()->get($association);
        }
        return false;
    }

    public function beforeMarshal($event, $data, &$options) {
        foreach ($this->_config as $association) {
            if ( ! $asc = $this->getAssoc($association) ) continue;
            $bindingKey = $asc->bindingKey();
            $foreignKey = $asc->foreignKey();
            $sourceTable = $asc->source();
            $propertyName = $asc->property();
            $displayField = $asc->displayField();
            if ( isset($data[$propertyName]) ) {
                $data[$propertyName] = array_map(
                    function($e) use ($displayField){
                        return [$displayField => $e];
                    },
                    $data[$propertyName]
                );
                $this->_table->{$association}->deleteAll([$foreignKey => $data[$bindingKey]]);
            }
        }
    }

}
