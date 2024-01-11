<?php
/**
 * Plugin Name: 02 Calculadora Binaria Simple
 * Plugin URI: https://webyblog.es/
 * Description: Un plugin que añade una calculadora para realizar operaciones con números binarios usando un shortcode [calculadora_binaria]
 * Version: 11-01-2024
 * Author: Juan Luis Martel
 * Author URI: https://webyblog.es/
 * License: GPL2
 */



if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


function jlm0_binary_calculator_shortcode() {
    wp_register_style('jlm0_binary-calculator', plugin_dir_url(__FILE__) . 'binary-calculator.css');
    wp_register_script('jlm0_binary-calculator', plugin_dir_url(__FILE__) . 'binary-calculator.js', array('jquery'), '1.0.0', true);

    wp_enqueue_style('jlm0_binary-calculator');
    wp_enqueue_script('jlm0_binary-calculator');

    ob_start();
    ?>
    <div class="jlm0_binary-calculator">
        <input type="text" id="jlm0_number1" placeholder="Número Binario 1">
        <input type="text" id="jlm0_number2" placeholder="Número Binario 2">
        <button id="jlm0_sum">Sumar</button>
        <button id="jlm0_subtract">Restar</button>
        <button id="jlm0_multiply">Multiplicar</button>
        <button id="jlm0_divide">Dividir</button>
        <button id="jlm0_clear">Borrar</button>
        <div>Resultado: <span id="jlm0_result"></span></div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('calculadora_binaria', 'jlm0_binary_calculator_shortcode');
