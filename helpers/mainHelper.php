<?php
if (!function_exists('site_url')) {
    function site_url($path = '') {
        // Determine the protocol
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'
                     || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

        // Get the domain
        $host = $_SERVER['HTTP_HOST'];

        // Get base directory (in case site is in a subfolder)
        $base_path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

        // Combine all parts
        $url = $protocol . $host . $base_path;

        // Clean and append path
        if ($path) {
            $url .= '/' . ltrim($path, '/');
        }

        return $url;
    }
}

?>
