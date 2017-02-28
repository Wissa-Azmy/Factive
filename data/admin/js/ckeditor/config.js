/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */
//
CKEDITOR.editorConfig = function( config ) {
	config.plugins = 'image,bootstrapVisibility,dialogui,dialog,dialogadvtab,basicstyles,bidi,blockquote,button,panelbutton,panel,floatpanel,colorbutton,colordialog,templates,menu,contextmenu,resize,toolbar,elementspath,enterkey,entities,popup,find,fakeobjects,flash,floatingspace,listblock,richcombo,font,format,horizontalrule,htmlwriter,iframe,wysiwygarea,indent,indentblock,indentlist,justify,menubutton,link,list,liststyle,magicline,maximize,newpage,pagebreak,pastetext,pastefromword,preview,print,removeformat,selectall,showborders,specialchar,stylescombo,tab,table,tabletools,undo,autogrow,autocorrect,autosave,lineutils,widget,widgetbootstrap,pbckcode,codemirror,ajax,codesnippet,codesnippetgeshi,backgrounds,ckwebspeech,floating-tools,ckeditor-gwf-plugin,textselection,lineheight,qrc,quicktable,showprotected,sourcedialog,stat,backup,texttransform,youtube';
	config.skin = 'office2013';
        config.language = 'ar';
        config.filebrowserUploadUrl = '/mar/admin/news/edit/402.php';
        config.filebrowserImageUploadUrl = '/mar/admin/news/edit/402.php'; 
};


CKEDITOR.replace('textareaId', {
  "filebrowserImageUploadUrl": "/path_to/ckeditor/plugins/imgupload.php"
});


