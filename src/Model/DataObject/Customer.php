<?php

namespace App\Model\DataObject;

use Symfony\Component\Security\Core\User\UserInterface;

class Customer extends \Pimcore\Model\DataObject\Customer implements UserInterface
{
    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials()
    {
        /** @var Password $field */
        $field = $this->getClass()->getFieldDefinition('password');
        $field->getDataForResource($this->getPassword(), $this);
    }

    public function getUsername()
    {
        return $this->getFirstname();
    }

}
