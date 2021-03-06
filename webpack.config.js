module.exports = [
    {
        entry: {
            "widget-flights": "./app/components/widget-flights.vue",
            "settings": "./app/views/settings"
        },
        output: {
            filename: "./app/bundle/[name].js"
        },
        externals: {
            "lodash": "_",
            "jquery": "jQuery",
            "uikit": "UIkit",
            "vue": "Vue"
        },
        module: {
            loaders: [
                { test: /\.vue$/, loader: "vue" },
                { test: /\.html$/, loader: "vue-html" },
                { test: /\.js/, loader: "babel", query: { presets: ["es2015"] } }
            ]
        }
    }
];