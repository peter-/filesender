<?php 
// WARNING, this is a read only file created by import scripts
// WARNING
// WARNING,  Changes made to this file will be clobbered
// WARNING
// WARNING,  Please make changes on poeditor instead of here
// 
// 
?>
subject: En gæst er begyndt at uploade filer

{alternative:plain}

Kære afsender!

Følgende gæster er begyndt at uploade filer på grundlag af din voucher:

Gæst: {guest.email}
Link til voucheren: {cfg:site_url}?s=upload&vid={guest.token}
Voucheren gælder indtil {date:guest.expires}, hvorefter den automatisk slettes.

Med venlig hilsen
{cfg:site_name}

{alternative:html}

<p>
Kære afsender!
</p>

<p>
Følgende gæster er begyndt at uploade filer på grundlag af din voucher:
</p>

<table rules="rows">
    <thead>
        <tr>
            <th colspan="2">Detaljer om voucheren</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Gæst</td>
            <td><a href="mailto:{guest.email}">{guest.email}</a></td>
        </tr>
        <tr>
            <td>Link til voucheren</td>
            <td><a href="{cfg:site_url}?s=upload&vid={guest.token}">{cfg:site_url}?s=upload&vid={guest.token}</a></td>
        </tr>
        <tr>
            <td>Gyldig indtil</td>
            <td>{date:guest.expires}</td>
        </tr>
    </tbody>
</table>

<p>
    Med venlig hilsen<br />
    {cfg:site_name}
</p>