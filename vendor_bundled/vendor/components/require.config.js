var components = {
    "packages": [
        {
            "name": "html5shiv",
            "main": "html5shiv-built.js"
        },
        {
            "name": "bootstrap",
            "main": "bootstrap-built.js"
        },
        {
            "name": "jquery",
            "main": "jquery-built.js"
        },
        {
            "name": "jquery-migrate",
            "main": "jquery-migrate-built.js"
        },
        {
            "name": "jquery-ui",
            "main": "jquery-ui-built.js"
        },
        {
            "name": "smartmenus",
            "main": "smartmenus-built.js"
        },
        {
            "name": "fullcalendar",
            "main": "fullcalendar-built.js"
        },
        {
            "name": "form",
            "main": "form-built.js"
        },
        {
            "name": "moment",
            "main": "moment-built.js"
        },
        {
            "name": "tablesorter",
            "main": "tablesorter-built.js"
        },
        {
            "name": "jquery-timeago",
            "main": "jquery-timeago-built.js"
        }
    ],
    "shim": {
        "bootstrap": {
            "deps": [
                "jquery"
            ]
        },
        "jquery-ui": {
            "deps": [
                "jquery"
            ],
            "exports": "jQuery"
        },
        "smartmenus": {
            "deps": [
                "jquery"
            ]
        },
        "form": {
            "deps": [
                "jquery"
            ]
        }
    },
    "baseUrl": "components"
};
if (typeof require !== "undefined" && require.config) {
    require.config(components);
} else {
    var require = components;
}
if (typeof exports !== "undefined" && typeof module !== "undefined") {
    module.exports = components;
}