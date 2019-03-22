<?php
/**
 * Created by PhpStorm.
 * User: abstract
 * Date: 22/03/19
 * Time: 12:04 PM
 */

namespace SilverStripe\FullTextSearch\Solr\Services;


class Solr5Service extends Solr4Service {
	
	private static $core_class = Solr5Service_Core::class;
	
}