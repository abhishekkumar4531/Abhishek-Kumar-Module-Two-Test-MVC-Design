<div class="mt-5">
  <?php if(isset($_SESSION['unmarkedData'])) { ?>
    <?php foreach($_SESSION['unmarkedData'] as $data) { ?>
      <div>
        <ul class="mark-form-url">
          <li>
            <?php echo $data['listItem']; ?>
          </li>
          <li>
            <button class="editBtn btn btn-primary" id="edit" name="edit" data-id="<?php echo $data['listId']; ?>" data-value="<?php echo $data['listItem']; ?>">
              <span class="bi bi-pencil"></span>
            </button>
          </li>
          <li>
            <button class="deleteBtn btn btn-danger" id="delete" name="delete" data-id="<?php echo $data['listId']; ?>">
              <span class="bi bi-trash"></span>
            </button>
          </li>
          <li>
            <button class="markedBtn btn btn-primary" id="marked" name="marked" data-id="<?php echo $data['listId']; ?>" data-value="<?php echo $data['listItem']; ?>">
              <span class="bi bi-check-circle-fill"></span>
            </button>
          </li>
        </ul>
      </div>
    <?php } ?>
  <?php } ?>
</div>
