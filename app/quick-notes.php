<?php 
helper('url');


echo site_url('news/local/123');
echo base_url();

if (url_is('admin')) {
    // ...
}
?>
