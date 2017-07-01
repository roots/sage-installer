<?php

namespace Roots\Sage\Installer;

use Composer\Script\Event;
use Roots\Sage\Installer\Console\Exceptions\ConfigureCommandException;
use Symfony\Component\Process\Process;

class ComposerScript
{
    public static function postCreateProject(Event $event)
    {
        if (!$event->getIO()->isInteractive()) {
            $event->getIO()->write('<info>Interactive mode disabled. Skipping post-create-project routine.</info>');
            return;
        }
        if (!self::isWordPressTheme($event)) {
            throw new ConfigureCommandException('Composer hooks must be called from your theme root.');
        }
        $sage = dirname(__DIR__).'/bin/sage';
        (new Process(sprintf('php %s %s', $sage, 'meta')))->setTty(true)->run();
        (new Process(sprintf('php %s %s', $sage, 'config')))->setTty(true)->run();
        (new Process(sprintf('php %s %s', $sage, 'preset')))->setTty(true)->run();
    }

    protected static function isWordPressTheme(Event $event)
    {
        return $event->getComposer()->getPackage()->getType() === 'wordpress-theme'
            && file_exists(getcwd().'/resources/style.css');
    }
}
