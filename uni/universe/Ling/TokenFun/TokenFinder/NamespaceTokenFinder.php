<?php


namespace Ling\TokenFun\TokenFinder;

use Ling\TokenFun\TokenArrayIterator\TokenArrayIterator;
use Ling\TokenFun\TokenArrayIterator\Tool\TokenArrayIteratorTool;
use Ling\TokenFun\Tool\TokenTool;

/**
 * The NamespaceTokenFinder class.
 *
 *
 * If finds a namespace, like
 *
 *          namespace ArachnophoBee\Tool;
 * 
 * 
 */
class NamespaceTokenFinder extends RecursiveTokenFinder
{


    /**
     * @implementation
     */
    public function find(array $tokens)
    {
        $ret = [];
        $tai = new TokenArrayIterator($tokens);
        $start = null;
        while ($tai->valid()) {
            $cur = $tai->current();
            if (null === $start) {
                if (TokenTool::match(T_NAMESPACE, $cur)) {
                    $start = $tai->key();
                }
            }
            else {

                $found = false;
                TokenArrayIteratorTool::skipWhiteSpaces($tai);

                if (true === TokenArrayIteratorTool::skipNsChain($tai)) {
                    TokenArrayIteratorTool::skipWhiteSpaces($tai);
                    if (TokenTool::match(';', $tai->current())) {
                        $found = true;
                        $ret[] = [$start, $tai->key()];
                        $this->onMatchFound($start, $tai);
                        $start = null;
                    }
                }

                if (false === $found) {
                    $start = null;
                }
            }
            $tai->next();
        }

        return $ret;
    }

}
