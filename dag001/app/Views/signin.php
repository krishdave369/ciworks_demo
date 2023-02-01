<h1>Sign In</h1>

Name : <?= $name?>
<br>
Address : <?= $address ?>
<br>
Tel : <?= $tel ?>
<br>
<ul>
    <?php 
    if(!empty($subjects)){
    foreach($subjects as $sub){ ?>
    <li><?=$sub?></li>

    <?php }}else{
        echo "No records found!";
    } ?>
</ul>

<ol>

<?php
    if(count($subjects)>0):
    foreach($subjects as $ss):
?>

<li><?=$ss?></li>   

<?php
    endforeach;
else:
    echo "No Records Found..!";
endif;
?>

</ol>