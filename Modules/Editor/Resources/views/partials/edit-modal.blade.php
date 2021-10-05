<div class="modal modal--animate-scale flex flex-center bg-black bg-opacity-90% padding-md js-modal" id="edit-modal">
  <div class="modal__content width-100% max-width-xs max-height-100% overflow-auto bg radius-md inner-glow shadow-md" role="alertdialog" aria-labelledby="modal-title-1" aria-describedby="modal-description-1">
    <header class="bg-contrast-lower bg-opacity-50% padding-y-sm padding-x-md flex items-center justify-between">
      <h4 class="text-truncate" id="modal-title-1">Template Settings</h4>

      <button class="reset modal__close-btn modal__close-btn--inner hide@md js-modal__close js-tab-focus">
        <svg class="icon" viewBox="0 0 20 20">
          <title>Close modal window</title>
          <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="3" x2="17" y2="17" />
            <line x1="17" y1="3" x2="3" y2="17" />
          </g>
        </svg>
      </button>
    </header>

 <div class="padding-md">
    <form>
  <fieldset class="margin-bottom-md">
    <legend class="form-legend">Form Legend</legend>

    <div class="grid gap-sm">
        <label class="form-label margin-bottom-xxs" for="input-name">Edit name</label>
        <input class="form-control width-100%" type="text" name="input-name" id="input-name" required>

        <label class="form-label margin-bottom-xxs" for="input-name">Edit URL Slug</label>
        <input class="form-control width-100%" type="text" name="input-name" id="input-name" required>

        <label class="form-label margin-bottom-xxs" for="input-name">Edit Page Title</label>
        <input class="form-control width-100%" type="text" name="input-name" id="input-name" required>

        <label class="form-label margin-bottom-xxs" for="input-name">Edit Meta Discription</label>
        <input class="form-control width-100%" type="text" name="input-name" id="input-name" required>
  </fieldset>

  <fieldset class="margin-bottom-md">
  <label class="form-label margin-bottom-xxs" for="input-name">Choose App</label>

    <ul class="flex flex-wrap gap-md">
      <li>
        <input class="radio" type="radio" name="radio-button" id="radio-1" checked>
        <label for="radio-1">App 1</label>
      </li>

      <li>
        <input class="radio" type="radio" name="radio-button" id="radio-2">
        <label for="radio-2">App 2</label>
      </li>

      <li>
        <input class="radio" type="radio" name="radio-button" id="radio-3">
        <label for="radio-3">App 3</label>
      </li>
    </ul>
  </fieldset>

</form>
</div>


    <footer class="padding-md">
      <div class="flex justify-end gap-xs">
        <button class="btn btn--subtle js-modal__close">Cancel</button>
        <button class="btn btn--primary">Save</button>
      </div>
    </footer>
  </div>

  <button class="reset modal__close-btn modal__close-btn--outer display@md js-modal__close js-tab-focus">
    <svg class="icon icon--sm" viewBox="0 0 24 24">
      <title>Close modal window</title>
      <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="3" y1="3" x2="21" y2="21" />
        <line x1="21" y1="3" x2="3" y2="21" />
      </g>
    </svg>
  </button>
</div>