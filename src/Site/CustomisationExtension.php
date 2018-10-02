<?php

namespace Bundle\Site;

use Bolt\Extension\Bolt\Sitemap\SitemapEvent;
use Bolt\Extension\Bolt\Sitemap\SitemapEvents;
use Bolt\Extension\SimpleExtension;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Site bundle extension loader.
 *
 * This is the base bundle you can use to further customise Bolt for your
 * specific site.
 *
 * It is perfectly safe to remove this bundle, just remember to remove the
 * entry from your .bolt.yml or .bolt.php file.
 *
 * For more information on building bundles see https://docs.bolt.cm/extensions
 */
class CustomisationExtension extends SimpleExtension
{
    protected function subscribe(EventDispatcherInterface $dispatcher)
    {
        $dispatcher->addListener(SitemapEvents::AFTER_COLLECTING_LINKS,
            function ($event) {
                /** @var SitemapEvent $event */
                $links = $event->getLinks();

                $links->add([
                    'link'  => '/nous-rejoindre',
                    'title' => 'Nous rejoindre',
                    'depth' => 1,
                ]);

                $links->add([
                    'link'  => '/le-centre',
                    'title' => 'Le centre',
                    'depth' => 1,
                ]);

                $links->add([
                    'link'  => '/contact',
                    'title' => 'Contact',
                    'depth' => 1,
                ]);
            }
        );
    }
}
