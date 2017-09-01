<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset=utf-8 />
    <title>Form login basic</title>		
    </head>
    <body>
        <div class="col-md-10">				
                <div class="content">
                        <div class="col-md-6 add-dm">
                                <h4 class="">Chi tiet thanh vien</h4>
                        </div>
                        <div class="clearfix"></div>				
                        <table class="table table-bordered" style="margin-top:20px;">
                                <tbody><tr class="bg-info">
                                <tr style='color:red;font-weight:bold;'>
                                        <td>ID</td>
                                        <td>Ten thanh vien</td>
                                        <td>Mat khau</td>
                                        <td>Mo ta</td>						
                                </tr>
                                <?php foreach($list as $user){?>
                                        <td><?php echo $user->id?></td>
                                        <td><?php echo $user->username?></td>
                                        <td><?php echo $user->pass?></td>
                                        <td><a href="<?php echo admin_url('admin/suauser/'.$user->id);?>">edit</a></td>						
                                </tr>
                                <?php }?>
                                </tbody>
                        </table>
                </div>               
        </div><!--end .content-->            
    </body>
<html>