(function() {
    tinymce.create('tinymce.plugins.SisAccordion', {
 
        init : function(ed, url) {
            ed.addCommand('sisaccordiontriger', function() {
                return_text = "[accordion id=''][item title=''][/item][item title=''][/item][item title=''][/item][/accordion]";
                ed.execCommand('mceInsertContent', 0, return_text);
            });

           
            ed.addButton('sisaccordiontriger', {
                title : 'Insert accordion shortcode',
                cmd : 'sisaccordiontriger',
                image : url + '/accordion.png'
            });

        },
        createControl : function(n, cm) {
            return null;
        },
    });

    // Register plugin
    tinymce.PluginManager.add('sisaccbutton', tinymce.plugins.SisAccordion);
})();