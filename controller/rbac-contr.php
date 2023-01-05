<?php

use PhpRbac\Rbac;
$rbac = new Rbac();

// Create a Role
$role_id = $rbac->Roles->add('admin', 'admin can moderate forums');
echo "success";

$perm_id = $rbac->Permissions->add('delete_posts', 'Can delete forum posts');

/* public function role_permission()
{
    $user_id=$_SESSION['user']['id'];
    $checkRole="SELECT id,role_as FROM users WHERE id=$user_id AND role_as=1 LIMIT 1";
    $result=$this->conn->query($checkRole);
    if($result->num_rows==1){
        return true;
    }else{
        redirect("You are not authorized");
    }    
} */