<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to Sample Midtrans Snap x Codeigniter 3</title>
	<script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
	<div class="flex w-full items-center justify-center h-screen bg-slate-100 flex-col space-y-2">
		<h1 class="text-2xl font-bold">Form Pemesanan</h1>

		<div class="w-3/4 rounded-lg overflow-hidden shadow-lg">
			<div class="px-6 py-4 space-y-3">
				<div class="font-bold text-xl mb-2">Order No: <?= $transaction['transaction_details']['order_id']; ?></div>
				<?php foreach ($transaction['item_details'] as $item) : ?>
					<div class="flex w-full justify-between flex-row items-center">
						<p class="text-gray-700 text-base">
							<?= $item['quantity']; ?>x <?= $item['name']; ?>
						</p>
						<div class="flex flex-row space-x-2">
							<p class="text-gray-700 text-base font-bold">
								Rp. <?= number_format(($item['price'] * $item['quantity']), 0, ',', '.'); ?>
							</p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="px-6 pt-4 pb-2 space-y-2">
				<button id="pay-button" class="w-full h-12 px-6 text-blue-100 transition-colors duration-150 bg-blue-700 rounded-lg focus:shadow-outline hover:bg-blue-800">Bayar Sekarang </button>
			</div>
		</div>
	</div>

	<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?= $client_key ?>"></script>

	<script>
		document.getElementById('pay-button').onclick = function() {
			snap.pay('<?= $snap_token ?>');
		};
	</script>
</body>

</html>
