<html>
<head><title>HOME</title>
</head>
<body>

<?php
session_start();
session_destroy();
header('Location: log-in.php');
exit;
?>
</body>
</html>
