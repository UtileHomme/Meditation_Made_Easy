<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>User Accounts</title>
</head>
<body>
    <?php
        foreach($users as $user):
     ?>
    <table>
        <tr>
            <td>
                <?=
                 $user['firstname'];
                 //$user->firstname;  in case array of ojbects is returned
                 ?>
            </td>
            <td>
                <?= $user['lastname'];
                //$user->lastname;  in case array of ojbects is returned
                 ?>
            </td>
        </tr>

    </table>
    <?php
    endforeach;
     ?>
</body>
</html>
