<?php

/*
 * This file is part of the SymfonyCasts BUNDLE_NAME_HERE package.
 * Copyright (c) SymfonyCasts <https://symfonycasts.com/>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SymfonyCasts\Bundle\VerifyUser\Exception;

/**
 * @author Jesse Rushlow <jr@rushlow.dev>
 */
interface VerifyUserExceptionInterface
{
    public function getReason(): string;
}