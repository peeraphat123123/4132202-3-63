<?php
require "conDB.php";
?>
<table>
    <thead>
          <tr>
               <td>ID</td>
               <td>Name</td>
               <td>subject</td>
               <td></td>
          </tr>
    </thead>
    <tbody>
    <?php
        $sql ="SELECT * FROM td_register
               LEFT JOIN td_subject
               ON tb_register.subject_id = tb_subject.subject_id
               ORDER BY tb_register.id ASC
               ";
        $result = $mysql->query($sql);
        while($obj = $result->feth_object()){

 ?>              
        <tr>
               <td><?= $obj->id ?></td>
               <td><?= $obj->pre_name . $obj->name ?></td>
               <td><?= $obj->subject_name ?></td>
               <td><a href="/php/del.php?id=<?= $obj->id ?>$sub_id=<?= $obj->subject_id ?>">DEL</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>