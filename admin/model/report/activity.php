<?php
class ModelReportActivity extends Model {
	public function getActivities() {
		$query = $this->db->query("SELECT a.key, a.data, a.date_added FROM ((SELECT CONCAT('customer_', ca.key) AS `key`, ca.data, ca.date_added FROM `" . DB_PREFIX . "customer_activity` ca) UNION (SELECT CONCAT('affiliate_', aa.key) AS `key`, aa.data, aa.date_added FROM `" . DB_PREFIX . "affiliate_activity` aa) UNION	(SELECT CONCAT('promotion_', pa.key) AS `key`, pa.data, pa.date_added FROM `" . DB_PREFIX . "promotion_activity` pa)) a ORDER BY a.date_added DESC LIMIT 0,10");

		return $query->rows;
	}
}