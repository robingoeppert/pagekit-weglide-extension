module.exports = [
    {
        entry: {
            "widget-flights": "./app/components/widget-flights.vue"
        },
        output: {
            filename: "./app/bundle/[name].js"
        },
        module: {
            loaders: [
                { test: /\.vue$/, loader: "vue" }
            ]
        }
    }
];