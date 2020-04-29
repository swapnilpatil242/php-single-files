
<br />
<?php require_once 'user_operations.php'; ?>

<div>
  <a href="users.php">Default View</a>

  <div> 
    <!-- Form template -->
    <form action="user_operations.php", method="POST">
        <br />
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter Name" value="<?php echo $name ?>">
        &nbsp;
        <label>Email</label>
        <input type="text" name="email" placeholder="Enter Email" value="<?php echo $email ?>">
        &nbsp;
        <label>password</label>
        <input type="text" name="password" placeholder="Enter Value" value="<?php echo $password ?>">
        <?php if($update) { ?>
          <button type="submit" name="update">Update User</button>
        <?php } else { ?>
          <button type="submit" name="save">Create User</button>
        <?php } ?>
      </form>
  </div>
  <div>
    <!-- User list table template -->
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>password</th>
        <th colspan="2">Actions</th>
      </tr>
      <?php if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["password"] ?></td>
            <td>
              <a href="users.php?edit=<?php echo $row['id']?>">Edit</a>
            </td>
            <td>
              <a href="user_operations.php?delete=<?php echo $row['id']?>">Delete</a>
            </td>
          </tr>
        <?php } ?> <!-- while loop end -->
        <?php } else { ?>
          <tr><td>No result found...</td></tr>
        <?php } ?>
    </table>
  </div>
</div>

<?php $conn->close(); ?>
