<?php
class ControllerPromotionGuest extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('promotion/guest');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('promotion/guest');

		$this->getList();
	}

	// public function add() {
	// 	$this->load->language('promotion/guest');

	// 	$this->document->setTitle($this->language->get('heading_title'));

	// 	$this->load->model('promotion/guest');

	// 	if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
	// 		$this->model_promotion_guest->addGuest($this->request->post);

	// 		$this->session->data['success'] = $this->language->get('text_success');

	// 		$url = '';

	// 		if (isset($this->request->get['filter_name'])) {
	// 			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
	// 		}

	// 		if (isset($this->request->get['filter_email'])) {
	// 			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
	// 		}

	// 		if (isset($this->request->get['filter_telephone'])) {
	// 			$url .= '&filter_telephone=' . $this->request->get['filter_telephone'];
	// 		}

	// 		if (isset($this->request->get['filter_date_added'])) {
	// 			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
	// 		}

	// 		if (isset($this->request->get['sort'])) {
	// 			$url .= '&sort=' . $this->request->get['sort'];
	// 		}

	// 		if (isset($this->request->get['order'])) {
	// 			$url .= '&order=' . $this->request->get['order'];
	// 		}

	// 		if (isset($this->request->get['page'])) {
	// 			$url .= '&page=' . $this->request->get['page'];
	// 		}

	// 		$this->response->redirect($this->url->link('promotion/guest', 'token=' . $this->session->data['token'] . $url, true));
	// 	}

	// 	$this->getForm();
	// }

	// public function edit() {
	// 	$this->load->language('promotion/guest');

	// 	$this->document->setTitle($this->language->get('heading_title'));

	// 	$this->load->model('promotion/guest');

	// 	if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
	// 		$this->model_promotion_guest->editGuest($this->request->get['guest_id'], $this->request->post);

	// 		$this->session->data['success'] = $this->language->get('text_success');

	// 		$url = '';

	// 		if (isset($this->request->get['filter_name'])) {
	// 			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
	// 		}

	// 		if (isset($this->request->get['filter_email'])) {
	// 			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
	// 		}

	// 		if (isset($this->request->get['filter_telephone'])) {
	// 			$url .= '&filter_telephone=' . $this->request->get['filter_telephone'];
	// 		}

	// 		if (isset($this->request->get['filter_date_added'])) {
	// 			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
	// 		}

	// 		if (isset($this->request->get['sort'])) {
	// 			$url .= '&sort=' . $this->request->get['sort'];
	// 		}

	// 		if (isset($this->request->get['order'])) {
	// 			$url .= '&order=' . $this->request->get['order'];
	// 		}

	// 		if (isset($this->request->get['page'])) {
	// 			$url .= '&page=' . $this->request->get['page'];
	// 		}

	// 		$this->response->redirect($this->url->link('promotion/guest', 'token=' . $this->session->data['token'] . $url, true));
	// 	}

	// 	$this->getForm();
	// }

	// public function delete() {
	// 	$this->load->language('promotion/guest');

	// 	$this->document->setTitle($this->language->get('heading_title'));

	// 	$this->load->model('promotion/guest');

	// 	if (isset($this->request->post['selected']) && $this->validateDelete()) {
	// 		foreach ($this->request->post['selected'] as $guest_id) {
	// 			$this->model_promotion_guest->deleteGuest($guest_id);
	// 		}

	// 		$this->session->data['success'] = $this->language->get('text_success');

	// 		$url = '';

	// 		if (isset($this->request->get['filter_name'])) {
	// 			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
	// 		}

	// 		if (isset($this->request->get['filter_email'])) {
	// 			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
	// 		}

	// 		if (isset($this->request->get['filter_telephone'])) {
	// 			$url .= '&filter_telephone=' . $this->request->get['filter_telephone'];
	// 		}

	// 		if (isset($this->request->get['filter_date_added'])) {
	// 			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
	// 		}

	// 		if (isset($this->request->get['sort'])) {
	// 			$url .= '&sort=' . $this->request->get['sort'];
	// 		}

	// 		if (isset($this->request->get['order'])) {
	// 			$url .= '&order=' . $this->request->get['order'];
	// 		}

	// 		if (isset($this->request->get['page'])) {
	// 			$url .= '&page=' . $this->request->get['page'];
	// 		}

	// 		$this->response->redirect($this->url->link('promotion/guest', 'token=' . $this->session->data['token'] . $url, true));
	// 	}

	// 	$this->getList();
	// }

	protected function getList() {
		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = null;
		}

		if (isset($this->request->get['filter_email'])) {
			$filter_email = $this->request->get['filter_email'];
		} else {
			$filter_email = null;
		}

		if (isset($this->request->get['filter_telephone'])) {
			$filter_telephone = $this->request->get['filter_telephone'];
		} else {
			$filter_telephone = null;
		}

		if (isset($this->request->get['filter_date_added'])) {
			$filter_date_added = $this->request->get['filter_date_added'];
		} else {
			$filter_date_added = null;
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'DESC';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'date_added';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_telephone'])) {
			$url .= '&filter_telephone=' . $this->request->get['filter_telephone'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('promotion/guest', 'token=' . $this->session->data['token'] . $url, true)
		);

		$data['add'] = $this->url->link('promotion/guest/add', 'token=' . $this->session->data['token'] . $url, true);
		$data['delete'] = $this->url->link('promotion/guest/delete', 'token=' . $this->session->data['token'] . $url, true);

		$data['guests'] = array();

		$filter_data = array(
			'filter_name'    => $filter_name,
			'filter_email'     => $filter_email,
			'filter_telephone'     => $filter_telephone,
			'filter_booking_date' => $filter_booking_date,
			'sort'              => $sort,
			'order'             => $order,
			'start'             => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'             => $this->config->get('config_limit_admin')
		);

		$guest_total = $this->model_promotion_guest->getTotalGuests($filter_data);

		$results = $this->model_promotion_guest->getGuests($filter_data);

		foreach ($results as $result) {
			$data['guests'][] = array(
				'guest_id'  => $result['guest_id'],
				'name'       => $result['name'],
				'email'     => $result['email'],
				'identity_card'     => $result['identity_card'],
				'telephone'     => $result['telephone'],
				'booking_date'	=> date($this->language->get('date_format_short'), strtotime($result['booking_date'])) . ' ** ' . $result['date_time'], 
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'edit'       => $this->url->link('promotion/guest/edit', 'token=' . $this->session->data['token'] . '&guest_id=' . $result['guest_id'] . $url, true)
			);
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_list'] = $this->language->get('text_list');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_confirm'] = $this->language->get('text_confirm');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['column_name'] = $this->language->get('column_name');
		$data['column_email'] = $this->language->get('column_email');
		$data['column_identity_card'] = $this->language->get('column_identity_card');
		$data['column_booking_date'] = $this->language->get('column_booking_date');
		$data['column_telephone'] = $this->language->get('column_telephone');
		$data['column_date_added'] = $this->language->get('column_date_added');
		$data['column_action'] = $this->language->get('column_action');

		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_email'] = $this->language->get('entry_email');
		$data['entry_identity_card'] = $this->language->get('entry_identity_card');
		$data['entry_booking_date'] = $this->language->get('entry_booking_date');
		$data['entry_telephone'] = $this->language->get('entry_telephone');
		$data['entry_date_added'] = $this->language->get('entry_date_added');

		$data['button_add'] = $this->language->get('button_add');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_delete'] = $this->language->get('button_delete');
		$data['button_filter'] = $this->language->get('button_filter');

		$data['token'] = $this->session->data['token'];

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_telephone'])) {
			$url .= '&filter_telephone=' . $this->request->get['filter_telephone'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('promotion/guest', 'token=' . $this->session->data['token'] . '&sort=pd.name' . $url, true);
		$data['sort_email'] = $this->url->link('promotion/guest', 'token=' . $this->session->data['token'] . '&sort=r.email' . $url, true);
		$data['sort_booking_date'] = $this->url->link('promotion/guest', 'token=' . $this->session->data['token'] . '&sort=r.booking_date' . $url, true);
		$data['sort_telephone'] = $this->url->link('promotion/guest', 'token=' . $this->session->data['token'] . '&sort=r.telephone' . $url, true);
		$data['sort_date_added'] = $this->url->link('promotion/guest', 'token=' . $this->session->data['token'] . '&sort=r.date_added' . $url, true);

		$url = '';

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_email'])) {
			$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_telephone'])) {
			$url .= '&filter_telephone=' . $this->request->get['filter_telephone'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $guest_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('promotion/guest', 'token=' . $this->session->data['token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($guest_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($guest_total - $this->config->get('config_limit_admin'))) ? $guest_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $guest_total, ceil($guest_total / $this->config->get('config_limit_admin')));

		$data['filter_name'] = $filter_name;
		$data['filter_email'] = $filter_email;
		$data['filter_telephone'] = $filter_telephone;
		$data['filter_date_added'] = $filter_date_added;

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('promotion/guest_list', $data));
	}

	// protected function getForm() {
	// 	$data['heading_title'] = $this->language->get('heading_title');

	// 	$data['text_form'] = !isset($this->request->get['guest_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');
	// 	$data['text_enabled'] = $this->language->get('text_enabled');
	// 	$data['text_disabled'] = $this->language->get('text_disabled');

	// 	$data['entry_name'] = $this->language->get('entry_name');
	// 	$data['entry_email'] = $this->language->get('entry_email');
	// 	$data['entry_booking_date'] = $this->language->get('entry_booking_date');
	// 	$data['entry_date_added'] = $this->language->get('entry_date_added');
	// 	$data['entry_telephone'] = $this->language->get('entry_telephone');
	// 	$data['entry_text'] = $this->language->get('entry_text');

	// 	$data['help_name'] = $this->language->get('help_name');

	// 	$data['button_save'] = $this->language->get('button_save');
	// 	$data['button_cancel'] = $this->language->get('button_cancel');

	// 	if (isset($this->error['warning'])) {
	// 		$data['error_warning'] = $this->error['warning'];
	// 	} else {
	// 		$data['error_warning'] = '';
	// 	}

	// 	if (isset($this->error['name'])) {
	// 		$data['error_name'] = $this->error['name'];
	// 	} else {
	// 		$data['error_name'] = '';
	// 	}

	// 	if (isset($this->error['email'])) {
	// 		$data['error_email'] = $this->error['email'];
	// 	} else {
	// 		$data['error_email'] = '';
	// 	}

	// 	if (isset($this->error['text'])) {
	// 		$data['error_text'] = $this->error['text'];
	// 	} else {
	// 		$data['error_text'] = '';
	// 	}

	// 	if (isset($this->error['booking_date'])) {
	// 		$data['error_booking_date'] = $this->error['booking_date'];
	// 	} else {
	// 		$data['error_booking_date'] = '';
	// 	}

	// 	$url = '';

	// 	if (isset($this->request->get['filter_name'])) {
	// 		$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
	// 	}

	// 	if (isset($this->request->get['filter_email'])) {
	// 		$url .= '&filter_email=' . urlencode(html_entity_decode($this->request->get['filter_email'], ENT_QUOTES, 'UTF-8'));
	// 	}

	// 	if (isset($this->request->get['filter_telephone'])) {
	// 		$url .= '&filter_telephone=' . $this->request->get['filter_telephone'];
	// 	}

	// 	if (isset($this->request->get['filter_date_added'])) {
	// 		$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
	// 	}

	// 	if (isset($this->request->get['sort'])) {
	// 		$url .= '&sort=' . $this->request->get['sort'];
	// 	}

	// 	if (isset($this->request->get['order'])) {
	// 		$url .= '&order=' . $this->request->get['order'];
	// 	}

	// 	if (isset($this->request->get['page'])) {
	// 		$url .= '&page=' . $this->request->get['page'];
	// 	}

	// 	$data['breadcrumbs'] = array();

	// 	$data['breadcrumbs'][] = array(
	// 		'text' => $this->language->get('text_home'),
	// 		'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
	// 	);

	// 	$data['breadcrumbs'][] = array(
	// 		'text' => $this->language->get('heading_title'),
	// 		'href' => $this->url->link('promotion/guest', 'token=' . $this->session->data['token'] . $url, true)
	// 	);

	// 	if (!isset($this->request->get['guest_id'])) {
	// 		$data['action'] = $this->url->link('promotion/guest/add', 'token=' . $this->session->data['token'] . $url, true);
	// 	} else {
	// 		$data['action'] = $this->url->link('promotion/guest/edit', 'token=' . $this->session->data['token'] . '&guest_id=' . $this->request->get['guest_id'] . $url, true);
	// 	}

	// 	$data['cancel'] = $this->url->link('promotion/guest', 'token=' . $this->session->data['token'] . $url, true);

	// 	if (isset($this->request->get['guest_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
	// 		$guest_info = $this->model_promotion_guest->getGuest($this->request->get['guest_id']);
	// 	}

	// 	$data['token'] = $this->session->data['token'];

	// 	$this->load->model('catalog/name');

	// 	if (isset($this->request->post['name_id'])) {
	// 		$data['name_id'] = $this->request->post['name_id'];
	// 	} elseif (!empty($guest_info)) {
	// 		$data['name_id'] = $guest_info['name_id'];
	// 	} else {
	// 		$data['name_id'] = '';
	// 	}

	// 	if (isset($this->request->post['name'])) {
	// 		$data['name'] = $this->request->post['name'];
	// 	} elseif (!empty($guest_info)) {
	// 		$data['name'] = $guest_info['name'];
	// 	} else {
	// 		$data['name'] = '';
	// 	}

	// 	if (isset($this->request->post['email'])) {
	// 		$data['email'] = $this->request->post['email'];
	// 	} elseif (!empty($guest_info)) {
	// 		$data['email'] = $guest_info['email'];
	// 	} else {
	// 		$data['email'] = '';
	// 	}

	// 	if (isset($this->request->post['text'])) {
	// 		$data['text'] = $this->request->post['text'];
	// 	} elseif (!empty($guest_info)) {
	// 		$data['text'] = $guest_info['text'];
	// 	} else {
	// 		$data['text'] = '';
	// 	}

	// 	if (isset($this->request->post['booking_date'])) {
	// 		$data['booking_date'] = $this->request->post['booking_date'];
	// 	} elseif (!empty($guest_info)) {
	// 		$data['booking_date'] = $guest_info['booking_date'];
	// 	} else {
	// 		$data['booking_date'] = '';
	// 	}

	// 	if (isset($this->request->post['date_added'])) {
	// 		$data['date_added'] = $this->request->post['date_added'];
	// 	} elseif (!empty($guest_info)) {
	// 		$data['date_added'] = ($guest_info['date_added'] != '0000-00-00 00:00' ? $guest_info['date_added'] : '');
	// 	} else {
	// 		$data['date_added'] = '';
	// 	}

	// 	if (isset($this->request->post['telephone'])) {
	// 		$data['telephone'] = $this->request->post['telephone'];
	// 	} elseif (!empty($guest_info)) {
	// 		$data['telephone'] = $guest_info['telephone'];
	// 	} else {
	// 		$data['telephone'] = '';
	// 	}

	// 	$data['header'] = $this->load->controller('common/header');
	// 	$data['column_left'] = $this->load->controller('common/column_left');
	// 	$data['footer'] = $this->load->controller('common/footer');

	// 	$this->response->setOutput($this->load->view('promotion/guest_form', $data));
	// }

	// protected function validateForm() {
	// 	if (!$this->user->hasPermission('modify', 'promotion/guest')) {
	// 		$this->error['warning'] = $this->language->get('error_permission');
	// 	}

	// 	if (!$this->request->post['name_id']) {
	// 		$this->error['name'] = $this->language->get('error_name');
	// 	}

	// 	if ((utf8_strlen($this->request->post['email']) < 3) || (utf8_strlen($this->request->post['email']) > 64)) {
	// 		$this->error['email'] = $this->language->get('error_email');
	// 	}

	// 	if (utf8_strlen($this->request->post['text']) < 1) {
	// 		$this->error['text'] = $this->language->get('error_text');
	// 	}

	// 	if (!isset($this->request->post['booking_date']) || $this->request->post['booking_date'] < 0 || $this->request->post['booking_date'] > 5) {
	// 		$this->error['booking_date'] = $this->language->get('error_booking_date');
	// 	}

	// 	return !$this->error;
	// }

	// protected function validateDelete() {
	// 	if (!$this->user->hasPermission('modify', 'promotion/guest')) {
	// 		$this->error['warning'] = $this->language->get('error_permission');
	// 	}

	// 	return !$this->error;
	// }
}