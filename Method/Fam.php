<?php
namespace GDO\DogFriends\Method;

use GDO\Core\GDT;
use GDO\Core\Method;

final class Fam extends Method
{

    public function isCLI(): bool
    {
        return true;
    }

    public function getCLITrigger(): string
    {
        return 'fam';
    }

    public function execute(): GDT
    {
        return $this->message('msg_dog_fam');
    }

}
