<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <h1 class="ml-5">Tags</h1>
    <a href="<?php echo URLROOT?>tags" class="btn btn-dark ml-5">Back</a>

    <form action="<?php echo URLROOT; ?>/tags/add" method="post">

        <div class="form-group w-25 ml-5">
            <label>Tag name: </label>
            <input name="info" value="<?php echo (!empty($data['info'])) ? $data ['info']: ''?>" type="text" class="form-control" placeholder="Enter tag name!">
        </div>

        <div class="form-group w-25 ml-5">
            <label>Color: </label>
            <input name="color" value="<?php echo (!empty($data['color'])) ? $data ['color']: ''?>" type="text" class="form-control" placeholder="Add color name in lowercase">
        </div>

        <button type="submit" class="btn btn-info ml-5">Make Tag</button>
    </form>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>