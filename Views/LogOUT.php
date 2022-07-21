<?php
session_start();

session_destroy();

// // Header to index.php
echo
"<script>
    window.location.href = '/dashboard/AuMoK/'
</script>";
exit;
?>