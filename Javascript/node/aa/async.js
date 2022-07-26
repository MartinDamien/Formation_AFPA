
const {MongoClient} = require("mongodb")
const client = new MongoClient("mongodb://localhost:27017");

async function run() {

    try {
        
        await client.connect()
       const database = client.db("unicorns")
        //... effectuer les requêtes CRUD effectuées auparavant en mode callback.
        const collection = database.collection("users")
        let p = {firstname:"toto",lastname:"joni",email:"jj@tj.fr" }
        await collection.insertOne(p) 

        console.log("ok")
    } finally {
        await client.close();
    }
}
run().catch(console.dir)