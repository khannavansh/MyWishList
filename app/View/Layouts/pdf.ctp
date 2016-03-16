<?php
    header('Content-Disposition: attachment;');
    echo $this->fetch('content');
?>