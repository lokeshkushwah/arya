
var config = {
    customConfig: '',
    toolbarCanCollapse: false,
    colorButton_enableMore: false,
    removePlugins: 'list,indent,enterkey,showblocks,stylescombo,styles',
    //extraPlugins: 'imagemaps',
    height: 100,
    skin: 'office2013',
    toolbar: 
            [
             //   {name: 'document', items: ['Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates']},
                {name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']},
            //    {name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt']},
           //     {name: 'forms', items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField']},
           //     '/',
          //      {name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat']},
           //     {name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language']},
            //    {name: 'links', items: ['Link', 'Unlink', 'Anchor']},
                {name: 'insert', items: ['Image']},
                { enterMode : CKEDITOR.ENTER_BR,    shiftEnterMode: CKEDITOR.ENTER_P},
                 //{ enterMode : CKEDITOR.ENTER_BR,    shiftEnterMode: CKEDITOR.ENTER_IMG},
                '/',
             //   {name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize']},
             //   {name: 'colors', items: ['TextColor', 'BGColor']},
             //   {name: 'tools', items: ['Maximize', 'ShowBlocks']},
             //   {name: 'tools', items: ['Maximize', 'About', 'ImageMaps']}
             
            ],
    allowedContent: true,
    // "filebrowserImageBrowseUrl": "plugins/imgbrowse/imgbrowse.html?imgroot=myfck",
    // "filebrowserImageUploadUrl": "plugins/imgupload.php",
    filebrowserBrowseUrl: '../myfck/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserUploadUrl: '../myfck/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
    filebrowserImageBrowseUrl: '../myfck/filemanager/dialog.php?type=1&editor=ckeditor&fldr=',
    
}
CKEDITOR.config.autoParagraph = false;