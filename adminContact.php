<?php
session_start();
include("adminAuth.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Admin Contact Forms
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="javascript.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="admin_function">
        <h2>Contact Forms<br>Records</h2>
        <?php
        include("database.php");
        $result = $conn->query("SELECT * from contact ORDER BY date DESC");
        while ($row = $result->fetch_assoc()) {
            $contacts[] = $row;
        }
        $result->free_result();
        ?>
        <!--Back Button-->
        <button style="position: relative; left:1%" onclick="location.href='adminDashboard.php'">Back</button>

        <table class="admin_table table_center">
            <tr>
                <th>Email</th>
                <th>Title</th>
                <th>Content</th>
                <th>Date</th>
                <th>Reply</th>
                <th>Status</th>
            </tr>
            <?php
            $count = 0;
            foreach ($contacts as $contact) {
                $count++; ?>
            <tr>
                <td>
                    <?php echo $contact["email"]; ?>
                </td>
                <td>
                    <?php echo $contact["title"]; ?>
                </td>
                <td>
                    <?php echo $contact["content"]; ?>
                </td>
                <td style="width: 65px;">
                    <?php echo $contact["date"]; ?>
                </td>
                <td>
                    <a href=" mailto:<?php echo $contact['email']; ?>"><button>Reply</button></a>
                </td>
                <td style="width: 65px">
                    <form action="edit.php" method="post">
                        <input type="checkbox" class="admin_contact_checked" name="status"
                            onChange="this.form.submit()">
                        <label for="status" class="label_status">Pending</label>
                        <script>
                        document.addEventListener('load', CheckboxDisabled(<?php echo $contact['status'] ?>,
                            <?php echo $count ?>));
                        </script>
                        <input type="hidden" name="edit_contact" value=1>
                        <input type="hidden" name="id" value=<?php echo $contact['id'] ?>>
                    </form>

                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div id=" overlay">
    </div>
</body>

</html>