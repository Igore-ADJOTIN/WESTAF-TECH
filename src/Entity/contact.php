<?php

namespace App\Entity;

use App\Repository\ARepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


class Contact //extends AnotherClass
{
    /**
 *@var string|null
 *@Assert\NotBlank() 
 *@Assert\Length(min=2, max=110) 
 */
   private $name;

   /**
 *@var string|null
 *@Assert\NotBlank() 
 *@Assert\Email() 
 */
   private $email;

   /**
 *@var string|null
 *@Assert\NotBlank() 
 *@Assert\Regex(
 *pattern="/[0-9]/"
 ) 
 */
   private $tel;

   /**
 *@var string|null 
 *@Assert\Length(min=2, max=110) 
 */
   private $website;
   

   /**
 *@var string|null 
 *@Assert\Length(min=2, max=110) 
 */
   private $message;

}