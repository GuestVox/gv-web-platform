<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.css}Myvox/survey.css']);
$this->dependencies->add(['js', '{$path.js}Myvox/survey.js']);

?>

<header class="survey">
    <figure>
        <img src="{$logotype}" alt="Client">
    </figure>
    <nav>
        <ul>
            <li>{$btn_home}</li>
            <li><a href="?<?php echo Language::get_lang_url('es'); ?>"><img src="{$path.images}es.png"></a></li>
            <li><a href="?<?php echo Language::get_lang_url('en'); ?>"><img src="{$path.images}en.png"></a></li>
        </ul>
    </nav>
</header>
<main class="survey">
    {$html}
</main>
{$mdl_widget}
<footer class="survey">
    <h4>Power by <img src="{$path.images}logotype_color.png" alt="Guestvox"></h4>
    <p>Copyright<i class="far fa-copyright"></i>{$lang.all_right_reserved}</p>
</footer>