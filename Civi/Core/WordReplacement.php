<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.4                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2013                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 *
 * Generated from xml/schema/CRM/Core/WordReplacement.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */

namespace Civi\Core;

require_once 'Civi/Core/Entity.php';

use Doctrine\ORM\Mapping as ORM;

/**
 * WordReplacement
 *
 * @ORM\Table(name="civicrm_word_replacement", uniqueConstraints={@ORM\UniqueConstraint(name="UI_domain_find", columns={"domain_id","find_word"})}, indexes={@ORM\Index(name="FK_civicrm_word_replacement_domain_id", columns={"domain_id"})})
 * @ORM\Entity
 */
class WordReplacement extends \Civi\Core\Entity {

  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $id;
    
  /**
   * @var string
   *
   * @ORM\Column(name="find_word", type="string", length=255, nullable=true)
   * 
   */
  private $findWord;
  
  /**
   * @var string
   *
   * @ORM\Column(name="replace_word", type="string", length=255, nullable=true)
   * 
   */
  private $replaceWord;
  
  /**
   * @var boolean
   *
   * @ORM\Column(name="is_active", type="boolean", nullable=false)
   * 
   */
  private $isActive = '1';
  
  /**
   * @var string
   *
   * @ORM\Column(name="match_type", type="string", length=16, nullable=false)
   * 
   */
  private $matchType = '"wildcardMatch"';
  
  /**
   * @var \Civi\Core\Domain
   *
   * @ORM\ManyToOne(targetEntity="Civi\Core\Domain")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="domain_id", referencedColumnName="id")})
   */
  private $domain;

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }
    
  /**
   * Set findWord
   *
   * @param string $findWord
   * @return WordReplacement
   */
  public function setFindWord($findWord) {
    $this->findWord = $findWord;
    return $this;
  }

  /**
   * Get findWord
   *
   * @return string
   */
  public function getFindWord() {
    return $this->findWord;
  }
  
  /**
   * Set replaceWord
   *
   * @param string $replaceWord
   * @return WordReplacement
   */
  public function setReplaceWord($replaceWord) {
    $this->replaceWord = $replaceWord;
    return $this;
  }

  /**
   * Get replaceWord
   *
   * @return string
   */
  public function getReplaceWord() {
    return $this->replaceWord;
  }
  
  /**
   * Set isActive
   *
   * @param boolean $isActive
   * @return WordReplacement
   */
  public function setIsActive($isActive) {
    $this->isActive = $isActive;
    return $this;
  }

  /**
   * Get isActive
   *
   * @return boolean
   */
  public function getIsActive() {
    return $this->isActive;
  }
  
  /**
   * Set matchType
   *
   * @param string $matchType
   * @return WordReplacement
   */
  public function setMatchType($matchType) {
    $this->matchType = $matchType;
    return $this;
  }

  /**
   * Get matchType
   *
   * @return string
   */
  public function getMatchType() {
    return $this->matchType;
  }
  
  /**
   * Set domain
   *
   * @param \Civi\Core\Domain $domain
   * @return WordReplacement
   */
  public function setDomain(\Civi\Core\Domain $domain = null) {
    $this->domain = $domain;
    return $this;
  }

  /**
   * Get domain
   *
   * @return \Civi\Core\Domain
   */
  public function getDomain() {
    return $this->domain;
  }

  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields( ) {
    if ( !self::$_fields) {
      self::$_fields = array (
      
              'id' => array(
      
        'name' => 'id',
        'type' => CRM_Utils_Type::T_INT,
                        'required' => true,
                                             
                                    
                          ),
      
              'find_word' => array(
      
        'name' => 'find_word',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Find Word'),
                                 'maxlength' => 255,
                         'size' => CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'replace_word' => array(
      
        'name' => 'replace_word',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Replace Word'),
                                 'maxlength' => 255,
                         'size' => CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'is_active' => array(
      
        'name' => 'is_active',
        'type' => CRM_Utils_Type::T_BOOLEAN,
                'title' => ts('Word Replacement is Active'),
                                                     
                                           'default' => '1',
         
                          ),
      
              'match_type' => array(
      
        'name' => 'match_type',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Match Type'),
                                 'maxlength' => 16,
                         'size' => CRM_Utils_Type::TWELVE,
                           
                                           'default' => 'wildcardMatch',
         
                                     'pseudoconstant' => array(
                                '0' => 'not in database',
                    )
                 ),
      
              'domain_id' => array(
      
        'name' => 'domain_id',
        'type' => CRM_Utils_Type::T_INT,
                                                     
                                    
                'FKClassName' => 'CRM_Core_Domain',
                          ),
             );
    }
    return self::$_fields;
  }

}
