<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class notificationCard extends Component
{
    public string $notificationIcon;
    public string $notificationType;
    /**
     * Create a new component instance.
     */
    public function __construct($type)
    {
        $this->notificationType = $type;

        switch ($type) {
            case "alert-2":
            case "regular-1": {
                $this->notificationIcon = "fa-bell";
            }break;
            case "alert-1": {
                $this->notificationIcon = "fa-circle-exclamation";
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.notification-card');
    }
}
