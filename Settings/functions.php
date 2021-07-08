<?php
    function showAlert($status, $message) {
        echo '<p class="alert ' . $status . '">' . $message . '</p>';
    }