<?php
// disable xmlrpc
function remove_xmlrpc_methods( $methods ) {
  return array();
}
add_filter( 'xmlrpc_methods', 'remove_xmlrpc_methods' );
