// Sending an HTTP Request from a NodeJS server
const express = require('express');
const app = express();
const port = 3000;
//const http = require("http");
const https = require("https");

const Stream = require("stream").Transform;
const fs = require("fs");



https
  .get("https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY", (resp) => { 
    let data = "";

    // A chunk of data has been recieved.
    resp.on("data", (chunk) => { 
      data += chunk; 
    });

    // The whole response has been received. Print out the result.
    resp.on("end", () => {
      let url = JSON.parse(data).hdurl;
      console.log(url);

      https.get(url, (res) => {
        //the response should be  an image
        console.log(res.headers);
        console.log(res.headers["content-type"], res.headers["content-length"]);

        if (
          res.statusCode == 200 &&
          res.headers["content-type"] == "image/jpeg"
        ) {
          let img = new Stream();

          res.on("data", (chunk) => {
            img.push(chunk);
          });

          res.on("end", () => {
            let filename = __dirname + "/library/" + Date.now() + ".jpg";
            fs.writeFileSync(filename, img.read());
          });
        }
      });
    });
  })
  .on("error", (err) => {
    console.log("Error: " + err.message);
  });


app.get('/', (req, res) => res.send(''));


app.listen(port, () =>console.log(`application lancé sur l'adresse : http://localhost:${port}, press Ctrl+C to stop, or Ctrl+Shift+C to quit.`));



/**
 * Astronomy Picture of the Day (APOD)
 * https://api.nasa.gov/planetary/apod?api_key=[Your API key here]
 * PARAMS:
 * api_key
 * hd [Boolean] default false
 * date [YYYY-MM-DD] default today
 *
 * RESPONSE:
 * copyright
 * date
 * explanation
 * title
 * hdurl
 * url
 * media_type: 'image'
 * service_version: 'v1'
 */
