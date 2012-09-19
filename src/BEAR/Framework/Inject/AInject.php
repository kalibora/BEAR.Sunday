<?php
/**
 * BEAR.Framework
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace BEAR\Framework\Inject;

use BEAR\Resource\Referable;
use Ray\Di\Di\Inject;
use Ray\Di\Di\Named;

/**
 * Inject A(anchor)
 *
 * @package    BEAR.Framework
 * @subpackage Inject
 */
trait AInject
{
    /**
     * App directory path
     *
     * @var BEAR\Resource\A
     */
    private $a;

    /**
     * A(anchor) stter
     *
     * @param string $viewPath
     *
     * @return void
     *
     * @Inject
     */
    public function setAnchor(Referable $a)
    {
        $this->a = $a;
    }
}
