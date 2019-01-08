<?php
if (empty($_POST) && empty($_GET)) {
    header('Location: ?name=Some+Name');
    exit;
}

$name = $_POST['name'] ?? $_GET['name'] ?? '';
echo <<< END
    <form method="post">
        <input type="text" name="name" value="$name">
    </form>
END;
