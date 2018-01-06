<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class NodeDescriptionPlatform
{
    /**
     * @var string
     */
    protected $architecture;
    /**
     * @var string
     */
    protected $oS;

    /**
     * @return string
     */
    public function getArchitecture(): ?string
    {
        return $this->architecture;
    }

    /**
     * @param string $architecture
     *
     * @return self
     */
    public function setArchitecture(?string $architecture): self
    {
        $this->architecture = $architecture;

        return $this;
    }

    /**
     * @return string
     */
    public function getOS(): ?string
    {
        return $this->oS;
    }

    /**
     * @param string $oS
     *
     * @return self
     */
    public function setOS(?string $oS): self
    {
        $this->oS = $oS;

        return $this;
    }
}