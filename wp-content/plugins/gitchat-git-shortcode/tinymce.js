// tinymce.js
(function() {
    tinymce.create('tinymce.plugins.gitchat', {
        init : function(ed, url) {
            ed.addButton('gitchat', {
                title : 'GitChat Button',
                image : url+'/icon.png',
                onclick : function() {
                     ed.selection.setContent('[git id="1" title="haha"]' + ed.selection.getContent() + '[/git]');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('gitchat', tinymce.plugins.gitchat);
})();