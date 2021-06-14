<div class="max-width-sm mg-auto">
  <div class="edit-gif-wrp editorjs-fullwidth hidden">
    <form action="{{ route('gifs.update') }}" data-action="{{ route('gifs.update') }}" id="formEditGif" method="POST" enctype="multipart/form-data" >
      @csrf
      <input type="hidden" id="gifId" name="gif_id" value="">
      <input type="hidden" name="is_published"/>
      <div class="flex">
        <div class="height-100% width-100% bg radius-md flex flex-column">

            <div class="padding-y-sm flex-grow overflow-auto">
              <div class="padding-top-xs">
                <h1 id="editTitleElem" class="js-input custom-input custom-input__title" placeholder="Title" target="editTitle" required></h1>
                <input type="hidden" id="editTitle" name="title" value="">

                <div class="grid gap-sm">
                  <div id="editorjs2" data-target-input="#editDescription" class="site-editor"></div>
                  <input type="hidden" name="description" id="editDescription"/>
                </div>
              </div>

              <div class="padding-top-xs">
                <div class="margin-bottom-md">
                  <img src="#" id="thumbnailPreview" class="width-40%">
                </div>

                <div class="file-upload inline-block">

                  <label for="editThumbnail" class="file-upload__label btn btn--primary">
                    <span class="flex items-center">
                      <svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-width="2"><path  stroke-linecap="square" stroke-linejoin="miter" d="M2 16v6h20v-6"></path><path stroke-linejoin="miter" stroke-linecap="butt" d="M12 17V2"></path><path stroke-linecap="square" stroke-linejoin="miter" d="M18 8l-6-6-6 6"></path></g></svg>
                      
                      <span class="margin-left-xxs file-upload__text file-upload__text--has-max-width">Edit Photo</span>
                    </span>
                  </label> 

                  <input type="file" class="file-upload__input" name="thumbnail" id="editThumbnail" accept="image/gif" >
                </div>          
              </div>

              <div class="padding-top-xs">
                <div class="gif-tag-wrp edit-post-tag">
                  <div class="alert alert--error margin-top-sm js-alert" role="alert">
                    <div class="flex items-center justify-between">
                      <div class="flex items-center">
                        <svg aria-hidden="true" class="icon margin-right-xxxs" viewBox="0 0 32 32" ><title>info icon</title><g><path d="M16,0C7.178,0,0,7.178,0,16s7.178,16,16,16s16-7.178,16-16S24.822,0,16,0z M18,7c1.105,0,2,0.895,2,2 s-0.895,2-2,2s-2-0.895-2-2S16.895,7,18,7z M19.763,24.046C17.944,24.762,17.413,25,16.245,25c-0.954,0-1.696-0.233-2.225-0.698 c-1.045-0.92-0.869-2.248-0.542-3.608l0.984-3.483c0.19-0.717,0.575-2.182,0.036-2.696c-0.539-0.514-1.794-0.189-2.524,0.083 l0.263-1.073c1.054-0.429,2.386-0.954,3.523-0.954c1.71,0,2.961,0.855,2.961,2.469c0,0.151-0.018,0.417-0.053,0.799 c-0.066,0.701-0.086,0.655-1.178,4.521c-0.122,0.425-0.311,1.328-0.311,1.765c0,1.683,1.957,1.267,2.847,0.847L19.763,24.046z"></path></g></svg>
                        <p>Please fill at least one tag.</p>
                      </div>
                      <button class="reset alert__close-btn js-alert__close-btn">
                        <svg class="icon" viewBox="0 0 24 24"><title>Close alert</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" stroke="currentColor" fill="none" stroke-miterlimit="10"><line x1="19" y1="5" x2="5" y2="19"></line><line fill="none" x1="19" y1="19" x2="5" y2="5"></line></g></svg>
                      </button>
                    </div>
                  </div>
                  @foreach($tag_categories as $key=> $tag_category)
                    <div class="grid gap-sm">
                        <label class="form-label margin-bottom-xxs" for="edit_tag_category_{{ $tag_category->id }}">
                          Edit {{ $tag_category->name }}
                        </label>
                        <select name="tag_category_{{ $tag_category->id }}[]" id="edit_tag_category_{{ $tag_category->id }}" class="form-control site-tag-pills" data-id="{{ $tag_category->id }}" multiple></select>
                    </div>
                  @endforeach
                </div>
              </div>
            </div><!-- /.padding-y-sm flex-grow overflow-auto -->

            <footer class="padding-y-sm bg flex-shrink-0">
              <div class="flex justify-end gap-xs">
                <button type="button" class="btn btn--subtle btn-cancel-post">Cancel</button>
                <a href="#" type="button" class="btn btn--primary is-hidden draft-post-link trigger-site-editor-save" data-target-input="#editDescription" id="btnEditSaveDraft" data-toggle-published="0">Draft</a>
                <a href="#" type="button" class="btn btn--primary is-hidden publish-post-link trigger-site-editor-save" data-target-input="#editDescription" id="btnEditSavePublish" data-toggle-published="1">Publish</a>
                <a href="#" type="button" class="btn btn--primary is-hidden restore-post-link">Restore</a>
                <button type="button" class="btn btn--primary trigger-site-editor-save" data-target-input="#editDescription" id="btnEditSave">Save</button>
              </div>
            </footer>
        </div><!-- /.modal__content -->
      </div><!-- /.modal -->
    </form>
  </div>
</div>