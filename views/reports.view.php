<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <?php foreach ($transactions as $transaction) : ?>
      <!-- <li>
        <a href="#" class="text-blue-500 underline:hover">
          <?= $transaction['date'] . " " . $transaction['description'] . " " . $transaction['amount'] . "€" ?>
        </a>
      </li> -->
    <?php endforeach; ?>
  </div>
</main>
<?php require('partials/footer.php') ?>