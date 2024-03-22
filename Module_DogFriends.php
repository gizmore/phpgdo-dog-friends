<?php
namespace GDO\DogFriends;

use GDO\Core\GDO_Module;

final class Module_DogFriends extends GDO_Module
{

    public function getDependencies(): array
    {
        return [
            'Dog',
        ];
    }

    public function onLoadLanguage(): void
    {
        $this->loadLanguage('lang/dogfriends');
    }

}
