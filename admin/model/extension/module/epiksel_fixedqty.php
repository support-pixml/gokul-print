<?php
define('EPMOD20_VERSION', "2.2.2");
define('OC_VERSION', "2.0.1.0");

class ModelExtensionModuleEpikselFixedQty extends Model {
	public function install() {
		if (!$this->getCheckDB()) {
			$this->db->query(
			"CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "product_fixedqty` (
				`fixedqty_id` int(11) NOT NULL AUTO_INCREMENT,
				`product_id` int(11) NOT NULL,
				`customer_group_id` varchar(64) NOT NULL,
				`value` int(11) NOT NULL,
				`title` varchar(255) DEFAULT NULL,
				`sort_order` int(3) NOT NULL DEFAULT '0',
				PRIMARY KEY (`fixedqty_id`)
			) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");
		}
	}

	public function update() {
		/* Added customer_group_id column. */
		$query = $this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . "product_fixedqty LIKE 'customer_group_id'");

		if (!$query->num_rows) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "product_fixedqty` ADD `customer_group_id` int(11) NOT NULL AFTER `product_id`;");
		}

		if (!$this->config->get($this->string('prefix') . 'epiksel_fixedqty_version') || $this->config->get($this->string('prefix') . 'epiksel_fixedqty_version') <= '2.1.0') {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "product_fixedqty` CHANGE `value` `value` int(11) NOT NULL");
		}

		// Update version
		$this->setVersion();
	}

	public function getCheckDB() {
		$query = $this->db->query("SHOW TABLES LIKE '". DB_PREFIX ."product_fixedqty'");

		return $query->rows;
	}

	protected function setVersion() {
		$this->load->model('setting/setting');

		$this->model_setting_setting->editSettingValue($this->string('prefix') . 'epiksel_fixedqty', $this->string('prefix') . 'epiksel_fixedqty_version', EPMOD20_VERSION);
	}

	protected function string($value) {
		$data = array();

		if (VERSION >= '3.0.0.0') {
			$data['prefix'] = 'module_';
		} else {
			$data['prefix'] = '';
		}

		return $data[$value];
	}
}