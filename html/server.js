var express = require('express')
var request = require('request')
var app = express()
var port = 3100

app.use(function(req, res, next) {
  res.header("Access-Control-Allow-Origin", "*");
  res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept")
  next()
})

app.get('/get-content-from-url', function(req, res) {
  request(req.query.url, function (error, response, body) {
    res.send(body)
  })
})

app.listen(port, () => console.log(`Server listening on port ${port}!`))