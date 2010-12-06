<?php
class CustomSiteConfig extends DataObjectDecorator {
	
	function extraStatics() {
		return array(
			'db' => array(
				'GA' => 'HTMLText'
			),
			'has_one' => array(
				'SiteLogo' => 'Image'
			)
		);
	}
 
	public function updateCMSFields(FieldSet &$fields) {
		$fields->addFieldToTab("Root.Main", new ImageField("SiteLogo", "Logo"));
		$fields->addFieldToTab("Root.Main", new TextareaField("GA", "LastCode ej: Google Analitycs Code"));
	}
}
?>
