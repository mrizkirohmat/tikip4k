<?php

declare(strict_types=1);

/*
 * This is part of the webuni/commonmark-attributes-extension package.
 *
 * (c) Martin Hasoň <martin.hason@gmail.com>
 * (c) Webuni s.r.o. <info@webuni.cz>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webuni\CommonMark\AttributesExtension;

use League\CommonMark\Block\Parser\BlockParserInterface;
use League\CommonMark\ContextInterface;
use League\CommonMark\Cursor;

final class AttributesBlockParser implements BlockParserInterface
{
    public function parse(ContextInterface $context, Cursor $cursor): bool
    {
        $state = $cursor->saveState();
        $attributes = AttributesUtils::parse($cursor);
        if (empty($attributes)) {
            return false;
        }

        if (null !== $cursor->getNextNonSpaceCharacter()) {
            $cursor->restoreState($state);

            return false;
        }

        $context->addBlock(new Attributes($attributes));
        $context->setBlocksParsed(true);

        return true;
    }
}
