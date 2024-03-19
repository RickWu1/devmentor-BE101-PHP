<?php

namespace App;

class Event
{
    // /**
    //  * @var NotifyChannel[]
    //  */
    private $notifyChannels;

    public function __construct(array $notifyChannels)
    {
        $this->notifyChannels = $notifyChannels;
    }

    public function dispatch(User $user)
    {
        foreach ($this->notifyChannels as $notifyChannel) {
            $message = $user->getLanguage()->getContent(get_called_class());
            $notifyChannel->notify($message);
        }
    }
}