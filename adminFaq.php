<?php
session_start();
include("adminAuth.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Admin FAQ
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="javascript.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="admin_function">
        <h2>Frequently Ask Questions (FAQ)<br>Records</h2>
        <?php
        include("database.php");
        $result = $conn->query("SELECT * from faq ORDER BY category");
        //Store each category
        $cat = array();
        while ($row = $result->fetch_assoc()) {
            if (!in_array($row["category"], $cat))
                array_push($cat, $row["category"]);
            $byCategory[$row["category"]][] = $row;
        }
        $result->free_result();
        ?>
        <!--Back Button-->
        <button style="position: relative; left:1%" onclick="location.href='adminDashboard.php'">Back</button>
        <!--Add Button-->
        <button style="position: relative; left:94%;" onclick="AddPopup()">Add</button>
        <!--Add Pop-up Form-->
        <div id="add_popup">
            <h2>Add</h2>
            <span class="close" onclick="CloseAddPopup()">&times</span>
            <form action="add.php" method="post" onsubmit="return confirmation('add')">
                <br>
                <label for="category">Category</label><br>
                <?php foreach ($cat as $c) { ?>
                <label><input type="radio" name="category" value="<?php echo $c ?>" onclick="CheckOtherRadio_Add()">
                    <?php echo strtoupper($c) ?></label><br>
                <?php } ?>
                <label><input id="add_other_radio" type="radio" name="category" onclick="CheckOtherRadio_Add()">
                    <input id="add_other_text" type="text" name="category" placeholder="OTHERS" required
                        disabled></label><br><br>
                <label for="question">Question</label><br>
                <textarea name="question" rows=8 cols=60 placeholder="Enter frequently asked question here."
                    required></textarea>
                <br>
                <label for="answer">Answer</label>
                <br>
                <textarea name="answer" rows=8 cols=60
                    placeholder="Enter answer for the frequently asked question here." required></textarea>
                <br>
                <div style="text-align:center;">
                    <input type="submit" name="add_faq" value="Submit">
                </div>
            </form>
        </div>
        <table class="admin_table table_center">
            <!--Table Header-->
            <tr>
                <th>Category</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            $count = 0;
            foreach ($byCategory as $category => $faqs) { ?>
            <!--Table is sorted by Category-->
            <tr>
                <td rowspan=<?php echo count($byCategory[$category]) ?>>
                    <?php echo strtoupper($category); ?>
                </td>

                <?php
                    foreach ($faqs as $faq) {
                        $count++; ?>
                <td>
                    <?php echo $faq["question"]; ?>
                </td>
                <td>
                    <?php echo $faq["answer"]; ?>
                </td>
                <td>
                    <!--Edit Button-->
                    <button class="edit_button" onclick="EditPopup(<?php echo $count; ?>)">Edit</button>
                    <!--Edit Pop-up Form-->
                    <div class="edit_popup">
                        <h2>Edit</h2>
                        <span class="close" onclick="CloseEditPopup(<?php echo $count; ?>)">&times</span>
                        <form action="edit.php" method="post" onsubmit="return confirmation('edit')">
                            <br>
                            <label for="category">Category</label><br>
                            <?php foreach ($cat as $c) { ?>
                            <label><input type="radio" name="category"
                                    <?php if ($faq['category'] == $c) echo "checked" ?>
                                    onclick="CheckOtherRadio_Edit(<?php echo $count; ?>)" value="<?php echo $c ?>">
                                <?php echo strtoupper($c) ?></label><br>
                            <?php } ?>
                            <label><input class="edit_other_radio" type="radio" name="category"
                                    onclick="CheckOtherRadio_Edit(<?php echo $count; ?>)">
                                <input class="edit_other_text" type="text" name="category" placeholder="OTHERS" required
                                    disabled></label><br><br>
                            <label for="question">Question</label><br>
                            <textarea name="question" rows=8 cols=60 required><?php echo $faq['question']; ?></textarea>
                            <br>
                            <label for="answer">Answer</label>
                            <br>
                            <textarea name="answer" rows=8 cols=60 required><?php echo $faq['answer']; ?></textarea>
                            <br>
                            <input type="hidden" name="id" value="<?php echo $faq["id"]; ?>">
                            <div style="text-align:center;">
                                <input type="submit" name="edit_faq" value="Submit">
                            </div>
                        </form>
                    </div>
                </td>
                <!--Delete Button-->
                <td>
                    <form action="delete.php" method="post" onsubmit="return confirmation('delete')">
                        <input type="submit" name="delete_faq" value="Delete">
                        <input type="hidden" name="id" value="<?php echo $faq["id"]; ?>">
                        <input type="hidden" name="type" value="faq">
                    </form>
                </td>
            </tr>
            <?php }
                } ?>
        </table>
        </form>
    </div>
    <!--Overlay when opening Pop-ups-->
    <div id="overlay"></div>
</body>

</html>