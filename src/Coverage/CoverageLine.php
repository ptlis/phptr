<?php

/**
 * PHP Version 5.3
 *
 * @copyright   (c) 2015 brian ridley
 * @author      brian ridley <ptlis@ptlis.net>
 * @license     http://opensource.org/licenses/MIT MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ptlis\CoverageMonitor\Coverage;

/**
 * Class representing a signle line in a source file.
 */
class CoverageLine
{
    const SKIPPED = 0;
    const SUCCESS = 1;
    const ERROR = 2;
    const PARTIAL_SUCCESS = 3;
    const UNCOVERED = 4;

    /**
     * @var int
     */
    private $lineNo;

    /**
     * @var string
     */
    private $content;

    /**
     * @var int
     */
    private $state;


    /**
     * Constructor
     *
     * @param int $lineNo
     * @param string $content
     * @param int $state
     */
    public function __construct($lineNo, $content, $state)
    {
        $this->lineNo = $lineNo;
        $this->content = $content;
        $this->state = $state;
    }
}
