<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Order</th>
            <th>Posts Tittle</th>
            <th>Posts Catogory</th>
            <th>Posts Date</th>
            <th>View count</th>
            <th>İmages</th>
            <th>Transactions</th>
        </tr>
    </thead>
    <?php 
        $order=1; 
        foreach($allPosts as $post) { ?>
    <tbody>
        <tr>
            <td><?php echo $order;?></td>
            <td><?php echo $post->title; ?></td>
            <td><?php echo $post->categories; ?></td>
            <td><?php echo $post->createDate; ?></td>
            <td><?php echo $post->postsSeen; ?></td>
            <td><?php echo $post->images; ?></td>
            <td>
                <a href="<?php echo base_url('index.php/AdminPanel/postsdelete/'); echo ''.$post->id. "" ?>"><button type="button" class="btn btn-secondary bg-primary">Delete<i class="fa-solid fa-trash-can"></i></button></a>&nbsp;
                <a href="<?php echo base_url('index.php/AdminPanel/postsedit/');  echo ''.$post->id. "" ?>"><button type="button" class="btn btn-secondary bg-primary">Edit<i class="fa-solid fa-trash-can"></i></button></a>
            </td>
        </tr>
    </tbody>
    <?php $order++; } ?>
</table>