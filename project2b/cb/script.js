function getBalance(){
    var ac=document.getElementById("ac").value
    var name=document.getElementById("name").value;
setTimeout(function(){
    var balanceMapping={
        "2112345678":{
            name:"Aniket chatterjee",
            balance:20000
        },
        "2112345679":{
            name:"Amit jha",
            balance:30000
        },
        "2112345680":{
            name:"pranva kumar pandey",
            balance:40000
        },
        "2112345681":{
            name:"Ayush singh",
            balance:50000
        },
        "2112345682":{
            name:"sakshi yadav",
            balance:6000
        },
        "2112345683":{
            name:"Roshni singh",
            balance:7000
        },
        "2112345684":{
            name:"Reshmi kumari",
            balance:8000
        },
        "2112345685":{
            name:"sanjay petal",
            balance:90000
        },
        "2112345686":{
            name:"sejal nayak",
            balance:100000
        },
        "2112345687":{
            name:"Devrani kumari",
            balance:1100
        }
    };
    if(ac in balanceMapping){
        var account = balanceMapping[ac];
        
        if(name==account.name){
            document.getElementById("balance").textContent=account.balance;
            return ;
        }
    }
    document.getElementById("balance").textContent="N/A";
    
},1000);
}
                        