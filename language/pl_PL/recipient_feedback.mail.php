<?php 
// WARNING, this is a read only file created by import scripts
// WARNING
// WARNING,  Changes made to this file will be clobbered
// WARNING
// WARNING,  Please make changes on poeditor instead of here
// 
// 
?>
subject: Informacja zwrotna od {if:target_type=="recipient"}odbiorcy{endif}{if:target_type=="guest"}gościa{endif} {target.email}

{alternative:plain}

Szanowni Państwo,

Otrzymaliśmy informację zwrotną od {if:target_type=="recipient"}odbiorcy{endif}{if:target_type=="guest"}gościa{endif} {target.email}, która załączona jest poniżej.

Z Poważaniem,
{cfg:site_name}

{alternative:html}

<p>
    Szanowni Państwo,
</p>

<p>
    Otrzymaliśmy informację zwrotną od {if:target_type=="recipient"}odbiorcy{endif}{if:target_type=="guest"}gościa{endif} {target.email}, która załączona jest poniżej.
</p>

<p>
    Z Poważaniem,<br />
    {cfg:site_name}
</p>

