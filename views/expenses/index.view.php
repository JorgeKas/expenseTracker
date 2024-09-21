<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p>A page to list various types of expenses</p>
    <?php foreach ($transactions as $transaction) : ?>
      <?php $newDateFormat = date("d/m/Y", strtotime($transaction['date'])); ?>
      <li>
        <a href="/detailed-expense?id=<?= $transaction['id'] ?>" class="text-blue-500 underline:hover">
          <?= htmlspecialchars($newDateFormat . " | " . $transaction['description'] . " | " . $transaction['amount'] . " €") ?>
        </a>
      </li>
    <?php endforeach; ?>
  </div>
</main>
<?php require('views/partials/footer.php') ?>