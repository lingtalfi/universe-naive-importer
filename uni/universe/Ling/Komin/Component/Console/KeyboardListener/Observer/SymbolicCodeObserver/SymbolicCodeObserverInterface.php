<?php

/*
 * This file is part of the BeeFramework package.
 *
 * (c) Ling Talfi <lingtalfi@bee-framework.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ling\Komin\Component\Console\KeyboardListener\Observer\SymbolicCodeObserver;
use Ling\Komin\Component\Console\KeyboardListener\KeyboardListenerInterface;


/**
 * SymbolicCodeObserverInterface
 * @author Lingtalfi
 * 2015-05-07
 * 
 */
interface SymbolicCodeObserverInterface {

    public function notify($code, $string, KeyboardListenerInterface $keyboardListener, $fromRead = true);
}
