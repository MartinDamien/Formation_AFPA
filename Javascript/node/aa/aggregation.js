const{MongoClient} = require('mongodb');
const client = new MongoClient('mongodb://localhost:27017');

async function run(){

    try{
        await client.connect(); 
        await client.db('unicorns') 
        //effectuer des requêtes sur la base de données
        
    }finally{
        await client.close();
    }
}
run().catch(console.error);