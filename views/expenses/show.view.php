<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mb-6">Detailed Expense Page</p>
    <p><?= htmlspecialchars($transaction['date'] . " " . $transaction['description'] . " " . $transaction['amount'] . "€" . " | " . $transaction['details']) ?></p>
    <p class="mt-6">
      <a href="/expenseReporting" class="text-blue-500 underline">Go Back</a>
    </p>
  </div>
</main>
<?php require('views/partials/footer.php') ?>