<?php


require_once 'suburb-data.php';

$base_url = 'https:
$current_date = date('Y-m-d');


$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http:


$main_pages = array(
    '' => array('priority' => '1.0', 'changefreq' => 'weekly'),
    'about.html' => array('priority' => '0.8', 'changefreq' => 'monthly'),
    'services.html' => array('priority' => '0.9', 'changefreq' => 'weekly'),
    'service-areas.html' => array('priority' => '0.9', 'changefreq' => 'weekly'),
    'contact.html' => array('priority' => '0.8', 'changefreq' => 'monthly'),
    'lighting.html' => array('priority' => '0.7', 'changefreq' => 'monthly'),
    'switchboard-upgrade.html' => array('priority' => '0.7', 'changefreq' => 'monthly'),
    'smoke-alarm.html' => array('priority' => '0.7', 'changefreq' => 'monthly'),
    'fans.html' => array('priority' => '0.7', 'changefreq' => 'monthly'),
    'security.html' => array('priority' => '0.7', 'changefreq' => 'monthly'),
    'gpos.html' => array('priority' => '0.7', 'changefreq' => 'monthly'),
    'privacy.html' => array('priority' => '0.3', 'changefreq' => 'yearly'),
    'terms.html' => array('priority' => '0.3', 'changefreq' => 'yearly'),
);

foreach ($main_pages as $page => $settings) {
    $xml .= "  <url>\n";
    $xml .= "    <loc>" . $base_url . '/' . $page . "</loc>\n";
    $xml .= "    <lastmod>" . $current_date . "</lastmod>\n";
    $xml .= "    <changefreq>" . $settings['changefreq'] . "</changefreq>\n";
    $xml .= "    <priority>" . $settings['priority'] . "</priority>\n";
    $xml .= "  </url>\n";
}


foreach ($all_suburbs as $slug => $data) {
    $xml .= "  <url>\n";
    $xml .= "    <loc>" . $base_url . "/electrician-" . $slug . "</loc>\n";
    $xml .= "    <lastmod>" . $current_date . "</lastmod>\n";
    $xml .= "    <changefreq>weekly</changefreq>\n";
    $xml .= "    <priority>0.8</priority>\n";
    $xml .= "  </url>\n";
}

$xml .= '</urlset>';


file_put_contents('sitemap.xml', $xml);

echo "Sitemap generated successfully!\n";
echo "Total URLs: " . (count($main_pages) + count($all_suburbs)) . "\n";
echo "\nSuburb pages generated:\n";
foreach ($all_suburbs as $slug => $data) {
    echo "- " . $base_url . "/electrician-" . $slug . " (" . $data['name'] . ")\n";
}
echo "\nUpload sitemap.xml to your website root and submit to Google Search Console.\n";
?>

