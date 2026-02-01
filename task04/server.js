const express=require("express");
const mysql=require("mysql");
const cors=require("cors");

const app=express();
app.use(cors());
app.use(express.json());

const db=mysql.createConnection({
    host:"localhost",
    user:"root",
    password:"",
    database:"rastaurants"
});

db.connect(err=>{
    if(err) throw err;
    console.log("Mysql Connected");
});

app.get("/restaurants",(req,res)=>{
    const sql="select * from restaurants where is_open=1";
    db.query(sql,(err,result)=>{
        if(err) res.status(500).json(err);
        else res.json(result);
    });
});

app.listen(3000,()=>{
    console.log("Server running on http://localhost:3000");
});