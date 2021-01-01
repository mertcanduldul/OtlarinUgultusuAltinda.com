<?php 
    require_once 'connect.php';
   
    $count=$db->query('select count(*) from comments')->fetchColumn();
    for ($i=0; $i < $count; $i++) {?>
<div class="col-sm-12 col-lg-4">
    <div class="list-group">
        <a class="list-group-item list-group-item-action flex-column align-items-start mb-2">
            <div class="d-flex w-100 justify-content-between">
                <h4 class="text-dark">
                    <?php 
                $user=$db->query('SELECT username,mail,comment,time FROM comments')->fetchAll(PDO::FETCH_ASSOC);
                print_r($user[$i]["username"]);
            ?>
                </h4>
                <small><?php 
                print_r($user[$i]["time"]);
                ?>
                </small>
            </div>
            <p class="text-justify font-weight-bold commentx">
                
                    <?php 
            print_r($user[$i]["comment"]);
        ?>
        
            </p>
            
        </a>
    </div>
</div>
<?php 
    }
?>