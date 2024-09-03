<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p>Detailed Expense Page</p>
    <p><?= $transaction['date'] . " " . $transaction['description'] . " " . $transaction['amount'] . "€" ?></p>
    <p>
      <a href="/expenseReporting">Go Back</a>
    </p>
  </div>
</main>
<?php require('partials/footer.php') ?>