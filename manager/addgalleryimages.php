
<?php
require_once 'database/db.php';
$title = 'Add Gallery Image';

if(!isset($_SESSION['username'])){
    echo "<script>window.location.href='{$path}manager'</script>";
}

$id = $_GET['id'] ?? "";

if(isset($_POST['deletedata'])){
    $id = intval($_POST['id'] ?? 0);

    $sqldelImg = mysqli_query($con, "SELECT * FROM `gallery_imgs` WHERE id = $id");

    if(mysqli_num_rows($sqldelImg)){
        $rowimg = mysqli_fetch_assoc($sqldelImg);
        $imgid = $rowimg['file'];
        unlink("../".$imgid);

        $sqldelete = mysqli_query($con, "DELETE FROM `gallery_imgs` WHERE id = $id");

        if($sqldelete){
            echo 'true';
        }else{
            echo 'false';
        }
    }

    exit();
}

if(isset($_POST['addRecord'])){

    $sqlins = "";
    $i = 0;

    $imgtitle = mysqli_real_escape_string($con, $_POST['title'] ?? "");
    $ordering = intval($_POST['ordering'] ?? 0);

    // Category
    $gallerycategory = $_POST['category'] ?? "";

    $allowedcategory = array(
        'rooms',
        'venues',
        'pool',
        'lobby',
        'staff'
    );

    if(!in_array($gallerycategory, $allowedcategory, true)){
        $gallerycategory = "";
    }

    $gallerycategory = mysqli_real_escape_string($con, $gallerycategory);

    // Image upload directory
    $targetdir = dirname(__DIR__)."/branch/assets/gallery_img/";

    if(!is_dir($targetdir)){
        mkdir($targetdir, 0777, true);
    }

    if(isset($_FILES['img']['name']) && is_array($_FILES['img']['name'])){

        foreach($_FILES['img']['name'] as $row => $name){

            if(
                empty($name) ||
                !isset($_FILES['img']['error'][$row]) ||
                $_FILES['img']['error'][$row] != UPLOAD_ERR_OK
            ){
                continue;
            }

            $gallery_images = $name;
            $ext = strtolower(pathinfo($gallery_images, PATHINFO_EXTENSION));

            // Allow image file extensions
            $allowedextensions = array('jpg', 'jpeg', 'png', 'gif', 'webp');

            if(!in_array($ext, $allowedextensions, true)){
                continue;
            }

            $gallery_imagename = round(microtime(true) * 1000) . $i . '.' . $ext;

            $uploadpath = "branch/assets/gallery_img/" . $gallery_imagename;

            if(move_uploaded_file(
                $_FILES['img']['tmp_name'][$row],
                $targetdir . $gallery_imagename
            )){
                $sqlins = mysqli_query(
                    $con,
                    "INSERT INTO `gallery_imgs`
                    (`id`, `file`, `title`, `ordering`, `category`)
                    VALUES
                    (NULL, '$uploadpath', '$imgtitle', '$ordering', '$gallerycategory')"
                );

                if(!$sqlins){
                    break;
                }
            }

            $i++;
        }
    }

    if($sqlins){
        echo "<script>
            swal('Added Successfully', 'Click `OK` to Close', 'success');
            $('#submitForm').hide();
        </script>";

        echo "<div class='col-md-12 padd0 text-center'>
            <a href='addgalleryimages.php?id=$id' class='btn btn-primary'>Create New</a>
        </div>";
    }else{
        echo "<script>
            swal('Failed', 'Click `OK` to try Again', 'error');
            $('#submitForm').show();
        </script>";
    }

    exit();
}

include 'include/header.php';
include 'include/sidebar.php';
?>

<section class="main-dashboard">
<div class="container-fluid">
<div class="row">

<div class="col-md-12">
    <div class="page-title">
        <div class="title">
            <h3>Add Gallery Image</h3>
        </div>

        <div class="createbtn">
            <a href="gallery.php">List</a>
        </div>
    </div>
</div>

<div class="col-md-12">
<div class="page-content">

    <div class="msgbox"></div>

    <form method="POST" id="submitForm" enctype="multipart/form-data">

        <div class="row">

            <div class="mb-3 col-md-6">
                <label for="title" class="form-label">Title</label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    class="form-control"
                    placeholder="e.g. Weddings"
                >
            </div>

            <div class="mb-3 col-md-6">
                <label for="ordering" class="form-label">Order</label>
                <input
                    type="number"
                    name="ordering"
                    id="ordering"
                    class="form-control"
                    value="0"
                    min="0"
                >
            </div>

            <!-- Category Dropdown -->
            <div class="mb-3 col-md-6">
                <label for="category" class="form-label">Category</label>

                <select class="form-control" name="category" id="category">
                    <option value="">Select Category</option>
                    <?php
                    $categoryoptions = array(
                        'rooms' => 'Rooms',
                        'venues' => 'Venues',
                        'pool' => 'Pool',
                        'lobby' => 'Lobby',
                        'staff' => 'Staff'
                    );

                    foreach($categoryoptions as $ckey => $clabel){
                    ?>
                        <option value="<?=$ckey;?>"><?=$clabel;?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3 col-md-12">
                <label for="formFile" class="form-label">Image</label>

                <div class="clearallimgdiv" style="display: none;">
                    <a href="javascript:" id="clrimgs">Clear All</a>
                </div>

                <div class="imgquestion other">
                    <a href="javascript:" class="imgclose ri-close-circle-line <?=$active ?? '';?>"></a>

                    <input
                        hidden
                        class="form-control imgInputMultiple"
                        name="img[]"
                        type="file"
                        multiple
                        accept="image/*"
                    >

                    <img
                        src="images/preview.jpg"
                        alt="preview"
                        class="preview"
                    >
                </div>

                <div id="gal-container"></div>
            </div>

            <div class="col-md-12">
                <input
                    type="submit"
                    value="Add Record"
                    name="addRecord"
                    class="submitInput"
                >
            </div>

        </div>
    </form>

</div>
</div>

</div>
</div>
</section>

<?php
include "include/footer.php";
?>