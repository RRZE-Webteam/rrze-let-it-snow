<?php

namespace RRZE\LetItSnow;

defined('ABSPATH') || exit;

use RRZE\LetItSnow\Settings;
use RRZE\LetItSnow\Snowflakes;

/**
 * Hauptklasse (Main)
 */
class Main
{
    /**
     * Der vollständige Pfad- und Dateiname der Plugin-Datei.
     * @var string
     */
    protected $pluginFile;

    /**
     * Variablen Werte zuweisen.
     * @param string $pluginFile Pfad- und Dateiname der Plugin-Datei
     */
    public function __construct($pluginFile)
    {
        $this->pluginFile = $pluginFile;
    }

    /**
     * Es wird ausgeführt, sobald die Klasse instanziiert wird.
     */
    public function onLoaded() {
	add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);

	// Settings-Klasse wird instanziiert.
	 $settings = new Settings($this->pluginFile);
	 $settings->onLoaded();
	
	$snowflakes = new Snowflakes($this->pluginFile, $settings);
	$snowflakes->onLoaded();
	
    }

    /**
     * Enqueue der globale Skripte.
     */
    public function enqueueScripts() {
	wp_register_style('rrze-letitsnow', plugins_url('css/rrze-let-it-snow.css', plugin_basename($this->pluginFile))); 
	wp_enqueue_style('rrze-letitsnow');	
    }
}


