<?php

namespace UxGood\Bundle\ColorAdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use UxGood\Bundle\ColorAdminBundle\DependencyInjection\UxGoodColorAdminExtension;

class UxGoodColorAdminBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        // return the right extension instead of "auto-registering" it. Now the
        // alias can be uxgood_color_admin instead of ux_good_color_admin..
        if (null === $this->extension) {
            return new UxGoodColorAdminExtension();
        }

        return $this->extension;
    }

}
