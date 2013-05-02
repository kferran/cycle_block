<?php  
defined('C5_EXECUTE') or die("Access Denied.");

class CycleSliderPackage extends Package{

	protected $pkgHandle = "cycle_slider";
	protected $appVersionRequired = "5.5.0.0";
	protected $pkgVersion = "0.0.1";
			
	public function getPackageName(){
		return t("cycleslider");
	}
	public function getPackageDescription(){
		return t("Integrates the Cycle plugin for slideshows.");
	}
	public function install(){
		$pkg = parent::install();
	}
	public function uninstall() {
		$pkg = parent::uninstall();
	}	

}