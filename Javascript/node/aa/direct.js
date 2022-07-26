const { MongoClient } = require("mongodb");

MongoClient.connect("mongodb://localhost:27017/", function (err, db) {
  var mydb = db.db("unicorns");
  mydb.createCollection("users", function (err) {
    const crecoll = async () => {
      mydb.collection("users").insertMany(
        [
          { firstname: "jeanx", lastname: "valjeanx", email: "jvx@gmail.com" },
          { firstname: "pol", lastname: "jones", email: "jp@gmail.com" },
          { firstname: "jak", lastname: "ko", email: "jk@gmail.com" },
        ],
        function (err, rep) {
          if (err) throw err;
          db.close();
        }
      );
    };
    // updateOne(filtre , modification, options)
    // mydb.collection("users").updateOne({firstname: "jeanx"} , {$set: { email: "jeanxw@gmail.com "  }},function(err,rep){
    //     if (err) throw err ;
    //     console.log(rep)
    //     db.close();
    // } )
    // updateMany(filter,action)
    // mydb.collection("users").updateMany({},{$set: { birthday_year: 1983 }},function(err,rep){
    //          if (err) throw err ;
    //          console.log(rep)
    //          db.close();
    //      })
    // })
    // mydb.collection("users").delete({firstname:"jeanx"},function(err,rep){
    //     if (err) throw err ;
    //     console.log(rep)
    //     db.close();
    // })

    // fonctionne de la même manière pour deleteMany.

    // mydb.collection("users").countDocuments({vaccinated:true},function(err,rep){
    //     if (err) throw err ;
    //     console.log(rep)
    //     db.close();
    // })

    mydb.collection("users").distinct("birthday_year", function (err, rep) {
      if (err) console.log(err);
      console.log(rep);
      db.close();
    });
  });
});
