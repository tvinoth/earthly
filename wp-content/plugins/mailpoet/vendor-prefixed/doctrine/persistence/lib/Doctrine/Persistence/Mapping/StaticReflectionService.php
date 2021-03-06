<?php
namespace MailPoetVendor\Doctrine\Persistence\Mapping;
if (!defined('ABSPATH')) exit;
use function strpos;
use function strrev;
use function strrpos;
use function substr;
class StaticReflectionService implements ReflectionService
{
 public function getParentClasses($class)
 {
 return [];
 }
 public function getClassShortName($className)
 {
 $nsSeparatorLastPosition = strrpos($className, '\\');
 if ($nsSeparatorLastPosition !== \false) {
 $className = substr($className, $nsSeparatorLastPosition + 1);
 }
 return $className;
 }
 public function getClassNamespace($className)
 {
 $namespace = '';
 if (strpos($className, '\\') !== \false) {
 $namespace = strrev(substr(strrev($className), (int) strpos(strrev($className), '\\') + 1));
 }
 return $namespace;
 }
 public function getClass($class)
 {
 return null;
 }
 public function getAccessibleProperty($class, $property)
 {
 return null;
 }
 public function hasPublicMethod($class, $method)
 {
 return \true;
 }
}
