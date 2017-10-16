<select>
<?php

foreach($lesRayons as $ray)
{
    echo "<option>".$ray->numR." - ".$ray->nomR."</option>";
}
?>
</select>
