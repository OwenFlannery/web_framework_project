<?php
/**
 * Created by PhpStorm.
 * User: owen
 * Date: 20/04/2017
 * Time: 04:48
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="tagDb")
 */
class tagDb
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $tag;

    /***********************GETTERS AND SETTER*******/

    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set txt
     *
     * @param string $tag
     *
     * @return refDb
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }
}
