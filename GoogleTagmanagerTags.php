<?php

namespace Statamic\Addons\GoogleTagmanager;

use Statamic\Extend\Tags;

class GoogleTagmanagerTags extends Tags
{
    /**
     * The {{ google_tagmanager }} tag
     *
     * @return string|array
     */
    public function index()
    {
        //
    }

    /**
     * The {{ google_tagmanager:head }} tag
     *
     * @return string|array
     */
    public function head()
    {
        $tracking_id = str_replace(' ', '', $this->getConfig('tagmanager_id', ''));

        if( ! empty($tracking_id) ) {
            return $this->view('tagmanager-head', compact('tracking_id'));
        }

        return '<!-- Google Tag Manager is not setup yet! -->';
    }

    /**
     * The {{ google_tagmanager:body }} tag
     *
     * @return string|array
     */
    public function body()
    {
        $tracking_id = str_replace(' ', '', $this->getConfig('tagmanager_id', ''));

        if( ! empty($tracking_id) ) {
            return $this->view('tagmanager-body', compact('tracking_id'));
        }

        return '<!-- Google Tag Manager is not setup yet! -->';
    }
}
