const {MongoClient} = require('mongodb');
const client = new MongoClient('mongodb://localhost:27017');

async function run(){

    try {

        await client.connect()
        const db = client.db('m2m')
        //---effectuer les requéte CRUD effectuer auparavant en mode callback
        const collection = db.collection('restaurants')
        collection.aggregate([{ $match: {categories: "Bakery" }},
                              {$group: {_id: "$stars", count: {$sum: 1}}}])

            for(let doc of resultat) {
                console.log(doc)
            }



    } finally{
        await client.close()
    }
}

run().catch(console.dir)
