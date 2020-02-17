<!-- Fanny --> 
<?php 
 
$select = get_sub_field('select');
$size = "";
if($select){
    $size = 'small'; 
}    
?>

<div 
    class="Hero__faq"
    style="background-image: url('<?php the_sub_field("image"); ?>')"
>
    <h1 class="Hero__Title"><?php the_sub_field("title"); ?></h1>
</div>