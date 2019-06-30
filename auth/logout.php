<?php
    session_start();
    session_destroy();
    redir('../../auth/');
?>