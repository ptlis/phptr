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

namespace ptlis\CoverageMonitor\Serializer\Interfaces;

use ptlis\CoverageMonitor\Unified\Interfaces\FileInterface;
use ptlis\CoverageMonitor\Unified\RevisionCoverage;

/**
 * Interface that serializers must implement
 */
interface SerializerInterface
{
    /**
     * Serialize the revision coverage to disk.
     *
     * @param RevisionCoverage[] $revisionCoverageList
     *
     * @return string
     */
    public function serialize(array $revisionCoverageList);
}
