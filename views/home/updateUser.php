<main>
    <h1>Update an user</h1>
    <form action="" method="post">
        <label for="first-name">First Name :</label>
        <input type="text" id="first-name" name="firstName" value="<?php echo $userToUpdate->getFirstName(); ?>">
        <label for=" last-name">Last Name :</label>
        <input type="text" id="last-name" name="lastName" value="<?php echo $userToUpdate->getLastName(); ?>">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="<?php echo $userToUpdate->getEmail(); ?>">
        <label for="password">Password :</label>
        <input type="password" id="password" name="password" value="<?php echo $userToUpdate->getPassword(); ?>">
        <label for="role">Role :</label>
        <select name="role" id="role">
            <?php
            if ($userToUpdate->getRole() === "project-manager") {
                echo '<option value="project-manager" selected>Project Manager</option>';
                echo '<option value="developer">Developer</option>';
            } elseif ($userToUpdate->getRole() === "developer"){
                echo '<option value="project-manager">Project Manager</option>';
                echo '<option value="developer" selected>Developer</option>';
            }
            ?>
            </select>
            <input type="submit" name="submit" value="Update">
    </form>
</main>