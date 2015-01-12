<?php

namespace Acme\Bundle\HotelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;

use Acme\Bundle\HotelBundle\Model\ExtendHotel;

/**
 * @ORM\Entity()
 * @ORM\Table(name="acme_hotel")
 * @Config(
 *      defaultValues={
 *          "entity"={
 *              "icon"="icon-suitcase"
 *          }
 *      }
 * )
 */
class Hotel extends ExtendHotel
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * Returns the Hotel unique id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Hotel name
     *
     * @param string $name New name
     *
     * @return Hotel
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
