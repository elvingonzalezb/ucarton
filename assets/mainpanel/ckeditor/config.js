/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.language = 'es';
	config.entities = false;
    config.htmlEncodeOutput = false;
    config.toolbar = [
        { name: 'clipboard', items: [ 'Cut', 'Copy', 'PasteText', '-', 'Undo', 'Redo' ] },
    	{name: 'document', items:[ 'Source']},
    	{name:'insert', items:['Image','Table'] },
    	{name:'basicstyles', items:['Bold','Italic','Underline'] },
        { name:'link', items: ['Link', 'Unlink'] },
    	{name:'paragraph', items:['NumberedList','BulletedList', 'Blockquote', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
    	 {name: 'styles', items: [ 'Format' ] }, /*'Format','Font', 'FontSize'*/
         { name:'paragraph', items: ['-','Outdent','Indent'] }
    ]








	//config.allowedContent = true;
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = 'http://www.inversionesjemal.com/py_industrialvyg/assets/mainpanel/ckeditor/elfinder/elfinder.html';
    //config.filebrowserBrowseUrl = 'http://localhost/mysglobal/assets/mainpanel/ckeditor/elfinder/elfinder.html';
        //config.filebrowserBrowseUrl = 'http://cki2015.ajaxperu.com/assets/ckeditor/elfinder/elfinder.html';
};
