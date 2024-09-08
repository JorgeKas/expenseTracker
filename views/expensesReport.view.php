<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p>A page to list various types of expenses</p>
      <?php foreach ($transactions as $transaction) : ?>
        <li>
          <a href="/transaction?id=<?= $transaction['id'] ?>" class="text-blue-500 underline:hover">
            <?= htmlspecialchars($transaction['date'] . " " . $transaction['description'] . " " . $transaction['amount'] . "€") ?>
          </a>
        </li>
      <?php endforeach; ?>
  </div>
</main>
<?php require('partials/footer.php') ?>