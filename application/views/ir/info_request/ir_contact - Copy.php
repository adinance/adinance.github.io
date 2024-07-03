<style>
            /* #container {
                width: 500px;
                margin: 20px auto;
            } */
            .ck-editor__editable[role="textbox"] {
                /* Editing area */
                min-height: 200px;
            }
            /* .ck-content .image {
                max-width: 80%;
                margin: 20px auto;
            } */
        </style>


<section>
    <h3><?php echo CONTACT_NAME; ?></h3>
    <h4><?php echo CONTACT_POSITION; ?></h4>
    <h5><?php echo CONTACT_ADDRESS; ?></h5>
    <h6><?php echo CONTACT_PHONE; ?></h6>
    <h6><?php echo CONTACT_EMAIL; ?></h6>

    <?php echo validation_errors(); ?>
    <?php $form_attributes = array('class' => 'form_contact', 'id' => 'form_contact', 'onsubmit' =>'return validateForm()');?>
    <?php echo form_open(BASE_URL . 'info_request/send', $form_attributes); ?>
    

    <h5>Name</h5>
    <input type="text" name="name" value=""  required />

    <h5>Telephone</h5>
    <input type="text" name="telephone" value=""  required pattern="[0-9]+" />

    <h5>Email</h5>
    <input type="email" name="email" value=""  required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}"
        style="text-transform: lowercase" />

    <h5>Subject</h5>
    <input type="text" name="subject" value=""  />

    <h5>Message</h5>
    <textarea name="message" id="editor" ></textarea>
    
    <!-- <div id="editor">
        <p>This is some sample content.</p>
    </div> -->
    <script>
        // ClassicEditor
        //     .create( document.querySelector( '#editor' ) )
        //     .catch( error => {
        //         console.error( error );
        //     } );


        ClassicEditor.create(document.getElementById("editor"), {
                // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
                toolbar: {
                    items: [
                        'undo', 'redo', '|',
                        // 'exportPDF','exportWord', '|',
                        // 'findAndReplace', 'selectAll', '|',
                        'heading', '|',
                        'bold', 'italic', '|',
                        // 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                        'bulletedList', 'numberedList',  '|',
                        // 'todoList',
                        // 'outdent', 'indent', '|',
                        // '-',
                        // 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        // 'alignment', '|',
                        // 'link', 
                        // 'uploadImage', 
                        // 'blockQuote', 
                        // 'insertTable', 
                        // 'mediaEmbed', 
                        // 'codeBlock', 'htmlEmbed', '|',
                        // 'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                        // 'textPartLanguage', '|',
                        // 'sourceEditing'
                    ],
                    shouldNotGroupWhenFull: true
                },
                // Changing the language of the interface requires loading the language file using the <script> tag.
                // language: 'es',
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Title', class: 'ck-heading_heading1' },
                        // { model: 'heading2', view: 'h2', title: 'Headings', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading', class: 'ck-heading_heading3' },
                        // { model: 'heading4', view: 'h4', title: 'Headings', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Caption', class: 'ck-heading_heading5' },
                        // { model: 'heading6', view: 'h6', title: 'Caption', class: 'ck-heading_heading6' }
                    ]
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
                placeholder: 'Push message here',
                // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
                fontSize: {
                    options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                    supportAllValues: true
                },
                // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
                htmlSupport: {
                    allow: [
                        {
                            name: /.*/,
                            attributes: true,
                            classes: true,
                            styles: true
                        }
                    ]
                },
                // Be careful with enabling previews
                // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
                htmlEmbed: {
                    showPreviews: true
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
                mention: {
                    feeds: [
                        {
                            marker: '@',
                            feed: [
                                '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                '@sugar', '@sweet', '@topping', '@wafer'
                            ],
                            minimumCharacters: 1
                        }
                    ]
                },
                // The "superbuild" contains more premium features that require additional configuration, disable them below.
                // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
                removePlugins: [
                    // These two are commercial, but you can try them out without registering to a trial.
                    // 'ExportPdf',
                    // 'ExportWord',
                    'AIAssistant',
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                    // Storing images as Base64 is usually a very bad idea.
                    // Replace it on production website with other solutions:
                    // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                    // 'Base64UploadAdapter',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                    // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                    // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                    'MathType',
                    // The following features are part of the Productivity Pack and require additional license.
                    'SlashCommand',
                    'Template',
                    'DocumentOutline',
                    'FormatPainter',
                    // 'TableOfContents',
                    'PasteFromOfficeEnhanced',
                    'CaseChange'
                ]
            });
    </script>
    <!-- <textarea name="message" class="editable"> </textarea>

    <script>
        var editor = new MediumEditor('.editable', {
    toolbar: {
      buttons: ['bold', 'italic', 'phrase']
    },
    extensions: {
      phrase: new MediumEditorPhrase({
         name: 'footnote',
         aria: 'footnote',
         contentDefault: 'F¹',
         phraseClassList: ['has-footnote']
      })
    }
  });
    </script> -->

    <br><br>
    <div><input type="submit" value="Send" /></div>

    <?php echo form_close(); ?>

</section>

<script>
    function validateForm() {
        let name = document.forms["form_contact"]["name"].value;
        let telephone = document.forms["form_contact"]["telephone"].value;
        let email = document.forms["form_contact"]["email"].value;
        let subject = document.forms["form_contact"]["subject"].value;
        let message = document.forms["form_contact"]["message"].value;
        //   if (name == "") {
        //     Swal.fire("Name must be filled out!");
        //     return false;
        //   }
        //   if (telephone == "") {
        //     Swal.fire("Telephone must be filled out!");
        //     return false;
        //   }
        //   if (email == "") {
        //     Swal.fire("Email must be filled out!");
        //     return false;
        //   }
        // if (subject == "") {
        //     Swal.fire("Subject must be filled out!");
        //     return false;
        // }
        // if (message == "") {
        //     Swal.fire("Message must be filled out!");
        //     return false;
        // }
    }
</script>