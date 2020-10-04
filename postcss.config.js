module.exports = (env) => ({
    plugins: [
        require('autoprefixer'),
        require('cssnano')({
            preset: [
                'default', {
                    discardComments: {
                        removeAll: true
                    }
                }
            ]
        })
    ]
});
