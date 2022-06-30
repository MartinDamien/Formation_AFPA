
app.get('/', (req, res) => {
    res.sendFile(__dirname + '/clientpost.html');
})

app.post('/enregistre', (req, res) => {
    console.log(req.body);
})

