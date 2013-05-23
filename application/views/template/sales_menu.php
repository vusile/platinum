<ul class="sub-level">
<?php foreach ($Sub_Menus as $sbmenu): ?>
        <li>
            <?php print anchor('Signage/point_of_sales/'.$sbmenu['sales_point_id'].'/', $sbmenu['title']); ?>
        </li>
<?php endforeach; ?>
</ul>