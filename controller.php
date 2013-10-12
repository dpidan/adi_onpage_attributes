<?php defined('C5_EXECUTE') or die(_('Access Denied.'));

/**
 * On-page attribute editing
 * allows for quick editing of page (collection) attributes
 * @author Daniel Peterson (daniel@artesiandesigninc.com) and Andrew Householder (andrew@artesiandesigninc.com) for Artesian Design
 *
 */

class AdiOnpageAttributesPackage extends Package {

	protected $pkgHandle = 'adi_onpage_attributes';
	protected $appVersionRequired = '5.5';
	protected $pkgVersion = '0.1';

	public function getPackageDescription() {
		return t('Installs on-page attribute editing tools.');
	}

	public function getPackageName() {
		return t('Artesian On-page Attributes');
	}

	public function install() {
		$pkg = parent::install();
	}

	public function upgrade() {
		parent::upgrade();
	}

}
