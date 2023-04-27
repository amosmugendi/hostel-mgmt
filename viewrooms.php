<?php
$title = "View Rooms";
include_once 'db/conn.php';
include_once 'includes/session.php';
include_once 'includes/adminheader.php';

$result = $reports->getRooms();
?>
<section class="main">
    <table>
        <tr>
            <th>Room ID</th>
            <th>Room Type</th>
            <th>Status</th>
            <th>Actions</th>
            <th>
                <button class="primary-button"><a href="addroom.php">Add Room</button>
            </th>
        </tr>
        <?php
        while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td> <?php echo $r['id'] ?></td>
                <td> <?php echo $r['room_type'] ?></td>
                <td> <?php echo $r['status'] ?></td>
                <td>
                    <button type="button" class="primary-button"><a href="viewroom.php?id= <?php echo $r['id'] ?>">view</a></button>
                    <button type="button" class="warning-button"><a href="editroom.php?id= <?php echo $r['id'] ?>">Edit</a></button>
                    <button type="button" class="delete-button"><a onclick="return confirm('are you sure you want to reset this room?');" href="delete.php?id= <?php echo $r['id'] ?>">Reset</a></button>
                </td>
            </tr>
        <?php } ?>
    </table>
</section>
<?php
include_once 'includes/adminfooter.php';
?>