<?php

include('include_functions.php');

saveBlogPost($_REQUEST['postContent']);

echo "Blog post saved! Last save date: ".date('Y-m-d h:i:s');
