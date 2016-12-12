<?php
class ControllerInformationPromotion extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('information/promotion');

		$this->document->setTitle($this->language->get('heading_title'));

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->load->model('promotion/promotion');

			$promotion_id = $this->model_promotion_promotion->addGuest($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');
			// Add to activity log
			$this->load->model('promotion/promotion');

			$activity_data = array(
				'promotion_id'	=> $promotion_id,
				'name'         => $this->request->post['email'] . ' ' . $this->request->post['name']
			);

			$this->model_promotion_promotion->addActivity('promotion_guest_register', $activity_data);

			$this->response->redirect($this->url->link('information/promotion/success'));
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('information/promotion')
		);

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_promotion_title'] = $this->language->get('text_promotion_title');
		$data['text_promotion_header'] = $this->language->get('text_promotion_header');
		$data['text_promotion'] = $this->language->get('text_promotion');
		$data['text_booking'] = $this->language->get('text_booking');
		$data['text_address'] = $this->language->get('text_address');
		$data['text_telephone'] = $this->language->get('text_telephone');
		$data['text_fax'] = $this->language->get('text_fax');
		$data['text_open'] = $this->language->get('text_open');
		$data['text_comment'] = $this->language->get('text_comment');

		// Methods
		$data['text_methods'] = $this->language->get('text_methods');
		$data['text_method_1'] = $this->language->get('text_method_1');
		$data['text_method_2'] = $this->language->get('text_method_2');
		$data['text_method_3'] = $this->language->get('text_method_3');

		// Form
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_identity_card'] = $this->language->get('entry_identity_card');
		$data['entry_telephone'] = $this->language->get('entry_telephone');
		$data['entry_email'] = $this->language->get('entry_email');
		$data['entry_age']	= $this->language->get('entry_age');
		$data['entry_sex']	= $this->language->get('entry_sex');
		$data['entry_date']	= $this->language->get('entry_date');
		$data['entry_date_day']	= $this->language->get('entry_date_day');
		$data['entry_date_month']	= $this->language->get('entry_date_month');
		$data['entry_date_year']	= $this->language->get('entry_date_year');
		$data['entry_date_time']	= $this->language->get('entry_date_time');
		$data['entry_terms']	= $this->language->get('entry_terms');

		// Policy
		$data['text_policy_1']	= $this->language->get('text_policy_1');
		$data['text_policy_2']	= $this->language->get('text_policy_2');
		$data['text_policy_3']	= $this->language->get('text_policy_3');
		$data['text_policy_4']	= $this->language->get('text_policy_4');
		$data['text_policy_5']	= $this->language->get('text_policy_5');
		$data['text_policy_6']	= $this->language->get('text_policy_6');
		$data['text_policy_7']	= $this->language->get('text_policy_7');

		$data['button_map'] = $this->language->get('button_map');

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		if (isset($this->error['identity_card'])) {
			$data['error_identity_card'] = $this->error['identity_card'];
		} else {
			$data['error_identity_card'] = '';
		}

		if (isset($this->error['email'])) {
			$data['error_email'] = $this->error['email'];
		} else {
			$data['error_email'] = '';
		}

		if (isset($this->error['telephone'])) {
			$data['error_telephone'] = $this->error['telephone'];
		} else {
			$data['error_telephone'] = '';
		}

		$data['button_submit'] = $this->language->get('button_submit');

		$data['action'] = $this->url->link('information/promotion', '', true);

		$this->load->model('tool/image');

		if ($this->config->get('config_image')) {
			$data['image'] = $this->model_tool_image->resize($this->config->get('config_image'), $this->config->get($this->config->get('config_theme') . '_image_location_width'), $this->config->get($this->config->get('config_theme') . '_image_location_height'));
		} else {
			$data['image'] = false;
		}

		// Name
		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} else {
			$data['name'] = $this->customer->getFirstName();
		}

		// Identity Card
		if (isset($this->request->post['identity_card'])) {
			$data['identity_card'] = $this->request->post['identity_card'];
		} else {
			$data['identity_card'] = '';
		}

		// Telephone
		if (isset($this->request->post['telephone'])) {
			$data['telephone'] = $this->request->post['telephone'];
		}

		// Email
		if (isset($this->request->post['email'])) {
			$data['email'] = $this->request->post['email'];
		} else {
			$data['email'] = $this->customer->getEmail();
		}

		// Age
		if (isset($this->request->post['age'])) {
			$data['age'] = $this->request->post['age'];
		} else {
			$data['age'] = '';
		}

		// Captcha
		if ($this->config->get($this->config->get('config_captcha') . '_status') && in_array('promotion', (array)$this->config->get('config_captcha_page'))) {
			$data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'), $this->error);
		} else {
			$data['captcha'] = '';
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/promotion', $data));
	}

	protected function validate() {
		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 32)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if ((utf8_strlen($this->request->post['identity_card']) < 3) || (utf8_strlen($this->request->post['identity_card']) > 5)) {
			$this->error['identity_card'] = $this->language->get('error_identity_card');
		}

		if (!filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
			$this->error['email'] = $this->language->get('error_email');
		}

		if ((utf8_strlen($this->request->post['telephone']) < 8) || (utf8_strlen($this->request->post['telephone']) > 11)) {
			$this->error['telephone'] = $this->language->get('error_telephone');
		}

		if ($this->request->post['date_day'] == -1) {
			$this->error['date_day'] = $this->language->get('error_date_day');
		}

		if ($this->request->post['date_month'] == -1) {
			$this->error['date_month'] = $this->language->get('error_date_month');
		}

		if ($this->request->post['date_year'] == -1) {
			$this->error['date_year'] = $this->language->get('error_date_year');
		}

		if ($this->request->post['date_time'] == -1) {
			$this->error['date_time'] = $this->language->get('error_date_time');
		}

		// Captcha
		if ($this->config->get($this->config->get('config_captcha') . '_status') && in_array('promotion', (array)$this->config->get('config_captcha_page'))) {
			$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

			if ($captcha) {
				$this->error['captcha'] = $captcha;
			}
		}

		return !$this->error;
	}

	public function success() {
		$this->load->language('information/promotion');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('information/promotion')
		);

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_message'] = $this->language->get('text_success');

		$data['button_continue'] = $this->language->get('button_continue');

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/success', $data));
	}
}
