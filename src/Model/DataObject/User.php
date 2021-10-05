<?php

namespace App\Model\DataObject;

use Symfony\Component\Security\Core\User\UserInterface;

class User extends \Pimcore\Model\DataObject\User implements UserInterface
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

}
