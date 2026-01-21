<?php
require_once '../config/database.php';

$conn->query("
DELETE FROM users
WHERE is_verified = 0
AND created_at < NOW() - INTERVAL 4 HOUR
");
