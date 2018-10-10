(function () {
    tinymce.create('tinymce.plugins.InsertCode', {
        init: function (ed, url) {

            ed.addButton('addCodeBlock', {
                title: 'Code Block',
                cmd: 'addcodeblock',
                image: url + '/../images/thumbnails/02.jpg'
            });

            //Add a dropdown to select the languages
            ed.addCommand('addCodeBlock', function () {
                let selected_text = ed.selection.getContent();
                let return_text = '<pre><span>File Name - Code Title</span><code>\n' + selected_text + '\n</code></pre>';
                ed.execCommand('mceInsertContent', 0, return_text);
            });

            ed.addButton('setCodeLanguage', {
                type: 'listbox',
                text: 'Code Language',
                icon: false,

                onselect: function (e) {
                    ed.insertContent(this.value());
                },

                values: [
                    //TODO get recent languages
                    //TODO get enabled languages from db
                    //{text: '1C:Enterprise (v7, v8)', value: '1C:Enterpris0e (v7, v8)'},
                    //{text: 'ARM Assembly', value: 'ARM Assembly'},
                    //{text: 'AVR Assembler', value: 'AVR Assembler'},
                    //{text: 'Access log', value: 'Access log'},
                    //{text: 'ActionScript', value: 'ActionScript'},
                    //{text: 'Ada', value: 'Ada'},
                    //{text: 'Apache', value: 'Apache'},
                    //{text: 'AppleScript', value: 'AppleScript'},
                    //{text: 'Arduino', value: 'Arduino'},
                    //{text: 'AsciiDoc', value: 'AsciiDoc'},
                    //{text: 'AspectJ', value: 'AspectJ'},
                    //{text: 'Augmented Backus-Naur Form', value: 'Augmented Backus-Naur Form'},
                    //{text: 'AutoHotkey', value: 'AutoHotkey'},
                    //{text: 'AutoIt', value: 'AutoIt'},
                    //{text: 'Awk', value: 'Awk'},
                    //{text: 'Axapta', value: 'Axapta'},
                    //{text: 'Backus–Naur Form', value: 'Backus–Naur Form'},
                    //{text: 'Bash', value: 'Bash'},
                    //{text: 'Basic', value: 'Basic'},
                    //{text: 'Brainfuck', value: 'Brainfuck'},
                    //{text: 'C#', value: 'C#'},
                    //{text: 'C++', value: 'C++'},
                    //{text: 'C/AL', value: 'C/AL'},
                    //{text: 'CMake', value: 'CMake'},
                    //{text: 'CSP', value: 'CSP'},
                    {text: 'CSS', value: 'CSS'},
                    //{text: 'Caché Object Script', value: 'Caché Object Script'},
                    //{text: 'Cap’n Proto', value: 'Cap’n Proto'},
                    //{text: 'Ceylon', value: 'Ceylon'},
                    //{text: 'Clean', value: 'Clean'},
                    //{text: 'Clojure', value: 'Clojure'},
                    //{text: 'Clojure REPL', value: 'Clojure REPL'},
                    {text: 'CoffeeScript', value: 'CoffeeScript'},
                    //{text: 'Coq', value: 'Coq'},
                    //{text: 'Crystal', value: 'Crystal'},
                    //{text: 'D', value: 'D'},
                    //{text: 'DNS Zone file', value: 'DNS Zone file'},
                    //{text: 'DOS .bat', value: 'DOS .bat'},
                    //{text: 'Dart', value: 'Dart'},
                    //{text: 'Delphi', value: 'Delphi'},
                    //{text: 'Device Tree', value: 'Device Tree'},
                    //{text: 'Diff', value: 'Diff'},
                    //{text: 'Django', value: 'Django'},
                    //{text: 'Dockerfile', value: 'Dockerfile'},
                    //{text: 'Dust', value: 'Dust'},
                    //{text: 'ERB (Embedded Ruby)', value: 'ERB (Embedded Ruby)'},
                    //{text: 'Elixir', value: 'Elixir'},
                    //{text: 'Elm', value: 'Elm'},
                    //{text: 'Erlang', value: 'Erlang'},
                    //{text: 'Erlang REPL', value: 'Erlang REPL'},
                    //{text: 'Excel', value: 'Excel'},
                    //{text: 'Extended Backus-Naur Form', value: 'Extended Backus-Naur Form'},
                    //{text: 'F#', value: 'F#'},
                    //{text: 'FIX', value: 'FIX'},
                    //{text: 'Flix', value: 'Flix'},
                    //{text: 'Fortran', value: 'Fortran'},
                    //{text: 'G-code (ISO 6983)', value: 'G-code (ISO 6983)'},
                    //{text: 'GAMS', value: 'GAMS'},
                    //{text: 'GAUSS', value: 'GAUSS'},
                    //{text: 'GLSL', value: 'GLSL'},
                    //{text: 'Gherkin', value: 'Gherkin'},
                    //{text: 'Go', value: 'Go'},
                    //{text: 'Golo', value: 'Golo'},
                    //{text: 'Gradle', value: 'Gradle'},
                    //{text: 'Groovy', value: 'Groovy'},
                    //{text: 'HSP', value: 'HSP'},
                    {text: 'HTML, XML', value: 'HTML, XML'},
                    //{text: 'HTMLBars', value: 'HTMLBars'},
                    //{text: 'HTTP', value: 'HTTP'},
                    //{text: 'Haml', value: 'Haml'},
                    //{text: 'Handlebars', value: 'Handlebars'},
                    //{text: 'Haskell', value: 'Haskell'},
                    //{text: 'Haxe', value: 'Haxe'},
                    //{text: 'Hy', value: 'Hy'},
                    //{text: 'IRPF90', value: 'IRPF90'},
                    //{text: 'Inform 7', value: 'Inform 7'},
                    //{text: 'Ini', value: 'Ini'},
                    //{text: 'Intel x86 Assembly', value: 'Intel x86 Assembly'},
                    {text: 'JSON', value: 'JSON'},
                    //{text: 'Java', value: 'Java'},
                    {text: 'JavaScript', value: 'JavaScript'},
                    //{text: 'Julia', value: 'Julia'},
                    //{text: 'Julia REPL', value: 'Julia REPL'},
                    //{text: 'Kotlin', value: 'Kotlin'},
                    //{text: 'LDIF', value: 'LDIF'},
                    //{text: 'LLVM IR', value: 'LLVM IR'},
                    //{text: 'Lasso', value: 'Lasso'},
                    //{text: 'Leaf', value: 'Leaf'},
                    {text: 'Less', value: 'Less'},
                    //{text: 'Linden Scripting Language', value: 'Linden Scripting Language'},
                    //{text: 'Lisp', value: 'Lisp'},
                    //{text: 'LiveCode', value: 'LiveCode'},
                    //{text: 'LiveScript', value: 'LiveScript'},
                    //{text: 'Lua', value: 'Lua'},
                    //{text: 'MEL', value: 'MEL'},
                    //{text: 'MIPS Assembly', value: 'MIPS Assembly'},
                    //{text: 'Makefile', value: 'Makefile'},
                    {text: 'Markdown', value: 'Markdown'},
                    //{text: 'Mathematica', value: 'Mathematica'},
                    //{text: 'Matlab', value: 'Matlab'},
                    //{text: 'Maxima', value: 'Maxima'},
                    //{text: 'Mercury', value: 'Mercury'},
                    //{text: 'Microtik RouterOS script', value: 'Microtik RouterOS script'},
                    //{text: 'Mizar', value: 'Mizar'},
                    //{text: 'Mojolicious', value: 'Mojolicious'},
                    //{text: 'Monkey', value: 'Monkey'},
                    //{text: 'MoonScript', value: 'MoonScript'},
                    //{text: 'N1QL', value: 'N1QL'},
                    //{text: 'NSIS', value: 'NSIS'},
                    //{text: 'Nginx', value: 'Nginx'},
                    //{text: 'Nimrod', value: 'Nimrod'},
                    //{text: 'Nix', value: 'Nix'},
                    //{text: 'OCaml', value: 'OCaml'},
                    {text: 'Objective-C', value: 'Objective-C'},
                    //{text: 'OpenSCAD', value: 'OpenSCAD'},
                    //{text: 'Oracle Rules Language', value: 'Oracle Rules Language'},
                    //{text: 'Oxygene', value: 'Oxygene'},
                    {text: 'PHP', value: 'PHP'},
                    //{text: 'Parser3', value: 'Parser3'},
                    //{text: 'Perl', value: 'Perl'},
                    //{text: 'Pony', value: 'Pony'},
                    //{text: 'PowerShell', value: 'PowerShell'},
                    //{text: 'Processing', value: 'Processing'},
                    //{text: 'Prolog', value: 'Prolog'},
                    //{text: 'Protocol Buffers', value: 'Protocol Buffers'},
                    //{text: 'Puppet', value: 'Puppet'},
                    //{text: 'PureBASIC', value: 'PureBASIC'},
                    {text: 'Python', value: 'Python'},
                    //{text: 'Python profile', value: 'Python profile'},
                    //{text: 'Q', value: 'Q'},
                    //{text: 'QML', value: 'QML'},
                    //{text: 'R', value: 'R'},
                    //{text: 'RenderMan RIB', value: 'RenderMan RIB'},
                    //{text: 'RenderMan RSL', value: 'RenderMan RSL'},
                    //{text: 'Roboconf', value: 'Roboconf'},
                    //{text: 'Ruby', value: 'Ruby'},
                    //{text: 'Rust', value: 'Rust'},
                    {text: 'SCSS', value: 'SCSS'},
                    //{text: 'SML', value: 'SML'},
                    //{text: 'SQF', value: 'SQF'},
                    {text: 'SQL', value: 'SQL'},
                    //{text: 'STEP Part 21', value: 'STEP Part 21'},
                    //{text: 'Scala', value: 'Scala'},
                    //{text: 'Scheme', value: 'Scheme'},
                    //{text: 'Scilab', value: 'Scilab'},
                    //{text: 'Shell Session ', value: 'Shell Session '},
                    //{text: 'Smali', value: 'Smali'},
                    //{text: 'Smalltalk', value: 'Smalltalk'},
                    //{text: 'Stan', value: 'Stan'},
                    //{text: 'Stata', value: 'Stata'},
                    //{text: 'Stylus', value: 'Stylus'},
                    //{text: 'SubUnit', value: 'SubUnit'},
                    {text: 'Swift', value: 'Swift'},
                    //{text: 'TP', value: 'TP'},
                    //{text: 'Tagger Script', value: 'Tagger Script'},
                    //{text: 'Tcl', value: 'Tcl'},
                    //{text: 'TeX', value: 'TeX'},
                    //{text: 'Test Anything Protocol', value: 'Test Anything Protocol'},
                    //{text: 'Thrift', value: 'Thrift'},
                    //{text: 'Twig', value: 'Twig'},
                    //{text: 'TypeScript', value: 'TypeScript'},
                    //{text: 'VB.NET', value: 'VB.NET'},
                    //{text: 'VBScript', value: 'VBScript'},
                    //{text: 'VBScript in HTML', value: 'VBScript in HTML'},
                    //{text: 'VHDL', value: 'VHDL'},
                    //{text: 'Vala', value: 'Vala'},
                    //{text: 'Verilog', value: 'Verilog'},
                    //{text: 'Vim Script', value: 'Vim Script'},
                    //{text: 'XL', value: 'XL'},
                    //{text: 'XQuery', value: 'XQuery'},
                    //{text: 'YAML', value: 'YAML'},
                    //{text: 'Zephir', value: 'Zephir'},
                    //{text: 'crmsh', value: 'crmsh'},
                    //{text: 'dsconfig', value: 'dsconfig'},
                    //{text: 'jboss-cli', value: 'jboss-cli'},
                    //{text: 'pf ', value: 'pf '},
                ],

                onPostRender: function () {
                    this.value('JavaScript');
                },
                //mode : "specific_textareas"
            });

            //tiny mce allows image uploads
            //https://www.tiny.cloud/docs/demo/local-upload/
            //add listbox variable
            //https://www.tiny.cloud/docs/demo/custom-toolbar-listbox/
        },

        createControl: function (n, cm) {
            return null;
        },

        getInfo: function () {
            return {
                longname: 'Wptuts Buttons',
                author: 'inspireology',
                authorurl: 'http://inspireology.com/TechnoCreative',
                infourl: '',
                version: '0.1'
            };
        }
    });

    tinymce.PluginManager.add('insert_code', tinymce.plugins.InsertCode);
})();

//readme
//https://medium.com/@vvkchandra/essential-javascript-mastering-immediately-invoked-function-expressions-67791338ddc6