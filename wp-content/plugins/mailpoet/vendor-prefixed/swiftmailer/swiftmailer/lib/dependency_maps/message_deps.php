<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
Swift_DependencyContainer::getInstance()->register('message.message')->asNewInstanceOf('MailPoetVendor\\Swift_Message')->register('message.mimepart')->asNewInstanceOf('MailPoetVendor\\Swift_MimePart');