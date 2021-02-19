<h1>Array examples</h1>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>




<?php function output($entries) { ?>
    <table>
        <?php for($row = 0; $row < 3; $row++): ?>
            <tr>
            <?php for($col = 0; $col < 3; $col++): ?>
                <td><?=$entries[$row][$col] ; ?></td>
            <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
<?php } ?>

<div style="width:100px; display:inline-block;">
    <h1>1)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['x', 'x', 'x'],
        ['x', 'x', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>2)</h1>
    <?php
    $entries = [
        ['0', 'x', 'x'],
        ['0', 'x', 'x'],
        ['0', 'x', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>3)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['x', '0', 'x'],
        ['x', 'x', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>4)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['0', '0', '0'],
        ['x', 'x', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>5)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['x', 'x', 'x'],
        ['x', '0', '0']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>6)</h1>
    <?php
    $entries = [
        ['x', 'x', 'x'],
        ['x', '0', '0'],
        ['x', '0', '0']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>7)</h1>
    <?php
    $entries = [
        ['x', '0', 'x'],
        ['0', '0', '0'],
        ['x', '0', 'x']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>8)</h1>
    <?php
    $entries = [
        ['x', '0', '0'],
        ['m', 'm', 'm'],
        ['x', '0', '0']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>9)</h1>
    <?php
    $entries = [
        ['6', '0', '5'],
        ['4', '0', '3'],
        ['2', '0', '1']
    ];
    output($entries);?>
</div>

<div style="width:100px; display:inline-block;">
    <h1>10)</h1>
    <?php
    $entries = [
        ['8', '0', '5'],
        ['3', '0', '2'],
        ['1', '0', '1']
    ];
    output($entries);?>
</div>