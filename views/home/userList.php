<main>
    <h2>Liste des utilisateurs</h2>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Created At</th>
            <th>Role</th>
            <th>Update</th>
        </tr>
        <?php

        foreach ($users as $user) {
            // $user est ici un objet de type User_
            // var_dump($user);
            echo "<tr>";
            echo "<td>" . $user->getFirstName() . "</td>";
            echo "<td>" . $user->getLastName() . "</td>";
            echo "<td>" . $user->getEmail() . "</td>";
            echo "<td>" . $user->getPassword() . "</td>";
            echo "<td>" . $user->getCreatedAt() . "</td>";
            echo "<td>" . $user->getRole() . "</td>";
            echo "<td><a href='./users/updateUser?idUser=" . $user->getIdUser() . "'>Update</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</main>