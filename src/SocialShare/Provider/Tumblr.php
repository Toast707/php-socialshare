<?php

/*
 * This file is part of the SocialShare package.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SocialShare\Provider;

use SocialShare\SocialShare;
use SocialShare\Exception\UnsupportedOperationException;

class Tumblr implements ProviderInterface
{
    const NAME = 'tumblr';
    const SHARE_URL = 'https://www.tumblr.com/share/link?%s';

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * {@inheritDoc}
     */
    public function getLink($url, array $options = array())
    {
        $options['url'] = $url;

        return sprintf(self::SHARE_URL, http_build_query($options, null, '&'));
    }

    /**
     * {@inheritDoc}
     *
     * @throws UnsupportedOperationException
     */
    public function getShares($url)
    {
        throw new UnsupportedOperationException(self::NAME, __FUNCTION__);
    }
}
