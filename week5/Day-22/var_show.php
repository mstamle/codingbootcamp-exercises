<?php
/**
 * visually display information about a variable
 *
 * usage:
 * var_show($variable);
 *
 * Works best for arrays
 * Not as exhaustive as var_dump. If you need more information, use var_dump
 * Not tested with objects yet.
 */


function val_show($value)
{
    if(is_array($value)) return array_show($value);
    ?>
    <div class="value" style="font-family: Arial; background-color: #ffffff; margin: 0.5em; float: left; font-size: 12px; border: 1px solid #004f87; padding: 0.5em; color: #000000;  text-align: center;">
        (<?php echo gettype($value); ?>)<br />
        <?php echo var_export($value, true); ?>
    </div>
    <?php
}

function var_show($var)
{
    if(is_array($var)) return array_show($var);
    ?>
    <div class="variable" style="font-family: Arial; background-color: #1e82ba; margin: 0.5em; float: left; font-size: 12px; border: 1px solid #004f87; color: #001c54; text-align: center;">
        <div class="name" style="padding: 0.5em 0.5em 0;"><?php echo gettype($var); ?></div>
        <div class="value" style="background-color: #ffffff; border: 1px solid #004f87; padding: 0.5em 0.5em; margin: 0.5em; color: #000000; overflow: hidden">
            <?php echo var_export($var, true); ?>
        </div>
    </div>

    <?php
}

function array_show($array)
{
    ?>
    <div class="array" style="font-family: Arial; background-color: #f7b03c; padding: 0 0.5em 0em; margin: 0.5em; float: left; font-size: 12px; border: 1px solid #c47d09; color: #914a00; text-align: center;">
        <div class="name" style="padding: 0.5em 0;">array (<?php echo count($array); ?>)</div>
    <?php foreach($array as $key => $value) : ?>
        <div class="variable" style="background-color: #1e82ba; margin-bottom: 0.5em; overflow: hidden; border: 1px solid #004f87; color: #001c54;">
            <div class="name" style="padding: 0.5em 0.5em 0;"><?php echo var_export($key, true); ?></div>
            <?php if(is_array($value)) : ?>
                <?php array_show($value); ?>
            <?php else : ?>
                <div class="value" style="background-color: #ffffff; border: 1px solid #004f87; padding: 0.5em 0.5em; margin: 0.5em; color: #000000; overflow: hidden">
                    <?php echo var_export($value, true); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
    </div>
    <?php
}