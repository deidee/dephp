<?php
declare(strict_types=1);

if(!function_exists('h')) {
    function h($text = ''): string
    {
        return htmlspecialchars($text);
    }
}

if(!function_exists('is_even')) {
    function is_even($number = ''): bool
    {
        return $number % 2 === 0;
    }
}

if(!function_exists('is_odd')) {
    function is_odd($number = ''): bool
    {
        return $number % 2 !== 0;
    }
}

if(!function_exists('jw')) {
    function jw(): void
    {
        ob_start();
        $expression = func_get_args();
        call_user_func_array('var_dump', $expression);
        echo '<pre><code class="language-php">' . htmlentities(ob_get_clean()) . '</code></pre>';
    }
}
