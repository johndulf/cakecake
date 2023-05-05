const {createApp} = Vue;

createApp({
    data(){
        return{
            users:[],
            userid:0,
            fullname:'',
            username:'',
            password:'',
            email:''
        }
    },
    methods:{

        fnUnlockAccount:function(userid){
            const vm = this;   
            const data = new FormData();
            data.append("userid",userid);
            data.append('method','fnUnlockAccount');
            axios.post('model/userModel.php',data)
            .then(function(r){
                alert('Account is unlocked');
                vm.fnGetUsers(0);
            })
        },
        fnSave:function(e){
            const vm = this;
            e.preventDefault();    
            var form = e.currentTarget;
            const data = new FormData(form);
            data.append("userid",this.userid);
            data.append('method','fnSave');
            axios.post('model/userModel.php',data)
            .then(function(r){
                console.log(r);
                if(r.data == 1){
                    alert("User successfully saved");
                    vm.fnGetUsers(0);
                }
                else{
                    alert('There was an error.');
                }
            })
        },
        DeleteUser:function(userid){
            if(confirm("Are you sure you want to delete this user?")){
                const data = new FormData();
                const vm = this;
                data.append("method","DeleteUser");
                data.append("userid",userid);
               axios.post('model/userModel.php',data)
                .then(function(r){
                    vue.fnGetUsers();
                })
            }
        },
        fnGetUsers:function(userid){
            const vm = this;
            const data = new FormData();
            data.append("method","fnGetUsers");
            data.append("userid",userid);
            axios.post('model/userModel.php',data)
            .then(function(r){
                if(userid == 0){
                    vm.users = [];
                    
                    r.data.forEach(function(v){
                        
                            vm.users.push({
                                fullname: v.fullname,
                                username: v.username,
                                email: v.email,
                                datecreated : v.date_created,
                                userid:v.userid,
                                counterlock: v.counterlock
                            })
                                            
                        
                    })
                }
                else{
                    r.data.forEach(function(v){
                        vm.fullname = v.fullname;
                        vm.username = v.username;
                        vm.password = v.password;
                        vm.email = v.email;
                        vm.userid = v.userid;
                    })
                }
            })
        }
    },
    created:function(){
        this.fnGetUsers(0);
    }
}).mount('#register-app')