<?php
session_start();
$nombre = $_SESSION['user_name'];
unset($_SESSION['user_id']);
unset($_SESSION['user_name']);
session_destroy();
include('otherindex.php');
?>
<script>
    alert("Sesion cerrada!\nNos vemos <?php echo $nombre ?>!");
</script>