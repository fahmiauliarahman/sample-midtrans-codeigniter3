<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once FCPATH . 'vendor/midtrans/midtrans-php/Midtrans.php';

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		// TODO: Change with your sandbox / production MIDTRANS_SERVER_KEY
		$client_key = '<your client key>';
		$server_key = '<your server key>';
		\Midtrans\Config::$serverKey = $server_key;
		\Midtrans\Config::$clientKey = $client_key;

		\Midtrans\Config::$isProduction = false;
		\Midtrans\Config::$isSanitized = true;
		\Midtrans\Config::$is3ds = true;

		// TODO: Change with your sample data for payment detail
		$transaction_details = [
			'order_id' => rand(100000, 999999),
			'gross_amount' => 63000,
		];

		// TODO: Change with your sample data for items
		$item_details = [
			[
				'id' => 1,
				'price' => 25000,
				'quantity' => 1,
				'name' => 'Mie Ayam Bakso'
			],

			[
				'id' => 2,
				'price' => 20000,
				'quantity' => 1,
				'name' => 'Bakso Kecil'
			],

			[
				'id' => 3,
				'price' => 5000,
				'quantity' => 2,
				'name' => 'Es Teh Manis'
			],

			[
				'id' => 4,
				'price' => 2000,
				'quantity' => 4,
				'name' => 'Kerupuk Putih'
			],
		];

		$transaction = [
			'transaction_details' => $transaction_details,
			'item_details' => $item_details,
		];

		$snap_token = \Midtrans\Snap::getSnapToken($transaction);

		$this->load->view('welcome_message', compact('transaction', 'client_key', 'snap_token'));
	}
}
