<!-- Caroline --> 
<?php 
    $separatorChoice = get_sub_field("separator_choice"); 
    if($separatorChoice[0] == "lines"){
        $separatorChoice[0] = ""; 
    }
	$lineClasses = "Line";
	$separatorChoice = get_sub_field("separator_choice"); 
	if($separatorChoice){
		$lineClasses = "Line";
	}
?>
<?php if($separatorChoice): ?>
    <div class="<?php echo $lineClasses; ?>"></div>
<?php endif; ?>
<?php $images = get_sub_field("images"); ?>
<section class="Gallery"> <!--Gallery -->
    <div class="Gallery__Container"> <!-- VI MÅSTE HA EN CONTAINTER HÄR FÖR VÅR STYLE -->
        <?php foreach($images as $image): ?>
            <img class="Gallery__Item" src="<?php echo $image["image"]; ?>">
        <?php endforeach; ?>
    </div>  
</section>
<?php if($separatorChoice): ?>
    <div class="<?php echo $lineClasses; ?>"></div>
<?php endif; ?>