<?php

namespace Statamic\Addons\GoogleTagmanager;

use Statamic\API\Nav;
use Statamic\API\User;
use Statamic\Extend\Listener;

class GoogleTagmanagerListener extends Listener
{
    /**
     * The events to be listened for, and the methods to call.
     *
     * @var array
     */
    public $events = [
        'cp.nav.created' => 'addNavItems'
    ];

    /**
     * @param \Statamic\CP\Navigation\Nav $nav
     */
    public function addNavItems($nav)
    {
        $user = User::getCurrent();
        if ($user && $user->isSuper()) {
            $store = Nav::item('Google Tagmanager')->route('addon.settings', 'google-tagmanager')->icon('line-graph');
            $nav->addTo('tools', $store);
        }
    }
}
