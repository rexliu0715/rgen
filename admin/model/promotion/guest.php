<?php
class ModelPromotionGuest extends Model {
	public function addGuest($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "promotion_guest SET author = '" . $this->db->escape($data['author']) . "', product_id = '" . (int)$data['product_id'] . "', text = '" . $this->db->escape(strip_tags($data['text'])) . "', rating = '" . (int)$data['rating'] . "', status = '" . (int)$data['status'] . "', date_added = '" . $this->db->escape($data['date_added']) . "'");

		$guest_id = $this->db->getLastId();

		return $guest_id;
	}

	public function editGuest($guest_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "promotion_guest SET author = '" . $this->db->escape($data['author']) . "', product_id = '" . (int)$data['product_id'] . "', text = '" . $this->db->escape(strip_tags($data['text'])) . "', rating = '" . (int)$data['rating'] . "', status = '" . (int)$data['status'] . "', date_added = '" . $this->db->escape($data['date_added']) . "', date_modified = NOW() WHERE guest_id = '" . (int)$guest_id . "'");
	}

	public function deleteGuest($guest_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "promotion_guest WHERE guest_id = '" . (int)$guest_id . "'");
	}

	public function getGuest($guest_id) {
		$query = $this->db->query("SELECT DISTINCT *, (SELECT pg.name FROM " . DB_PREFIX . "product_description pd WHERE pg.product_id = pg.product_id AND pg.language_id = '" . (int)$this->config->get('config_language_id') . "') AS product FROM " . DB_PREFIX . "promotion_guest pg WHERE pg.guest_id = '" . (int)$guest_id . "'");

		return $query->row;
	}

	public function getGuests($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "promotion_guest pg ";

		if (!empty($data['filter_name'])) {
			$sql .= " AND pg.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_email'])) {
			$sql .= " AND pg.email LIKE '" . $this->db->escape($data['filter_email']) . "%'";
		}

		if (isset($data['filter_telephone']) && !is_null($data['filter_telephone'])) {
			$sql .= " AND pg.telephone = '" . (int)$data['filter_telephone'] . "'";
		}

		if (!empty($data['filter_booking_date'])) {
			$sql .= " AND DATE(pg.booking_date) = DATE('" . $this->db->escape($data['filter_booking_date']) . "')";
		}

		$sort_data = array(
			'pg.name',
			'pg.email',
			'pg.telephone',
			'pg.booking_date'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY pg.date_added";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		var_dump($sql);
		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalGuests($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "promotion_guest pg ";

		if (!empty($data['filter_name'])) {
			$sql .= " AND pg.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}

		if (!empty($data['filter_email'])) {
			$sql .= " AND pg.email LIKE '" . $this->db->escape($data['filter_email']) . "%'";
		}

		if (isset($data['filter_telephone']) && !is_null($data['filter_telephone'])) {
			$sql .= " AND pg.telephone = '" . (int)$data['filter_telephone'] . "'";
		}

		if (!empty($data['filter_booking_date'])) {
			$sql .= " AND DATE(pg.booking_date) = DATE('" . $this->db->escape($data['filter_booking_date']) . "')";
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getTotalGuestsAwaitingApproval() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "promotion_guest WHERE status = '0'");

		return $query->row['total'];
	}
}