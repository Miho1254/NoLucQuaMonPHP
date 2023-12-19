var editor1cfg = {}
//Chỉnh toolbar thành basic
editor1cfg.toolbar = "basic";
//Tắt drag and drop 
editor1cfg.enableDragDrop = false;
//Không cho người dùng resize
editor1cfg.enableObjectResizing	= false;
editor1cfg.editorResizeMode = 'height';
//Khi load trang thì sẽ focus vào cái content
editor1cfg.focusOnLoad	= true;

var editor1 = new RichTextEditor("#content", editor1cfg);
