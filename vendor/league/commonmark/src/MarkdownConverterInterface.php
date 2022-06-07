<?php

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark;

/**
 * Interface for a service which converts Markdown to HTML.
 *
 * @deprecated since 2.2; use {@link ConverterInterface} instead
 */
interface MarkdownConverterInterface
{
    /**
     * Converts Markdown to HTML.
     *
<<<<<<< HEAD
     * @param string $markdown
=======
     * @deprecated since 2.2; use {@link ConverterInterface::convert()} instead
>>>>>>> afcee33ce49d18ea9c50b50300a4641f51faf2d5
     *
     * @throws \RuntimeException
     *
     * @return string HTML
     *
     * @api
     */
    public function convertToHtml(string $markdown): string;
}
