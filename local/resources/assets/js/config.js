
var path = document.location.pathname;
var globals = {
    base_url: path.substring(path.indexOf('/'), path.lastIndexOf('/'))
}
module.exports = { config: globals };