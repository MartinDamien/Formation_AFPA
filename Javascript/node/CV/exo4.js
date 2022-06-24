const fs = require("fs-extra");
const unzip = require("unzip"); //npm i unzip --save

var readStream = fs.createReadStream('input.zip');
var writeStream = fsstream.Writer('input2.txt');

readStream
  .pipe(unzip.Parse())
  .pipe(writeStream);