## Codeigniter 3 sample with payment gateway - Midtrans

---

## Stack used:

- [Codeigniter 3](https://codeigniter.com/userguide3/)
- [Midtrans PHP](https://github.com/Midtrans/midtrans-php)
- [Tailwind](https://tailwindcss.com/)

---

## How to run this project

### Initial Setup On Midtrans

1. Register for midtrans account [here](https://dashboard.midtrans.com/register)
2. Login to your midtrans dashboard [here](https://dashboard.midtrans.com/login)
3. Change Environment from Production to Sandbox on the sidebar
4. Go To settings > access keys > and copy the Client Key and Server Key

### Integrate Midtrans with this sample

1. Clone this project using HTTPS or SSH
2. go to your root project folder
3. open terminal and run `composer install`
4. edit ` $config['base_url']` with your base url on `application/config/config.php`

5. edit `$client_key` value and `$serverKey` value on `application/controllers/Welcome.php`

6. (optional) You can change or edit the transaction details but never modify the key.

7. Access the project base url on your favorite browser (example: http://localhost/sample-midtrans)

8. enjoy.
