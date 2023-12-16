<div class="grid grid-cols-2 px-24 gap-4 mb-24 mt-16">
    <div class="col-span-1">
        <div class="mb-4">
        <i class="fa-solid fa-square-check pr-2 fa-xl" style="color: #67bb6e;"></i><span class="font-bold text-xl">PROs</span>
        </div>
        <div class="border-2 rounded-md border-black p-16">
        <?php if (get_row_layout() == 'pro_cons') :
                  $columns_copy = get_sub_field('columns_copy');
                  if (is_array($columns_copy) || is_object($columns_copy)) {
                ?>
                   <ul>
                    <?php foreach ($columns_copy as $column) : ?>
                    
                        <li class="list-disc p-4"><?php echo $column['content']; ?></li>
                  
                    <?php endforeach; ?>
                   </ul>

                <?php } endif; ?>
    </div>
    </div>
    <div class="col-span-1">
        <div class="mb-4">
        <i class="fa-solid fa-rectangle-xmark pr-2 fa-xl" style="color: #d03434;"></i><span class="font-bold text-xl">CONs</span> 

        </div>
        <div class="border-2 rounded-md border-black p-16">
        <?php if (get_row_layout() == 'pro_cons') :
                  $columns_cons = get_sub_field('columns_cons');
                ?>

                  <ul>
                    <?php foreach ($columns_cons as $column) : ?>
                    
                        <li class="list-disc p-4"><?php echo $column['contenti']; ?></li>
                  
                    <?php endforeach; ?>
                    </ul>

                <?php endif; ?>
          
        </div>
    </div>
</div>


