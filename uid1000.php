 <?php
$lines = file('/etc/passwd');
foreach ($lines as $line) {
    if (strpos($line, ':1000:') !== false) {
        echo htmlspecialchars($line);
    }
}
?>
