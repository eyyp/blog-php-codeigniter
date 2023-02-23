<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Order</th>
                <th>Category Name</th>
                <th>Category Link</th>
                <th>Transactions</th>
            </tr>
        </thead>
        <?php 
            $order=1; 
            foreach($allCategory as $category) { ?>
        <tbody>
            <tr>
                <td><?php echo $order;?></td>
                <td><?php echo $category->categoryName; ?></td>
                <td><?php echo $category->categorySef; ?></td>
                <td>
                    <a href="<?php echo base_url('index.php/AdminPanel/categorysdelete/'); echo ''.$category->id. "" ?>"><button type="button" class="btn btn-secondary bg-primary">Delete<i class="fa-solid fa-trash-can"></i></button></a>&nbsp;
                    <a href="<?php echo base_url('index.php/AdminPanel/categorysedit/');  echo ''.$category->id. "" ?>"><button type="button" class="btn btn-secondary bg-primary">Edit<i class="fa-solid fa-trash-can"></i></button></a>
                </td>
            </tr>
        </tbody>
        <?php $order++; } ?>
    </table>
</div>