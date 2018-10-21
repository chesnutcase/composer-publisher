<?php

namespace chesnutcase\ComposerPublisher;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\Capable;

class ComposerPublisher implements PluginInterface, Capable
{
    public function activate(Composer $composer, IOInterface $io)
    {
        return 'Hello!';
    }

    public function getCapabilities()
    {
        return array(
            'Composer\Plugin\Capability\CommandProvider' => 'chesnutcase\ComposerPublisher\CommandProvider',
        );
    }
}
