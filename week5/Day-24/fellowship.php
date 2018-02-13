<?php
$party = [
    'bilbo' => 'Bilbo Baggins',
    'frodo' => 'Frodo Baggins',
    'ring' => 'The One Ring'
];

$party['gandalf'] = 'Gandalf the Grey';


unset($party['bilbo']);
$party['sam'] = 'Samwise Gamgee';
unset($party['gandalf']);


function leave_hobbiton() {
    global $party;
    $party = array_merge($party,[
        'merry' => 'Meriadoc Brandybuck',
        'pippin' => 'Peregrin Took'
    ]);
    return $party;
}

leave_hobbiton();


function go_to_bree($party){
    global $party;
    $party['strider'] = 'Strider';
}
go_to_bree($party);

function go_to_weathertop(&$party) {
    $party = array_merge($party,[
        'Witch King of Angmar',
        'Nazgûl #2',
        'Nazgûl #3',
        'Nazgûl #4',
        'Nazgûl #5',
        'Nazgûl #6',
        'Nazgûl #7',
        'Nazgûl #8',
        'Nazgûl #9'
        ]);
    }

go_to_weathertop($party);

function meet_arwen($party){
    global $party;
    $party['arwen'] = 'Arwen Undómiel';
    array_splice($party,-10,9);

}

meet_arwen($party);

// 19

function go_to_rivendell(&$party){
    unset($party['arwen']);
    $party = array_merge($party,[
        'gandalf' => 'Gandalf the Grey',
        'boromir' => 'Boromir',
        'legolas' => 'Legolas',
        'gimli' => 'Gimli'
    ]);
    $party['strider'] = 'Aragorn';
}

go_to_rivendell($party);

function go_to_moria(&$party){
    unset($party['gandalf']);
}

go_to_moria($party);

function go_to_falls_of_rauros(&$party){
    $party = array_merge($party,array_fill(0, 1000, 'Orc'));
    unset($party['boromir']);
}

go_to_falls_of_rauros($party);

function break_fellowship(){
    global $party;
    $mordor_party = [];
    $mordor_party['frodo'] = $party['frodo'];
    $mordor_party['sam'] = $party['sam'];
    $mordor_party['ring'] = $party['ring'];
    $hunting_party = [];
    $hunting_party['strider'] = $party['strider'];
    $hunting_party['legolas'] = $party['legolas'];
    $hunting_party['gimli'] = $party['gimli'];
    $hungry_party = array_diff_key($party,$mordor_party,$hunting_party);
    return [$mordor_party,$hunting_party,$hungry_party];
}

$party = break_fellowship();

var_dump($party);
var_show($party);








?>


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