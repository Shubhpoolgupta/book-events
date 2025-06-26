<?php
  // prevent direct url access for /app/reuse/footer.php
  if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
      header("Location: ../../404.php");
      exit();
  };
?>

<!-- Social icons library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- Footer -->
<div class="footer">
        <span class="text-muted"> &copy; <?php print date("Y");?> BookEvents </span>
        <!-- Social media links removed -->
</div>
