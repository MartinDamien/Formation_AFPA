<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\XmlConfiguration;

use DOMDocument;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RenameBeStrictAboutCoversAnnotationAttribute implements Migration
{
    public function migrate(DOMDocument $document): void
    {
        $root = $document->documentElement;

        if ($root->hasAttribute('beStrictAboutCoverageMetadata')) {
            return;
        }

        if (!$root->hasAttribute('beStrictAboutCoversAnnotation')) {
            return;
        }

        $root->setAttribute('beStrictAboutCoverageMetadata', $root->getAttribute('beStrictAboutCoversAnnotation'));
        $root->removeAttribute('beStrictAboutCoversAnnotation');
    }
}
