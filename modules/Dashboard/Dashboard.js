// Script ini akan dijalankan setelah template utama *.html selesai di load
(function() {
    MyApp.renderMainTpl();
    MyApp.loadModuleCss();
    // MyApp.loadModuleCss('style.css');
    // simulasi loading... hide setelah 500ms
    setTimeout(function() {
        MyApp.$me('.overlay').hide();
    }, 500);
    // $('.loading').hide();
})();

//# sourceURL=Dashboard.js