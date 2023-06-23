<div class="mt-5">
  <?php if(isset($_SESSION['markedData'])) { ?>
    <?php foreach($_SESSION['markedData'] as $data) { ?>
      <div>
        <ul class="mark-form-url">
          <li>
            <?php echo $data['listItem']; ?>
          </li>
          <li>
            <button class="deleteMarkedBtn btn btn-danger" id="deleteMarked" name="deleteMarked" data-id="<?php echo $data['listId']; ?>">
              <span class="bi bi-trash"></span>
            </button>
          </li>
        </ul>
      </div>
    <?php } ?>
  <?php } ?>
</div>
