<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>CHMOD Calculator by Sylvain Afonso</title>

<h1>CHMOD CALCULATOR</h1>
<div id="checkers">
<table cellspacing="0">
    <tr>
        <td colspan="3">USER</td>
    </tr>

    <tr>
        <th>R</th>
        <th>W</th>
        <th>X</th>
    </tr>

    <tr>
        <td><button onclick="changeColor(this);"></button></td>
        <td><button onclick="changeColor(this);"></button></td>
        <td><button onclick="changeColor(this);"></button></td>
    </tr>
</table>

<table cellspacing="0">
    <tr>
        <td colspan="3">GROUP</td>
    </tr>

    <tr>
        <th>R</th>
        <th>W</th>
        <th>X</th>
    </tr>

    <tr>
        <td><button onclick="changeColor(this);"></button></td>
        <td><button onclick="changeColor(this);"></button></td>
        <td><button onclick="changeColor(this);"></button></td>
    </tr>
</table>

<table cellspacing="0">
    <tr>
        <td colspan="3">OTHERS</td>
    </tr>

    <tr>
        <th>R</th>
        <th>W</th>
        <th>X</th>
    </tr>

    <tr>
        <td><button onclick="changeColor(this);"></button></td>
        <td><button onclick="changeColor(this);"></button></td>
        <td><button onclick="changeColor(this);"></button></td>
    </tr>
</table>
</div>

<script>
    function changeColor(button){
        if(button.style.backgroundColor == 'rgb(244, 66, 66)')
            button.style.backgroundColor = 'rgb(173,255,47)';
        else
            button.style.backgroundColor = 'rgb(244, 66, 66)';
    }
</script>

