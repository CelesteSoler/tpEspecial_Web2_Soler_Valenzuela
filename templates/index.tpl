<div>
    <h1> Las Pulpas </h1>
    <h2> {$titulo}</h2>
    <ul>
        {foreach from=$productos item=$item}
        <li> {$item->nombre} </li>
        {/foreach}
    </ul>
