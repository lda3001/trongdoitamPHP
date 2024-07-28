<?php
include "config/config.php";
if (!empty($_POST["cat_id"])) {
    $id = intval($_POST['cat_id']);
    $query = mysqli_query($con, "SELECT * FROM tbl_sub_category WHERE cate_id = $id");
    ?>
    <!-- <option value="">Select Sub Category</option> -->
    <?php
    while ($row = mysqli_fetch_array($query)) {
        ?>
        <option value="<?php echo htmlentities($row['sub_id']); ?>"><?php echo htmlentities($row['sub_name']); ?></option>
        <?php
    }
}
?>