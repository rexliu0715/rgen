<?php
class ModelPromotionPromotion extends Model {

	public function addGuest($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "promotion_guest SET name = '" . $this->db->escape($data['name']) . "', identity_card = '" . $this->db->escape($data['identity_card']) . "', email = '" . $this->db->escape($data['email']) . "', telephone = '" . $this->db->escape($data['telephone']) . "', promotions = '" . implode(",", $data['promotions']) . "', age = '" . $this->db->escape($data['age']) . "', booking_date = '" . $this->db->escape($data['booking_date']) . "', date_time = '" . $this->db->escape($data['date_time']) . "', date_added = NOW()");

		$id = $this->db->getLastId();

		return $id;
	}

	public function addActivity($key, $data) {
		if (isset($data['promotion_id'])) {
			$promotion_id = $data['promotion_id'];
		} else {
			$promotion_id = 0;
		}

		$this->db->query("INSERT INTO " . DB_PREFIX . "promotion_activity SET `promotion_id` = '" . (int)$promotion_id . "', `key` = '" . $this->db->escape($key) . "', `data` = '" . $this->db->escape(json_encode($data)) . "', `ip` = '" . $this->db->escape($this->request->server['REMOTE_ADDR']) . "', `date_added` = NOW()");
	}
}