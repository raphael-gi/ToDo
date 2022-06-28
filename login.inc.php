<?php
if (!isset($_POST["signin"])){
    header("location: index.php?illegal");
    exit();
}